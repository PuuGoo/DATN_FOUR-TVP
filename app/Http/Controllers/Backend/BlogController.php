<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // public function AllBlogCateogry(){
    //     return view('backend.blog.category.blogcategroy_all');

    // } // End Method

    // public function AddBlogCateogry(){
    //     return view('backend.blog.category.blogcategroy_add');
    // } // End Method


    //////////////////// Blog Post Methods //////////////////


    public function AllBlogPost()
    {
        $blogposts = BlogPost::latest()->get();
        return view('backend.blog.post.blogpost_all', compact('blogposts'));
        // return view('backend.blog.post.blogpost_all');

    } // End Method


    public function AddBlogPost()
    {
        $blogcategory = BlogCategory::all();
        return view('backend.blog.post.blogpost_add', compact('blogcategory'));
    } // End Method


    public function StoreBlogPost(Request $request)
    {
        $data = new BlogPost();
        $data->category_id = $request->category_id;
        $data->post_title = $request->post_title;
        $data->post_slug = Str::slug($request->post_title);
        $data->post_short_description = $request->post_short_description;
        $data->post_long_description = $request->detailed_description;

        if ($request->file('post_image')) {
            $file = $request->file('post_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'), $filename);
            $data->post_image = 'upload/blog_images/' . $filename;
        }

        $data->save();
        return redirect()->route('admin.blog.post')->with('success', 'Blog post added successfully.');
    } // End Method

    // Hiển thị trang sửa bài viết
    public function EditBlogPost($id)
    {
        $blogpost = BlogPost::findOrFail($id);
        $blogcategory = BlogCategory::orderBy('id', 'DESC')->get();
        return view('backend.blog.post.blogpost_edit', compact('blogpost', 'blogcategory'));
    }

    // Xử lý cập nhật bài viết
    public function UpdateBlogPost(Request $request)
    {
        $data = BlogPost::findOrFail($request->id);
        $data->category_id = $request->category_id;
        $data->post_title = $request->post_title;
        $data->post_slug = Str::slug($request->post_title);
        $data->post_short_description = $request->post_short_description;
        $data->post_long_description = $request->detailed_description;



        if ($request->file('post_image')) {
            $file = $request->file('post_image');

            // Xóa ảnh cũ nếu có
            if (File::exists(public_path($request->old_image))) {
                File::delete(public_path($request->old_image));
            }

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'), $filename);
            $data->post_image = 'upload/blog_images/' . $filename;
        }

        $data->save();
        return redirect()->route('admin.blog.post')->with('success', 'Blog post updated successfully.');
    }

    // Xóa bài viết
    public function DeleteBlogPost($id)
    {
        $blogpost = BlogPost::findOrFail($id);

        // Xóa ảnh nếu có
        if (File::exists(public_path($blogpost->post_image))) {
            File::delete(public_path($blogpost->post_image));
        }

        $blogpost->delete();
        return redirect()->route('admin.blog.post')->with('success', 'Blog post deleted successfully.');
    }


    //////////////////// Frontend Blog All Method //////////////


    public function AllBlog()
    {
        $blog_category = BlogCategory::all();
        $blogposts = BlogPost::all();
        return view('frontend.blog.home_blog', compact('blogposts', 'blog_category'));
    } // End Method 

    public function BlogDetails($id, $slug)
    {
        $blog_category = BlogCategory::all();

        $blogpost = BlogPost::findOrFail($id);

        if ($blogpost->post_slug !== $slug) {
            abort(404);
        }

        return view('frontend.blog.blog_details', compact('blogpost', 'blog_category'));
    } // End Method 


    public function BlogPostCategory($id, $slug)
    {
        $blog_category = BlogCategory::findOrFail($id);
        $blogs = BlogPost::where('category_id', $blog_category->id)->get();

        return view('frontend.blog.category_post', compact('blog_category', 'blogs'));
    } // End Method 
}

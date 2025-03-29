<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [

                'id' => 1,
            
                'brand_id' => 5,
            
                'category_id' => 5,
            
                'product_name' => 'Áo Sơ Mi Tay Dài Form Ôm',
            
                'product_slug' => 'ao-so-mi-tay-dai-form-om',
            
                'product_code' => 'WS25SS18C-LD',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product',
            
                'selling_price' => 80,
            
                'discount_price' => null,
            
                'short_descp' => 'Chất liệu 100% Cotton cao cấp, mềm mại, thấm hút tốt, mang lại cảm giác thoáng mát và dễ chịu suốt cả ngày dài.',
            
                'long_descp' => '<ul><li>Chất liệu 100% Cotton cao cấp, mềm mại, thấm hút tốt, mang lại cảm giác thoáng mát và dễ chịu suốt cả ngày dài. Chất vải bền đẹp,<s>&nbsp;</s>giúp áo luôn giữ được form dáng chuẩn.</li><li>Thiết kế form ôm hiện đại, tôn dáng nhưng vẫn đảm bảo sự thoải mái. Chi tiết túi trước ngực tạo điểm nhấn tinh tế, tăng thêm tính tiện dụng cho người mặc.</li><li>Dễ dàng kết hợp với quần tây, giày da để hoàn thiện phong cách lịch lãm nơi công sở, hoặc phối cùng quần jeans cho vẻ ngoài trẻ trung, năng động.&nbsp;</li></ul><p><br></p>',
            
                'product_thumnail' => 'upload/products/thambnail/zk1JsXR8GjfXsK7NtAnkuWdQyh4GDQ.webp',
            
                'vendor_id' => 2,
            
                'status' => 0,
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 15:08:45',
            
            ],
            
            [
            
                'id' => 2,
            
                'brand_id' => 5,
            
                'category_id' => 5,
            
                'product_name' => 'Áo Sơ Mi Nam Tay Ngắn Form Ôm',
            
                'product_slug' => 'ao-so-mi-nam-tay-ngan-form-om',
            
                'product_code' => 'WS25SS45T-SDBB',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product',
            
                'selling_price' => 75,
            
                'discount_price' => null,
            
                'short_descp' => 'Sự kết hợp giữa 50% Bamboo và 50% Polyester mang đến bề mặt mềm mại, thoáng mát và giữ form tốt, giúp bạn luôn thoải mái suốt ngày dài.',
            
                'long_descp' => '<ul><li>Sự kết hợp giữa 50% Bamboo và 50% Polyester mang đến bề mặt mềm mại, thoáng mát và giữ form tốt, giúp bạn luôn thoải mái suốt ngày dài.</li><li>Áo sơ mi tay ngắn form ôm giúp tôn dáng, tạo vẻ ngoài gọn gàng và nam tính. Họa tiết caro nhỏ tinh tế, kết hợp cùng túi trước ngực và logo thêu sắc nét, tạo điểm nhấn hiện đại.</li><li>Dễ dàng phối cùng quần tây, khaki hay jeans, chiếc áo là lựa chọn lý tưởng cho phong cách thời trang linh hoạt, từ công sở đến dạo phố.</li></ul><p><span class=\"ql-cursor\">﻿</span></p>',
            
                'product_thumnail' => 'upload/products/thambnail/eSGnSBaXZ2SPZJ75SC9L3JcSkGiRm3.webp',
            
                'vendor_id' => 4,
            
                'status' => 0,
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 3,
            
                'brand_id' => 5,
            
                'category_id' => 6,
            
                'product_name' => 'Áo Polo Form Vừa Tay Ngắn',
            
                'product_slug' => 'ao-polo-form-vua-tay-ngan',
            
                'product_code' => 'KS25ES28T-SCCA',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product',
            
                'selling_price' => 75,
            
                'discount_price' => null,
            
                'short_descp' => 'Chất liệu 67% Polyester, 33% Recycle S.Café, có khả năng khử mùi, thoáng khí và nhanh khô, mang lại cảm giác dễ chịu suốt cả ngày.',
            
                'long_descp' => '<ul><li>Chất liệu 67% Polyester, 33% Recycle S.Café, có khả năng khử mùi, thoáng khí và nhanh khô, mang lại cảm giác dễ chịu suốt cả ngày.</li><li>Thiết kế form vừa, mang lại sự thoải mái và phù hợp với nhiều dáng người.</li><li>Logo thêu trước ngực tinh tế, dễ dàng kết hợp với quần jeans hay quần khaki, thích hợp cho cả môi trường công sở lẫn các hoạt động thường ngày.</li></ul><p><span class=\"ql-cursor\">﻿﻿</span></p>',
            
                'product_thumnail' => 'upload/products/thambnail/s5EqIlpZvRPTIBByIWKxlO9MfZa0n4.webp',
            
                'vendor_id' => 5,
            
                'status' => 1,
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 16:43:55',
            
            ],
            
            [
            
                'id' => 4,
            
                'brand_id' => 9,
            
                'category_id' => 16,
            
                'product_name' => 'Vải cotton',
            
                'product_slug' => 'vai-cotton',
            
                'product_code' => 'KK12ES28T-SUIA',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product',
            
                'selling_price' => 100,
            
                'discount_price' => 50,
            
                'short_descp' => 'cotton',
            
                'long_descp' => '<p>cotton<span class=\"ql-cursor\">﻿</span></p>',
            
                'product_thumnail' => 'upload/products/thambnail/uEChqUqX1dc3xW5V2gFHMAoQnkhcgx.jpg',
            
                'vendor_id' => 6,
            
                'status' => 0,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 5,
            
                'brand_id' => 9,
            
                'category_id' => 17,
            
                'product_name' => 'Vải Kaki',
            
                'product_slug' => 'vai-kaki',
            
                'product_code' => 'KS2FG96J-SXSE',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product',
            
                'selling_price' => 120,
            
                'discount_price' => 75,
            
                'short_descp' => 'Kaki',
            
                'long_descp' => '<p>Kaki<span class=\"ql-cursor\">﻿</span></p>',
            
                'product_thumnail' => 'upload/products/thambnail/F9uxggn99bUUgOVbJAguw6PfJi5uSm.webp',
            
                'vendor_id' => 2,
            
                'status' => 0,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 6,
            
                'brand_id' => 9,
            
                'category_id' => 18,
            
                'product_name' => 'Vải Jean',
            
                'product_slug' => 'vai-jean',
            
                'product_code' => 'DV2BT96E-SGBY',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product',
            
                'selling_price' => 150,
            
                'discount_price' => 100,
            
                'short_descp' => 'Jean',
            
                'long_descp' => '<p>Jean<span class=\"ql-cursor\">﻿﻿</span></p>',
            
                'product_thumnail' => 'upload/products/thambnail/8JVmufhIYYR4sHstRbHBXIZce9RT44.jpg',
            
                'vendor_id' => 4,
            
                'status' => 0,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:03:25',
            
            ],
            
            [
            
                'id' => 7,
            
                'brand_id' => 5,
            
                'category_id' => 7,
            
                'product_name' => 'Quần Short Nam Thời Trang',
            
                'product_slug' => 'quan-short-nam-thoi-trang',
            
                'product_code' => 'SP25SS09P-AK',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product',
            
                'selling_price' => 50,
            
                'discount_price' => null,
            
                'short_descp' => 'Quần short được làm từ 41.9% Rayon, 49.9% Nylon và 8.2% Spandex, mang lại sự thoải mái và độ co giãn tốt, phù hợp với các hoạt động năng động suốt cả ngày.',
            
                'long_descp' => '<ul><li>Quần short được làm từ 41.9% Rayon, 49.9% Nylon và 8.2% Spandex, mang lại sự thoải mái và độ co giãn tốt, phù hợp với các hoạt động năng động suốt cả ngày.</li><li>Thiết kế có dây thắt eo điều chỉnh, giúp tạo sự vừa vặn và thoải mái. Form quần ngắn trên gối mang đến vẻ ngoài trẻ trung và năng động.</li><li>Dễ dàng kết hợp với áo thun hoặc áo polo, phù hợp cho cả những buổi dạo phố, du lịch hay các hoạt động thể thao ngoài trời.</li></ul><p><br></p>',
            
                'product_thumnail' => 'upload/products/thambnail/oyGfanbLd9cli7kFWglpQ11faAAv2g.webp',
            
                'vendor_id' => 5,
            
                'status' => 0,
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 8,
            
                'brand_id' => 5,
            
                'category_id' => 7,
            
                'product_name' => 'Quần Short Nam Form Vừa',
            
                'product_slug' => 'quan-short-nam-form-vua',
            
                'product_code' => 'SP25SS10P-AK',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product',
            
                'selling_price' => 50,
            
                'discount_price' => null,
            
                'short_descp' => 'Quần short với chất liệu 41.9% Rayon, 49.9% Nylon, 8.2% Spandex, mang đến sự mềm mại, co giãn tốt và thoáng khí, giúp người mặc luôn thoải mái suốt ngày dài.',
            
                'long_descp' => '<ul><li>Quần short với chất liệu 41.9% Rayon, 49.9% Nylon, 8.2% Spandex, mang đến sự mềm mại, co giãn tốt và thoáng khí, giúp người mặc luôn thoải mái suốt ngày dài.</li><li>Quần được thiết kế với lưng thun co giãn, mang lại cảm giác thoải mái. Form ngắn trên gối giúp tôn dáng, tạo nên vẻ ngoài trẻ trung và đầy năng động.</li><li>Dễ dàng phối cùng T-shirt, polo hoặc tanktop phù hợp cho dạo phố, du lịch và các hoạt động thường ngày.</li></ul><p><span class=\"ql-cursor\">﻿﻿</span></p>',
            
                'product_thumnail' => 'upload/products/thambnail/ebqGJdoXkXQ9jMUl4tQy29pzlpVyK6.webp',
            
                'vendor_id' => 6,
            
                'status' => 1,
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:44:25',
            
            ],
            
            [
            
                'id' => 9,
            
                'brand_id' => 5,
            
                'category_id' => 9,
            
                'product_name' => 'Quần Jeans Nam Form Ôm',
            
                'product_slug' => 'quan-jeans-nam-form-om',
            
                'product_code' => 'JN25SS25T-SL',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product',
            
                'selling_price' => 85,
            
                'discount_price' => null,
            
                'short_descp' => 'Chất liệu 98% cotton 2% spandex mang đến độ co giãn nhẹ, thoáng mát và cảm giác dễ chịu khi mặc.',
            
                'long_descp' => '<ul><li>Chất liệu 98% cotton 2% spandex mang đến độ co giãn nhẹ, thoáng mát và cảm giác dễ chịu khi mặc.</li><li>Thiết kế form ôm tôn dáng, tạo vẻ nam tính và hiện đại, phù hợp với nhiều phong cách.</li><li>Dễ dàng phối cùng áo thun hoặc polo, thích hợp cho cả đi làm và dạo phố.</li></ul><p><span class=\"ql-cursor\">﻿</span></p>',
            
                'product_thumnail' => 'upload/products/thambnail/CESc1SXmuLE1OjwgrV6LLgaGOOZbCQ.webp',
            
                'vendor_id' => 2,
            
                'status' => 0,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 11,
            
                'brand_id' => 4,
            
                'category_id' => 8,
            
                'product_name' => 'iPhone 16 Pro Max 256GB',
            
                'product_slug' => 'iphone-16-pro-max-256gb',
            
                'product_code' => 'HGJ115RIY-FX',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product,top product',
            
                'selling_price' => 15000,
            
                'discount_price' => null,
            
                'short_descp' => 'Màn hình Super Retina XDR 6,9 inch lớn hơn có viền mỏng hơn, đem đến cảm giác tuyệt vời khi cầm trên tay.',
            
                'long_descp' => '<blockquote class=\"ql-align-justify\"><strong style=\"color: rgb(54, 54, 54);\">iPhone 16 Pro Max</strong>&nbsp;sở hữu&nbsp;<strong style=\"color: rgb(54, 54, 54);\">màn hình Super Retina XDR OLED 6.9 inch</strong>&nbsp;với&nbsp;<strong style=\"color: rgb(54, 54, 54);\">công nghệ ProMotion</strong>, mang lại trải nghiệm hiển thị mượt mà và sắc nét, lý tưởng cho giải trí và làm việc. Với chipset&nbsp;<strong style=\"color: rgb(54, 54, 54);\">A18 Pro</strong>&nbsp;mạnh mẽ, mẫu iPhone đời mới này cung cấp hiệu suất vượt trội, giúp xử lý mượt mà các tác vụ nặng như chơi game hay edit video.&nbsp;Chiếc điện thoại&nbsp;<a href=\"https://cellphones.com.vn/mobile/apple/iphone-16.html\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(215, 0, 24);\"><strong>iPhone 16</strong></a>&nbsp;mới&nbsp;này còn sở hữu&nbsp;hệ thống&nbsp;<strong style=\"color: rgb(54, 54, 54);\">camera Ultra Wide 48MP</strong>&nbsp;cho khả năng chụp ảnh cực kỳ chi tiết, mang đến chất lượng hình ảnh ấn tượng trong mọi tình huống.</blockquote>',
            
                'product_thumnail' => 'upload/products/thambnail/aG2QzhYnB0pGP74jcNzs56z7HugOoK.webp',
            
                'vendor_id' => 4,
            
                'status' => 1,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 12,
            
                'brand_id' => 4,
            
                'category_id' => 11,
            
                'product_name' => 'Samsung Galaxy S25 Ultra 12GB 256GB',
            
                'product_slug' => 'samsung-galaxy-s25-ultra-12gb-256gb',
            
                'product_code' => 'HHT95RIY-JIK',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product,top product',
            
                'selling_price' => 18000,
            
                'discount_price' => 15000,
            
                'short_descp' => 'Chuẩn IP68 trên Samsung S25 Ultra 5G – Chống nước, chống bụi, thiết kế cao cấp, sang trọng.',
            
                'long_descp' => '<p><a href=\"https://cellphones.com.vn/dien-thoai-samsung-galaxy-s25-ultra.html\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: currentcolor;\"><strong>Samsung S25 Ultra</strong></a><span style=\"color: rgb(100, 100, 100);\">&nbsp;mạnh mẽ với chip&nbsp;</span><strong style=\"color: rgb(54, 54, 54);\">Snapdragon 8 Elite For Galaxy</strong><span style=\"color: rgb(100, 100, 100);\">&nbsp;mới nhất,&nbsp;RAM 12GB&nbsp;và bộ nhớ trong&nbsp;256GB-1TB. Hệ thống&nbsp;</span><strong style=\"color: rgb(54, 54, 54);\">3 camera sau</strong><span style=\"color: rgb(100, 100, 100);\">&nbsp;chất lượng gồm&nbsp;camera chính 200MP, camera tele 50MP và camera góc siêu rộng 50MP. Thiết kế&nbsp;kính cường lực&nbsp;</span><strong style=\"color: rgb(54, 54, 54);\">Corning Gorilla Armor 2</strong><span style=\"color: rgb(100, 100, 100);\">&nbsp;và khung&nbsp;</span><strong style=\"color: rgb(54, 54, 54);\">viền&nbsp;Titanium</strong><span style=\"color: rgb(100, 100, 100);\">,&nbsp;màn hình&nbsp;Dynamic AMOLED 6.9 inch. Điện thoại này còn có viên pin&nbsp;</span><strong style=\"color: rgb(54, 54, 54);\">5000mAh</strong><span style=\"color: rgb(100, 100, 100);\">,&nbsp;hỗ trợ&nbsp;</span><strong style=\"color: rgb(54, 54, 54);\">5G</strong><span style=\"color: rgb(100, 100, 100);\">&nbsp;và&nbsp;</span><strong style=\"color: rgb(54, 54, 54);\">Galaxy AI</strong><span style=\"color: rgb(100, 100, 100);\">&nbsp;ấn tượng,&nbsp;nâng cao trải nghiệm người dùng!</span><span class=\"ql-cursor\">﻿</span></p>',
            
                'product_thumnail' => 'upload/products/thambnail/uaysLsB7DnHW7dILAKFiFKpQwqPKPZ.webp',
            
                'vendor_id' => 5,
            
                'status' => 1,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 13,
            
                'brand_id' => 4,
            
                'category_id' => 10,
            
                'product_name' => 'OPPO Find X8',
            
                'product_slug' => 'oppo-find-x8',
            
                'product_code' => 'HTU53RIY-DTB',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product,top product',
            
                'selling_price' => 13000,
            
                'discount_price' => 12000,
            
                'short_descp' => 'OPPO Find X8 hữu chip Dimensity 9400 3nm với lõi Cortex-X925 sẽ đảm bảo xử lý mọi tác vụ một cách nhanh chóng.',
            
                'long_descp' => '<p><span style=\"color: rgb(0, 0, 0);\">Sau bao chờ đợi, OPPO đã thật sự trình làng người dùng với bộ đôi Flagship&nbsp;</span><a href=\"https://cellphones.com.vn/dien-thoai-oppo-find-x8.html\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(215, 0, 24);\"><strong>điện thoại&nbsp;OPPO Find X8</strong></a><strong style=\"color: rgb(54, 54, 54);\">&nbsp;ra mắt tại thị trường Việt Nam vào tháng 11</strong><span style=\"color: rgb(0, 0, 0);\">&nbsp;hứa hẹn sẽ mang đến những cải tiến mới nhất, giá bán có phần dễ tiếp cận hơn so với các mẫu tiền nhiệm trước đây. Cùng với đó, trên dòng điện thoại mới còn được nâng cấp tác vụ AI mới nhất. Cùng khám phá chi tiết hơn về mẫu mới này ngay!</span><span class=\"ql-cursor\">﻿</span></p>',
            
                'product_thumnail' => 'upload/products/thambnail/xWh9UMAVLwmRyVzrQeykmiXNpNunYx.webp',
            
                'vendor_id' => 6,
            
                'status' => 1,
            
                'created_at' => '2025-03-28 16:57:16',
            
                'updated_at' => '2025-03-28 16:57:16',
            
            ],
            
            [
            
                'id' => 15,
            
                'brand_id' => 6,
            
                'category_id' => 13,
            
                'product_name' => 'Máy giặt Electrolux UltimateCare 500 Inverter 10 kg',
            
                'product_slug' => 'may-giat-electrolux-ultimatecare-500-inverter-10-kg',
            
                'product_code' => 'EWF1023P5WC',
            
                'product_qty' => 1000,
            
                'product_tags' => 'new product,top product',
            
                'selling_price' => 1100,
            
                'discount_price' => null,
            
                'short_descp' => 'sử dụng nước nóng để giặt chuyên sâu, mang lại hiệu quả diệt khuẩn vượt trội.',
            
                'long_descp' => '<p><strong>Đặc điểm nổi bật</strong></p><ul><li><strong>Chế độ Full Wash 45</strong>&nbsp;cho phép giặt sạch toàn bộ quần áo với đầy tải chỉ trong 45 phút.</li><li><strong>Công nghệ</strong>&nbsp;<strong>UltraMix</strong>&nbsp;hòa tan nước giặt,&nbsp;đảm bảo không còn dư lượng xà phòng.</li><li><strong>Công nghệ</strong>&nbsp;<strong>Hygienic Care</strong>&nbsp;diệt khuẩn và các tác nhân gây dị ứng.</li><li><strong>Chế độ Sanitise</strong>&nbsp;sử dụng nước nóng để giặt chuyên sâu, mang lại hiệu quả diệt khuẩn vượt trội.</li><li><strong>Công nghệ</strong>&nbsp;<strong>EcoInverter&nbsp;</strong>hoạt động êm ái, giảm độ rung lắc, tiết kiệm điện.</li><li><strong>Máy giặt cửa trước 10 kg</strong>&nbsp;lý tưởng cho gia đình từ 5 đến 7 thành viên.</li></ul><p>﻿﻿</p>',
            
                'product_thumnail' => 'upload/products/thambnail/EzMMVlGUnynV94gJPsUEGceIgiKvi6.jpg',
            
                'vendor_id' => 2,
            
                'status' => 0,
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
        ]);
    }
}

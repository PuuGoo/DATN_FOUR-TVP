
<input type="text" class="vop">
<input type="text" class="vop">
<input type="text" class="vop">
<button onclick="handleClick()">Click</button>

<input type="text" name="variant_value"></input>



<script type="text/javascript">
    function handleClick(){
        let vop = document.getElementsByClassName("vop");
        var value_ = '';
        for (let i = 0; i < vop.length; i++) {
            value_ += i == --vop.length ?  vop[i].value : vop[i].value + ", ";
        }
        document.getElementsByName('variant_value')[0].value = value_;
    }
</script>

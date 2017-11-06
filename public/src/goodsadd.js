define([
    'jquery',
    'template'
    
], function($, template) {
    $('form').on('submit',function(){
        var _this=$(this);
        $.ajax({
            url:'/api/product/addProduct',
            type:'post',
            data:_this.serialize(),
            success:function(info){
                // console.log(info);
                if(info.success){
                    location.href='/goods_list.php';
                }
            }
        })
        return false;
    })
    
    $.ajax({
        url:'/api/category/querySecondCategoryPaging',
        type:'get',
        data:{page:1,pagesize:100},
        success:function(info){
            // console.log(info);
            var html=template('brands',info);
            $('.brand').append(html);
        }
    })

});
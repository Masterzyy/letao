define([
    'jquery',
    'template',
    'ckeditor',
    './utils',
    'uploadify',

    
], function($, template,CKEDITOR) {

    CKEDITOR.replace('ck');

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
    
    $('#upfile').uploadify({
        buttonText:'',
        width:120,
        height:120,
        fileObjName:'pic1',
        itemTemplate:'<span></span>',
        swf:'/public/assets/uploadify/uploadify.swf',
        uploader: '/api/product/addProductPic',
        onUploadSuccess:function(file,data){
            var res=JSON.parse(data);
            console.log(data);
            console.log(res);
            $('.preview img').attr('src','http://localhost:3000'+res.picAddr)
            $("input[name='pic']").val(res.picAddr);
        }
    });


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
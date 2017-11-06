define(['jquery','template'], function($, template) {
    var size=2;

    var reg=/\?[a-z]+=(\d+)/;

    var search=location.search || '';

    var page=reg.exec(search)&&reg.exec(search)[1];

        page=page||1;

    $.ajax({
        url: '/api/product/queryProductDetailList',
        type: 'get',
        data:{
            page:page,
            pageSize:size
        },
        success:function(info){
            var total=info.total;
            console.log(total);
            var pageLen=Math.ceil(total/size);
            console.log(pageLen);
            var html=template('tpl',info);

            var pagehtml=template('page',{
                pageLen:pageLen,
                page:page
            });
            $('.goods').html(html);

            $('.pagination').html(pagehtml);
        }
    })
    
});
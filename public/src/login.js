define(['jquery'], function ($) {
    $('form').on('submit', function () {
        var _this = $(this);
        $.ajax({
            type: 'post',
            url: '/api/employee/employeeLogin',
            data: _this.serialize(),
            success: function (info) {
                if (info.error) {
                    return alert(JSON.stringify(info.message));
                }
                location.href = '/';
            }

        })
        return false;
    })


});
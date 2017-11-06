<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>乐淘 - 后台管理</title>
    <?php include "./common/style.html" ?>
</head>
<body>
    
    <!-- 侧边栏 -->
    <?php include './common/aside.html' ?>
    <!-- 主体 -->
    <div class="main">
        <div class="container-fluid">
            <!-- 头部 -->
            <div class="header">
                <nav class="navbar navbar-custom">
                    <div class="navbar-header">
                        <a href="javascript:;" class="navbar-brand">
                            <i class="fa fa-navicon"></i>
                        </a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="./settings.html">
                                <i class="fa fa-user"></i>
                                个人中心
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-sign-out"></i>
                                退出
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                            </a>
                        </li>
                    </ul>
                </nav>          
            </div>
            <!-- 讲师资料 -->
            <div class="body">
                <div class="goods-add">
                <form action="" class="form-horizontal">
                <div class="form-group">
                    <label for="" class="col-xs-3 control-label">商品封面</label>
                    <div class="col-xs-2 preview">
                        <img src="/public/images/default.png">
                        <input type="file" id="upfile">
                        <input type="hidden" name="pic">
                        <div class="cover">
                            <i class="fa fa-upload"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-xs-3 control-label">商品名称</label>
                    <div class="col-xs-5">
                        <input type="text" name="proName" class="form-control input-sm">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-xs-3 control-label">所属品牌</label>
                    <div class="col-xs-5">
                        <select name="brandId" class="form-control input-sm brand">
                            <option value="0">请选择品牌</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-xs-3 control-label">商品价格</label>
                    <div class="col-xs-5">
                        <input type="text" name="oldPrice" class="form-control input-sm">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-xs-3 control-label">优惠价格</label>
                    <div class="col-xs-5">
                        <input type="text" name="price" class="form-control input-sm">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-xs-3 control-label">库存量</label>
                    <div class="col-xs-5">
                        <input type="text" name="num" class="form-control input-sm">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-xs-3 control-label">尺寸</label>
                    <div class="col-xs-5">
                        <input type="text" name="size" class="form-control input-sm">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-xs-3 control-label">是否上架</label>
                    <div class="col-xs-5">
                        <div class="radio-inline">
                            <label for="">
                                <input type="radio" name="statu" value="1"> 是
                            </label>
                        </div>
                        <div class="radio-inline">
                            <label for="">
                                <input type="radio" name="statu" value="0"> 否
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-xs-3 control-label">商品描述</label>
                    <div class="col-xs-5 ckeditor">
                        <textarea name="proDesc" id="ck" rows="5" class="form-control input-sm"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-8">
                        <input type="submit" class="btn btn-success btn-sm pull-right" value=" 保 存 ">
                    </div>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>

    <script type='text/template' id='brands'>
    {{each rows}}
     <option value="{{$value.id}}">{{$value.brandName}}</option>
     {{/each}}
    </script>
    <?php include './common/script.html' ?>
    <script>
    require(['src/goodsadd']);
    </script>
</body>
</html>
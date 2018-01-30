<!DOCTYPE html>
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
	<meta name="generator" content="EverEdit" />
	<meta name="author" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('layui/css/layui.css'); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css?v=0.31'); ?>" />
	<link href="https://cdn.bootcss.com/highlight.js/9.12.0/styles/github.min.css" rel="stylesheet">
	<script src = "<?php $this->options->themeUrl('layui/layui.js'); ?>"></script>
	<script src="https://cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
	<?php $this->header(); ?>
	<!--百度统计-->
	<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "https://hm.baidu.com/hm.js?78cacc8bb25aa108d902444e58140ad0";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
	<!--百度统计END-->
</head>
<body>
	<div id="top"></div>
	<div class="top"><a href="#top" title = "返回顶部"><i class="layui-icon">&#xe604;</i> </a></div>
	<!--header-->
	<div class = "header">
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-col-md12">
					<div class = "layui-col-md2 logo">
						<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
						<!--<p class="description"><?php $this->options->description() ?></p>-->
					</div>
					<div class = "layui-col-md7 layui-hide-xs">
						<ul class="layui-nav" lay-filter="">
						    <!--<li class="layui-nav-item"><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>-->
						    <?php $this->widget('Widget_Metas_Category_List')->parse('<li class = "layui-nav-item"><a href="{permalink}">{name}</a></li>'); ?>
						    <?php $this->widget('Widget_Contents_Page_List')->parse('<li class = "layui-nav-item"><a href="{permalink}">{title}</a></li>'); ?>
						</ul>
					</div>
					<div class="layui-col-md3 search">
						<form method="post" action="" class="layui-form">
						    <div><input type="text" name="s" class="layui-input" placeholder="回车搜索" size = "20" /></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--header end-->
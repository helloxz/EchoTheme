<!--footer-->
	<div class="footer">
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-col-md12">
					 &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('Powered by Typecho，蜀ICP备14021561号-1'); ?> | Theme by <a href="https://www.xiaoz.me/archives/9946" target = "_blank" title = "Typecho简洁风格主题EchoTheme">EchoTheme</a>
				</div>
			</div>
		</div>
	</div>
	<!--foooter end-->
	<script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
	<script>
	//注意：导航 依赖 element 模块，否则无法进行功能性操作
	layui.use('element', function(){
	  var element = layui.element;
	  
	  //…
	});
	//返回顶部
	function retop(){
		$("html,body").animate({scrollTop: '0px'}, 600);
	}
	</script>
	<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
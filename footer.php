<!--footer-->
	<div class="footer">
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-col-md12">
					 &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('Powered by Typecho，蜀ICP备14021561号-1'); ?>.
				</div>
			</div>
		</div>
	</div>
	<!--foooter end-->
	<script>
	//注意：导航 依赖 element 模块，否则无法进行功能性操作
	layui.use('element', function(){
	  var element = layui.element;
	  
	  //…
	});
	
	</script>
	<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<!--content-->
	<div class="layui-container content">
		<div class="layui-row">
			<!--post-->
			<div class="layui-col-md8">
				<div class="error-page">
		            <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
		            <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
		            <form method="post">
		                <p><input type="text" name="s" class="text" autofocus /></p>
		                <p><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
		            </form>
		        </div>
			</div>
			<!--post end-->
			<?php $this->need('sidebar.php'); ?>
		</div>
	</div>
<!--content end-->

<?php $this->need('footer.php'); ?>
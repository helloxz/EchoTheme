<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<!--content-->
	<div class="layui-container content">
		<div class="layui-row">
			<!--post-->
			<div class="layui-col-md8">
				<div class="error-page">
		            <h2 class="post-title"><?php _e('抱歉，页面没找到'); ?></h2>
		            <p><i class="layui-icon" style="font-size: 20em; color: #1E9FFF;">&#xe61c;</i></p>
		            <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
		            <hr>
		            <!--<form method="post">
		                <p><input type="text" name="s" class="text" autofocus /></p>
		                <p><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
		            </form>-->
		            <form method="post" class="layui-form">
			            <div class="layui-form-item">
						   <table width = "100%;">
							    <tr>
								    <td width = "80%;"><input type="text" name="s" class="layui-input" placeholder="回车搜索" style = "border-right:0;" /></td>
								    <td width = "20%;"><button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button></td>
							    </tr>
						   </table>
						</div>
					</form>
		        </div>
			</div>
			<!--post end-->
			<?php $this->need('sidebar.php'); ?>
		</div>
	</div>
<!--content end-->

<?php $this->need('footer.php'); ?>
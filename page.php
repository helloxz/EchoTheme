<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<!--content-->
	<div class="layui-container content">
		<div class="layui-row">
			<!--post-->
			<div class="layui-col-md8">
				<div>
					<article class="post" itemscope itemtype="http://schema.org/BlogPosting">
				        <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
				        <div class="post-content" itemprop="articleBody">
				            <?php $this->content(); ?>
				        </div>
				    </article>
				    <?php $this->need('comments.php'); ?>
				</div>
			</div>
			<!--post end-->
			<?php $this->need('sidebar.php'); ?>
		</div>
	</div>
<!--content end-->

<?php $this->need('footer.php'); ?>
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
				        <ul class="post-meta">
				            <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('<i class="layui-icon">&#xe612;</i> '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				            <li><?php _e('<i class="layui-icon">&#xe60e;</i> '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
				            <li><?php _e('<i class="layui-icon">&#xe62a;</i> '); ?><?php $this->category(','); ?></li>
				        </ul>
				        <div class="post-content" itemprop="articleBody">
				            <?php $this->content(); ?>
				        </div>
				        <p itemprop="keywords" class="tags"><?php _e('<i class="layui-icon">&#xe61d;</i>  '); ?><?php $this->tags(', ', true, 'none'); ?></p>
				    </article>
				    <?php $this->need('comments.php'); ?>
				    <ul class="post-near">
				        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
				        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
				    </ul>
				</div>
			</div>
			<!--post end-->
			<?php $this->need('sidebar.php'); ?>
		</div>
	</div>
<!--content end-->

<?php $this->need('footer.php'); ?>
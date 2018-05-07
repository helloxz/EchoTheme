<?php
/**
* 使用LayUI开发的Typecho简洁主题。
* 
* @package EchoTheme
* @author xiaoz
* @version 0.9
* @link https://www.xiaoz.me
*/
	if (!defined('__TYPECHO_ROOT_DIR__')) exit;
	$this->need('header.php');
?>

<!--content-->
	<div class="layui-container content">
		<div class="layui-row">
			<!--post-->
			<div class="layui-col-md9 layui-col-space30">
				<div>
					<?php while($this->next()): ?>
					    <article class="post">
							<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
							<ul class="post-meta">
								<li itemprop="author"><?php _e('<i class="layui-icon">&#xe612;</i>'); ?> <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
								<li><?php _e('<i class="layui-icon">&#xe60e;</i> '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
								<li><?php _e('<i class="layui-icon">&#xe62a;</i> '); ?><?php $this->category(','); ?></li>
								<li itemprop="interactionCount"><i class="layui-icon">&#xe63a;</i> <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
							</ul>
							<hr>
					        <div class="post-content" itemprop="articleBody">
								<?php $this->content('- 阅读全文 -'); ?>
					        </div>
					    </article>
					<?php endwhile; ?>
					<?php $this->pageNav('<i class="layui-icon">&#xe619;</i>  上一页', '下一页 <i class="layui-icon">&#xe61a;</i>'); ?>
				</div>
			</div>
			<!--post end-->
			<?php $this->need('sidebar.php'); ?>
		</div>
	</div>
	<!--content end-->

<?php $this->need('footer.php'); ?>
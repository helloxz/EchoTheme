<div class="layui-col-md3 layui-hide-xs sidebar">
	<h3>最近更新</h3>
	<ul>
    <?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
	</ul>
	<hr>

	<h3>最新评论</h3>
	<ul>
    <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
    <?php while($comments->next()): ?>
        <li><?php $comments->author(false); ?>: <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(10, '[...]'); ?></a></li>
    <?php endwhile; ?>
	</ul>
	<hr>

	<ul>
    
    <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true))->to($tags); ?>
    <h3 class="widget-title"><?php _e('标签云'); ?></h3>
    <?php if($tags->have()): ?>
        <?php while ($tags->next()): ?>
        <a style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>,
           <?php echo(rand(0,255)); ?>)" href="<?php $tags->permalink();?>">
           <?php $tags->name(); ?></a>
    <?php endwhile; ?>
    <?php endif; ?>
	</ul>
	<hr>

	<h3 class="widget-title"><?php _e('分类目录'); ?></h3>
	<ul>
	    <?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
	</ul>
    <hr>

	<section class="widget">
		<h3 class="widget-title"><?php _e('友情链接'); ?></h3>
        <ul class="widget-list">
            <li><a href = "https://www.xiaoz.me/" title = "wordpress教程" target = "_blank">WordPress教程</a></li>
            <li><a href = "http://www.dayue8.com/" title = "答曰" target = "_blank">答 曰</a></li>
            <li><a href = "http://www.vpsjz.com/" title = "答曰" target = "_blank">VPSJZ.COM-VPS建站</a></li>
            <li><a href = "http://www.52zd.com/" title = "CJ联盟操作" target = "_blank">CJ联盟操作</a></li>
            <li><a href = "http://blog.javazygx.cn/" title = "java资源共享博客" target = "_blank">java资源共享博客</a></li>
            <li><a href = "http://www.033.info/" title = "DigitalOcean vps" target = "_blank">DigitalOcean vps</a></li>
            <li><a href = "https://qblog.org/" title = "阿Q博客" target = "_blank">阿Q博客</a></li>
        </ul>
	</section>
	<hr>

	<ul>
	    <?php if($this->user->hasLogin()): ?>
	        <li class="last"><a href="<?php $this->options->index('Logout.do'); ?>">Logout (<?php $this->user->screenName(); ?>)</a></li>
	    <?php else: ?>
	        <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>">Login</a></li>
	    <?php endif; ?>
	</ul>
</div>
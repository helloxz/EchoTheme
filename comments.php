<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="layui-col-md12" class = "comments">
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    	<div class="layui-form-item">
    	<h3 id="response"><?php _e('添加新评论'); ?></h3>
    	</div>
    	<form method="post" action="<?php echo str_replace("http","https",$this->commentUrl());  ?>" id="comment-form" role="form" class="layui-form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
    			<div class="layui-form-item">
                <!--<label for="author" class="layui-form-label required"><?php _e('称呼'); ?></label>-->
    			<input class = "layui-input" type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" placeholder = "请填写昵称" required />
    			</div>
    		</p>
    		<p>
    			<div class="layui-form-item">
                <!--<label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="layui-form-label required"<?php endif; ?>><?php _e('Email'); ?></label>-->
    			<input class = "layui-input" type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> placeholder = "Email" />
    			</div>
    		</p>
    		<p>
                <!--<label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>-->
                <div class="layui-form-item">
    			<input class = "layui-input" type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> placeholder = "网站:https://www.xiaoz.me/" />
    			</div>
    		</p>
            <?php endif; ?>
    		<p>
                <!--<label for="textarea" class="required"><?php _e('内容'); ?></label>-->
                <textarea rows="8" cols="50" name="text" id="textarea" class="layui-textarea" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
    			<div class="layui-form-item" style = "margin-top:20px;">
                <button type="submit" class="layui-btn layui-btn-normal"><?php _e('提交评论'); ?></button>
                </div>
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
</div>
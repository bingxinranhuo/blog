<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="pinglun tpt-content">
		<!--评论框标题-->
	<fieldset class="layui-elem-field layui-field-title">
		<legend><?php _e('博友评语'); ?> <?php $this->commentsNum(_t('0 条'), _t('1 条'), _t('%d 条')); ?></legend>
	</fieldset>
<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';  //如果是文章作者的评论添加 .comment-by-author 样式
        } else {
            $commentClass .= ' comment-by-user';  //如果是评论作者的添加 .comment-by-user 样式
        }
    } 
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级
?>
<ol class="comment-list"> 
	<li id="li-<?php $comments->theId(); ?>" class="comment-body
	<?php 
		if ($comments->_levels > 0) {
			echo ' comment-child';
			$comments->levelsAlt(' comment-level-odd', ' comment-level-even');
		} else {
			echo ' comment-parent';
		}
		$comments->alt(' comment-odd', ' comment-even');
		echo $commentClass; 
	?>">
		<div id="<?php $comments->theId(); ?>" class="pl-dan comment-txt-box">
			<div class="t-p comment-author">
				<?php $comments->gravatar('40', ''); ?>
			</div>
			
			 <div class="t-u comment-author">
			  <strong><a target="_blank" href="<?php $comments->url(); ?>"><?php $comments->author(); ?></a><?php if ($comments->authorId == $comments->ownerId) {echo "<span class='layui-badge layui-bg-cyan'>博主</span>";} ?></strong>
			  <div><b></b></div>
			  <div class="t-s">
			  <p><?php $comments->content(); ?></p>
			  	<!--嵌入式评论循环-->
				<?php if ($comments->children) { ?>
					<div class="comment-children">
						<?php $comments->threadedComments($options); ?>
					</div>
				<?php } ?>
			  </div>
			  <span class="t-btn"><?php $comments->reply(); ?> <span class="t-g"><?php $comments->date('Y-m-d H:i'); ?> <?php getBrowser($comments->agent); ?></span></span> 
			</div><!-- 单条评论者信息及内容 -->
		</div>
	</li>
</ol>   
<?php } ?>


<?php $this->comments()->to($comments); ?>
	<?php if ($comments->have()): ?>
	<?php
		if ($comments->authorId == $comments->ownerId) {
			$commentClass .= ' comment-by-author';
		} else {
			$commentClass .= ' comment-by-user';
		}
?>
<ol class="comment-list"> 
<?php $this->comments()->to($comments); ?>
	<?php while($comments->next()): ?>
	
	<li id="li-<?php $comments->theId(); ?>" class="comment-body
	<?php 
		if ($comments->_levels > 0) {
			echo ' comment-child';
			$comments->levelsAlt(' comment-level-odd', ' comment-level-even');
		} else {
			echo ' comment-parent';
		}
		$comments->alt(' comment-odd', ' comment-even');
		echo $commentClass; 
	?>">
		<div id="<?php $comments->theId(); ?>" class="pl-dan comment-txt-box">
			<div class="t-p comment-author">
				<?php $comments->gravatar('40', ''); ?>
			</div>
			
			 <div class="t-u comment-author">
			  <strong><a target="_blank" href="<?php $comments->url(); ?>"><?php $comments->author(); ?></a><?php if ($comments->authorId == $comments->ownerId) {echo "<span class='layui-badge layui-bg-cyan'>博主</span>";} ?></strong>
			  <div><b></b></div>
			  <div class="t-s">
			  <p><?php $comments->content(); ?></p>
			  	<!--嵌入式评论循环-->	
			  	<?php if ($comments->children) { ?>
					<div class="comment-children">
						<?php $comments->threadedComments($options); ?>
					</div>
				<?php } ?>
			  </div>
			  <span class="t-btn"><?php $comments->reply(); ?> <span class="t-g"><?php $comments->date('Y-m-d H:i'); ?> <?php getBrowser($comments->agent); ?></span></span> 
			</div><!-- 单条评论者信息及内容 -->
		</div>
	</li>
	<?php endwhile; ?>
<?php else: ?>
<div class="support-author"><?php _e('消灭零回复'); ?></div>
<?php endif; ?>
</ol>
<div class='pagebar'>
<?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?> 
</div>
</div>

    <?php if($this->allow('comment')): ?>
	<!--评论框区-->
	<div id="<?php $this->respondId(); ?>" class="tpt-content">
		
		<!--评论框标题-->
		<fieldset class="layui-elem-field layui-field-title">
			<legend><?php $comments->smilies(); ?> <?php _e('发表评语'); ?></legend>
		</fieldset>
		<!--表单-->
		<form class="layui-form layui-form-pane" method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
            <?php else: ?>
			  <div class="layui-form-item">
				<label class="layui-form-label" for="author"><?php _e('称呼'); ?></label>
				<div class="layui-input-block">
				  <input type="text" name="author" id="author" class="layui-input" value="<?php $this->remember('author'); ?>" required />
				</div>
			  </div>

			  <div class="layui-form-item">
				<label class="layui-form-label" for="mail"><?php _e('邮箱'); ?></label>
				<div class="layui-input-block">
				  <input type="email" name="mail" id="mail" class="layui-input" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
				</div>
			  </div>

			  <div class="layui-form-item">
				<label class="layui-form-label" for="url"><?php _e('网站'); ?></label>
				<div class="layui-input-block">
				  <input type="url" name="url" id="url" class="layui-input" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
				</div>
			  </div>

            <?php endif; ?>
			
			  <div class="layui-form-item layui-form-text">
				<label class="layui-form-label" for="textarea"><?php _e('内容'); ?></label>
				<div class="layui-input-block">
				  <textarea name="text" id="textarea" class="layui-textarea" required><?php $this->remember('text'); ?></textarea>
				</div>
			  </div>
			  
			  <div class="layui-form-item">
				<button type="submit" class="layui-btn layui-btn-warm" lay-submit="" lay-filter="demo2"><?php _e('提交评论'); ?></button>
			  </div>
    	</form>
    </div>
	
	
    <?php else: ?>
    <div class="support-author"><?php _e('评论已关闭'); ?></div>
    <?php endif; ?>

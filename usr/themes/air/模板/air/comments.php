<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comment" class="post-comment clearfix sb br mt">
<?php function threadedComments($comments, $options) {

$commentClass = '';
if ($comments->authorId) {
if ($comments->authorId == $comments->ownerId) {
$commentClass .= ' comment-by-author';
} else {
$commentClass .= ' comment-by-user';
}
}
 
$commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
<label id="cmt<?php $comments->theId(); ?>"></label>
<div class="ul<?php 
	if ($comments->levels > 0) {
	echo ' comment-child';
	$comments->levelsAlt(' comment-level-odd', ' comment-level-even');
	} else {
	echo ' comment-parent';
	}
	$comments->alt(' comment-odd', ' comment-even');
	echo $commentClass;
	?>">

	<div class="li transition">
	<span class="avatar fl"><?php $comments->gravatar('40','','','fl'); ?></span>	
		<div class="clbody">
			<div class="cinfo clearfix">
				<a class="author" rel="nofollow" href="<?php $comments->url(); ?>" target="_blank"><?php $comments->author(); ?></a>
				<span class="reply-a fr transition">
				<?php $comments->reply(); ?></span>
			</div>
			<span class="c-time"><?php $comments->date('Y-m-d H:i'); ?></span>
			<p class="p">
				<?php $comments->content(); ?>
				<label id="AjaxComment45"></label>
			</p>
				<?php if ($comments->children) { ?>
					<?php $comments->threadedComments($options); ?>
				<?php } ?>
		</div>
		<div class="clear"></div>
	</div>

</div>
<?php } ?>


	<div  class="comment-list mt">
		<p class="title">评论列表 <span class="comment-num">
			（已有<span class="emphasize"><?php $this->commentsNum(_t('0'), _t('1'), _t('%d')); ?></span>条评论）
		</span></p>		
		<span id="AjaxCommentBegin"></span>

			<?php $this->comments()->to($comments); ?>
			<?php if ($comments->have()): ?>
				<?php $comments->listComments(); ?>
			<?php else: ?>	
				<?php _e('消灭零回复'); ?>				
			<?php endif; ?>

		<div class="pagebar mb mt">
		<div class="nav-links">
		</div>
		</div>
		<span id="AjaxCommentEnd"></span>
		<div class="pagination">
			<?php $comments->pageNav('上一页', '下一页', 2, '...', array('wrapTag' => 'ul', 'wrapClass' => 'page-navigator', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev-page', 'nextClass' => 'next-page')); ?>
		</div>
	</div>
	
	
	
	<?php if($this->allow('comment')){ ?>
	 <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>

		<p class="title">发表评论 <span class="comment-num">
		（已有<span class="emphasize"><?php $this->commentsNum(_t('0'), _t('1'), _t('%d')); ?></span>条评论）
		</span>
		</p>	
		
		<div class="compost">
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form frmSumbit" role="form">
				<?php if($this->user->hasLogin()): ?>
				<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
				<?php else: ?>
						
				<div class="com-info">
					<ul>
						<li>
							<span class="hide" for="author"></span>
							<input class="ipt" type="text" name="author" id="author" value="<?php $this->remember('author'); ?>" tabindex="2" placeholder="昵称(必填)">
						</li>
						<li>
							<span class="hide" for="mail"></span>
							<input class="ipt" type="text" name="mail" id="mail" value="<?php $this->remember('mail'); ?>" tabindex="3" placeholder="邮箱">
						</li>
						<li>
							<span class="hide" for="url"></span>
							<input class="ipt" type="text" name="url" id="url" value="<?php $this->remember('url'); ?>" tabindex="4" placeholder="网址">
						</li>
					</ul>
				</div>
				 <?php endif; ?>
				<div class="com-box">
					<textarea placeholder="来都来了，说点什么吧..." class="textarea" name="text" id="txaArticle" cols="5" rows="5" tabindex="1"></textarea>
				</div>
				<div class="com-info"><button class="com-submit br brightness" name="sumbit" type="submit" tabindex="5" onclick="return zbp.comment.post()">发布评论</button></div>

			</form>
		</div>
	</div>
    <?php }else{ ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php } ?>

</div>

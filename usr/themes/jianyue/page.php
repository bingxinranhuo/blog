<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="tpt-ml-7">
<div class="tpt-left">

<div class="tpt-content">

<fieldset class="layui-elem-field layui-field-title support-author">
	<legend><h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3></legend>
</fieldset>


<div class="wangEditor-container cl">
<div class="wangEditor-txt">
	<?php $this->content(); ?>
</div>
</div>
<hr>
<div class="tpt-shop cl">
<div class="tpt-s">
<div class="support-author">
    <a href="javascript:;" onclick="good()" class="layui-btn layui-btn-danger"><i class="layui-icon layui-icon-rmb"></i>  &nbsp;赞赏</a>
</div>
</div>  
</div>
</div>
<br />
<!--评论区-->
<?php if (!empty($this->options->sidebarBlock) && in_array('XianShiDL', $this->options->sidebarBlock)): ?>
<?php $this->need('comments.php'); ?>
<?php endif; ?>
</div>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

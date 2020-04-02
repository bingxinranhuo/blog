<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('layui/css/layui.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('layui/css/layer.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('layui/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('layui/css/wangEditor.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('layui/css/webgradients.css'); ?>">
    <script src="<?php $this->options->themeUrl('layui/jquery.js'); ?>"></script>
	<!--网站预加载 JS 脚本 instant.page-->
	<script src="<?php $this->options->themeUrl('layui/instantclick-1.2.2.js'); ?>" type="module"></script>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?50eaa284baab0e1c68bd1f0fc4e18dc5";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body class="<?php $this->options->JianBianm(); ?>" huaban_collector_injected="true">
<style type="text/css">
.tpt-header{background:#ffd600}
</style>
<div class="tpt-header">
<div class="tpt-wp cl">
<div class="tpt-logo"><a href="/"><img src="<?php $this->options->logoUrl(); ?>" height="38px"></a></div>
<input id="nav-btn" type="checkbox">
<label class="tpt-nav-btn layui-icon" for="nav-btn"></label>
<ul class="tpt-nav">
<li>
<a class="tpt-nav-li" href="/">首页</a>
<ul class="tpt-nav-ul"></ul>
</li>
<?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
<?php while($categorys->next()): ?>
	<?php if ($categorys->levels === 0): ?>
	<?php $children = $categorys->getAllChildren($categorys->mid); ?>
	<li>
		<input id="nav-<?php echo $categorys->mid; ?>" type="checkbox"><label for="nav-<?php echo $categorys->mid; ?>" class="layui-icon"><a href="<?php $categorys->permalink(); ?>" class="tpt-nav-li"><?php $categorys->name(); ?></a></label> 
		<?php if (!empty($children)) { ?>
			<ul class="tpt-nav-ul">
				<?php foreach ($children as $mid) { ?>
				<?php $child = $categorys->getCategory($mid); ?>
					<li><a href="<?php echo $child['permalink'] ?>"><?php echo $child['name']; ?></a></li>
				<?php } ?>
			</ul>
		<?php } ?>
	</li>
	<?php endif; ?>
<?php endwhile; ?>

<li><input id="nav-0" type="checkbox"><label for="nav-0" class="layui-icon"><a href="#" class="tpt-nav-li">页面</a></label> 
	<ul class="tpt-nav-ul">
		<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
			<?php while($pages->next()): ?>		
				<li><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
		<?php endwhile; ?>
	</ul>
</li>

</ul>
<div class="tpt-search"><i class="layui-icon"></i><span>搜索</span></div>
</div>
</div>

<div class="tpt-main cl">
<div class="tpt-wp cl">
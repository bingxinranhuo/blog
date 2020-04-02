<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
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
    <link rel="stylesheet" href="<?php $this->options->themeUrl('air/css/iconfont.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('air/css/prism.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('air/css/style.css'); ?>">
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
	<script src="<?php $this->options->themeUrl('air/js/prism.js'); ?>" type="text/javascript"></script>
	<script src="<?php $this->options->themeUrl('air/js/jquery-2.2.4.min.js'); ?>" type="text/javascript"></script>

</head>
<body style="transform: none;" huaban_collector_injected="true">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->


<header class="header sb">
    <div class="h-wrap container clearfix">
    	<h1 class="logo-area fl">
    		<a href="/" title="<?php $this->options->title(); ?>">
    			<img class="img" src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title(); ?>" title="<?php $this->options->title(); ?>" width="126px" height="54px">
    		</a>
    	</h1>  
    	<div class="m-nav-btn"><i class="iconfont icon-category"></i></div>
    	<nav class="responsive-nav">
            <div class="pc-nav m-nav fl" data-type="index" data-infoid="index">
                <ul class="nav-ul">
                    <li id="nvabar-item-index"><a href="/" class="active">首页</a></li>
					
					
					<?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
						<?php while($categorys->next()): ?>
							<?php if ($categorys->levels === 0): ?>
							<?php $children = $categorys->getAllChildren($categorys->mid); ?>
								<li id="navbar-category-1" class="li li-cate-1"><a href="javascript:;"><?php $categorys->name(); ?></a><span class="toggle-btn"><i class="iconfont icon-down"></i></span>
								<?php if (!empty($children)) { ?>
									<ul class="dropdown-nav nav-sb br sub-nav animated-fast fadeInUpMenu clearfix">
								<?php foreach ($children as $mid) { ?>
								
								<?php $child = $categorys->getCategory($mid); ?>
									<li id="navbar-category-18" class="li-subcate-18">
										<a class="dropdown-item" href="<?php echo $child['permalink'] ?>"><?php echo $child['name']; ?></a>
									</li>
								<?php } ?>
								</ul>
								 <?php } ?>
							  </li>
						<?php endif; ?>
						<?php endwhile; ?>

						<li id="navbar-category-1" class="li li-cate-1"><a href="javascript:;">页面</a><span class="toggle-btn"><i class="iconfont icon-down"></i></span>
							<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
							<ul class="dropdown-nav nav-sb br sub-nav animated-fast fadeInUpMenu clearfix">
								<?php while($pages->next()): ?>		
									<li id="navbar-category-18" class="li-subcate-18"><a class="dropdown-item" href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
								<?php endwhile; ?>
							</ul>
						</li>

					</ul>
            </div> 
        </nav>       
                <div class="login fr">
                    		<span><a rel="nofollow" title="登录" href="/admin" target="_blank"><i class="iconfont icon-user"></i></a></span>
        	        </div>
        <span id="search-button" class="search-button fr"><i class="iconfont icon-search"></i></span>
        <div id="search-area" class="container hidden br sb animated-fast fadeInUpMenu">
        	<form class="searchform clearfix" name="search" method="get" action="<?php $this->options ->siteUrl(); ?>">
            	<input class="s-input br fl" type="text" name="s" placeholder="请输入关键词..."> 
            	<button class="s-button fr br transition brightness" type="submit" id="searchsubmit">搜 索</button>
        	</form>
        </div>  
                <div class="contribute fr hidden-sm-md-lg">
            <a target="_blank" class="a transition brightness" href="#">投 稿</a>
        </div>
         
    </div>
</header>

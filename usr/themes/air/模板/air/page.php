<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<nav class="breadcrumb container">
    <a title="首页" href="/">首页</a>
    <i class="iconfont icon-right"></i>
	<?php $this->title() ?>
	<i class="iconfont icon-right"></i>页面正文                
</nav>

<div id="content" class="content container clearfix" style="transform: none;">
<div id="mainbox" class="article-box fl mb">
		        
<article class="art-main sb br mb">
	<div class="art-head mb">
		<h1 class="art-title"><?php $this->title() ?></h1>
	</div>
    <!-- 广告位AD4  -->
                	
	<div class="art-content">
		<blockquote><p>
		特别声明：文章多为网络转载，资源使用一般不提供任何帮助，特殊资源除外，如有侵权请联系！
		</p></blockquote>
		<p> <?php $this->content(); ?></p>
<br />    	
<br />    	
		<!--打赏-->
	    		<div class="reward-widget">
    		<div id="reward-btn" class="btn">赏</div>
    		<div id="popup">
        		<div id="reward-img" class="img-bg sb br transition"><img src="<?php $this->options->dashang(); ?>" alt="打赏二维码">
        		<i id="close" class="iconfont icon-close"></i></div>
    		</div>
		</div>
	</div>
</article>
<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('sidebar.php'); ?>
</div>
<?php $this->need('footer.php'); ?>

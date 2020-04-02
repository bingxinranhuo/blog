<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<nav class="breadcrumb container">
    <a title="首页" href="/">首页</a>
    <i class="iconfont icon-right"></i>
<?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>	
</nav>
<div id="content" class="content container clearfix" style="transform: none;">
<section id="mainbox" class="fl br mb">
<?php if ($this->have()): ?>
				<!-- 最新文章 -->
				<div class="new-post">
				<!--<p class="c-title"><span>最新文章</span></p>-->  
				<?php while($this->next()): ?>
				<article class="article-list br mb sb clearfix">
					<figure class="figure fl">
						<a class="thumbnail" href="<?php $this->permalink() ?>" title="<?php $this->title() ?>">		
							<img class="lazy img-cover br" data-original="<?php echo showThumb($this,null,true); ?>" alt="<?php $this->title() ?>" title="<?php $this->title() ?>">
						</a>
					</figure>
					<div class="content ">
						<h2 class="title ellipsis m-multi-ellipsis"><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title() ?></a></h2>
						<p class="intro hidden-sm">
							<?php $this->excerpt(200, '...'); ?>
						</p>
						<p class="data clearfix">
							<span class="hidden-sm-md-lg author fl"><i class="iconfont icon-user"></i><?php $this->author(); ?></span>
							<time class="time fl" datetime="<?php $this->date(); ?>" title="<?php $this->date(); ?>">
							<i class="iconfont icon-time"></i><?php $this->date(); ?></time>
							<span class="view fl"><i class="iconfont icon-view"></i><?php get_post_view($this); ?></span>
							<span class="hidden-sm-md-lg tag ellipsis fr">
								<i class="iconfont icon-tag"></i>
									<?php $this->tags('#', true, 'none'); ?>				
							</span>
						</p>
					</div>
					
					
				</article> 
				<?php endwhile; ?> 		
				</div> 
				
        <?php else: ?>
           <?php _e('没有找到内容'); ?>
        <?php endif; ?>
				<div class="pagination">
					<?php $this->pageNav('上一页', '下一页', 2, '...', array('wrapTag' => 'ul', 'wrapClass' => 'page-navigator', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev-page', 'nextClass' => 'next-page')); ?>
				</div>			
</section> 

<?php $this->need('sidebar.php'); ?>

</div> 
	<?php $this->need('footer.php'); ?>

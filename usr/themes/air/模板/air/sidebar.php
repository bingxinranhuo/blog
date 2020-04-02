<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<aside id="sidebar" class="hidden-sm-md-lg fr" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 998.313px;">
<section id="aside_about" class="widget widget_aside_about sb br mb">
    <img class="bg" src="<?php $this->options->beijing(); ?>">
    <div class="avatar"><img class="img" src="<?php $this->options->touxiang(); ?>" alt="<?php $this->options->mingcheng(); ?>"></div>
    <div class="wrap pd">
            <p class="title"><?php $this->options->mingcheng(); ?></p>
            <p class="info"><?php $this->options->jieshao(); ?></p>
        	<ul class="ul clearfix">
			<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
        		<li class="li fl"><span class="num"><?php $stat->publishedPostsNum() ?></span><small>篇文章</small></li>
        		<i class="line iconfont icon-line"></i>
        		<li class="li fl"><span class="num"><?php $stat->publishedCommentsNum() ?></span><small>评论数</small></li>
        </ul>
    </div>
</section>
		    		    
<section id="aside_hot" class="widget widget_aside_hot sb br mb">
    <p class="c-title mb"><span class="name">热门文章</span></p>
    <ul class="widget-content aside_hot">
		<?php echo getRandomPosts('10'); ?>
	</ul>
</section>
<section id="aside_hot_comment" class="widget widget_aside_hot_comment sb br mb">
    <p class="c-title mb"><span class="name">最新文章</span></p>
    <ul class="widget-content aside_hot_comment">
	   <?php
			$this->widget('Widget_Contents_Post_Recent','pageSize=10')->to($recent);
			if($recent->have()):
			while($recent->next()):
		?>

	<li class="list clearfix">
		<a href="<?php $recent->permalink();?>" title="<?php $recent->title();?>">
			<span class="img-wrap">
				<img data-original="<?php echo GetThumFromContent($recent); ?>" alt="<?php $recent->title();?>" class="lazy img-cover br random-img">
			</span>
			<div class="new-text">
				<p class="title"><?php $recent->title();?></p>
				<div class="info">
					<span class="time"><i class="iconfont icon-time"></i><?php $recent->date(); ?></span>
					<span class="comment"><i class="iconfont icon-comment"></i><?php get_post_view($recent); ?></span>
				</div>
			</div>
		</a>
	</li>
	
<?php endwhile; endif;?>
	</ul>
</section>
<?php if ($this->is('index')): ?>
<section id="aside_ad" class="widget widget_aside_ad sb br mb">
    <div class="widget-content aside_ad">
		<?php $this->options->ggimg(); ?>
	</div>
</section>

<section id="divTags" class="widget widget_tags sb br mb">
	<p class="c-title mb"><span class="name">标签列表</span></p>
	<ul class="widget-content divTags">
	<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=count&ignoreZeroCount=true&desc=true&limit=45')->to($tags); ?>
	<?php if($tags->have()): ?>
		<?php while ($tags->next()): ?>
			<li><a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?><span class="tag-count"> (<?php $tags->count(); ?>)</span></a></li>
		<?php endwhile; ?>
	<?php endif; ?>
	</ul>
</section>

<section id="divComments" class="widget widget_comments sb br mb">
    <p class="c-title mb"><span class="name">最新留言</span></p>
    <ul class="widget-content divComments">
	
	<?php $this->widget('Widget_Comments_Recent','pageSize=6')->to($comments); ?>
  	    <?php while($comments->next()): ?>
	
     

		<li class="list clearfix">
			<span class="avatar fl"><?php $comments->gravatar(40); ?></span>
			<div class="title">
				<a class="a ellipsis" href="<?php $comments->permalink(); ?>" title="查阅评论详情"><?php $comments->excerpt(16, '...'); ?></a>
				<div class="info">
					<span class="author">
						<i class="iconfont icon-user"></i><?php $comments->author(false); ?> 
					</span>
					<span class="time"><?php $comments->date('h:i:s'); ?></span>
				</div>
			</div>
		</li>
	<?php endwhile; ?>
	</ul>
</section>
<?php endif; ?>		    
</div>
</aside>
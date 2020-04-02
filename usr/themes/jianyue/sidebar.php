<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="tpt-mr-3">
<div class="tpt-right">

<?php if (!empty($this->options->sidebarBlock) && in_array('BoZhuiZL', $this->options->sidebarBlock)): ?>
<section id="aside_about" class="tpt-sidebar cl cl">
    <img class="bg" src="<?php $this->options->ZiLiaoBJ(); ?>"/>
    <div class="avatar"><img class="img" src="<?php $this->options->BoZhuTX(); ?>" alt="<?php $this->options->BoZhuMC(); ?>"/></div>
    <div class="tpt-a cl wrap pd">
        <p class="title"><?php $this->options->BoZhuMC(); ?> <span class="layui-badge layui-bg-orange">博主</span></p>
        <p class="info"><?php $this->options->BoZhuJS(); ?></p>
<div class="support-author mt">
<a href="https://76wp.cn/ampindex"><i class="layui-icon layui-icon-template-1" style="font-size: 20px; color: #FFB800;"></i></a> 
<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php $this->options->ZhanQq(); ?>&"><i class="layui-icon layui-icon-login-qq" style="font-size: 20px; color: #FFB800;"></i></a> 
<a href="https://weibo.com/<?php $this->options->WeiBo(); ?>"><i class="layui-icon layui-icon-login-weibo" style="font-size: 20px; color: #FFB800;"></i></a> 
<a href="mailto:<?php $this->options->GuanLiYX(); ?>"><i class="layui-icon layui-icon-notice" style="font-size: 20px; color: #FFB800;"></i></a> 
</div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
<div class="tpt-sidebar cl">
<h3 class="tpt-h3"><i class="layui-icon"></i><?php _e('分类中心'); ?></h3>
<ul class="tpt-a cl">
<?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
</ul>
</div>
<?php endif; ?>

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
<div class="tpt-sidebar cl">
<h3 class="tpt-h3"><i class="layui-icon layui-icon-log" style="font-size: 20px;"></i><?php _e('按月归档'); ?></h3>
<ul class="tpt-d cl">
	<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
</ul>
</div>
<?php endif; ?>

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowBiaoQian', $this->options->sidebarBlock)): ?>
<div class="tpt-sidebar cl">
<h3 class="tpt-h3"><i class="layui-icon layui-icon-note" style="font-size: 20px;"></i><?php _e('标签中心'); ?></h3>
<ul class="tpt-a cl">
<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=count&ignoreZeroCount=true&desc=true&limit=45')->to($tags); ?>
	<?php if($tags->have()): ?>
		<?php while ($tags->next()): ?>
		<li><a href="<?php $tags->permalink(); ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a></li>
		<?php endwhile; ?>
	<?php endif; ?>
</ul>
</div>
<?php endif; ?>

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
<div class="tpt-sidebar cl">
<h3 class="tpt-h3"><i class="layui-icon layui-icon-fire" style="font-size: 20px;"></i><?php _e('热门文章'); ?></h3>
<ul class="tpt-b cl">
<?php getRandomPosts(10);?>		
</ul>
</div>
<?php endif; ?>

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowTuiJian', $this->options->sidebarBlock)): ?>
<?php if ($this->options->YouCeCid != ''): ?>
		<div class="tpt-sidebar cl">
		<h3 class="tpt-h3"><i class="layui-icon layui-icon-rate" style="font-size: 20px;"></i>推荐文章</h3>
			<ul class="tpt-c cl">
				<?php $this->widget('Widget_Archive@index_youce', 'pageSize=10&type=category', 'mid='.$this->options->YouCeCid)->to($YouCeCid); ?>
				<?php while($YouCeCid->next()): ?>
					<li>
						<div class="tpt-img4"><a href="<?php $YouCeCid->permalink(); ?>"><img src="<?php echo GetThumFromContent($YouCeCid); ?>" alt="<?php $YouCeCid->title(); ?>"></a></div>
						<p><a href="<?php $YouCeCid->permalink(); ?>"><i></i><?php $YouCeCid->title(); ?></a></p>
						<p style="margin-top: 5px;"><span>总浏览数：<?php get_post_view($YouCeCid); ?><span><span class="y"><a href="<?php $YouCeCid->permalink(); ?>">立即查看</a><span></span></span></span></span></p>
					</li>
				<?php endwhile; ?>			
				
			</ul>
		</div>		
<?php endif; ?>
<?php endif; ?>

<?php if (!empty($this->options->sidebarBlock) && in_array('YouLian', $this->options->sidebarBlock)): ?>
<div class="tpt-sidebar cl">
<h3 class="tpt-h3"><i class="layui-icon layui-icon-link" style="font-size: 20px;"></i><?php _e('合作网站'); ?></h3>
<ul class="tpt-d cl">
<?php $mypattern1 = "<li><a href=\"{url}\" target=\"_blank\">{name}</a></li>";
     Links_Plugin::output($mypattern1, 0, "ten");?>
</ul>
</div>
<?php endif; ?>
</div>
</div>
<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="tpt-ml-7">
<div class="tpt-left">


<div class="tpt-list cl" style="margin-bottom: 20px;">
<h3 class="tpt-h3"><i class="layui-icon"></i>
	<?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
</h3>
	<ul>
	<?php if ($this->have()): ?>
		<?php while($this->next()): ?>
			<li>
			<h2><a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></h2>
			<div class="tpt-img">
			<a href="<?php $this->permalink(); ?>"><img class="tpt-img-a" src="<?php echo GetThumFromContent($this); ?>">
			<div class="tpt-img-b tpt-img-a">
			<div class="tpt-img-c"></div>
			<div class="tpt-img-d"><i class="layui-icon"></i></div>
			</div>
			</a>
			</div>
			<p><?php echo extractHtmlData($this->content,100); ?></p>
			<div class="tpt-s cl zimuhh">
			<span class="p tpt-none767"><i class="layui-icon"></i>
			<?php $this->tags('', true, 'none'); ?>
			<span class="y mt">
			<span class="p"><i class="layui-icon layui-icon-fire"></i><?php get_post_view($this); ?></span>
			<span class="p"><i class="layui-icon"></i><?php $this->date(); ?></span>
			</span>
			</div>
			</li>
		<?php endwhile; ?>
	<?php else: ?>
<div class='support-author'>	
        <?php _e('没有找到内容'); ?>
</div>
    <?php endif; ?>  	
	</ul>
<div class="pages cl"></div>
</div>

<style type="text/css">
.tpt-img{position:relative;overflow:hidden;width:100%;height:200px}
.tpt-img img{z-index:0;float:left;height:100%;width:100%}
.tpt-img:hover img{opacity:1;transform:scale(1.2,1.2);-webkit-transform:scale(1.2,1.2);-moz-transform:scale(1.2,1.2);-ms-transform:scale(1.2,1.2);-o-transform:scale(1.2,1.2)}
.tpt-img-a{-webkit-transition:all .40s ease-in-out;-moz-transition:all .40s ease-in-out;-o-transition:all .40s ease-in-out;-ms-transition:all .40s ease-in-out;transition:all .40s ease-in-out}
.tpt-img-b{opacity:0;cursor:pointer;position:absolute;height:100%;width:100%;}
.tpt-img:hover .tpt-img-b{opacity:1;}
.tpt-img-c{z-index:1;background: rgba(36, 60, 189, 0.68);position:absolute;height:100%;width:100%}
.tpt-img-d{z-index:2;position:absolute;line-height: 200px;text-align: center;height:100%;width:100%}
.tpt-img-d i{font-size: 48px;color:#fff;}
@media only screen and (max-width:767px){
.tpt-img {height: 100px;}
.tpt-img-d {line-height: 100px;}
}
</style>

<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

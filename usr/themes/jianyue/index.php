<?php
/**
 * 这是一款真正的简约文章模板，只为更好的阅读。
 * 
 * @package JianYue
 * @author 寻梦xunm
 * @version 1.0
 * @link https://76wp.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="tpt-ml-7">
<div class="tpt-left">

<!--幻灯片-->
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowHuanDengPian', $this->options->sidebarBlock)): ?>
<?php if ($this->is('index')): ?>
<?php if ($this->options->HengPan != ''): ?>

<div class="layui-carousel" id="banner">
	<div carousel-item>
		<?php $this->widget('Widget_Archive@index_huan', 'pageSize='.$this->options->HuanDengPTS.'&type=category', 'mid='.$this->options->HengPan)->to($HengPan); ?>
		<?php while($HengPan->next()): ?>
		<div class="lark-carousel-item">
			<a target="_blank" href="<?php $HengPan->permalink(); ?>">
				<img src="<?php echo GetThumFromContent($HengPan); ?>" alt="<?php $HengPan->title(); ?>">
				<div class="name layui-elip"><span><?php $HengPan->title(); ?></span></div>
			</a>
		</div>	
		<?php endwhile; ?>			
	</div>
</div>

<?php endif; ?>		
<?php endif; ?>
<?php endif; ?>

<br>
<?php if ($this->is('index')): ?>
<?php if ($this->options->ZhiDing != ''): ?>
<div class="tpt-list cl" style="margin-bottom: 20px;">
<h3 class="tpt-h3"><i class="layui-icon layui-icon-speaker" style="font-size: 20px;"></i>顶置文章</h3>
	<ul>
	<?php $this->widget('Widget_Archive@index_zhiding', 'pageSize='.$this->options->ZhiDingTS.'&type=category', 'mid='.$this->options->ZhiDing)->to($ZhiDing); ?>
	<?php while($ZhiDing->next()): ?>
		<li>
          <h2><a href="<?php $ZhiDing->permalink(); ?>"><?php $ZhiDing->title(); ?></a></h2>
		<div class="tpt-img">
		<a href="<?php $ZhiDing->permalink(); ?>"><img class="tpt-img-a" src="<?php echo GetThumFromContent($ZhiDing); ?>">
		<div class="tpt-img-b tpt-img-a">
		<div class="tpt-img-c"></div>
		<div class="tpt-img-d"><i class="layui-icon"></i></div>
		</div>
		</a>
		</div>
		<p><?php echo extractHtmlData($ZhiDing->content,100); ?></p>
		<div class="tpt-s cl zimuhh">
		<span class="p tpt-none767"><i class="layui-icon"></i>
		<?php $ZhiDing->tags('', true, 'none'); ?>
		<span class="y mt">
        <span class="p"><i class="layui-icon layui-icon-username"></i><?php $this->author(); ?></span>
		<span class="p"><i class="layui-icon layui-icon-fire"></i><?php get_post_view($ZhiDing); ?></span>
		<span class="p"><i class="layui-icon"></i><?php $ZhiDing->date(); ?></span>
		</span>
		</div>
		</li>
	<?php endwhile; ?>	
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
<?php endif; ?>		
<?php endif; ?>
<div class="tpt-list cl" style="margin-bottom: 20px;">
<h3 class="tpt-h3"><i class="layui-icon"></i>最新文章</h3>
	<ul>
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
        <span class="p"><i class="layui-icon layui-icon-username"></i><?php $this->author(); ?></span>
		<span class="p"><i class="layui-icon layui-icon-fire"></i><?php get_post_view($this); ?></span>
		<span class="p"><i class="layui-icon"></i><?php $this->date(); ?></span>
		</span>
		</div>
		</li>
	<?php endwhile; ?>	
	</ul>
<div class="pages cl">
</div>
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

<div class='pagebar'>
<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

<?php if (!empty($this->options->sidebarBlock) && in_array('YouLian', $this->options->sidebarBlock)): ?>
<div class="tpt-sidebar cl cl layui-hide-md mt">
<h3 class="tpt-h3"><i class="layui-icon"></i><?php _e('合作网站'); ?></h3>
<ul class="tpt-d cl">
<?php $mypattern1 = "<li><a href=\"{url}\" target=\"_blank\">{name}</a></li>";
     Links_Plugin::output($mypattern1, 0, "ten");?>
</ul>
</div>
<?php endif; ?>

</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

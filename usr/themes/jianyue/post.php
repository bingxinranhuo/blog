<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="tpt-ml-7">
<div class="tpt-left">
<div class="bdsharebuttonbox tpt-none1023 bdshare-button-style0-24" data-bd-bind="1552360592155">
<a href="https://weibo.com/<?php $this->options->WeiBo(); ?>" data-cmd="tsina" title="分享到新浪微博"><i class="support-author layui-icon layui-icon-login-weibo" style="font-size: 40px; color: #f63756;"></i></a>

<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php $this->options->ZhanQq(); ?>&" style="border-bottom: 0px" data-cmd="qzone" title="分享到QQ空间"><i class="support-author layui-icon layui-icon-login-qq" style="font-size: 40px; color: #f63756;"></i></a>
</div>
<script>
	window._bd_share_config = {
		"common": {
			"bdSnsKey": {},
			"bdText": "",
			"bdMini": "2",
			"bdMiniList": false,
			"bdPic": "",
			"bdStyle": "0",
			"bdSize": "24"
		},
		"share": {},
		"selectShare": {
			"bdContainerClass": null,
			"bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"]
		}
	};
	with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src =
		'/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
</script>
<div class="tpt-content">
<div class="tpt-title">
<h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
<div class="tpt-s">
<span class="layui-badge layui-bg-orange"><?php $this->category(','); ?></span>
<a href="<?php $this->author->permalink(); ?>"><span class="layui-badge layui-bg-blue"><?php $this->author(); ?></span></a>
<?php
if($this->fields->biaosi =='1'){
	echo '<span class="layui-badge">原创</span>';
}else if($this->fields->biaosi =='2'){
	echo '<span class="layui-badge">转载</span>';
}else{
}
?>
<span class="y layui-elip">
<span class="p"><i class="layui-icon layui-icon-fire"></i><?php get_post_view($this); ?></span>
<span class="p"><i class="layui-icon"></i><?php $this->date('F j, Y'); ?></span>
</span>
</div>
</div>
<div class="wangEditor-container cl">
<div class="wangEditor-txt zimuhh">
	<?php $this->content(); ?>

<div class="art-copyright">
<div><strong cclass="addr">本文标题：</strong><?php $this->title() ?></div>
<div><strong cclass="addr">本文链接：</strong><?php $this->permalink() ?></div>
<div><strong cclass="addr">授权说明：</strong>除特别说明外，本文由 <span style="color: #FF5722;"><?php
	if($this->fields->banquan){
		 echo $this->fields->banquan();
	}else{
		echo '未知作者';
	}
?></span> 原创编译并刊载发布。</div>
<div><span class="copyright">版权声明：</span><?php $this->options->BanQua();?></div>
</div>

</div>
</div>
<div class="tpt-shop cl mt">
<div class="tpt-s">
<span class="p zimuhh">
<i class="layui-icon"></i>
<?php $this->tags('', true, 'none'); ?>
</span>

<div class="support-author">
    <a href="javascript:;" onclick="good()" class="layui-btn layui-btn-danger"><i class="layui-icon layui-icon-rmb"></i>  &nbsp;赞赏</a> <span class="layui-btn layui-btn-danger"><?php Like_Plugin::theLike(); ?></span>
</div>
<hr>
<span class="y layui-elip">
最后修改于:<?php echo date('Y-m-d H:i',$this->modified); ?>  
</span>  
</div>
</div>
</div>
<br />
<div class="tpt-content">
<p><i class="layui-icon layui-icon-prev" style="font-size: 10px;"></i> 上一篇：<?php $this->theNext('%s','<a href="#">抱歉，目前最新文章已经显示完毕</a>'); ?></p>
<hr />
<p><i class="layui-icon layui-icon-next" style="font-size: 10px;"></i> 下一篇：<?php $this->thePrev('%s','<a href="#">恭喜，你已经阅读完本站所有文章</a>'); ?></p>
</div>
<br />
<!--评论区-->
<?php if (!empty($this->options->sidebarBlock) && in_array('XianShi', $this->options->sidebarBlock)): ?>
<?php $this->need('comments.php'); ?>
<br />
<?php endif; ?>
<div class="tpt-content">
	<div class="tpt-sidebar cl">
		<h3 class="tpt-h3"><i class="layui-icon"></i>推荐文章</h3>
			<ul class="tpt-c cl">
				<?php $this->related(3)->to($relatedPosts); ?>
					 <?php while ($relatedPosts->next()): ?>
						<li>
							<div class="tpt-img4"><a href="<?php $relatedPosts->permalink(); ?>"><img src="<?php echo GetThumFromContent($relatedPosts); ?>" alt="<?php $relatedPosts->title(); ?>"></a></div>
							<p><a href="<?php $relatedPosts->permalink(); ?>"><i></i><?php $relatedPosts->title(); ?></a></p>
							<p style="margin-top: 5px;"><span>总浏览数：<?php get_post_view($relatedPosts); ?><span><span class="y"><a href="<?php $relatedPosts->permalink(); ?>">立即查看</a><span></span></span></span></span></p>
						</li>
					<?php endwhile; ?>			
					
			</ul>
	</div>
</div>
		
</div>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<nav class="breadcrumb container">
    <a title="首页" href="/">首页</a>
    <i class="iconfont icon-right"></i>
	<?php $this->category(','); ?>
	<i class="iconfont icon-right"></i>文章正文                
</nav>

<div id="content" class="content container clearfix" style="transform: none;">
<div id="mainbox" class="article-box fl mb">
		        
<article class="art-main sb br mb">
	<div class="art-head mb">
		<h1 class="art-title"><?php $this->title() ?></h1>
		<div class="head-info">
		    <span class="author"><i class="iconfont icon-user"></i><?php $this->author(); ?></span>
			<time class="time" datetime="<?php $this->date(); ?>" title="<?php $this->date(); ?>">
			<i class="iconfont icon-time"></i><?php $this->date(); ?></time>
			<span class="view"><i class="iconfont icon-view"></i><?php get_post_view($this); ?></span>
			<span class="comment"><i class="iconfont icon-comment"></i><?php $this->commentsNum(); ?></span>
		</div>
	</div>
    <!-- 广告位AD4  -->
                	
	<div class="art-content">
		<blockquote><p>
		特别声明：<?php $this->options->dbbanquan(); ?>
		</p></blockquote>
		<p><?php $this->content(); ?></p>    	
      		    
		<div class="items"><?php $this->tags('', true, 'none'); ?></div>

		<!--打赏-->
	    		<div class="reward-widget">
    		<div id="reward-btn" class="btn">赏</div>
    		<div id="popup">
        		<div id="reward-img" class="img-bg sb br transition"><img src="<?php $this->options->dashang(); ?>" alt="打赏二维码">
        		<i id="close" class="iconfont icon-close"></i></div>
    		</div>
		</div>
		     	
	    		<div class="art-copyright br mb">
			<div><strong cclass="addr">本文地址：</strong>
			<a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>" target="_blank"><?php $this->permalink() ?></a></div>
						<div><span class="from">文章来源：</span>
			<a href="
				<?php if($this->fields->banquanurl){
						 echo $this->fields->banquanurl();
					}else{
						echo '/';
					}
				?>" rel="nofollow" target="_blank">
			<?php if($this->fields->banquan){
						 echo $this->fields->banquan();
					}else{
						echo '网络转载';
					}
				?>
				</a></div>
						<div><span class="copyright">版权声明：</span><?php $this->options->dbbanquan(); ?></div>
		</div>
		
        <div class="social-widget mt clearfix">
            <!--点赞-->
                        <div class="thumbs-up-widget fl">
                <div id="suiranx_air_thumbs_id-103" onclick="suiranx_air_thumbs(&#39;103&#39;)" class="thumbs-btn suiranx_air_thumbs"><?php Like_Plugin::theLike(); ?></div>            </div>
                        <!--分享-->
            <div class="share-widget fr">
                <div class="bdsharebuttonbox bdshare-button-style0-32" data-bd-bind="1561427060655">
                    <a href="http://connect.qq.com/widget/shareqq/index.html?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>&pics=<?php GetThumFromContent($this); ?>" class="bds_sqq iconfont icon-qq-fill" data-cmd="sqq" title="分享到QQ好友"></a>
                    <a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>&site=<?php $this->options->title(); ?>/&pics=<?php GetThumFromContent($this); ?>" class="bds_qzone iconfont icon-qzone-fill" data-cmd="qzone" title="分享到QQ空间"></a>
                    <a href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>/&appkey=<?php $this->options->title(); ?>/&title=<?php $this->title() ?>&pic=<?php GetThumFromContent($this); ?>" class="bds_tsina iconfont icon-weibo-fill" data-cmd="tsina" title="分享到新浪微博"></a>
                    <!--<a href="#" class="bds_more" data-cmd="more"></a>-->
                </div>
    		</div>

			
    	</div>	
	</div>
</article>

<!-- 广告位AD5  -->
<div class="prev-next sb br mb clearfix">
	<p class="post-prev fl ellipsis">
				<span class="prev">上一篇</span><strong><?php $this->thePrev('%s','没有了'); ?></strong>
			</p>
	<p class="post-next fr ellipsis">
				<span class="next">下一篇</span><strong><?php $this->theNext('%s','没有了'); ?></strong>
			</p>
</div>


<!--相关文章优先选择同tag的文章，无tag则调用最新文章-->
<div class="related-art sb br mb">
	<p class="c-title"><span class="name">相关文章</span></p>
    <ul class="ul clearfix">
	<?php $this->related(3)->to($relatedPosts); ?>
		<?php while ($relatedPosts->next()): ?>
        <li class="related-item mt fl">
			<a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>">
				<span class="span">
					<img class="img br img-cover" src="<?php echo GetThumFromContent($relatedPosts); ?>" alt="<?php $relatedPosts->title(); ?>">
				</span>
				<p class="titile"><?php $relatedPosts->title(); ?></p>
			</a>
		</li>
		<?php endwhile; ?>
   </ul>
</div>

<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('sidebar.php'); ?>
</div>
<?php $this->need('footer.php'); ?>

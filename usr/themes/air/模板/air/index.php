<?php
/**
 * 响应式CMS、自媒体资讯博客主题 <hr>原创作者:<a href='https://air.gaofenyy.com'>随然</a> 最终所有权所有<br>移植作者:寻梦xunm<hr>申明:本套模板已经经过原创作者同意移植，但是禁止用于商业用途和售卖，二次美化版也禁止售卖和用于商业，希望遵守本条申明。
 * 
 * @package air主题
 * @author 寻梦xunm
 * @version 1.0
 * @link https://76wp.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<p class="index-breadcrumb"></p>
<div id="content" class="content container" style="transform: none;">
    <!-- 广告位AD1  -->
<div class="clearfix" style="transform: none;">
<div id="mainbox" class="fl">


<?php if ($this->is('index')): ?>
<?php if ($this->options->huandengmid != ''): ?>
<div class="swiper-container br">
    <ul class="swiper-wrapper ">
	
		<?php $this->widget('Widget_Archive@index_huan', 'pageSize='.$this->options->hdts.'&type=category', 'mid='.$this->options->huandengmid)->to($huandengmid); ?>
			<?php while($huandengmid->next()): ?>
         
                <li class="swiper-slide">
            <a class="link" href="<?php $huandengmid->permalink(); ?>" title="<?php $huandengmid->title(); ?>">
                <p class="p ellipsis"><?php $huandengmid->title(); ?></p>
                <img src="<?php echo GetThumFromContent($huandengmid); ?>" alt="<?php $huandengmid->title(); ?>" />
                <i class="mask"></i>
            </a>
        </li>
      <?php endwhile; ?>	      
                 
                 
    </ul>
    <p class="swiper-pagination"></p>
    <i class="hidden-sm-md-lg swiper-button-next iconfont icon-right"></i>
    <i class="hidden-sm-md-lg swiper-button-prev iconfont icon-left"></i>
</div>
<?php endif; ?>		
<?php endif; ?>



 
			<?php if ($this->is('index')): ?>
			<?php if ($this->options->gonggaomid != ''): ?>
 			    <!-- 推荐模块A  -->
				<div class="recommend-a sb br mb">
					<p class="c-title"><span>网站公告</span></p>
			        <div class="wrap clearfix"> 
					<?php $this->widget('Widget_Archive@index_gonggao', 'pageSize='.$this->options->ggts.'&type=category', 'mid='.$this->options->gonggaomid)->to($gonggaomid); ?>
					<?php while($gonggaomid->next()): ?>
                        <article class="item fl">
							<a class="thumbnail" href="<?php $gonggaomid->permalink(); ?>" title="<?php $gonggaomid->title(); ?>">		
                                <img class="lazy img-cover br" data-original="<?php echo showThumb($gonggaomid,null,true); ?>" alt="<?php $gonggaomid->title(); ?>" title="<?php $gonggaomid->title(); ?>">		
	
                             </a>
	                        
			                <h2 class="title multi-ellipsis"><a href="<?php $gonggaomid->permalink(); ?>" title="<?php $gonggaomid->title(); ?>"><?php $gonggaomid->title(); ?></a></h2>
			                <div class="num clearfix">
    			                <span class="view ellipsis fl"><i class="iconfont icon-view"></i><?php get_post_view($gonggaomid); ?></span>
    			                <span class="hidden-sm-md-lg comment ellipsis fl"><i class="iconfont icon-comment"></i><?php $this->commentsNum('0', '1', '%d'); ?></span>
    			               
    			                <time class=" time ellipsis fr" datetime="<?php $gonggaomid->date(); ?>" title="<?php $gonggaomid->date(); ?>">
    			                <?php $gonggaomid->date('m-d'); ?></time>
			                </div>
			            </article>
					<?php endwhile; ?>			        		
			    	</div>
				</div>
				
			<?php endif; ?>	
			
			<?php endif; ?>	
			
			<?php if ($this->is('index')): ?>
			<?php if ($this->options->tuijianmid != ''): ?>
				<!-- 推荐模块B  -->
				<div class="recommend-b sb br mb">
					<p class="c-title"><span>推荐文章</span></p>
			        <div class="wrap clearfix">
					<?php $this->widget('Widget_Archive@index_tuijian', 'pageSize='.$this->options->tjts.'&type=category', 'mid='.$this->options->tuijianmid)->to($tuijianmid); ?>
					<?php while($tuijianmid->next()): ?>
                        <article class="item fl">
						    <div class="clearfix">
    			                <div class="title-wrap clearfix">
        			                <span class="category transition ellipsis br fl">
        	                        <?php $tuijianmid->category(','); ?></span>
    			                    <h2 class="title ellipsis fl">
    			                        <a href="<?php $tuijianmid->permalink(); ?>" title="<?php $tuijianmid->title(); ?>"><?php $tuijianmid->title(); ?></a>
    			                    </h2>
    			                </div> 
    	                		<a class="thumbnail fl" href="<?php $tuijianmid->permalink(); ?>" title="<?php $tuijianmid->title(); ?>">		
                                    <img class="lazy img-cover br" data-original="<?php echo showThumb($tuijianmid,null,true); ?>" alt="<?php $tuijianmid->title(); ?>" title="<?php $tuijianmid->title(); ?>">
    	                        </a>
    	                        <div class="fr-wrap">
        	                		<p class="intro br clearfix">
										<?php $tuijianmid->excerpt(40, '...'); ?>
									</p>
                    		    </div>
                		    </div>
			            </article>	
		        	<?php endwhile; ?>		
			    	</div>
				</div>
				
			<?php endif; ?>	
			
			<?php endif; ?>	
 
 
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
				<div class="pagination">
					<?php $this->pageNav('上一页', '下一页', 2, '...', array('wrapTag' => 'ul', 'wrapClass' => 'page-navigator', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev-page', 'nextClass' => 'next-page')); ?>
				</div>			
				</div> 

</div> 

<?php $this->need('sidebar.php'); ?>

</div> 
 
<?php if ($this->is('index')): ?>
<?php if ($this->options->youzhimdi != ''): ?> 
<!-- 通栏文章 -->
<div class="full-post sb br mb">
										
		<p class="c-title mb">
			<span>优质文章</span>
			<a class="more" href="#" title="更多">
			<i class="iconfont icon-right"></i>
		</p>
		<div class="clearfix">
		
			<?php $this->widget('Widget_Archive@index_youzhi', 'pageSize='.$this->options->yzts.'&type=category', 'mid='.$this->options->youzhimdi)->to($youzhimdi); ?>
			<?php while($youzhimdi->next()): ?>	
			
			<!--首页通栏布局中,图文部分的模板-->
			<article class="img-list br mb fl jq-remove-mb">
				<div class="clearfix">
					<figure class="figure fl">
						<a class="thumbnail" href="<?php $youzhimdi->permalink(); ?>" title="<?php $youzhimdi->title(); ?>">		
							<img class="lazy img-cover br" data-original="<?php echo showThumb($youzhimdi,null,true); ?>" alt="<?php $youzhimdi->title(); ?>" title="<?php $youzhimdi->title(); ?>">
						</a>
					</figure>
					<div class="content">
						<h2 class="title ellipsis m-multi-ellipsis"><a href="<?php $youzhimdi->permalink(); ?>" title="<?php $youzhimdi->title(); ?>"><?php $youzhimdi->title(); ?></a></h2>
						<div class="intro hidden-sm">
							<?php $youzhimdi->excerpt(50, '...'); ?>
						</div>
						<p class="info clearfix">
							<time class="time fl" datetime="<?php $youzhimdi->date(); ?>" title="<?php $youzhimdi->date(); ?>">
							<i class="iconfont icon-time"></i><?php $youzhimdi->date(); ?></time>
							<span class="hidden-sm-md-lg view fl"><i class="iconfont icon-view"></i><?php get_post_view($youzhimdi); ?></span>
							<a class="read-more transition fr" href="<?php $youzhimdi->permalink(); ?>" title="阅读全文">阅读全文</a>
						</p>
					</div>
				</div>
			</article>        						            
		<?php endwhile; ?>
	</div>	
</div>	 

<?php endif; ?>			
<?php endif; ?>	 
 
 
 		<!-- 友情链接 -->
		<div class="flink container sb br mb">
		    <p class="c-title mb">友情链接<span class="rule">申请要求：PR≥3，IP≥1000，内容属同类网站，无作弊现象</span></p>
		    <ul id="flink" class="f-list clearfix">
			 <?php 
				$mypattern1 = "<li><a href=\"{url}\" target=\"_blank\" class=\"iconfont icon-link\">{name}</a></li>";
				Links_Plugin::output($mypattern1, 0, "ten");
			 ?>
			</ul>
		</div>
		
</div>
 

<?php $this->need('footer.php'); ?>

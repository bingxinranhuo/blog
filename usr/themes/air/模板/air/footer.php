<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	<footer class="footer">
		<div class="main container">
				<div class="f-about fl">
					<p class="title pb1">关于本站</p>
					<div class="intro"><?php $this->options->description(); ?></div>
					<small><span> &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></span><span class="icp"><a target="_blank" rel="nofollow" href="http://www.miibeian.gov.cn/"><?php $this->options->beianhao(); ?></a></span></small>
				</div>
				
				<div class="f-contact fl">
					<p class="title pb1">联系我们</p>
					<div>
						<?php $this->options->lianxi(); ?>
					</div>
				</div>
				
				<div class="f-qr fr">
					<p class="title pb1">关注我们</p>
					<div><img class="img br" alt="关注我们" src="<?php $this->options->guanyu(); ?>"></div>
				</div>
				<div class="clear"></div>
		</div>
				
			<div id="toolbar" class="toolbar ">
							<a class="hidden-sm-md-lg btn qq sb br" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php $this->options->qqh(); ?>&amp;site=qq&amp;menu=yes&amp;from=message&amp;isappinstalled=0" target="_blank" rel="nofollow">
						<i class="iconfont icon-qq"></i>
						<span class="qqnum sb br"></span>
					</a>
						 
					<div id="qr" class="hidden-sm-md-lg btn sb br">
						<i class="iconfont icon-qr"></i>
						<img id="qr-img" class="br sb" src="<?php $this->options->guanyu(); ?>" alt="二维码">
					</div>
						 
					<div id="totop" class="btn hidden sb br" style="display: none;">
					<i class="iconfont icon-top"></i>
					</div>
			</div>
    </footer>
<!--黑色透明遮罩-->
<div id="mask-hidden" class="mask-hidden transition"></div>    
<script src="<?php $this->options->themeUrl('air/js/common.js'); ?>" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('air/js/lazyload.min.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
    $("img.lazy").lazyload({
        threshold : 200, // 设置阀值
        effect : "fadeIn" // 设置图片渐入特效
    });
});	
</script>
          
<script>
    var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    centeredSlides: true,
    autoplay: 3500,
    slidesPerView: 1,
    paginationClickable: true,
    autoplayDisableOnInteraction: false,
    spaceBetween: 0,
    loop: true
});
</script> 
<?php $this->footer(); ?>
</body>
</html>

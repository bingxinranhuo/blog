<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div>
</div>
<div class="tpt-footer cl">
	<div class="tpt-wp cl">
		<p>
			Copyright© <?php echo date('Y'); ?>
			<span class="pipe">|</span>
			<a class="banquan" target="_blank" href="<?php $this->options->siteUrl(); ?>">Powered by <?php $this->options->title(); ?></a>
			<!--<span class="tpt-none767">-->
			<span class="pipe">|</span>
			<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php $this->options->BeiAn(); ?></a>
			<span class="pipe">|</span>
			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php $this->options->ZhanQq(); ?>&amp;site=qq&amp;menu=yes" target="_blank">QQ:<?php $this->options->ZhanQq(); ?></a>
          <span class="pipe">|</span>
          <?php $this->options->TongJi(); ?>
			<!--</span>-->
		</p>
    </div>
</div>
<div id="tpt-search" class="cl" style="display: none;">
<form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
<input placeholder="请输入关键词" type="text" name="s" value="" autocomplete="off">
<button type="submit"><i class="layui-icon"></i></button>
</form>
<div class="cl">
<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=count&ignoreZeroCount=true&desc=true&limit=10')->to($tags); ?>
	<?php if($tags->have()): ?>
		<?php while ($tags->next()): ?>
		<a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>
<script src="<?php $this->options->themeUrl('layui/jquery.lazyload.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('layui/layui.js'); ?>"></script>

<script>
//全站图片懒加载
var jQuery=$.noConflict();
jQuery("img").lazyload({
    placeholder:"https://img.76wp.cn/upload/b790f2d6b32250167846704070b7bd46.gif",
	effect : "fadeIn",
	failurelimit : 10
});
</script>

<script>
/*		
//图片懒加载
layui.use('flow', function(){
  var flow = layui.flow;
  //按屏加载图片
  flow.lazyimg({
  });
});
*/

//阅读页面打赏
function good(){
layer.tab({
  area: ['350px', '443px'], //宽高
  tab: [{
    title: '微信', 
    content: '<img src="<?php $this->options->WeiXin(); ?>">'
  }, {
    title: '支付宝', 
    content: '<img src="<?php $this->options->ZhiFuBao(); ?>">'
  }]
});        
}

layui.use('carousel', function(){
  var carousel = layui.carousel;
  carousel.render({
    elem: '#test1',
    width: '100%',
	height: '380px',
    arrow: 'always'
  });
});

//右下边悬浮按钮
//手机端搜索框提示
layui.use(['util', 'layer'], function(){
var util = layui.util;
var layer = layui.layer;
util.fixbar({
bgcolor:'#ffd600',
bar1: '&#xe615;'
,click: function(type){
if(type === 'bar1'){
	layer.open({
	type: 1,
	title: '',
	shadeClose: true,
	area : ['90%' , '350px'],
	content: $('#tpt-search')
	});
}
}
});
});

//电脑端搜索框提示
layui.use('layer', function(){
var layer = layui.layer;
$('.tpt-search').on('click', function(){
layer.open({
type: 1,
title: '',
shadeClose: true,
area : ['600px' , '350px'],
content: $('#tpt-search')
});
});
});

//幻灯片
layui.use(['carousel', 'jquery'], function () {
        var carousel = layui.carousel;
        var $ = layui.jquery;

        var width = $(window).width();  
        var height = "260px";
        if (width <= 768) {
            height = (width / 2) + "px";
        }
        
        carousel.render({
            elem: '#banner'
            , width: "100%"
            , height: height
            , interval: 5000
        });
});
</script>
<?php $this->footer(); ?>
</body>
</html>
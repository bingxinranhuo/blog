<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<style type="text/css">
*{padding:0;margin:0}
body{font: 14px Helvetica Neue,Helvetica,PingFang SC,Tahoma,Arial,sans-serif}
.tpt-cont{padding-top:150px;width:1080px;margin:0 auto;overflow:hidden}
.tpt-cont h2{font-size:30px;font-weight:400;color:#333;padding-bottom:10px}
.tpt-cont h3{font-size:18px;font-weight:400;color:#333;padding-bottom:58px}
.tpt-img{float:left;margin: 20px 100px 0 50px}
.tpt-img img{width: 480px}
.tpt-msg{float:left;margin-top:75px}
.tpt-btn{text-decoration:none;display:block;width:265px;height:55px;background:#47b794;font-size:20px;color:#FFF;text-align:center;line-height:55px}
</style>
<div class="tpt-img"><img src="<?php $this->options->themeUrl('layui/images/404.svg'); ?>"></div>
<div class="tpt-msg">
<h2>哎呀！找不到页面了！</h2>
<h3>不要伤心，可能是网址错了呢，重新核对一下吧。</h3>
<a class="tpt-btn" href="/">返回首页</a>
</div>
<?php $this->need('footer.php'); ?>

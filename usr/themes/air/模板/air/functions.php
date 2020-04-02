<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
$db = Typecho_Db::get();
$sjdq=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:air'));
$ysj = $sjdq['value'];
if(isset($_POST['type']))
{ 
if($_POST["type"]=="备份模板数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:Yodubf'))){
$update = $db->update('table.options')->rows(array('value'=>$ysj))->where('name = ?', 'theme:Yodubf');
$updateRows= $db->query($update);
echo '<div class="tongzhi">备份已更新，请等待自动刷新！如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}else{
if($ysj){
     $insert = $db->insert('table.options')
    ->rows(array('name' => 'theme:Yodubf','user' => '0','value' => $ysj));
     $insertId = $db->query($insert);
echo '<div class="tongzhi">备份完成，请等待自动刷新！如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}
}
        }
if($_POST["type"]=="还原模板数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:Yodubf'))){
$sjdub=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:Yodubf'));
$bsj = $sjdub['value'];
$update = $db->update('table.options')->rows(array('value'=>$bsj))->where('name = ?', 'theme:air');
$updateRows= $db->query($update);
echo '<div class="tongzhi">检测到模板备份数据，恢复完成，请等待自动刷新！如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2000);</script>
<?php
}else{
echo '<div class="tongzhi">没有模板备份数据，恢复不了哦！</div>';
}
}
if($_POST["type"]=="删除备份数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:Yodubf'))){
$delete = $db->delete('table.options')->where ('name = ?', 'theme:Yodubf');
$deletedRows = $db->query($delete);
echo '<div class="tongzhi">删除成功，请等待自动刷新，如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}else{
echo '<div class="tongzhi">不用删了！备份不存在！！！</div>';
}
}
    }
echo '<form class="protected" action="?yodubf" method="post">
<input type="submit" name="type" class="btn btn-s" value="备份模板数据" />&nbsp;&nbsp;<input type="submit" name="type" class="btn btn-s" value="还原模板数据" />&nbsp;&nbsp;<input type="submit" name="type" class="btn btn-s" value="删除备份数据" /></form>';

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
	
	$touxiang = new Typecho_Widget_Helper_Form_Element_Text('touxiang', NULL, NULL, _t('博主头像'), _t('在这里填入一个图片 URL 地址'));
    $form->addInput($touxiang);
    
	$beijing = new Typecho_Widget_Helper_Form_Element_Text('beijing', NULL, NULL, _t('头像背景'), _t('在这里填入一个图片 URL 地址'));
    $form->addInput($beijing);	
	
	$mingcheng = new Typecho_Widget_Helper_Form_Element_Text('mingcheng', NULL, '寻梦xunm', _t('博主名称'), _t('请在这里输入博主名称'));
    $form->addInput($mingcheng);

	$jieshao = new Typecho_Widget_Helper_Form_Element_Text('jieshao', NULL, '追寻最初的心，坚持走下去。', _t('博主介绍'), _t('请在这里输入博主介绍'));
    $form->addInput($jieshao);

	$huandengmid = new Typecho_Widget_Helper_Form_Element_Text('huandengmid', NULL, NULL, _t('幻灯MID'), _t('这里是首页幻灯片显示分类MID'));
    $form->addInput($huandengmid);	
	
	$gonggaomid = new Typecho_Widget_Helper_Form_Element_Text('gonggaomid', NULL, NULL, _t('公告MID'), _t('这里是首页公告显示分类MID'));
    $form->addInput($gonggaomid);

	$tuijianmid = new Typecho_Widget_Helper_Form_Element_Text('tuijianmid', NULL, NULL, _t('推荐MID'), _t('这里是首页推荐显示分类MID'));
    $form->addInput($tuijianmid);
	
	$youzhimdi = new Typecho_Widget_Helper_Form_Element_Text('youzhimdi', NULL, NULL, _t('优质MID'), _t('这里是首页优质显示分类MID'));
    $form->addInput($youzhimdi);
	
	$beianhao = new Typecho_Widget_Helper_Form_Element_Text('beianhao', NULL, NULL, _t('备案号'), _t('请直接在这里填写你的备案号'));
    $form->addInput($beianhao);
	
	$lianxi = new Typecho_Widget_Helper_Form_Element_Textarea('lianxi', NULL, NULL, _t('联系我们'), _t('这里可以使用HTML标签进行编辑：格式如(&lt;p&gt;合作或咨询可通过如下方式：&lt;/p&gt;
&lt;p&gt;&lt;i class="iconfont icon-qq-fill"&gt;&lt;/i&gt;QQ：1340326824&lt;/p&gt;
&lt;p&gt;&lt;i class="iconfont icon-weibo-fill"&gt;&lt;/i&gt;微博：weibo.com/76wp&lt;/p&gt;
&lt;p&gt;&lt;i class="iconfont icon-wechat-fill"&gt;&lt;/i&gt;微信：shiihk&lt;/p&gt;)'));
    $form->addInput($lianxi);
	
	$guanyu = new Typecho_Widget_Helper_Form_Element_Text('guanyu', NULL, NULL, _t('关于二维码'), _t('请在这里直接填写url图片地址即可'));
    $form->addInput($guanyu);
	
	$dashang = new Typecho_Widget_Helper_Form_Element_Text('dashang', NULL, NULL, _t('打赏二维码'), _t('请在这里直接填写url图片地址即可'));
    $form->addInput($dashang);
	
	$qqh = new Typecho_Widget_Helper_Form_Element_Text('qqh', NULL, NULL, _t('QQ号'), _t('请在这里直接填写qq号'));
    $form->addInput($qqh);
	
	$hdts = new Typecho_Widget_Helper_Form_Element_Text('hdts', NULL, '3', _t('幻灯条数'), _t('这里是幻灯片条数控制，请直接填写数字即可'));
    $form->addInput($hdts);
	
	$ggts = new Typecho_Widget_Helper_Form_Element_Text('ggts', NULL, '2', _t('公告条数'), _t('这里是公告条数控制，请直接填写数字即可'));
    $form->addInput($ggts);
	
	$tjts = new Typecho_Widget_Helper_Form_Element_Text('tjts', NULL, '4', _t('推荐条数'), _t('这里是推荐条数控制，请直接填写数字即可'));
	$form->addInput($tjts);
	
	$yzts = new Typecho_Widget_Helper_Form_Element_Text('yzts', NULL, '6', _t('优质条数'), _t('这里是优质条数控制，请直接填写数字即可'));
    $form->addInput($yzts);
	
	$ggimg = new Typecho_Widget_Helper_Form_Element_Text('ggimg', NULL, '6', _t('广告图片'), _t('请在这里填写指定的html代码：&lt;a href="/" rel="nofollow" target="_blank"&gt;
		&lt;img class="br" src="/" alt=""&gt;&lt;/a&gt;'));
    $form->addInput($ggimg);
	
	$dbbanquan = new Typecho_Widget_Helper_Form_Element_Text('dbbanquan', NULL, '文章多为网络转载，资源使用一般不提供任何帮助，特殊资源除外，如有侵权请联系！', _t('文章版权'), _t('这里的文章版权是文章显示的文章版权与来源说明:如(文章多为网络转载，资源使用一般不提供任何帮助，特殊资源除外，如有侵权请联系！)'));
    $form->addInput($dbbanquan);
	
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}


function themeFields($layout) {
    $banquan = new Typecho_Widget_Helper_Form_Element_Text('banquan', NULL, NULL, _t('原创作者'), _t('请这这里填写文章原创作者或者来源'));
    $layout->addItem($banquan);
	$banquanurl = new Typecho_Widget_Helper_Form_Element_Text('banquanurl', NULL, NULL, _t('原文地址'), _t('请这这里填写文章原创作者或者来源发布的原文地址'));
    $layout->addItem($banquanurl);
}

//热门文章
//原作者不明..
function getRandomPosts($limit = 10){
    $db = Typecho_Db::get();
    $result = $db->fetchAll($db->select()->from('table.contents')
        ->where('status = ?','publish')
        ->where('type = ?', 'post')
        ->where('created <= unix_timestamp(now())', 'post')
        ->limit($limit)
        ->order('RAND()')
    );
	$i = '1';
    if($result){
        foreach($result as $val){
            $obj = Typecho_Widget::widget('Widget_Abstract_Contents');
            $val = $obj->push($val);
            $post_title = htmlspecialchars($val['title']);
            $permalink = $val['permalink'];
			
            echo '<li class="clearfix">
					<span class="list list-1">'.$i.'</span>
					<a href="'.$permalink.'" title="'.$post_title.'">'.$post_title.'</a>
					</li>'
			;
			$i++;
        }
    }
}

//缩略图调用
function showThumb($obj,$size=null,$link=false){
    preg_match_all( "/<[img|IMG].*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/", $obj->content, $matches );
    $thumb = '';
    $options = Typecho_Widget::widget('Widget_Options');
    $attach = $obj->attachments(1)->attachment;
    if (isset($attach->isImage) && $attach->isImage == 1){
        $thumb = $attach->url;
        if(!empty($options->src_add) && !empty($options->cdn_add)){
            $thumb = str_ireplace($options->src_add,$options->cdn_add,$thumb);
        }
    }elseif(isset($matches[1][0])){
        $thumb = $matches[1][0];
        if(!empty($options->src_add) && !empty($options->cdn_add)){
            $thumb = str_ireplace($options->src_add,$options->cdn_add,$thumb);
        }
    }
    if(empty($thumb) && empty($options->default_thumb)){
		$thumb= $options->themeUrl .'/air/img/thumb/' . rand(1, 20) . '.jpg';
		//去掉下面4行双斜杠 启用BING美图随机缩略图
		//$str = file_get_contents('http://cn.bing.com/HPImageArchive.aspx?format=js&idx='.rand(1, 30).'&n=1');
        //$array = json_decode($str);
		//$imgurl = $array->{"images"}[0]->{"urlbase"};
        //$thumb = '//i'.rand(0, 2).'.wp.com/cn.bing.com'.$imgurl.'_1920x1080.jpg?resize=220,150';
		
        return $thumb;
    }else{
        $thumb = empty($thumb) ? $options->default_thumb : $thumb;
    }
    if($link){
        return $thumb;
    }
}



//Yoniu：取文章首图
function GetThumFromContent($content){
 // 当文章无图片时的默认缩略图
	$options = Typecho_Widget::widget('Widget_Options');
	$random= $options->themeUrl .'/air/img/thumb/' . rand(1, 20) . '.jpg';
	//正则匹配 主题目录下的/sj/的图片（以数字按顺序命名）

	preg_match_all("|<img[^>]+src=\"([^>\"]+)\"?[^>]*>|is", $content->content, $img);
	if($imgsrc = !empty($img[1])){
		 $imgsrc = $img[1][0];
	}else{ 
			preg_match_all("|<img[^>]+src=\"([^>\"]+)\"?[^>]*>|is", $content->content ,$img);

            $tupian = $content->widget('Widget_Options')->tupian;
            if ($tupian == 'dan'){
              if($imgsrc = !empty($img[1])){
				$imgsrc = $img[1][0];  
              }
            }else if($tupian == 'shi'){
			if($imgsrc = !empty($img[1])){
				$imgsrc = $img[1][0];  
			}else{
					$imgsrc = $random;	
			}

            }else{
              $imgsrc = $random;
            }
	}
	return $imgsrc;

}

/*文章阅读次数统计*/
function get_post_view($archive) {
    $cid = $archive->cid;
    $db = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
        $views = Typecho_Cookie::get('extend_contents_views');
        if (empty($views)) {
            $views = array();
        } else {
            $views = explode(',', $views);
        }
        if (!in_array($cid, $views)) {
            $db->query($db->update('table.contents')->rows(array('views' => (int)$row['views'] + 1))->where('cid = ?', $cid));
            array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
            
        }
    }
    echo $row['views'];
}

/* 对邮箱类型判定，并调用QQ头像的实现 */
function isqq($email){
    if($email){
        if(strpos($email,"@qq.com") !==false){
            $email=str_replace('@qq.com','',$email);
            echo "//q1.qlogo.cn/g?b=qq&nk=".$email."&";
        }else{
            $email= md5($email);
            echo "//cdn.v2ex.com/gravatar/".$email."?";
        }
    }else{
    echo "//cdn.v2ex.com/gravatar/null?";
    }
}


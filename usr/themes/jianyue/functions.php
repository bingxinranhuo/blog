<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    

    $HengPan = new Typecho_Widget_Helper_Form_Element_Text('HengPan', NULL, NULL, _t('幻灯片Cid'), _t('在这里填写一个分类Cid'));
    $form->addInput($HengPan);

    $YouCeCid = new Typecho_Widget_Helper_Form_Element_Text('YouCeCid', NULL, NULL, _t('右侧边栏Cid'), _t('在这里填写一个分类Cid'));
    $form->addInput($YouCeCid);

    $ZhiDing = new Typecho_Widget_Helper_Form_Element_Text('ZhiDing', NULL, NULL, _t('置顶部Cid'), _t('在这里填写一个分类Cid'));
    $form->addInput($ZhiDing);

    $BeiAn = new Typecho_Widget_Helper_Form_Element_Text('BeiAn', NULL, NULL, _t('备案管理'), _t('直接在这里填写备案号即可'));
    $form->addInput($BeiAn);

    $ZhanQq = new Typecho_Widget_Helper_Form_Element_Text('ZhanQq', NULL, NULL, _t('站长Q Q'), _t('填写站长qq号'));
    $form->addInput($ZhanQq);

    $WeiXin = new Typecho_Widget_Helper_Form_Element_Text('WeiXin', NULL, NULL, _t('微信打赏'), _t('这里直接填写微信二维码图片URL地址'));
    $form->addInput($WeiXin);

    $ZhiFuBao = new Typecho_Widget_Helper_Form_Element_Text('ZhiFuBao', NULL, NULL, _t('支付宝打赏'), _t('这里直接填写支付宝二维码图片URL地址'));
    $form->addInput($ZhiFuBao);

    $BanQua = new Typecho_Widget_Helper_Form_Element_Text('BanQua', NULL, "转载文章请注明文章来源，请勿随意转载。", _t('版权说明'), _t('请在这里填写文章版权申明'));
    $form->addInput($BanQua);

    $WeiBo = new Typecho_Widget_Helper_Form_Element_Text('WeiBo', NULL, NULL, _t('微博地址'), _t('请在这里直接填写微博短地址'));
    $form->addInput($WeiBo);

    $ZiLiaoBJ = new Typecho_Widget_Helper_Form_Element_Text('ZiLiaoBJ', NULL, NULL, _t('资料背景'), _t('请在这里直接填写资料背景图片地址'));
    $form->addInput($ZiLiaoBJ);

    $BoZhuTX = new Typecho_Widget_Helper_Form_Element_Text('BoZhuTX', NULL, NULL, _t('博主头像'), _t('请在这里直接填写博主头像图片地址'));
    $form->addInput($BoZhuTX);

    $BoZhuMC = new Typecho_Widget_Helper_Form_Element_Text('BoZhuMC', NULL, "寻梦xunm", _t('博主名称'), _t('请在这里直接填写博主名称'));
    $form->addInput($BoZhuMC);

    $BoZhuJS = new Typecho_Widget_Helper_Form_Element_Textarea('BoZhuJS', NULL, "博主暂时还没有介绍", _t('博主介绍'), _t('请在这里直接填写博主介绍：“可以使用HTML代码”'));
    $form->addInput($BoZhuJS);

    $GuanLiYX = new Typecho_Widget_Helper_Form_Element_Text('GuanLiYX', NULL, NULL, _t('管理邮箱'), _t('请在这里直接填写管理邮箱'));
    $form->addInput($GuanLiYX);

    $ZhiDingTS = new Typecho_Widget_Helper_Form_Element_Text('ZhiDingTS', NULL, "3", _t('置顶条数'), _t('如果开启置顶选项请务必填写此项内容，如果不填写可能出现网站无法等情况,默认为3条'));
    $form->addInput($ZhiDingTS);

    $HuanDengPTS = new Typecho_Widget_Helper_Form_Element_Text('HuanDengPTS', NULL, "3", _t('幻灯片条数'), _t('如果开启幻灯片选项请务必填写此项内容，如果不填写可能出现网站无法等情况,默认为3条'));
    $form->addInput($HuanDengPTS);

    $JianBianm = new Typecho_Widget_Helper_Form_Element_Text('JianBianm', NULL, NULL, _t('样式名称'), _t('直接在这里输入渐变样式名称即可,为空即为不使用渐变背景,样式请参考:https://www.9416.cn/html/jianbianbeijing/'));
    $form->addInput($JianBianm);

    $TongJi = new Typecho_Widget_Helper_Form_Element_Textarea('TongJi', NULL, "", _t('统计代码'), _t('请在这里直接填写你的统计代码（支持html和js）'));
    $form->addInput($TongJi);

    $tupian = new Typecho_Widget_Helper_Form_Element_Radio('tupian',
        array('dan'=>_t('单张'),'shi'=>_t('适应'),'sui'=>_t('随机')),
        'shi',
        _t("图片选择"),
        _t("单张为文章有图片就输出没有就不输出<br>适应为有图片就输出没有就随机<br>随机为随机输出图片即使文章有图片也显示随机图片")
        );
    $form->addInput($tupian); 

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示热门文章'),
    'YouLian' => _t('显示合作网站'),
    'XianShiDL' => _t('显示独立页评论系统'),
    'XianShi' => _t('显示文章区评论系统'),
    'BoZhuiZL' => _t('显示博主资料'),
    'ShowHuanDengPian' => _t('显示幻灯片'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowBiaoQian' => _t('显示标签'),
    'ShowTuiJian' => _t('显示推荐'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}



function themeFields($layout) {
    $banquan= new Typecho_Widget_Helper_Form_Element_Text('banquan', NULL, NULL, _t('版权说明'), _t('在这里声明文章的来源'));
    $layout->addItem($banquan);

    $biaosi = new Typecho_Widget_Helper_Form_Element_Select('biaosi',array('0'=>'默认','1'=>'原创','2'=>'转载'),'0','醒目标识','默认为不显示');
    $layout->addItem($biaosi);
}

//截取编码为utf8的字符串
function subString($strings, $start, $length) {
	if (function_exists('mb_substr') && function_exists('mb_strlen')) {
		$sub_str = mb_substr($strings, $start, $length, 'utf8');
		return mb_strlen($sub_str, 'utf8') < mb_strlen($strings, 'utf8') ? $sub_str . '...' : $sub_str;
	}
	$str = substr($strings, $start, $length);
	$char = 0;
	for ($i = 0; $i < strlen($str); $i++) {
		if (ord($str[$i]) >= 128)
			$char++;
	}
	$str2 = substr($strings, $start, $length + 1);
	$str3 = substr($strings, $start, $length + 2);
	if ($char % 3 == 1) {
		if ($length <= strlen($strings)) {
			$str3 = $str3 .= '...';
		}
		return $str3;
	}
	if ($char % 3 == 2) {
		if ($length <= strlen($strings)) {
			$str2 = $str2 .= '...';
		}
		return $str2;
	}
	if ($char % 3 == 0) {
		if ($length <= strlen($strings)) {
			$str = $str .= '...';
		}
		return $str;
	}
}

//Yoniu：取纯文本摘要
function extractHtmlData($data, $len) {
	$data = strip_tags(subString($data, 0, $len + 30));
	$search = array("/([\r\n])[\s]+/", // 去掉空白字符
		"/&(quot|#34);/i", // 替换 HTML 实体
		"/&(amp|#38);/i",
		"/&(lt|#60);/i",
		"/&(gt|#62);/i",
		"/&(nbsp|#160);/i",
		"/&(iexcl|#161);/i",
		"/&(cent|#162);/i",
		"/&(pound|#163);/i",
		"/&(copy|#169);/i",
		"/\"/i",
	);
	$replace = array(" ", "\"", "&", " ", " ", "", chr(161), chr(162), chr(163), chr(169), "");
	$data = trim(subString(preg_replace($search, $replace, $data), 0, $len));
	return $data;
}

//Yoniu：取文章首图
function GetThumFromContent($content){
 // 当文章无图片时的默认缩略图
    $rand = rand('1','8'); // 随机 1-8 张缩略图
    $random = '/usr/themes//jianyue/layui/images/sj/' . $rand . '.jpg'; // 随机缩略图路径
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
    if($result){
        foreach($result as $val){
            $obj = Typecho_Widget::widget('Widget_Abstract_Contents');
            $val = $obj->push($val);
            $post_title = htmlspecialchars($val['title']);
            $permalink = $val['permalink'];
            echo '<li><a href="'.$permalink.'">'.$post_title.'</a></li>';
        }
    }
}

// 浏览量统计
function get_post_view($archive){
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
 $views = Typecho_Cookie::get('extend_contents_views');
        if(empty($views)){
            $views = array();
        }else{
            $views = explode(',', $views);
        }
if(!in_array($cid,$views)){
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
        }
    }
    echo $row['views'].'';
}

// 获取浏览器信息
function getBrowser($agent)
{
    if (preg_match('/MSIE\s([^\s|;]+)/i', $agent, $regs)) {
        $outputer = 'IE浏览器';
    } else if (preg_match('/FireFox\/([^\s]+)/i', $agent, $regs)) {
      $str1 = explode('Firefox/', $regs[0]);
$FireFox_vern = explode('.', $str1[1]);
        $outputer = '火狐浏览器 '. $FireFox_vern[0];
    } else if (preg_match('/Maxthon([\d]*)\/([^\s]+)/i', $agent, $regs)) {
      $str1 = explode('Maxthon/', $agent);
$Maxthon_vern = explode('.', $str1[1]);
        $outputer = '傲游浏览器 '.$Maxthon_vern[0];
    } else if (preg_match('#SE 2([a-zA-Z0-9.]+)#i', $agent, $regs)) {
        $outputer = '搜狗浏览器';
    } else if (preg_match('#360([a-zA-Z0-9.]+)#i', $agent, $regs)) {
$outputer = '360浏览器';
    } else if (preg_match('/Edge([\d]*)\/([^\s]+)/i', $agent, $regs)) {
        $str1 = explode('Edge/', $regs[0]);
$Edge_vern = explode('.', $str1[1]);
        $outputer = 'Edge '.$Edge_vern[0];
    } else if (preg_match('/UC/i', $agent)) {
              $str1 = explode('rowser/',  $agent);
$UCBrowser_vern = explode('.', $str1[1]);
        $outputer = 'UC浏览器 '.$UCBrowser_vern[0];
    } else if (preg_match('/MicroMesseng/i', $agent, $regs)) {
        $outputer = '微信内嵌浏览器';
    }  else if (preg_match('/WeiBo/i', $agent, $regs)) {
        $outputer = '微博内嵌浏览器';
    }  else if (preg_match('/QQ/i', $agent, $regs)||preg_match('/QQBrowser\/([^\s]+)/i', $agent, $regs)) {
                  $str1 = explode('rowser/',  $agent);
$QQ_vern = explode('.', $str1[1]);
        $outputer = 'QQ浏览器 '.$QQ_vern[0];
    } else if (preg_match('/BIDU/i', $agent, $regs)) {
        $outputer = '百度浏览器';
    } else if (preg_match('/LBBROWSER/i', $agent, $regs)) {
        $outputer = '猎豹浏览器';
    } else if (preg_match('/TheWorld/i', $agent, $regs)) {
        $outputer = '世界之窗浏览器';
    } else if (preg_match('/XiaoMi/i', $agent, $regs)) {
        $outputer = '小米浏览器';
    } else if (preg_match('/UBrowser/i', $agent, $regs)) {
              $str1 = explode('rowser/',  $agent);
$UCBrowser_vern = explode('.', $str1[1]);
        $outputer = 'UC浏览器 '.$UCBrowser_vern[0];
    } else if (preg_match('/mailapp/i', $agent, $regs)) {
        $outputer = 'email内嵌浏览器';
    } else if (preg_match('/2345Explorer/i', $agent, $regs)) {
        $outputer = '2345浏览器';
    } else if (preg_match('/Sleipnir/i', $agent, $regs)) {
        $outputer = '神马浏览器';
    } else if (preg_match('/YaBrowser/i', $agent, $regs)) {
        $outputer = 'Yandex浏览器';
    }  else if (preg_match('/Opera[\s|\/]([^\s]+)/i', $agent, $regs)) {
        $outputer = 'Opera浏览器';
    } else if (preg_match('/MZBrowser/i', $agent, $regs)) {
        $outputer = '魅族浏览器';
    } else if (preg_match('/VivoBrowser/i', $agent, $regs)) {
        $outputer = 'vivo浏览器';
    } else if (preg_match('/Quark/i', $agent, $regs)) {
        $outputer = '夸克浏览器';
    } else if (preg_match('/mixia/i', $agent, $regs)) {
        $outputer = '米侠浏览器';
    }else if (preg_match('/fusion/i', $agent, $regs)) {
        $outputer = 'App客服端';
    } else if (preg_match('/CoolMarket/i', $agent, $regs)) {
        $outputer = '基安内置浏览器';
    } else if (preg_match('/Thunder/i', $agent, $regs)) {
        $outputer = '迅雷内置浏览器';
    } else if (preg_match('/Chrome([\d]*)\/([^\s]+)/i', $agent, $regs)) {
$str1 = explode('Chrome/', $agent);
$chrome_vern = explode('.', $str1[1]);
        $outputer = 'Chrome '.$chrome_vern[0];
    } else if (preg_match('/safari\/([^\s]+)/i', $agent, $regs)) {
         $str1 = explode('Version/',  $agent);
$safari_vern = explode('.', $str1[1]);
        $outputer = 'Safari '.$safari_vern[0];
    } else{
        $outputer = '未知浏览器';
    }
    echo $outputer;
}
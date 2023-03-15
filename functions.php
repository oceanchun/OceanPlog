<?php

function themeConfig($form)
{

  //首页名称
  $IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, 'OceanPlog', _t('首页的名称(必填)'), _t('输入你的首页显示的名称'));
  $form->addInput($IndexName);
  $name = new Typecho_Widget_Helper_Form_Element_Text('name', NULL, '海洋淳', _t('关于里的名称'), _t('输入显示在BY前的名称'));
  $form->addInput($name);
  $auth = new Typecho_Widget_Helper_Form_Element_Text('auth', NULL, 'OCEAN', _t('关于里的BY后'), _t('输入显示在BY后的名称'));
  $form->addInput($auth);
  //网站图标
  $IconUrl = new Typecho_Widget_Helper_Form_Element_Text('IconUrl', NULL, 'https://yun.oceanchun.com/d/Drawingbed/web%E7%BA%A2%E8%89%B2%E5%A5%B3%E5%AD%A9.png?sign=1Aegb5D3hsWbe_3mJuqnN5i5UeQG80yFTtjcPr5KGxw=:0', _t('网站图标地址'), _t('输入网站的图标（建议200px宽度png）'));
  $form->addInput($IconUrl);
  //Apple网站图标
  $AppleIcon = new Typecho_Widget_Helper_Form_Element_Text('AppleIcon', NULL, '', _t('兼容Apple设备的图标'), _t('建议使用有背景无圆角矩形图标，在被iOS添加到书签或桌面后显示此图标（建议200px宽度png）'));
  $form->addInput($AppleIcon);
  //首页名称后缀（必填）
  $Indexdict = new Typecho_Widget_Helper_Form_Element_Text('Indexdict', NULL, '海洋淳', _t('首页的名称后缀(必填)'), _t('输入你的首页显示的名称后缀'));
  $form->addInput($Indexdict);
  $zmkiabout = new Typecho_Widget_Helper_Form_Element_Text('zmkiabout', NULL, 'OceanPlog', _t('自定义底部前缀'), _t('输入你的首页底部栏前缀'));
  $form->addInput($zmkiabout);
  $zmkiabouts = new Typecho_Widget_Helper_Form_Element_Text('zmkiabouts', NULL, '乘风破浪会有时，直挂云帆济沧海！', _t('自定义底部后缀'), _t('输入你的首页底部栏后缀'));
  $form->addInput($zmkiabouts);
  //大logo
  $Biglogo = new Typecho_Widget_Helper_Form_Element_Text('Biglogo', NULL, '这里填写你的介绍。', _t('关于-详细介绍'), _t('底栏展开后的详细介绍，可以使用html标签'));
  $form->addInput($Biglogo);
  $zmki_ys = new Typecho_Widget_Helper_Form_Element_Text('zmki_ys', NULL, '', _t('缩略图-图片处理规则名称-(优化选项,选填)'), _t('需要带自定义分隔符;使用oss图片处理生成小缩略图可优化页面打开速度'));
  $form->addInput($zmki_ys);
  $zmki_sy = new Typecho_Widget_Helper_Form_Element_Text('zmki_sy', NULL, '', _t('图片版权水印-图片处理规则名称-(优化选项,选填)'), _t('需要带自定义分隔符;此处可填写oss水印规则名称，默认对全部图片生效'));
  $form->addInput($zmki_sy);
  
  $xxyl1name = new Typecho_Widget_Helper_Form_Element_Text('xxyl1name', NULL, '海洋淳', _t('友情链接1名称'), _t('填写你的友情链接名称,必须名称和链接都填才能显示，只填一个或豆不填则不显示，以下同理，建议这个别删除，给我留一个位置'));
  $form->addInput($xxyl1name);
  $xxyl1add = new Typecho_Widget_Helper_Form_Element_Text('xxyl1add', NULL, 'https://oceanchun.com', _t('友情链接1地址'), _t('填写你的友情链接地址 http(s)://'));
  $form->addInput($xxyl1add);
  $xxyl2name = new Typecho_Widget_Helper_Form_Element_Text('xxyl2name', NULL, '', _t('友情链接2名称'), _t('填写你的友情链接名称'));
  $form->addInput($xxyl2name);
  $xxyl2add = new Typecho_Widget_Helper_Form_Element_Text('xxyl2add', NULL, '', _t('友情链接2地址'), _t('填写你的友情链接地址 http(s)://'));
  $form->addInput($xxyl2add);
  $xxyl3name = new Typecho_Widget_Helper_Form_Element_Text('xxyl3name', NULL, '', _t('友情链接3名称'), _t('填写你的友情链接名称'));
  $form->addInput($xxyl3name);
  $xxyl3add = new Typecho_Widget_Helper_Form_Element_Text('xxyl3add', NULL, '', _t('友情链接3地址'), _t('填写你的友情链接地址 http(s)://'));
  $form->addInput($xxyl3add);
  
  $xxhome = new Typecho_Widget_Helper_Form_Element_Text('xxhome', NULL, '', _t('主页'), _t('填写你的主页链接 http(s)://'));
  $form->addInput($xxhome);
  $xxweibo = new Typecho_Widget_Helper_Form_Element_Text('xxweibo', NULL, '', _t('微博'), _t('填写你的微博号ID，链接就能看到ID'));
  $form->addInput($xxweibo);
  $xxgithub = new Typecho_Widget_Helper_Form_Element_Text('xxgithub', NULL, '', _t('GitHub'), _t('填写你的GitHub账号名称'));
  $form->addInput($xxgithub);
  $xxqq = new Typecho_Widget_Helper_Form_Element_Text('xxqq', NULL, '', _t('QQ'), _t('填写你的QQ号码'));
  $form->addInput($xxqq);
  $xxemail = new Typecho_Widget_Helper_Form_Element_Text('xxemail', NULL, '', _t('邮箱'), _t('填写你的邮箱地址'));
  $form->addInput($xxemail);
  $xxtelegram = new Typecho_Widget_Helper_Form_Element_Text('xxtelegram', NULL, '', _t('飞机'), _t('填写你的TG地址'));
  $form->addInput($xxtelegram);
  $icp = new Typecho_Widget_Helper_Form_Element_Text('icp', NULL, '这里显示备案号', _t('ICP备案号'), _t('如果你在国内有备案，可在此处填写'));
  $form->addInput($icp);
  $cnzz = new Typecho_Widget_Helper_Form_Element_Text('cnzz', NULL, '', _t('统计代码'), _t('cnzz或百度..统计代码。可在此处填写处'));
  $form->addInput($cnzz);
}
//输出导航
function themeFields($layout)
{
    $articleCopyright = new Typecho_Widget_Helper_Form_Element_Select('articleCopyright',array('show' => '显示','hide' => '不显示'),'hide', _t('是否显示'), _t('开启后会在首页显示这些图片，默认不显示，注意打开。<br>教程：如果想要添加更多图片，请按以下步骤：<br>1.点击下方的\'+添加字段\'按钮，<br>2.字段名称为imgnumber，例如：img1、img2、img3......乱序也行，只要是按照img加数字格式规则、不重复即可;<br>3.字段值为图片链接;<br>默认5张图片，可以随意填写，没有5张也没关系，只是方便你填;<br>注意：一篇文章的imgnumber不要大于999，否则不会显示;排序按照文章更新时间、图片链接自上向下排列。<br>附件多文件上传：上传图片到附件，复制链接添入即可'));
    $layout->addItem($articleCopyright);  //  注册  
    $img = new Typecho_Widget_Helper_Form_Element_Text('img', NULL, NULL, _t('图片链接'), _t('请输入要展示的图片链接'));
    $layout->addItem($img);
    for($i=1000;$i<=1004;$i++) {
        $imgName = 'img' . $i;
        ${$imgName} = new Typecho_Widget_Helper_Form_Element_Text($imgName, NULL, NULL, _t('更多图片链接'), _t('请输入要展示的图片链接'));
        $layout->addItem(${$imgName});
    }
}




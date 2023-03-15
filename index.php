<?php
/**
 * 一款相册主题，魔改自Time主题，高度自定义体验，由海洋淳维护
 * 支持所有远程图片，支持附件多文件上传，
 * 复制链接为原图片链接
 * <div class="OceanPlog"><a style="width:fit-content;text-decoration:none;" id="OceanPlog">版本检测中..</div>&nbsp;</div><style>.OceanPlog{margin-top: 5px;}.OceanPlog a{background: #ff5a8f;padding: 5px;color: #fff;}</style>
 * <script>var plogversion="v1.3";function update_detec(){var container=document.getElementById("OceanPlog");if(!container){return}var ajax=new XMLHttpRequest();container.style.display="block";ajax.open("get","https://api.github.com/repos/oceanchun/OceanPlog/releases/latest");ajax.send();ajax.onreadystatechange=function(){if(ajax.readyState===4&&ajax.status===200){var obj=JSON.parse(ajax.responseText);var newest=obj.tag_name;if(newest>plogversion){container.innerHTML="发现新主题版本："+obj.name+'。下载地址：<a href="'+obj.zipball_url+'">点击下载</a>'+"<br>您目前的版本:"+String(plogversion)+"。"+'<a target="_blank" href="'+obj.html_url+'">查看新版亮点</a>'}else{container.innerHTML="您目前的版本:"+String(plogversion)+"。您目前使用的是最新版主题。"}}}};update_detec();</script>
 * @package OceanPlog
 * @author ocean
 * @version 1.3
 * @link https://oceanchun.com/
 */
?>
<!DOCTYPE html>
<!--OceanPlog-->
<!--publish time:3/15/2023/18:07:12-->
<html>
	<head>
		<title><?php $this->options->IndexName(); ?> - <?php $this->options->Indexdict() ?>	</title>
		<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="keywords" content="<?php $this->options->keywords(); ?>"/>
		<meta name="description" content="<?php $this->options->description(); ?>"/>
    <link rel="apple-touch-icon" href="<?php $this->options->AppleIcon(); ?>">
    <meta name="apple-mobile-web-app-title" content="<?php $this->options->IndexName(); ?>">
    <link rel="bookmark" href="<?php $this->options->AppleIcon(); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php $this->options->AppleIcon(); ?>" >
    <link rel="icon" href="<?php $this->options->IconUrl() ?>">
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/iconfont/iconfont.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/noscript.css'); ?>" />
		<noscript><link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/noscript.css'); ?>" /></noscript>
		<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>" />
		<link rel="stylesheet" href="https://cdn3.codesign.qq.com/icons/dDyopjDLkGjVe1g/latest/iconfont.css">
		<link rel="stylesheet" href="//at.alicdn.com/t/font_1635479_m8o2ir6mitf.css">
		<script src="https://at.alicdn.com/t/font_1635479_m8o2ir6mitf.js"></script>  
	</head>
	<body class="is-preload">
  <header id="header">
            <a href="<?php $this->options->siteUrl(); ?>"><img class="site-logo" src="<?php $this->options->IconUrl(); ?>"></a>
						<h1><a href="<?php $this->options->siteUrl(); ?>"><strong><?php $this->options->plogabout() ?></strong></h1></a>
            <span class="discription"><?php $this->options->plogabouts() ?></span>
						<nav>
							<ul>
							    <li><a type="button" id="fullscreen" class="btn btn-default visible-lg visible-md" alt="切换全屏"><svg  class="icon-plog plog_dh plog_wap" aria-hidden="true"><use xlink:href="#icon-plog-ziyuan-copy"></use></svg></a></li>
                <li class='nav-item'><a class="icon solid fa-info-circle nav-item-name">分类</a><?php \Widget\Metas\Category\Rows::alloc()->listCategories('wrapClass=nav-item-child'); ?></li>
								
								<li><a href="#footer">关于<a class="iconfont icon-guanyu" rel="noopener nofollow"/a></a></li>
							</ul>
						</nav>
					</header>
		<!-- Wrapper -->
		<div id="wrapper">
				<!-- Header -->
					<!-- Main -->
			<div id="main" >	
			    <?php while($this->next()): 
			    if ($this->fields->articleCopyright == 'show') {
			        if ($this->fields->img <> null){ ?>
				        <article class="thumb img-area">
				        <a class="image my-photo"  alt="loading" href="<?php echo $this->fields->img();?><?php $this->options->plogsy()?>" >
				   	    <img class="plog_px  my-photo" onerror="this.src='<?php $this->options->themeUrl('assets/img/loading.gif'); ?>';this.onerror=null" data-src="<?php echo $this->fields->img();?><?php $this->options->plogys()?>"   />
				   	    </a> 
						<h2><?php $this->title() ?></h2>
						<p><?php $this->content('Continue Reading...'); ?></p>
                        <li class="tag-categorys"><?php $this->category(','); ?></li>
				    </article>
				    <?php }?>
				    <?php for ($i=1; $i<=1004; $i++){
                        $imgN='img'.$i;
                        if ($this->fields->{$imgN} <> null){
                        ?>
				            <article class="thumb img-area">
				            <a class="image my-photo"  alt="loading" href="<?php echo $this->fields->$imgN();?><?php $this->options->plogsy()?>" >
				   		    <img class="plog_px  my-photo" onerror="this.src='<?php $this->options->themeUrl('assets/img/loading.gif'); ?>';this.onerror=null" data-src="<?php echo $this->fields->$imgN();?><?php $this->options->plogys()?>"   />
				   	        </a> 
						    <h2><?php $this->title() ?></h2>
						    <p><?php $this->content('Continue Reading...'); ?></p>
                            <li class="tag-categorys"><?php $this->category(','); ?></li>
				        </article>
				   <?php }; };}?>
			<?php endwhile; ?>
			</div> 
	<body>
 				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner split">
							<div class="inner split">
							<div>
								<section>
									<h2>关于<?php $this->options->IndexName() ?></h2>
									<p><?php $this->options->Biglogo () ?></p>
								</section>
								<section>
									<h2>联系我</h2>
									<ul class="icons">	
                    <li><a href="<?php $this->options->xxhome()?>" target="_blank" class="iconfont icon-shouye" rel="noopener nofollow"><span class="label">首页</span></a></li>
					<li><a href="https://weibo.com/u/<?php $this->options->xxweibo()?>"  target="_blank" class="iconfont icon-weibo" rel="noopener nofollow"><span class="label">微博</span></a></li>
                    <li><a href="https://github.com/<?php $this->options->xxgithub()?> "  target="_blank" class="iconfont icon-github" rel="noopener nofollow"><span class="label">GitHub</span></a></li>
                    <li><a href="https://res.abeim.cn/api/qq/?qq=<?php $this->options->xxqq()?>"  target="_blank" class="iconfont icon-QQ" rel="noopener nofollow"><span class="label">QQ</span></a></li>
                    <li><a href="mailto:<?php $this->options->xxemail()?>"  target="_blank" class="iconfont icon-email" rel="noopener nofollow"><span class="label">Email</span></a></li>
                    <li><a href="https://t.me/<?php $this->options->xxtelegram()?>"  target="_blank" class="iconfont icon-telegram" rel="noopener nofollow"><span class="label">Telegram</span></a></li>
										</ul>
								</section> 
								<span style="color: #b5b5b5; font-size: 0.8em;">
									<?php $this->options->cnzz()?>
								<p class="copyright">
									Copyright&nbsp;&copy;&nbsp;2023&nbsp;<a href="https://oceanchun.com" target="_blank" rel="noopener nofollow"><?php $this->options->Name()?>&nbsp;</a>By&nbsp;<?php $this->options->auth()?><br>Plog&nbsp;<a href="http://beian.miit.gov.cn/" target="_blank" rel="noopener nofollow"><?php $this->options->icp()?></a>
								</p>
							</div>
							</div>
						<div>
					</footer>
<script type="text/javascript">
function isInSight(el) {
  const bound = el.getBoundingClientRect();
  const clientHeight = window.innerHeight;
  //如果只考虑向下滚动加载
  //const clientWidth=window.innerWeight;
  return bound.top <= clientHeight + 100;
}

let index = 0;
function checkImgs() {
  const imgs = document.querySelectorAll('.my-photo');
  for (let i = index; i < imgs.length; i++) {
    if (isInSight(imgs[i])) {
      loadImg(imgs[i]);
      index = i;
    }
  }
//   Array.from(imgs).forEach(el => {
//      if (isInSight(el)) {
//       loadImg(el);
//      }
//   })
}

function loadImg(el) {
  if (!el.src) {
    const source = el.dataset.src;
    el.src = source;
  }
}

function throttle(fn, mustRun = 10) {
  const timer = null;
  let previous = null;
  return function() {
    const now = new Date();
    const context = this;
    const args = arguments;
    if (!previous) {
      previous = now;
    }
    const remaining = now - previous;
    if (mustRun && remaining >= mustRun) {
      fn.apply(context, args);
      previous = now;
    }
  }
}
 		</script>
		  <script>
    window.onload=checkImgs;
    window.onscroll = throttle(checkImgs);
  </script>
</div> 
		<!-- Scripts -->
      <script src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery/1.7.2/jquery.min.js"></script>
      <script src="<?php $this->options->themeUrl('assets/js/jquery.poptrox.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/browser.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/breakpoints.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/util.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/main.js'); ?>"></script>
			
	</body>
</html>
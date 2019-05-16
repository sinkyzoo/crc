<?php
//header.php
//vers:190217
$dir = get_template_directory_uri();
$slug = basename(get_permalink());
echo '<!doctype html>'."\n";
?>
<html lang="ja" xmlns:og="http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=0.5,user-scalable=yes,initial-scale=1.0" />
  <meta name="Description" content="小岩政照,キャトルリサーチセンターは乳牛、ホルスタイン、牛の臨床試験データに基づいた治療、予防対策を行い、酪農畜産の発展に貢献することを目標としています" />
  <meta neame="keywords" content="ホルスタイン,乳牛,キャトルリサーチセンター,CRC,小岩政照,酪農学園大学,名誉教授,臨床,研究" />
  <meta property="og:title" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="" />
  <meta property="og:site_name" content="" />
  <meta name="robots" content="index,follow" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo $dir; ?>/css.js/normalize.css" />
  <link rel="stylesheet" href="<?php echo $dir; ?>/css.js/common.css" />
  <?php if(is_404()): ?>
    <link rel="stylesheet" href="<?php echo $dir; ?>/css.js/404.css" />
    <title>404 Page Not Found / CRC - キャトルリサーチセンター / Cattle Research Center</title>
  <?php elseif(is_front_page() && is_page()): ?>
    <script type="text/javascript" src="<?php echo $dir;?>/css.js/common.js" ></script>
    <script type="text/javascript" src="<?php echo $dir; ?>/css.js/backstretch.js"></script>
    <title>CRC - キャトルリサーチセンター　/ Cattle Research Center</title>
  <?php elseif($slug == 'contact'): ?>
    <script type="text/javascript" src="<?php echo $dir; ?>/css.js/contact.js"></script>
    <link rel="stylesheet" href="<?php echo $dir; ?>/css.js/contact.css" />
    <title>お問合せ / CRC - キャトルリサーチセンター / Cattle Research Center</title>
  <?php elseif($slug == 'about'): ?>
    <link rel="stylesheet" href="<?php echo $dir; ?>/css.js/about.css" />
    <title>CRCについて / CRC - キャトルリサーチセンター / Cattle Research Center</title>
  <?php elseif(is_single()) : ?>
    <link rel="stylesheet" href="<?php echo $dir; ?>/css.js/single.css" />
    <title>研究データ / CRC - キャトルリサーチセンター / Cattle Research Center</title>
  <?php elseif(is_category()) : ?>
    <link rel="stylesheet" href="<?php echo $dir; ?>/css.js/category.css" />
    <title>研究データリスト / CRC - キャトルリサーチセンター　/ Cattle Research Center</title>
  <?php else: ?>
    <link rel="stylesheet" href="<?php echo $dir;?>/css.js/cnts.css" />
    <title>CRC - キャトルリサーチセンター / Cattle Research Center</title>
  <?php endif; ?>
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135086782-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135086782-1');
</script>

<body>
<input type="checkbox" class="check" id="checked" />
<label class="menu-btn" for="checked">
  <span></span><span></span><span></span>
</label>
<label class="close-menu" for="checked"></label>
<nav class="drawer-menu">
  <ul>
    <li class="home"><a href="https://koiwacrc.net/">ホーム</a></li>
    <li class="about"><a href="https://koiwacrc.net/about/">CRCとは</a></li>
    <li class="data"><a href="https://koiwacrc.net/category/data/">研究データ</a></li>
    <li class="contact"><a href="https://koiwacrc.net/contact/">お問い合わせ</a></li>
  </ul>
</nav>

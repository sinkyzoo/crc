<?php
/*
* categorry.php
* koiwacrc.net
* vers:20190226
* shinjou inc
*/
get_header();
?>
<div class="wrapper">
<div class="header">
<div class="headerBg">
<div class="header_logo"><a href="https://koiwacrc.net/"><img src="http://koiwacrc.net/wp-content/themes/crc/imgs/cnts_logo.svg"></a></div>
<div class="header_menu">
<ul class="topMenu">
 	<li><a href="https://koiwacrc.net/about/">CRCとは</a></li>
 	<li><a href="https://koiwacrc.net/category/data/">研究データ</a></li>
 	<li><a href="https://koiwacrc.net/contact/">お問い合わせ</a></li>
</ul>
</div>
</div>
<div class="pagetitle">
<h2 class="subtitle">Category</h2>
カテゴリー

</div>
</div>
<!-- /.header -->
</div>
<?php
$n = 1;
if (have_posts()) : while(have_posts()):the_post();
?>

<div class="article<?php echo $n++; ?> article">
  <div class="inner"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <span class="date"><?php the_date(); ?></span> <?php the_category(); ?>
    <div style="text-align:left;"><?php the_content("More"); ?></div>
  </div>
</div>
<?php endwhile; endif; ?>
<?php
get_footer();

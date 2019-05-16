<?php 
/*
* single.php
* koiwacrc.net
* vers:20199224
* shinjou inc.
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
 	<li><a href="#data">研究データ</a></li>
 	<li><a href="https://koiwacrc.net/contact/">お問い合わせ</a></li>
</ul>
</div>
</div>
<div class="pagetitle">
<h2 class="subtitle">Data</h2>
研究データ

</div>
</div>
<!-- /.header -->
<?php
  $n = 1;
if(have_posts()) : while(have_posts()) : the_post();
?>
  <div class="article<?php echo $n; ?> article" ?>
    <div class="inner">
      <h3><?php the_title(); ?></h3>
      <span class="date"><?php the_date(); ?></span>
        <?php the_category(); ?>
      <div><?php the_content(); ?></div>
    </div>
  </div>
<?php $n++; endwhile; endif; ?>

<?php
get_footer();
?>

<?php
/**
* template 4 fixed page
* @package Wordpress
* @subpackage crc
* vers: 20190219
* author: shinjou inc.
**/
$pageID = 'index';
get_header();
if(have_posts()) : while(have_posts()) : the_post();
  the_content();
endwhile; endif;

if(is_front_page() && is_page()):
  $paged = get_query_var('paged');
  query_posts("posts_per_page=1&paged=$paged");
  if (have_posts()) : while(have_posts()) : the_post();
?>
<a name="data"></a>
<div class="article2">
<h1 class="subtitle">Data</h1>
<div class="inner">
  <div class="art2-1"><img src="http://koiwacrc.net/wp-content/themes/crc/imgs/art1-1.jpg"></div>
    <div class="art2-2">
      <h3><?php the_title(); ?></h3>
      <div><?php the_content("More") ?></div>
    </div>
  </div>
</div>
<?php endwhile;
  else:
  endif;
?>
  <div class="footer">
    <img src="http://koiwacrc.net/wp-content/themes/crc/imgs/header_logo.svg" class="footer_logo" />
    <div class="footer_cnt"><a href="https://koiwacrc.net/about/">CRCとは</a>　| <a href="https://koiwacrc.net/category/data/">研究データ</a> | <a href="https://koiwacrc.net/contact/">お問い合わせ</a></div>
  </div>
</body>
</html>
<?php
else:
get_footer();
endif;
?>



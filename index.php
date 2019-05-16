<?php
//Theme:CRC Original Theme
//index.php
//vers:180201

get_header();
?>
<?php if (have_posts()): while(have_posts()):the_post(); ?>
<div clas="wrapper">
  <div class="header">
    <div class="logo">
    </div><!-- /.logo -->
  </div><!-- /.header -->

<div class="article">
  <h1><?php the_title(); ?></h1>
  <div><?php the_content(); ?></div>

<?php endwhile; else: ?>
<div>投稿がありません</div>
<?php endif; ?>
</div><!-- /.article -->
</div><!-- /.wrapper -->
<?php get_footer(); ?>
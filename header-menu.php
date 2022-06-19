<?php 
  $base_url = $_SERVER['HTTP_HOST'] === 'localhost'? 'http://localhost/pkweb' : 'https://www.pkapparel.com' 
?>
<header>
  <div class="holder clearfix">
    <div class="head-contact clearfix">
      <div class="clearfix">
        <a href="<?php echo $base_url; ?>" class="logo">
          <img src="<?php echo $base_url; ?>/assets/images/logo.jpg" alt="logo" width="200" title="PK Apparel Home">
        </a>
        <nav id="nav" class="open-close">
          <a href="" class="opener">Menu</a>
          <ul class="navigation">
            <li><a href="<?php echo $base_url; ?>/about">About us</a></li>
            <li><a href="<?php echo $base_url; ?>/factory">Factory</a></li>
            <li><a href="<?php echo $base_url; ?>/men-jeans">Jeans for Men</a></li>
            <li><a href="<?php echo $base_url; ?>/women-jeans">Jeans for Women</a></li>
            <li><a href="<?php echo $base_url; ?>/blog">Blog</a></li>
            <li><a href="<?php echo $base_url; ?>/contact">Contact us</a></li>
          </ul>
        </nav>
        <nav class="main-menu">
          <ul>
            <!-- <li><a href="<?php echo $base_url; ?>/stock">Stock</a></li> -->
            <li><a href="<?php echo $base_url; ?>/about">About us</a></li>
            <li><a href="<?php echo $base_url; ?>/factory">Factory</a></li>
            <li><a href="<?php echo $base_url; ?>/men-jeans">Jeans for Men</a></li>
            <li><a href="<?php echo $base_url; ?>/women-jeans">Jeans for Women</a></li>
            <li><a href="<?php echo $base_url; ?>/blog">Blog</a></li>
            <li><a href="<?php echo $base_url; ?>/contact">Contact us</a></li>
            <!-- <li><a href="<?php echo $base_url; ?>/stock">Buy Stock</a></li> -->
          </ul>
        </nav>
      </div>
    </div>
  </div><!--end of header holder-->
</header>

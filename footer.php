<?php $base_url = $_SERVER['HTTP_HOST'] === 'localhost'? 'http://localhost/pkweb' : 'https://www.pkapparel.com' ?>
<footer id="footer">
  <div class="holder">
    <nav class="main-menu">
      <ul>
        <li><a href="<?php echo $base_url; ?>">Home</a></li>
        <li><a href="<?php echo $base_url; ?>/about">About us</a></li>
        <li><a href="<?php echo $base_url; ?>/factory">Factory</a></li>
        <li><a href="<?php echo $base_url; ?>/jeans-for-men">Jeans for Men</a></li>
        <li><a href="<?php echo $base_url; ?>/jeans-for-women">Jeans for Women</a></li>
        <li><a href="<?php echo $base_url; ?>/blog">Blog</a></li>
        <li><a href="<?php echo $base_url; ?>/contact">Contact us</a></li>
      </ul>
    </nav>
    <br />
    <ul class="social-network">
      <li><a href="https://www.facebook.com/pkappareljeans" target="_blank">facebook</a></li>
      <li class="instagram"><a href="https://www.instagram.com/pkappareljeans" target="_blank">instagram</a></li>
      <li class="twitter"><a href="https://www.twitter.com/pkappareljeans" target="_blank">twitter</a></li>
    </ul>
    <p><strong>&nbsp;&copy;&nbsp;PK Apparel | All Rights Reserved <?php echo Date('Y'); ?></strong></p>
  </div>
</footer>
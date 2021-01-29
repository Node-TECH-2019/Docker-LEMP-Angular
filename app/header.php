<div id="page_top"><a href="#"></a></div>
<header class="scroll-animation fadein">
  <div id="pc_header">
    <div id="header_wrapper">
      <div id="header_bg" class="hide"></div>
      <div id="pc_header_inner" class="clearfix">
        <div id="header_logo" class="fL hide">
          <a href="index.php" class="w100pc h100pc inline_block">
            <object class="cursor_pointer" type="image/svg+xml" data="img/<?php echo $logo; ?>" width="70" height="70"></object>
          </a>
        </div>
        <nav id="pc_nav" class="fR">
          <ul>
            <li><a class="font_color WHITE" href="index.php">Home</a></li>
            <li class="sub_list">
              <a class="font_color WHITE" href="index.php#business">Business</a>
              <ul class="sub_nav_bg sub_nav_hide">
                <?php for($num=0; $num < count($business);$num++){
                echo '<li><a href="./' . $business[$num]["id"] . '.php">' . $business[$num]["ttl"] . '</a></span></li><br><br>';
              } ?>
              </ul>
            </li>
            <li><a class="font_color WHITE" href="index.php#philosophy">Philosophy</a></li>
            <li><a class="font_color WHITE" href="index.php#company">Company</a></li>
            <li><a class="font_color WHITE" href="index.php#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div id="mobile">
    <div class="menu-trigger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="globalMenuSp">
      <div class="globalMenuSp_inner">
        <h2 class="globalMenuSp_title">MENU</h2>
        <ul>
          <li><a href="index.php"><span class="globalMenuSp_nav">Home</span><span class="globalMenuSp_border">トップページ</span></a></li>
          <li><a href="index.php#business"><span class="globalMenuSp_nav">Business</span><span class="globalMenuSp_border">事業紹介</span></a></li>
          <li><a href="index.php#philosophy"><span class="globalMenuSp_nav">Philosophy</span><span class="globalMenuSp_border">会社理念</span></a></li>
          <li><a href="index.php#company"><span class="globalMenuSp_nav">Company</span><span class="globalMenuSp_border">会社概要</span></a></li>
          <li><a href="index.php#contact"><span class="globalMenuSp_nav">Contact</span><span class="globalMenuSp_border">お問い合わせ</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</header>

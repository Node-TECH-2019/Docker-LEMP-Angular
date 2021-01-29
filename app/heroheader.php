<div class="slider-wrap">
  <div id="slick">
    <?php for($num=0; $num < count($business);$num++){
      echo '<div class="centering"><img src="img/business/'. $business[$num]["img"] . '" alt="'. $business[$num]["ttl"] . '"><p class=" header_img_txt"><span class="header_img_txt_ttl txtC WHITE">' . $business[$num]["ttl"] . '</span><span class="header_img_txt_br"></span><span class="header_img_txt_content">' . $business[$num]["content"] . '</span><br><a class="header_img_txt_a txtC" href="' . $business[$num]["id"] . '.php">詳細はこちら</a></p></div>';
    } ?>
  </div>
</div>

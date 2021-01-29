<!-- business -->
      <section id="business">
        <h2 class="head-border txtC pl30 pr30">Business</h2>
        <div class="business_pd">
          <ul class="cf business_list">
            <?php for($num=0; $num < count($business);$num++){
              echo '<li><a href="./' . $business[$num]["id"] . '.php" ><span class="centering"><img class="business_list_img txtC" src="img/business/' . $business[$num]["img"] . '" alt="' . $business[$num]["ttl"] . '"><h3 class="business_ttl pt10 pb10 txtC WHITE">' . $business[$num]["ttl"] . '</h3></span><p class="mr30 ml30 txtL BLACK">' . $business[$num]["content"] . '</p></a></li>';
            } ?>
        </div>
      </section>
<!-- business -->

<!-- information -->
  <div class="kv">
    <div class="top_information">
      <h3>Information</h3>
      <div class="top_information_box">
        <div class="top_information_box_text ">
          <div class="owl-carousel">
            <?php for ($i=0; $i < count($bucknumbers_content) ; $i++) {
            $keyword = array_keys($bucknumbers_content)[$i] ;
            for ($n=0; $n < count($bucknumbers_content[$keyword]) ; $n++) {
            echo '<div class="item"><article class="top_news-row_content"><a href="backnumbers.php#' . $bucknumbers[$n] . '"><p class="top_news-row_content_date">' . $bucknumbers_content[$keyword][$n][4] . '</p><h4 class="top_news-row_content_title">' . $bucknumbers_content[$keyword][$n][3] . '</h4></a></article></div>';
            }
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .kv -->
<!-- information -->

<!-- philosophy -->
<section id="philosophy">
  <h2 class="head-border txtC pl30 pr30">Philosophy</h2>
  <div id="philosophy_inner">
    <div class="philosophy_box_1 txtC">
      <?php
        echo '<img src="./img/' . $philosophy_img . '">';
      ?>
      <div class="philosophy_box_2">
        <?php
          echo '<h3><span class="fs_35"> ' . $philosophy_content[0] . '</span><br> '. $philosophy_content[1] .'</h3>';
        ?>
      </div>
    </div>
    <div id="philosophy_box_345" class="clearfix">
      <div class="philosophy_box_3">
        <div class="philosophy_box_3_inner clearfix">
          <div class="philosophy_box_3_img_position_1">
            <?php
              echo '<img src="./img/' . $philosophy_kazuya . '">';
            ?>
          </div>
          <div class="philosophy_box_5 box_position_1">
            <div class="philosophy_box_5_inner txtC">
              <?php
                echo '<h3 class="bold">' . $philosophy_introduction_kazuya[0] . '</h3>';
                echo '<p class="txtL">' . $philosophy_introduction_kazuya[1] . '<span class="fs_14">' . $philosophy_introduction_kazuya[2] . '</span><br>' . $philosophy_introduction_kazuya[3] . '<span class="fs_14">' . $philosophy_introduction_kazuya[4] . '</span><br>' . $philosophy_introduction_kazuya[5] . '<span class="fs_14">' . $philosophy_introduction_kazuya[6] . '</span><br>' . $philosophy_introduction_kazuya[7] . '<span class="fs_14">' . $philosophy_introduction_kazuya[8] . '</span><br><br></p>';
              ?>
              <div class="sns">
                <?php
                  for ($i=0; $i < count($philosophy_icon_img); $i++) {
                    echo '<a href="' . $philosophy_icon_kazuya_url[$i] . '" target="_blank" rel="noopener noreferrer"><img src="img/sns_icon/' . $philosophy_icon_img[$i] . '" alt="' . $philosophy_icon[$i] . '"></a>';
                  }
                  echo '<a href="#" class="sns_line" target="_blank" rel="noopener noreferrer"><i class="line_icon BLACK fab fa-line"></i></a>';
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="philosophy_box_3">
        <div class="philosophy_box_3_inner">
          <div class="philosophy_box_3_img_position_2">
            <?php
              echo '<img src="./img/' . $philosophy_shinnosuke . '">';
            ?>
          </div>
          <div class="philosophy_box_5 box_position_2">
            <div class="philosophy_box_5_inner txtC">
              <?php
                echo '<h3 class="bold">' . $philosophy_introduction_shinnosuke[0] . '</h3>';
                echo '<p class="txtL">' . $philosophy_introduction_shinnosuke[1] . '<span class="fs_14">' . $philosophy_introduction_shinnosuke[2] . '</span><br>' . $philosophy_introduction_shinnosuke[3] . '<span class="fs_14">' . $philosophy_introduction_shinnosuke[4] . '</span><br>' . $philosophy_introduction_shinnosuke[5] . '<span class="fs_14">' . $philosophy_introduction_shinnosuke[6] . '</span><br>' . $philosophy_introduction_shinnosuke[7] . '<span class="fs_14">' . $philosophy_introduction_shinnosuke[8] . '</span></p>';
              ?>
              <div class="sns">
                <?php
                  for ($i=0; $i < count($philosophy_icon_img); $i++) {
                    echo '<a href="' . $philosophy_icon_kazuya_url[$i] . '" target="_blank" rel="noopener noreferrer"><img src="img/sns_icon/' . $philosophy_icon_img[$i] . '" alt="' . $philosophy_icon[$i] . '"></a>';
                  }
                  echo '<a href="#" class="sns_line" target="_blank" rel="noopener noreferrer"><i class="line_icon BLACK fab fa-line"></i></a>';
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- philosophy -->

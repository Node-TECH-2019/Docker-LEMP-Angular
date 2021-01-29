<!-- company -->
<div class="margin"></div>
<section id="company">
  <h2 class="head-border txtC pl30 pr30">Company</h2>
  <div class="company_inner clearfix">
    <dl class="company_box boxsize_1">
      <dt class="bold">会社名</dt>
      <?php
      echo '<dd>' . $companyName . '</dd>';
      ?>
      <dt class="bold">所在地</dt>
      <?php echo '<dd><a href="' . $address_url . '" target="_blank" class="BLACK">' . $address . '</a></dd>'; ?>
      <dt class="bold">設立</dt>
      <?php echo '<dd>' . $establish . '</dd>'; ?>
      <dt class="bold">代表社員</dt>
      <?php
      $foundingEmployeeNum = count($foundingEmployee);
      echo '<dd><ul>';
      for ($num = 0; $num < count($foundingEmployee); $num++) {
        echo '<li class="list-style-none">' . $foundingEmployee[$num] . '</li>';
        if($num == $foundingEmployeeNum - 1){
          echo '</ul></dd>';
        }
      }
      ?>
    </dl>
    <dl class="company_box boxsize_2">
      <dt class="bold">事業内容</dt>
      <dd>
        <ul class="mt10 mb10">
          <?php
          for ($num = 0; $num < count($BusinessContent); $num++) {
            echo '<li>' . '<ul class="company_list">';
            for($count = 0; $count < count($BusinessContent[$num]); $count++){
              echo '<li>' . $BusinessContent[$num][$count] .'</li>';
            }
            echo '</ul>' . '</li>';
          }
          ?>
        </ul>
      </dd>
    </dl>
  </div>
</section>
<!-- company -->

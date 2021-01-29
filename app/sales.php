<?php include('Model.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<!-- head.php -->
<head>
  <?php include('head.php'); ?>
</head>
<body>
  <div id ="wrapper">
    <!-- header.php -->
    <?php include('header.php'); ?>

    <!-- sales.php -->
    <main class="business_continer">
      <div class="business_item centering trim">
        <img class="business_item_img" src="img/business/sales.jpg" alt="営業代行">
      </div>
      <div class="business_text txtC">
        <h2 class="head-border txtC">営業代行</h2>
        <h3 class="txtC">事業内容</h3>
        <p><?php echo $business[0]["detail"]; ?></p><br>
        Tel:<a href="tel:<?php echo $business[0]["tel"]; ?>"><?php echo $business[0]["tel"]; ?></a>
      </div>
    </main>

    <!-- footer.php -->
    <?php include('footer.php'); ?>
  </div>
  <!-- script.php -->
  <?php include('script.php'); ?>
</body>
</html>

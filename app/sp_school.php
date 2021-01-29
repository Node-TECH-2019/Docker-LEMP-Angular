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
        <img class="business_item_img" src="img/business/<?php echo $business[4]["img"]; ?>" alt="<?php echo $business[4]["ttl"]; ?>">
      </div>
      <div class="business_text txtC">
        <h2 class="head-border txtC"><?php echo $business[4]["ttl"]; ?></h2>
        <h3 class="txtC">事業内容</h3>
        <p><?php echo $business[4]["detail"]; ?></p><br>
        Tel:<a href="tel:<?php echo $business[4]["tel"]; ?>"><?php echo $business[4]["tel"]; ?></a>
      </div>
    </main>

    <!-- footer.php -->
    <?php include('footer.php'); ?>
  </div>
  <!-- script.php -->
  <?php include('script.php'); ?>
</body>
</html>

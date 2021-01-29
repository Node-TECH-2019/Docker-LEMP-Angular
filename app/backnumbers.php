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
<!-- backnumbers.php -->
<main class="business_continer">
<div class="business_item centering trim">
<img class="business_item_img" src="img/backnumbers.jpg" alt="活動報告">
</div>
<div class="backnumbers_text txtC">
<h2 class="head-border txtC pl30 pr30">活動報告</h2>
<ul>
<?php
for ($i=0; $i < count($bucknumbers_content) ; $i++) {
  $keyword = array_keys($bucknumbers_content)[$i] ;
echo '<li class="info center"><h3 class="ml20 dsBL txtL">－' . $keyword . '－</h3><div class="contents"><ul>';
for ($n=0; $n < count($bucknumbers_content[$keyword]) ; $n++) {
echo '<li id="' . $bucknumbers[$n] . '"><ul class="mt5"><li class="month_day dsIB"><p class="fz30 days">' . $bucknumbers_content[$keyword][$n][0] . '</p><p class="fz14">' . $bucknumbers_content[$keyword][$n][1] . '</p></li><li class="dsIB"><p class="backnumbers_category fz07 txtC bg_BLACK WHITE">' . $bucknumbers_content[$keyword][$n][2] . '</p><p class="description">' . $bucknumbers_content[$keyword][$n][3] . '</p></li></ul></li>';
}
echo'</ul></div></li>';
}
?>
</ul>
</div>
</main>
<!-- footer.php -->
<?php include('footer.php'); ?>
</div>
<!-- script.php -->
<?php include('script.php'); ?>
</body>
</html>



<?php //header, heroheader, business, details
$business = array(
  ["ttl"=>"営業代行","img"=>"sales.jpg","content"=>"現在は通信事業の訪問営業の代理店やQRコード決済の営業テレアポ事業をしています。現在12名稼働中。その他の商材もどんどん展開していきます。","id"=>"","detail"=>"光回線営業、QRコード営業、ハルエネ電気営業、太陽光営業など<br><br>訪問営業と在宅でのテレアポをメインにやってます。<br>他の商材があればご相談下さい。まずは、お電話下さい！！","tel"=>"070-8383-2840"],
  ["ttl"=>"ホームページ制作","img"=>"web_design.jpg","content"=>"ホームページ制作チームがあなたのイメージ通りを一生懸命再現します。","id"=>"","detail"=>"テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。","tel"=>""],
  ["ttl"=>"オーダースーツ制作","img"=>"order_suits.jpg","content"=>"1着42500円から。<br>ブランド生地も取り揃えております。裏生地からボタンまでこだわります！！世界で一番お客様に合う1着を！！","id"=>"","detail"=>"テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。","tel"=>""],
  ["ttl"=>"動画編集","img"=>"video_edit.jpg","content"=>"20分動画で5000円（交通費別）<br>完成後、動画直しは2回まで無料！！<br>会社紹介や自己PRに最適です！","id"=>"","detail"=>"テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。","tel"=>""],
  ["ttl"=>"スマホ教室","img"=>"sp_school.jpg","content"=>"元docomoショップ内でスマホ教室をしてたプロが教えます。スマホ初心者から上級編まで。場所はあなたの最寄りの喫茶店で♩<br>60分3000円（交通費別）<br>月4回コース1万円（交通費別）","id"=>"","detail"=>"テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。","tel"=>""]);
for ($i=0; $i < count($business) ; $i++) {
  $business[$i]["id"] = substr($business[$i]["img"], 0, strcspn($business[$i]["img"],'.'));
}
?>

<?php //information, backnumbers
$bucknumbers_content = array(
"2020" => array(array("30", "SEP", "STORY", "会社を設立しました。", '2020.09.30'), array("04","OCT","STORY", "ウェブサイトを公開しました。", '2020.10.04')),
"2021" => array(array("01", "JAN", "OTHER", "あけましておめでとうございます！", '2021.01.01'), array("25", "FEB", "BUSINESS", "動画編集の事業を始めました。", '2020.02.25')));
$bucknumbers = array();
for ($i=0; $i < count($bucknumbers_content) ; $i++) {
$keyword = array_keys($bucknumbers_content)[0] ;
for ($n=0; $n < count($bucknumbers_content[$keyword]) ; $n++) {
  $bucknumbers[$n] = strtr($bucknumbers_content[$keyword][$n][4], '.', '_');
}
}?>

<?php //philosophy
$philosophy_img = "philosophy_01_ver3_trim.png";
$philosophy_kazuya = "kazuya_ver2.png";
$philosophy_shinnosuke = "shinnosuke.png";
$philosophy_icon = array("Facebook","Twitter","Instagram");
$philosophy_icon_img = array("icon_Facebook.png","icon_twitter.png","icon_Instagram.png");
$philosophy_icon_kazuya_url = array("https://www.facebook.com/kazya3279","https://twitter.com/tgu_waya","https://line.me/ti/p/aIFYM2mfSq");
$philosophy_icon_shinnosuke_url = array("#","#","#");
$philosophy_content = array("「共に生きる」", "を支える力になりたい。");
$philosophy_introduction_kazuya = array("光永 和矢", "生年月日：", "1991/06/15", "出身地：", "三重県津市", "趣味：", "スポーツマンガを読む", "過去：", "高校時代甲子園レギュラー");
$philosophy_introduction_shinnosuke = array("武田 真之介", "生年月日：", "1991/10/10", "出身地：", "埼玉県", "趣味：", "サーフィン、楽器", "役割：", "設計開発、プロジェクトマネジメント、デザイン");
?>

<?php //company, footer
$companyName = "合同会社FakieStyle";
$address = "愛知県名古屋市";
$address_url = 'https://goo.gl/maps/1eRGShvz9qFqH58i7';
$establish = "設立";
$foundingEmployee = ["光永 和矢", "武田 真之介"];
$BusinessContent = [
  ["コミュファ光の営業 (営業代行)", "イベント業務"],
  ["コンサルティング", "ホームページ制作"],
  ["オーダースーツ", "ドコモスマホ教室の講師"],
  ["パーソナルトレーナー", "ボイストレーナー"],
  ["ネットショップ経営", ""]
];
$telhref = 'tel:070-8383-2840';
$tel_number = '070-8383-2840';
$privacyhref = '#';
?>
<?php //header, footer
$logo = "fakie_style_logo.svg"; ?>

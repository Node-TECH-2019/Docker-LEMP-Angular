<?php include('Model.php'); ?>
<?php
//エスケープ処理やデータチェックを行う関数のファイルの読み込み
require './libs/functions.php';

//お問い合わせ日時を日本時間に
date_default_timezone_set('Asia/Tokyo');

//POSTされたデータがあれば変数に格納、なければ NULL（変数の初期化）
$companyname = isset( $_POST[ 'companyname' ] ) ? $_POST[ 'companyname' ] : NULL;
$your_name = isset( $_POST[ 'your_name' ] ) ? $_POST[ 'your_name' ] : NULL;
$furigana = isset( $_POST[ 'furigana' ] ) ? $_POST[ 'furigana' ] : NULL;
$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : NULL;
$email_check = isset( $_POST[ 'email_check' ] ) ? $_POST[ 'email_check' ] : NULL;
$tel = isset( $_POST[ 'tel' ] ) ? $_POST[ 'tel' ] : NULL;
$subject = isset( $_POST[ 'subject' ] ) ? $_POST[ 'subject' ] : NULL;
$comment = isset( $_POST[ 'comment' ] ) ? $_POST[ 'comment' ] : NULL;

//POSTされたデータを整形（前後にあるホワイトスペースを削除）
$companyname = trim( $companyname );
$your_name = trim( $your_name );
$furigana = trim( $furigana );
$email = trim( $email );
$email_check = trim( $email_check );
$tel = trim( $tel );
$subject = trim( $subject );
$comment = trim( $comment );

//送信ボタンが押された場合の処理
if (isset($_POST['submitted'])) {

  //POSTされたデータに不正な値がないかを別途定義した checkInput() 関数で検証
  $_POST = checkInput( $_POST );

  //エラーメッセージを保存する配列の初期化
  $error = array();

  //値の検証
  if ( preg_match( '/\A[[:^cntrl:]]{0,50}\z/u', $companyname ) == 0 ) {
    $error['companyname'] = '*会社名／団体名は50文字以内でお願いします。';
  }
  if ( $your_name == '' ) {
    $error['your_name'] = '*お名前は必須項目です。';
    //制御文字でないことと文字数をチェック
  } else if ( preg_match( '/\A[[:^cntrl:]]{1,30}\z/u', $your_name ) == 0 ) {
    $error['your_name'] = '*お名前は30文字以内でお願いします。';
  }
  if ( $furigana  == '' ) {
    $error['furigana '] = '*お名前は必須項目です。';
    //制御文字でないことと文字数をチェック
  } else if ( preg_match( '/\A[[:^cntrl:]]{1,50}\z/u', $furigana  ) == 0 ) {
    $error['furigana '] = '*お名前は50文字以内でお願いします。';
  }
  if ( $email == '' ) {
    $error['email'] = '*メールアドレスは必須です。';
  } else { //メールアドレスを正規表現でチェック
    $pattern = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/uiD';
    if ( !preg_match( $pattern, $email ) ) {
      $error['email'] = '*メールアドレスの形式が正しくありません。';
    }
  }
  if ( $email_check == '' ) {
    $error['email_check'] = '*確認用メールアドレスは必須です。';
  } else { //メールアドレスを正規表現でチェック
    if ( $email_check !== $email ) {
      $error['email_check'] = '*メールアドレスが一致しません。';
    }
  }
  if ( preg_match( '/\A[[:^cntrl:]]{0,30}\z/u', $tel ) == 0 ) {
    $error['tel'] = '*電話番号は30文字以内でお願いします。';
  }
  if ( $tel != '' && preg_match( '/\A\(?\d{2,5}\)?[-(\.\s]{0,2}\d{1,4}[-)\.\s]{0,2}\d{3,4}\z/u', $tel ) == 0 ) {
    $error['tel_format'] = '*電話番号の形式が正しくありません。';
  }
  if(!isset($_POST['contact_type'])){
    $error['contact_type'] = '*お問い合わせジャンルは必須項目です。';
  }
  if ( $subject == '' ) {
    $error['subject'] = '*件名は必須項目です。';
    //制御文字でないことと文字数をチェック
  } else if ( preg_match( '/\A[[:^cntrl:]]{1,100}\z/u', $subject ) == 0 ) {
    $error['subject'] = '*件名は100文字以内でお願いします。';
  }
  if ( $comment == '' ) {
    $error['comment'] = '*内容は必須項目です。';
    //制御文字（タブ、復帰、改行を除く）でないことと文字数をチェック
  } else if ( preg_match( '/\A[\r\n\t[:^cntrl:]]{1,1050}\z/u', $comment ) == 0 ) {
    $error['comment'] = '*内容は1000文字以内でお願いします。';
  }

  //エラーがなく且つ POST でのリクエストの場合
  if (empty($error) && $_SERVER['REQUEST_METHOD']==='POST') {

    //メールアドレス等を記述したファイルの読み込み
    require './libs/mailvars.php';

    //メール本文の組み立て。値は h() でエスケープ処理
    $mail_body = 'ホームページからのお問い合わせ' . "\n\n";
    $mail_body .=  "会社名／団体名： " . h($companyname) . "\n";
    $mail_body .=  "お名前： " . h($your_name) . "（" . h($furigana) . "）" . "\n";
    $mail_body .=  "Email： " . h($email) . "\n"  ;
    $mail_body .=  "お電話番号： " . h($tel) . "\n\n" ;
    $mail_body .=   "お問い合わせジャンル ：" ;
    $max=count($_POST['contact_type']);
    for($i=0;$i<$max; $i++){
      if($i<count($_POST['contact_type'])-1){
        $mail_body .= $_POST['contact_type'][$i] . ",";
      } else {
        $mail_body .= $_POST['contact_type'][$i];
      }
    }
    $mail_body .=   "\n" ;
    $mail_body .=  "＜お問い合わせ内容＞" . "\n" . h($comment);

    //-------- sendmail を使ったメールの送信処理 ------------

    //メールの宛先（名前<メールアドレス> の形式）。値は mailvars.php に記載
    $mailTo = mb_encode_mimeheader(MAIL_TO_NAME) ."<" . MAIL_TO. ">";

    //Return-Pathに指定するメールアドレス
    $returnMail = MAIL_RETURN_PATH; //
    //mbstringの日本語設定
    mb_language( 'ja' );
    mb_internal_encoding( 'UTF-8' );

    // 送信者情報（From ヘッダー）の設定
    $header = "From: " . mb_encode_mimeheader($your_name) ."<" . $email. ">\n";
    $header .= "Cc: " . mb_encode_mimeheader(MAIL_CC_NAME) ."<" . MAIL_CC.">\n";
    $header .= "Bcc: <" . MAIL_BCC.">";

    //メールの送信
    //セーフモードがOnの場合は第5引数が使えない
    if ( ini_get( 'safe_mode' ) ) {
      $result = mb_send_mail( $mailTo, $subject, $mail_body, $header );
    } else {
      $result = mb_send_mail( $mailTo, $subject, $mail_body, $header, '-f' . $returnMail );
    }

    //メール送信の結果判定
    if ( $result ) {

      //自動返信メール
      //ヘッダー情報
      $ar_header = "MIME-Version: 1.0\n";
      $ar_header .= "From: " . mb_encode_mimeheader( AUTO_REPLY_NAME ) . " <" . MAIL_TO . ">\n";
      $ar_header .= "Reply-To: " . mb_encode_mimeheader( AUTO_REPLY_NAME ) . " <" . MAIL_TO . ">\n";
      //件名
      $ar_subject = 'お問い合わせ自動返信メール';
      //本文
      $ar_body = $your_name." 様\n\n";
      $ar_body .= "この度は、お問い合わせ頂き誠にありがとうございます。" . "\n\n";
      $ar_body .= "下記の内容でお問い合わせを受け付けました。\n\n";
      $ar_body .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
      $ar_body .= "お名前：" . $your_name . $furigana . "\n";
      $ar_body .= "メールアドレス：" . $email . "\n";
      $ar_body .= "お電話番号： " . $tel . "\n\n" ;
      $ar_body .=   "お問い合わせジャンル ：" ;
      $max=count($_POST['contact_type']);
      for($i=0;$i<$max; $i++){
        if($i<count($_POST['contact_type'])-1){
          $ar_body .= $_POST['contact_type'][$i] . ",";
        } else {
          $ar_body .= $_POST['contact_type'][$i];
        }
      }
      $ar_body .=   "\n" ;
      $ar_body .=  "＜お問い合わせ内容＞" . "\n" . h($comment);

      if ( ini_get( 'safe_mode' ) ) {
        $result2 = mb_send_mail( $email, $ar_subject, $ar_body , $ar_header  );
      } else {
        $result2 = mb_send_mail( $email, $ar_subject, $ar_body , $ar_header , '-f' . $returnMail );
      }

      //空の配列を代入し、すべてのPOST変数を消去
      $_POST = array();

      //変数の値も初期化
      $companyname = '';
      $your_name = '';
      $furigana = '';
      $email = '';
      $email_check = '';
      $tel = '';
      $contact_type = '';
      $subject = '';
      $comment = '';

      //再読み込みによる二重送信の防止
      $params = '?result='. $result .'&result2=' . $result2;
      $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
      header('Location:' . $url . $params);
      exit;
    }
  }
}
?>

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
    <!-- heroheader.php -->
    <?php include('heroheader.php'); ?>
    <!-- information.php -->
    <?php include('information.php'); ?>
    <main>
      <!-- business.php -->
      <?php include('business.php'); ?>
      <!-- philosophy.php -->
      <?php include('philosophy.php'); ?>
      <!-- company.php -->
      <?php include('company.php'); ?>
      <!-- contact.php -->
      <?php include('contact.php'); ?>
    </main>
    <!-- footer.php -->
    <?php include('footer.php'); ?>
  </div>
    <!-- script.php -->
    <?php include('script.php'); ?>
</body>
</html>

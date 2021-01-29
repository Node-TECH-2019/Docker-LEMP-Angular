<?php
$res1="";
$res2="";
$url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
if ( isset($_GET['result']) && $_GET['result'] ) {
  $res1 = "送信完了！　";
  if ( isset($_GET['result2']) && $_GET['result2'] ) {
    $res2 = "確認の自動返信メールをお送りいたしました。";
    echo "<script>alert('" . $res1 . $res2 . "');\nwindow.location.href = '" . $url . "';</script>";
  } elseif (isset($_GET['result2']) && !$_GET['result2']){
    $res2 = "確認の自動返信メールが送信できませんでした。";
  }
  echo "<script>alert('" . $res1 . $res2 . "');\nwindow.location.href = '" . $url . "';</script>";
} elseif (isset($result) && !$result ){
  $res1 = "申し訳ございませんが、送信に失敗しました。\nしばらくしてもう一度お試しになるか、メールにてご連絡ください。";
}
?>
<!-- contact -->
    <section id="contact">
      <h2 class="head-border txtC pl30 pr30">Contact</h2>
      <div>
        <form id="contact_form" class="center" action="#" method="post" onsubmit="return confirm_test()">
          <ul>
            <li>
              <ul class="contact_list">
                <li>
                  <label for="companyname" class="bold  txtL contact_font">会社名／団体名
                    <span class="bg_PURPLE needtag WHITE ml10 mb5 fz10 pt2 pb2 pl10 pr10">任意</span>
                  </label>
                </li>
                <li>
                <span class="error"><?php if ( isset( $error['companyname'] ) ){ echo h( $error['companyname'] );} ?></span>
                  <input class="w100pc cotact_form" id="companyname" type="text" name="companyname" placeholder="会社名／団体名" value="<?php echo h($companyname); ?>">
                </li>
              </ul>
            </li>
            <li>
              <ul class="contact_list">
                <li>
                  <label for="your_name" class="txtL bold contact_font">お名前
                    <span class="bg_RED needtag WHITE ml10 mb5 fz10 pt2 pb2 pl10 pr10">必須</span>
                  </label>
                </li>
                <li>
                <span class="error"><?php if ( isset( $error['your_name'] ) ){ echo h( $error['your_name'] );} ?></span>
                  <input class="w100pc cotact_form" id="your_name" type="text" name="your_name" placeholder="氏名" required value="<?php echo h($your_name); ?>">
                </li>
              </ul>
            </li>
            <li>
              <ul class="contact_list">
                <li>
                  <label for="furigana" class="txtL bold contact_font">ふりがな
                    <span class="bg_RED needtag WHITE ml10 mb5 fz10 pt2 pb2 pl10 pr10">必須</span>
                  </label>
                </li>
                <li>
                <span class="error"><?php if ( isset( $error['furigana'] ) ){ echo h( $error['furigana'] );} ?></span>
                  <input class="w100pc cotact_form" id="furigana" type="text" name="furigana" placeholder="ふりがな" required value="<?php echo h($furigana); ?>">
                </li>
              </ul>
            </li>
            <li>
              <ul class="contact_list">
                <li>
                   <label for="email" class="txtL bold contact_font">Email アドレス
                    <span class="bg_RED needtag WHITE ml10 mb5 fz10 pt2 pb2 pl10 pr10">必須</span>
                  </label>
                </li>
                <li>
                <span class="error"><?php if ( isset( $error['email'] ) ){ echo h( $error['email'] );} ?></span>
                  <input type="email" class="w100pc cotact_form" id="email" name="email" placeholder="Email アドレス" required value="<?php echo h($email); ?>">
                </li>
              </ul>
            </li>
            <li>
              <ul class="contact_list">
                <li>
                  <label for="email_check" class="txtL bold contact_font">Email アドレス（確認）
                    <span class="bg_RED needtag WHITE mb5 fz10 pt2 pb2 pl10 pr10">必須</span>
                  </label>
                </li>
                <li>
                <span class="error"><?php if ( isset( $error['email_check'] ) ){ echo h( $error['email_check'] );} ?></span>
                  <input type="email" class="w100pc cotact_form" id="email_check" name="email_check" placeholder="Email アドレス（確認）" required value="<?php echo h($email_check); ?>">
                </li>
              </ul>
            </li>
            <li>
              <ul class="contact_list">
                <li>
                  <label for="tel" class="txtL bold contact_font">電話番号
                    <span class="bg_PURPLE needtag WHITE ml10 mb5 fz10 pt2 pb2 pl10 pr10">任意</span>
                  </label>
                </li>
                <li>
                <span class="error"><?php if ( isset( $error['tel'] ) ){ echo h( $error['tel'] );} ?></span>
                  <input type="tel" class="w100pc cotact_form" id="tel" name="tel" value="<?php echo h($tel); ?>" placeholder="お電話番号（半角英数字でご入力ください）">
                </li>
              </ul>
            </li>
            <li>
              <ul class="contact_list">
                <li>
                  <label for="contact_type" class="txtL bold contact_font">お問い合わせの種類（※複数選択可）
                    <span class="bg_RED needtag WHITE ml10 mb5 fz10 pt2 pb2 pl10 pr10">必須</span>
                  </label>
                </li>
                <li>
                <span class="error"><?php if ( isset( $error['contact_type'] ) ){ echo h( $error['contact_type'] );} ?></span>
                  <select class="w100pc cotact_form " id="contact_type" name="contact_type[]" size="3"  multiple>
                    <option value="営業代行">営業代行</option>
                    <option value="ホームページ制作">ホームページ制作</option>
                    <option value="オーダースーツ制作">オーダースーツ制作</option>
                    <option value="ブランディングコンサル">ブランディングコンサル</option>
                    <option value="Youtube動画制作">Youtube動画制作</option>
                    <option value="スマホ教室">スマホ教室</option>
                  </select>
                </li>
              </ul>
            </li>
            <li>
              <ul class="contact_list">
                <li>
                  <label for="subject" class="txtL bold contact_font">件名
                    <span class="bg_RED needtag WHITE ml10 mb5 fz10 pt2 pb2 pl10 pr10">必須</span>
                  </label>
                </li>
                <li>
                <span class="error"><?php if ( isset( $error['subject'] ) ){ echo h( $error['subject'] );} ?></span>
                  <input type="text" class="w100pc cotact_form" id="subject" name="subject"  placeholder="件名" required value="<?php echo h($subject); ?>">
                </li>
              </ul>
            </li>
            <li>
              <ul class="contact_list">
                <li>
                  <label for="comment" class="txtL bold contact_font">お問い合わせ内容
                    <span class="bg_RED needtag WHITE ml10 mb5 fz10 pt2 pb2 pl10 pr10">必須</span>
                  </label>
                </li>
                <li>
                <span class="error"><?php if ( isset( $error['comment'] ) ){ echo h( $error['comment'] );} ?></span>
                  <textarea class="w100pc" id="comment" name="comment" placeholder="お問い合わせ内容（1000文字まで）をお書きください" required rows="3"><?php echo h($comment); ?></textarea>
                </li>
              </ul>
            </li>
            <li class="btn_box">
              <ul class="btn_box_inner">
                <li class="btn_list">
                  <button class="btn btn_1" type="submit" name="submitted"><span class="btn-Text">送信</span></button>
                </li>
                <li class="btn_list">
                  <button class="btn btn_2" type="reset" value="Reset"><span class="btn-Text">リセット</span></button>
                </li>
              </ul>
            </li>
          </ul>
        </form>
      </div>
    </section>
    <!-- contact -->

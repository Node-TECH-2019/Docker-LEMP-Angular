<?php
//メールの宛先（To）のメールアドレス
define('MAIL_TO', $sendMail);
//メールの宛先（To）の名前
define('MAIL_TO_NAME', $destination);
//Cc の名前
define('MAIL_CC', $sendCopymail);
//Cc の名前
define('MAIL_CC_NAME', $sendCopyName);
//Bcc
define('MAIL_BCC', $snedBlindCopy);
//Return-Pathに指定するメールアドレス
define('MAIL_RETURN_PATH', $sendMail);
//自動返信の返信先名前
define('AUTO_REPLY_NAME', $companyName);
?>

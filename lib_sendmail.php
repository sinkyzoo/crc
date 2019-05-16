<?php
/* vers:190225
*/
mb_language("Japanese");
mb_internal_encoding("utf-8");

$site = "koiwacrc.net";
$ref = $_SERVER['HTTP_REFERER'];
  $sendmail = 'info@koiwacrc.net';
  $subject = 'ホームページよりメール / '. $_POST['kind'];
  $from = $_POST['mail'];
  $body = "Name: ". $_POST['name'] . "\n";
  $body .= "Return-Path: ". $_POST['mail'] . "\n";
  $body .= "Addr: ". $_SERVER['REMOTE_ADDR'] ."\n";
  $body .= "Mail: ". $from . "\n";
  $body .= "Message: ". $_POST['message'] ."\n";
  $body .= "REFERER: $ref\n";
  $body .= "--------------------------------\n";

  $header = "From: $from"."\n"."X-Priority: 1"."\n"."X-Mailer: ".phpversion();

  //$ref = $_SERVER['HTTP_REFERER'];
  //if(preg_match(/$serv/,$ref)) {
  //  header("Location:". $serv);
  //}

  mb_send_mail($sendmail,$subject,$body,$header);


//header("Content-Type: application/json;charset=utf-8");
//echo json_encode(array("name"=>$_POST['name'],"mail"=>$_POST['mail'],"message"=>$_POST['message']));
?>

<?php
  ini_set('display_errors', 1);

  require_once __DIR__ . '/bootstrap.php';

  use Dropbox\DropboxInit;

  $dropbox = new DropboxInit();
  // case1 : get account
  // $dropbox->getAccountInfo();

  // case2 : get metadata
  $dropbox->getFileByFolder('<root>');


  // if (!isset($_GET['code'])) {
  //   header( 'Location: ' . $dropbox->getRedirect());
  // }
  // else {
  //   $code = $_GET['code'];
  //   // $dropbox->getToken($code);
  //   $dropbox->getAccountInfo();
  // }
  //
  // $token = $_GET["access_token"];
  // echo $token;

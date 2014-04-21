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
  //
  // $token = $_GET["access_token"];
  // echo $token;

  // header( 'Location: http://www.yoursite.com/new_page.html' ) ;
  // create curl resource
//   $ch = curl_init();
//   $url = "https://www.dropbox.com/1/oauth2/authorize";
//   // $query = "?response_type=code&client_id=d78xyghx14zrfhv&redirect_uri=http://localhost/dropbox";
//   $data = array(
//     // 'response_type' => 'code',
//     'client_id' => 'd78xyghx14zrfhv',
//     'redirect_uri' => 'http://localhost/dropbox',
//   );
//   // set url
// ;


//   // curl_setopt($ch, CURLOPT_POST, true);
//   curl_setopt($ch, CURLOPT_URL, $url);
//   curl_setopt($ch, CURLOPT_HEADER, true);
//   curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
//   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


//   $a = curl_exec($ch);
//     // do whatever you want with the result
//  var_dump(curl_getinfo($ch));
//   curl_close( $ch );


//   // the returned headers
//   $headers = explode("\n",$a);
//   // if there is no redirection this will be the final url
//   $redir = $url;
//   // loop through the headers and check for a Location: str
//   $j = count($headers);
//   for($i = 0; $i < $j; $i++){
//   // if we find the Location header strip it and fill the redir var
//   if(strpos($headers[$i],"Location:") !== false){
//           $redir = trim(str_replace("Location:","",$headers[$i]));
//           break;
//       }
//   }

<?php
namespace Dropbox;

class DropboxInit {
  const URL = "http://www.dropbox.com/1/oauth2/authorize";
  const APP_ID = "d78xyghx14zrfhv";
  const REDIRECT_URL = "http://localhost/dropbox";
  const RESPONSE_TYPE = "code";
  const SECRET = "xyd8rcw7upbgfm3";

  public $redirect;

  public function __construct() {
    $app_id_query = "?client_id=" . self::APP_ID;
    $redirect_url_query = "&redirect_uri=" . self::REDIRECT_URL;
    $token_query = "&response_type=" . self::RESPONSE_TYPE;

    $this->redirect = self::URL . $app_id_query . $redirect_url_query . $token_query;
  }


  public function getRedirect() {
    return $this->redirect;
  }

  public function getToken($code) {
    //http://stackoverflow.com/questions/8902376/php-how-to-get-the-access-token-authenticating-with-oauth-2-0-for-google-api
    $oauth2token_url = "https://api.dropbox.com/1/oauth2/token";
    $clienttoken_post = array(
      "code" => $code,
      "client_id" => self::APP_ID,
      "client_secret" => self::SECRET,
      "redirect_uri" => self::REDIRECT_URL,
      "grant_type" => "authorization_code"
    );

    $curl = curl_init($oauth2token_url);

    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $clienttoken_post);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $json_response = curl_exec($curl);
    curl_close($curl);

    $authObj = json_decode($json_response);
    var_dump($authObj);
  }

  public function getAccountInfo() {
    $token = 'QcFqM3Ok5KUAAAAAAAACUtISyV2G7LTHKWzuzb3kf2dOdapRL5wVLad2LAjaZhiY';
    $url = "https://api.dropbox.com/1/account/info";

    $curl = curl_init($url . '?access_token=' . $token);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $json_response = curl_exec($curl);
    curl_close($curl);

    $authObj = json_decode($json_response);
    var_dump($authObj);
  }

  public function getFileByFolder($folder) {
    $token = 'QcFqM3Ok5KUAAAAAAAACUtISyV2G7LTHKWzuzb3kf2dOdapRL5wVLad2LAjaZhiY';
    // https://api.dropbox.com/1/metadata/<root>/<path>
    // $url = 'https://api.dropbox.com/1/metadata/' . $folder;
    $url = 'https://api.dropbox.com/1/metadata/<root>';
    $curl = curl_init($url . '?access_token=' . $token);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $json_response = curl_exec($curl);
    curl_close($curl);

    $authObj = json_decode($json_response);
    var_dump($authObj);
  }
}

<?php if(!defined('SERVER_ROOT')){header('/error_404');exit;}

/**
*
* @Author Alan James - alanjames1987@gmail.com
*
*/

class MURL {

  public static function current(){
    return 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  }

  public static function segment($segment){
    $uri = explode('/',  $_SERVER['REQUEST_URI']);

    if(!empty($uri[$segment])){
      return MStrings::sub_before($uri[$segment], '?');
    }else{
      return NULL;
    }

  }

  public static function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
  }

}

?>
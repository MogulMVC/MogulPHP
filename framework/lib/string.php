<?php if(!defined("SERVER_ROOT")){header("/error_404");exit;}

function string_random($length){

  $possible_characters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

  $string = NULL;

  for($i=0; $i<$length; $i++) {
    $random_number = rand(0, 61);

    $random_character = $possible_characters[$random_number];

    $string = $string . $random_character;

  }

  return $string;

}

function string_sub_before($string, $character){

  if($character_position = strpos($string, $character)){
    $string = substr($string, 0, $character_position);
  }

  return $string;

}

function string_url($string){

  $string = preg_replace("/(http:\/\/[^\s]+)/", "<a href=\"$1\">$1</a>", $string);

  return $string;

}


function string_url_title($title, $seperator = "-"){
  $url_title = str_replace(" ", $seperator, $title);
  return($url_title);
} 

?>
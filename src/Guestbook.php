<?php

namespace Example;

class Guestbook {

  public static function ShowAll() {


  }


  public static function DisplayComment($content, $user) {
    return sprintf(
      '"%s" - %s',
      $content,
      $user
    );
  } 

}

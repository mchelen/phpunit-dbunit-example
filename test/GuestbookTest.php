<?php

use PHPUnit\Framework\TestCase;
use Example\Guestbook;


class GuestbookTest extends TestCase {

  public function testDisplayComment() {
    $output = Guestbook::DisplayComment('Hello buddy!','joe');

    $expected = '"Hello buddy!" - joe';

    $this->assertEquals($expected, $output);
  }

}

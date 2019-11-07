<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class TemplateHome extends Controller
{
  public function loop() {
    $args = array('post_type' => 'post',' posts_per_page' => '10');
    $query = new WP_Query($args);
    return $query;
  }
}

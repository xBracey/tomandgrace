<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class TemplateHome extends Controller
{
  protected $acf = true;

  public function tom_query() {
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => '1',
      'meta_key'		=> 'tom_or_grace',
      'meta_value'	=> 'Tom'
    );
    $query = new WP_Query($args);
    return $query;
  }

  public function grace_query() {
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => '1',
      'meta_key'		=> 'tom_or_grace',
      'meta_value'	=> 'Grace'
    );
    $query = new WP_Query($args);
    return $query;
  }
}

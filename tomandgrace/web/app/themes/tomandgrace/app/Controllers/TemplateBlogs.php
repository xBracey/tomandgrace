<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class TemplateBlogs extends Controller
{
    public function query()
    {
        $args = [];

        $type = self::getType();

        //Todo add pagination

        if ($type == "all") {
            $args = [
                'post_type' => 'post',
                'posts_per_page' => '-1',
            ];
        } else if ($type = "tom") {
            $args = [
                'post_type' => 'post',
                'posts_per_page' => '-1',
                'meta_key' => 'tom_or_grace',
                'meta_value' => 'Tom',
            ];
        } else {
            $args = [
                'post_type' => 'post',
                'posts_per_page' => '-1',
                'meta_key' => 'tom_or_grace',
                'meta_value' => 'Grace',
            ];
        }

        $query = new WP_Query($args);
        return $query;
    }

    public function getType()
    {
        if (!isset($_GET['type'])) {
            return "all";
        } else {
            return $_GET['type'];
        }
    }
}

<?php 

namespace Bazaar;

class Bazaar
{
    public static function item() {
      return self::get_item("items");
    }
    public static function adj() {
      return self::get_item("adj");
    }
    public static function object() {
      return self::get_item("adj").' '.self::get_item("items");
    }
    public static function super_item() {
      return self::get_item("superitems");
    }
    public static function super_adj() {
      return self::get_item("superadj");
    }
    public static function super_object() {
      return self::get_item("superadj").' '.self::get_item("superitems");
    }
    public static function heroku() {
      return self::get_item("superadj").'-'.self::get_item("superitems").'-'.rand(0,9999);
    }
    public static function get_item($filename) {
      $words = file(__DIR__."/../../words/$filename.txt"); 
      return trim($words[rand(0, count($words) - 1)];
    }
}
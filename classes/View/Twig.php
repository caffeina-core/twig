<?php

/**
 * View\Twig
 *
 * Core\View Twig Bridge.
 * 
 * @package core
 * @author stefano.azzolini@caffeinalab.com
 * @version 1.0
 * @copyright Caffeina srl - 2014 - http://caffeina.co
 */

namespace View;

class Twig implements Engine {
    protected static $loader = null;
    protected static $templatePath = '';
    protected static $twig = null;
    const EXTENSION = 'twig';

    public function __construct($path,$options=[]){
      static::$templatePath = rtrim($path,'/').'/';
      static::$loader = new \Twig_Loader_Filesystem($path);
      static::$twig   = new \Twig_Environment(static::$loader,$options);
    }

    public function __call($n,$p){
      return call_user_func_array([static::$twig,$n],$p);
    }

    public static function __callStatic($n,$p){
      return forward_static_call_array([static::$twig,$n],$p);
    }

    public function render($template,$data=[]){
        return static::$twig->render($template.'.twig',$data);
    }
    
    public static function exists($path){
        return is_file(static::$templatePath.$path.'.twig');
    }

    public static function addGlobal($key,$val=null){
      if(is_array($key) || is_object($key)){
        foreach ((array)$key as $property=>$val) {
          static::$twig->addGlobal($property, $val);
        }
      } else {
        static::$twig->addGlobal($key, $val);
      }
    }

    public static function addFilter($name, callable $filter = null){
      if(is_array($name) || is_object($name)){
        foreach ((array)$name as $property => $val) {
          static::$twig->addFilter(new \Twig_SimpleFilter($property, $val));
        }
      } else {
        static::$twig->addFilter(new \Twig_SimpleFilter($name, $filter));
      }
    }

    public static function addFunction($name, callable $function = null){
      if(is_array($name) || is_object($name)){
        foreach ((array)$name as $property => $val) {
          static::$twig->addFunction(new \Twig_SimpleFunction($property, $val));
        }
      } else {
        static::$twig->addFunction(new \Twig_SimpleFunction($name, $function));
      }
    }
    
}

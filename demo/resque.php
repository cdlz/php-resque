<?php
date_default_timezone_set('GMT');
#require 'bad_job.php';
#require 'job.php';
#require 'php_error_job.php';
#require 'long_job.php';


spl_autoload_register(function($class){
       set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__);
       $class_file = strtolower($class) . '.php';
       if (file_exists($class_file)) {
           require_once($class_file);
       }
   });

require '../bin/resque.php';

<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

//
$category = \Hillel\Model\Category::find($_POST['id']);



//да я знаю - єто КОСТЫЛЬ
if(isset($_POST['marker'])){
   exit;
}

if(isset($_POST['update'])){
$category->title=$_POST['title'];
$category->slug=$_POST['slug'];
$category->save();
header('location: list-categories.php');
}
echo $blade->make('pages/update-category',['category' => $category])->render();
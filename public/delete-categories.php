<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

$category = \Hillel\Model\Category::find($_POST['id']);
$category->delete();
header('location: list-categories.php');
echo $blade->make('pages/delete-categories')->render();


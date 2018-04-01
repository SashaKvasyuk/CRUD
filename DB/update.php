<?php
require 'functions.php';

$title = $_POST['title'];
$id = $_GET['id'];

update($id, $title);
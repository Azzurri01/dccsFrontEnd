<?php
require_once 'C:\xampp\htdocs\Frontend\php\Index.php';
require_once 'C:\xampp\htdocs\Frontend\php\ColourModel.php';
$accountModel = new AccountModel();
$result = $accountModel->findAll();
print_r(json_decode($result['response']));
?>
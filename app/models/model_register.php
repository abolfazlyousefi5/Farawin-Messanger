<?php
class model_register extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    function insert($post)
    {
        $username = $post['username'];
        $pass = md5($post['password']);
    }
}
$server = "mysql:host=localhost;dbname=project1";
$user_db = "root";
$user_pass = "";
try {
    $pdo = new PDO($server, $user_db , $user_pass);
    echo ("اتصال به دیتابیس با موفقیت انجام شد!" . "<br>");
} catch (Exception $e) {
    echo $e->getMessage();
}

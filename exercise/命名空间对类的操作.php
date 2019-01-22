<?php
namespace nykj;
class PDO{
    public function a(){
        echo 'PDO/AAAAA';
    }
}

    $pdo = new PDO();
    $pdo->a();
    $pdo = new \PDO('mysql:host=localhost;dbname=xiaojun','root','');
    var_dump($pdo);
<?php
namespace App\Text;
use PDO;
class Text {
    public $db;
    public function __construct() {
        $dsn='mysql:dbname=php-crud;host=localhost';
        $user='root';
        $pass='fazil142';
        try{
            $this->db=new PDO($dsn,$user,$pass);
        }
        catch (PDOException $e){
            echo 'hey something went wrong'.$e->getMessage();
        }
    }
}

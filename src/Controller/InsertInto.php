<?php
declare(strict_types=1);


namespace KubaEnd\Controller;


use KubaEnd\Model\UniversalConnect;
use Exception;

class InsertInto
{
    private $hookup;
    private $sql;
    private $stmt;

    public function __construct(){
        $this->hookup=UniversalConnect::doConnect();
        $this->sql=($_POST['insert']);
        $this->stmt = $this->hookup->prepare($this->sql);

        try{
            $this->stmt->execute();
        } catch (Exception $e){
            echo $e->getMessage();
            exit();
        }

    }
}
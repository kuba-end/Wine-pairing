<?php
declare(strict_types=1);


namespace KubaEnd\Model\Proxy;


use KubaEnd\Model\UniversalConnect;
use Exception;

class HashRegister
{
    private $tableMaster;
    private $hookup;
    private $sql;

    public function __construct(){
        $this->tableMaster="proxyLog";
        $operation = new UniversalConnect();
        $this->hookup=$operation->doConnect();
        $username=($_POST['uname']);
        $pwNow=($_POST['pw']);
        $pwNow=md5($pwNow);
        $this->sql="insert into $this->tableMaster (uname,pw) values ('$username','$pwNow')";
        $stmt=$this->hookup->prepare($this->sql);

        try{
            $stmt->execute();
            echo "Register succsesful";
        } catch (Exception $e) {
            echo "Error! :".$e->getMessage();
            exit();
        }
    }

}
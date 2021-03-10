<?php
declare(strict_types=1);


namespace KubaEnd\Model\Proxy;


use KubaEnd\Model\Proxy\Interfaces\SubjectInterface;
use KubaEnd\Model\UniversalConnect;


class Proxy implements SubjectInterface
{
    private $tableMaster;
    private $hookup;
    private $logGood;
    private $realSubject;

    public function login($uNow,$pNow){
        $uname=$uNow;
        $pw=md5($pNow);
        $this->logGood=false;
        $this->tableMaster="logProxy";
        $this->hookup=UniversalConnect::doConnect();

        $sql= "select uname, pw FROM $this->tableMaster where uname='$uname'";

        if ($result=$this->hookup->query($sql)){
            $row=$result->fetchAll(PDO::FETCH_ASSOC);
            if ($row['pw']==$pw){
                $this->logGood=true;
            }
            $result=null;
        }
        elseif (($result=$this->hookup->query($sql)===false)){
            printf("Error: %s",$this->hookup->errorCode());
            exit();
        }
            $this->hookup=null;
        if ($this->logGood){
            $this->request();
        }
        else{
            'Wrong pass or login provided';
        }
    }

    public function request()
    {
        $this->realSubject=new RealSubject();
        $this->realSubject->request();
    }
}
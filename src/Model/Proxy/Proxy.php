<?php
declare(strict_types=1);


namespace KubaEnd\Model\Proxy;


use KubaEnd\Model\Proxy\Interfaces\SubjectInterface;
use KubaEnd\Model\UniversalConnect;
use PDO;


class Proxy implements SubjectInterface
{
    private string $tableMaster;
    private  $hookup;
    private bool $logGood;
    private object $realSubject;

    public function login($uNow,$pNow){
        $uname=$uNow;
        $pw=md5($pNow);
        $this->logGood=false;
        $this->tableMaster="logProxy";
        $this->hookup=UniversalConnect::doConnect();

        $sql= "select uname, pw FROM proxyLog where uname=:uname";
        $stmt = $this->hookup->prepare($sql);
        $stmt->bindValue("uname",$uname);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $row) {
                if ($row['pw'] == $pw) {
                    $this->logGood = true;
                }
            }

            $this->hookup=null;
        if ($this->logGood){
            $this->request();
        }
        else{
            echo 'Wrong pass or login provided';
        }
    }

    public function request()
    {
        $this->realSubject=new RealSubject();
        $this->realSubject->request();
    }
}
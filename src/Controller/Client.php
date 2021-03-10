<?php
declare(strict_types=1);

namespace KubaEnd\Controller;

use KubaEnd\Model\Proxy\Proxy;
use KubaEnd\Model\Proxy\Interfaces\SubjectInterface;
use KubaEnd\Model\UniversalConnect;
use PDO;

class Client
{
    private $uname;
    private $pw;
    private $proxy;
    /**
     * @var object|PDO
     */
    private $hookup;

    public function __construct(){
        $this->tableMaster="proxyLog";
        $this->hookup=UniversalConnect::doConnect();
        $this->uname=filter_var(($_POST['uname']),FILTER_SANITIZE_STRING);
        $this->pw=filter_var(($_POST['pw']),FILTER_SANITIZE_STRING);
        $this->getInterface($this->proxy=new Proxy());

    }
    private function getInterface(SubjectInterface $proxy){
        $proxy->login($this->uname,$this->pw);

    }
}

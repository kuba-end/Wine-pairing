<?php
declare(strict_types=1);


namespace KubaEnd\Model;
use KubaEnd\Model\UniversalConnect;


class ConnectClient
{
    private $hookup;
    public function __construct(){
        $this->hookup=UniversalConnect::doConnect();
    }
}
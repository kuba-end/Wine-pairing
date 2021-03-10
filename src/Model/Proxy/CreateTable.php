<?php
declare(strict_types=1);


namespace KubaEnd\Model\Proxy;


use KubaEnd\Model\UniversalConnect;

class CreateTable
{
    private string $tableMaster="proxyLog";
    private $hookup;

    public function __construct(){
        $this->hookup=UniversalConnect::doConnect();

        $drop = "drop table if exist $this->tableMaster";
        if ($this->hookup->query($drop) === true){
            printf("Old table $this->tableMaster has been removed");
        }
        $sql = "create table $this->tableMaster(uname nvarchar(15),pw nvarchar(120))";
        if ($this->hookup->query($sql) === true){
            printf("Table $this->tableMaster has been created");
        }
        //$this->hookup=null;
    }
}

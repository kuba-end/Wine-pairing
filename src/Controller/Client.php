<?php
declare(strict_types=1);

namespace KubaEnd\Controller;

use KubaEnd\Model\Proxy\Interfaces\WineInterface;
use KubaEnd\Model\UniversalConnect;
use PDO;

class Client
{
    private $tableMaster;
    private $search;
    private $query;
    /**
     * @var object|PDO
     */
    private $hookup;

    public function __construct(){
        $this->tableMaster="wines_strains";
        $this->hookup=UniversalConnect::doConnect();
        $this->search=($_POST['search']);
        $this->getInterface($this->query=new FetchResult());

    }
    private function getInterface(WineInterface $query){
        $query->getWine($this->search);

    }
}

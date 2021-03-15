<?php
declare(strict_types=1);

namespace KubaEnd\Controller;

use KubaEnd\Model\Interfaces\WineInterface;
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
        if (isset($_POST['chooseR'])) {
            $this->search = ($_POST['chooseR']);
        } else {
            $this->search = ($_POST['chooseW']);
        }
        $this->getInterface($this->query=new FetchResult());

    }
    private function getInterface(WineInterface $query){
        $query->getWine($this->search);

    }
}

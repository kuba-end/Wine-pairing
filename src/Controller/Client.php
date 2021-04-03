<?php
declare(strict_types=1);

namespace KubaEnd\Controller;

use KubaEnd\Model\Interfaces\WineInterface;
use KubaEnd\Model\UniversalConnect;
use PDO;

/**
 * Class Client
 *
 *Task of this class is define value of $_POST array and forward it to
 * FetchResult() class by using a method of this class.
 *
 * @package KubaEnd\Controller
 */
class Client
{
    const DB_TABLE_WINES_STRAINS="wines_strains";

    /**
     * @var string table name
     */
    private string $tableMaster;
    /**
     * @var string|mixed The user choice according which FetchResult select strains
     */
    private string $search;
    /**
     * @var object|FetchResult display available wine strains according to the user's choices
     */
    private object $query;
    /**
     * @var object|PDO connection with db
     */
    private $hookup;

    /**
     * Client constructor.
     * Make connection, set up @var search according to the earlier choice
     */
    public function __construct(){
        $this->tableMaster=self::DB_TABLE_WINES_STRAINS;
        $this->hookup=UniversalConnect::doConnect();
        if (isset($_POST['chooseR'])) {
            $this->search = ($_POST['chooseR']);
        } else {
            $this->search = ($_POST['chooseW']);
        }
        $this->getInterface($this->query=new FetchResult());

    }

    /**
     *
     * @param WineInterface $query
     */
    private function getInterface(WineInterface $query):void{
        $query->getWine($this->search);

    }
}

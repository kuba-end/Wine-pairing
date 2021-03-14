<?php
declare(strict_types=1);


namespace KubaEnd\Controller;


use Exception;
use KubaEnd\Model\Proxy\Interfaces\WineInterface;
use KubaEnd\Model\UniversalConnect;
use PDO;

class FetchResult implements WineInterface
{

    public string $query;
    private object $hookup;
    private $result;

    public function __construct(){
        try {
            $this->hookup = UniversalConnect::doConnect();
        } catch (Exception $e){
            echo $e->getMessage();
        }


    }
    public function getWine($queryWine)
    {
        $sql = "select strain from pairing.wine_strains where type=:wine";
        $stmt = $this->hookup->prepare($sql);
        $stmt->bindValue("wine", $queryWine);
        $stmt->execute();
        $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->echoResult();
    }
    private function echoResult()
        {
            foreach ($this->result as $row) {
                print_r($row['strain']);
                echo '<br>';

            }
        }

}

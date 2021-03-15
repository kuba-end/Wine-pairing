<?php
declare(strict_types=1);


namespace KubaEnd\Controller;


use Exception;
use KubaEnd\Model\DbQueries;
use KubaEnd\Model\Interfaces\WineInterface;
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

        $sql=$this->getType();
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
                echo '<br><br>';

            }
        }
        private function getType(){
        if(isset($_POST['chooseR'])){

            if (($_POST['chooseR']) == 'dry'){
                $sql=DbQueries::R_DRY;
            }
            elseif ($_POST['chooseR'] == 'medium dry'){
                $sql=DbQueries::R_MEDIUMD;
            }
            elseif ($_POST['chooseR'] == 'medium sweet'){
                $sql=DbQueries::R_MEDIUMS;
            }
            elseif ($_POST['chooseR'] == 'sweet'){
                $sql=DbQueries::R_SWEET;
            }
        }
            elseif (($_POST['chooseW']) == 'dry'){
                $sql=DbQueries::W_DRY;
            }
            elseif ($_POST['chooseW'] == 'medium dry'){
                $sql=DbQueries::W_MEDIUMD;
            }
            elseif ($_POST['chooseW'] == 'medium sweet'){
                $sql=DbQueries::W_MEDIUMS;
            }
            elseif ($_POST['chooseW'] == 'sweet'){
                $sql=DbQueries::W_SWEET;
            }
            else{
                echo 'No way error';
            }
            return $sql;
        }

}

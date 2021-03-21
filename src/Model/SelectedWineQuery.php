<?php
declare(strict_types=1);


namespace KubaEnd\Model;


use KubaEnd\Model\Interfaces\MealInterface;
use Exception;
use PDO;

class SelectedWineQuery implements MealInterface
{
    public array $selectedWine;
    public object $hookup;
    public string $sql;
    public array $result;

    public function __construct(){
        try {
            $this->hookup = UniversalConnect::doConnect();
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
    public function selectedType($smth){
        $sql=DbQueries::SANGIOVESE;
        $stmt = $this->hookup->prepare($sql);
        //$stmt->bindValue(':wine', $smth);
        $stmt->execute();
        $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->echoResult();
        //$this->selectedWine=$smth;
//        switch($this->selectedWine){
//            case "Sangiovese":
//                echo "lol";
//                $this->sangiovese();
//                $this->damn();
//                break;
//        }
    }
    public function damn(){
        $sql=$this->sql;
        $stmt = $this->hookup->prepare($sql);
        //$stmt->bindValue(':wine', $smth);
        $stmt->execute();
        $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->echoResult();
}
    private function echoResult()
    {
        foreach ($this->result as $row) {
            echo "1";
            var_dump($row);
            echo '<br><br>';

        }
    }
    public function sangiovese(){
        return $this->sql=DbQueries::SANGIOVESE;
    }
    public function tempranillo(){}
    public function cabernetSauvignon(){}
    public function pinotNoir(){}
    public function syrah(){}
    public function merlot(){}
    public function malbec(){}
    public function garnacha(){}
    public function zinfandel(){}
    public function porto(){}
    public function muscadet(){}
    public function sauvignonBlanc(){}
    public function pinotGris(){}
    public function chardonnay(){}
    public function cheninBlanc(){}
    public function viognier(){}
    public function torrontes(){}
    public function gewurztraminer(){}
    public function riesling(){}
    public function muscat(){}
    public function iceWine(){}

}
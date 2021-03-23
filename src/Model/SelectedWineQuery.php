<?php
declare(strict_types=1);


namespace KubaEnd\Model;



use KubaEnd\Model\Interfaces\MealInterface;
use Exception;
use KubaEnd\Model\Wines\Sangiovese;


class SelectedWineQuery implements MealInterface
{
    public string $selectedWine;
    public object $hookup;
    public $sql;
    public array $result;
    public $smth;

    public function __construct(){
        try {
            $this->hookup = UniversalConnect::doConnect();
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
    public function selectedType($smth){
        $this->selectedWine=$smth;
        $this->smth= new Sangiovese();
        $this->sql=$this->smth->query();
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
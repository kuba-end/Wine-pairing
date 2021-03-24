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
    public bool $sql;
    public array $result;
    public object $smth;

    public function __construct(){
        try {
            $this->hookup = UniversalConnect::doConnect();
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
    public function selectedType($smth):void{
        $this->selectedWine=$smth;
        $this->smth= new Sangiovese();
        $this->sql=$this->smth->query();
    }
    public function selectedType2($smth):void{
        $this->selectedWine=$smth;
        $this->smth= new Sangiovese();
        $this->sql=$this->smth->option();
    }
}
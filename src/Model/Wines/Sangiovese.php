<?php
declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\DbQueries;
use KubaEnd\Model\Fabryka;
use KubaEnd\Model\SelectedWineQuery;

class Sangiovese
{
    public string $sql;
    public string $meat;
    public string $dairy;
    public string $vegetable;
    public array $result;
    public object $object;
    public object $object2;


    public function query() {
        $this->object=new Fabryka();
        $this->object2=new SelectedWineQuery();

        $this->meat();
        $this->dairy();
        $this->vegetable();
        $this->herbsSpice();

        return true;
    }
    public function meat(){
        echo "Meat :<br>";
        $this->result=$this->object->getData(DbQueries::PORK);
        $this->echoResult();
        return $this->result;
    }
    public function dairy(){
        echo "Dairy :<br>";
        $this->result=$this->object->getData(DbQueries::PUNGENT_CHEESE);
        $this->echoResult();
        return $this->result;
    }
    public function vegetable(){
        echo "Vegetable :<br>";
        $this->result=$this->object->getData(DbQueries::ALLIUMS);
        $this->echoResult();
        $this->result=$this->object->getData(DbQueries::FUNGHI);
        $this->echoResult();
        return $this->result;
    }
    public function herbsSpice(){
        echo "Herbs and Spices :<br>";
        $this->result=$this->object->getData(DbQueries::RED_PEPPER);
        $this->echoResult();
        $this->result=$this->object->getData(DbQueries::EXOTIC);
        $this->echoResult();
        return $this->result;
    }
    private function echoResult()
    {
        foreach ($this->result as $row) {
            foreach ($row as $item){
                echo "<a href=''>".$item."</a>";
                echo "<br>";
            }
        }
    }

}
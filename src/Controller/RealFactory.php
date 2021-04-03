<?php
declare(strict_types=1);


namespace KubaEnd\Controller;

use KubaEnd\Model\Interfaces\MealInterface;
use KubaEnd\Model\Wines\Torrontes;

class RealFactory implements MealInterface
{
    public object $wineEntity;

    public function selectedQuery($param){
        echo $param;
        $this->wineEntity=new $param;
    }
    public function selectedQuery2($param)
    {
        // TODO: Implement selectedQuery2() method.
    }
}
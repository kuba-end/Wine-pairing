<?php
//declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\Abstracts\FoodTypes;
use KubaEnd\Model\Interfaces\StrainInterface;

class Torrontes extends FoodTypes implements StrainInterface
{
    public function query(){
        self::meatPoultry();
        self::meatPork();
        self::vegetableNuts();
        self::herbsHotSpicy();
    }
    public function option(){
        self::dairyHardCheese();
        self::herbsExotic();
        self::vegetableRootSquash();
        

    }
}
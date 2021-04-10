<?php
declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\Abstracts\FoodTypes;
use KubaEnd\Model\Interfaces\StrainInterface;

class CheninBlanc extends FoodTypes implements StrainInterface
{
    public function query()
    {
        self::meatCuredMeat();
        self::vegetableNuts();
        self::herbsHotSpicy();
        self::herbsExotic();
        self::starchWholeWheat();
        self::starchSweetVege();
        self::sweetFruit();
    }
    public function option()
    {
        self::meatLobster();
        self::dairySoftCheese();
        self::dairyPungentCheese();
        self::vegetableAlliums();
        self::vegetableRootSquash();
        self::vegetableNightshades();
        self::herbsRedPepper();
        self::herbsRedPepper();
        self::herbsBaking();
        self::starchWhiteStarches();
        self::starchPotato();
        self::sweetVanilla();
    }
}
<?php
declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\Abstracts\FoodTypes;
use KubaEnd\Model\Interfaces\StrainInterface;

class Merlot extends FoodTypes implements StrainInterface
{
    public function query()
    {
        self::meatPork();
        self::dairyPungentCheese();
        self::vegetableAlliums();
        self::vegetableNightshades();
        self::vegetableFunghi();
        self::herbsRedPepper();
        self::herbsExotic();
    }
    public function option()
    {
        self::meatRedMeat();
        self::meatCuredMeat();
        self::meatPoultry();
        self::dairySoftCheese();
        self::dairyHardCheese();
        self::vegetableBeans();
        self::herbsBlackPepper();
        self::herbsHerbs();
        self::herbsBaking();
        self::starchWhiteStarches();
        self::starchPotato();
    }
}
<?php
declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\Abstracts\FoodTypes;
use KubaEnd\Model\Interfaces\StrainInterface;

class Syrah extends FoodTypes implements StrainInterface
{
    public function query()
    {
        self::meatRedMeat();
        self::dairyHardCheese();
        self::herbsBlackPepper();
    }

    public function option()
    {
        self::meatCuredMeat();
        self::meatPoultry();
        self::dairyPungentCheese();
        self::vegetableAlliums();
        self::vegetableNightshades();
        self::vegetableFunghi();
        self::herbsRedPepper();
        self::starchWhiteStarches();
        self::starchPotato();
    }
}
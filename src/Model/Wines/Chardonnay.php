<?php
declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\Abstracts\FoodTypes;
use KubaEnd\Model\Interfaces\StrainInterface;

class Chardonnay extends FoodTypes implements StrainInterface
{
    public function query()
    {
        self::meatPoultry();
        self::meatLobster();
        self::dairySoftCheese();
        self::vegetableFunghi();
    }
    public function option()
    {
        self::meatFish();
        self::dairyHardCheese();
        self::vegetableAlliums();
        self::vegetableRootSquash();
        self::vegetableNuts();
        self::herbsHerbs();
        self::starchWhiteStarches();
        self::starchWholeWheat();
        self::starchPotato();
    }
}
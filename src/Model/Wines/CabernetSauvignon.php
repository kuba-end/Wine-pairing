<?php
declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\Abstracts\FoodTypes;
use KubaEnd\Model\Interfaces\StrainInterface;

/**
 * Class CabernetSauvignon is responsible for use specific methods from FoodTypes
 * query method is for select best matched food
 * option method is for select rest of food which also pairing good
 * @package KubaEnd\Model\Wines
 */
class CabernetSauvignon extends FoodTypes implements StrainInterface
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
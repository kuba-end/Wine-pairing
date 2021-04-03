<?php
declare(strict_types=1);


namespace KubaEnd\Model\Interfaces;

/**
 * Interface DbQueries
 *
 * List of queries used while contacting with DB
 *
 * @package KubaEnd\Model
 */
interface DbQueries
{


    const R="select strain from strain_color where color='red'";
    const W_DRY="select strain from wine_strains where type=:wine and color='white'";
    const W_MEDIUMD="select strain from wine_strains where type=:wine and color='white'";
    const W_MEDIUMS="select strain from wine_strains where type=:wine and color='white'";
    const W_SWEET="select strain from wine_strains where type=:wine and color='white'";
    const R_DRY="select strain from wine_strains where type=:wine and color='red'";
    const R_MEDIUMD="select strain from wine_strains where type=:wine and color='red'";
    const R_MEDIUMS="select strain from wine_strains where type=:wine and color='red'";
    const R_SWEET="select strain from wine_strains where type=:wine and color='red'";

    const RED_MEAT="select examples from red_meat";
    const CURED_MEAT="select examples from cured_meat";
    const PORK="select examples from pork";
    const POULTRY="select examples from poultry";
    const MOLLUSK="select examples from mollusk";
    const FISH="select examples from fish";
    const LOBSTER="select examples from lobster_shellfish";
    const SOFT_CHEESE="select examples from soft_cheese";
    const PUNGENT_CHEESE="select examples from pungent_cheese";
    const HARD_CHEESE="select examples from hard_cheese";
    const WHITE_STARCHES="select examples from white_starches";
    const ALLIUMS="select examples from alliums";
    const FUNGHI="select examples from funghi";
    const RED_PEPPER="select examples from red_pepper";
    const EXOTIC="select examples from exotic_aromatic_spices";
    const GREEN="select examples from green_vegetables";
    const ROOT="select examples from root_squash";
    const NIGHTSHADES="select examples from nightshades";
    const NUTS="select examples from nuts_seeds";
    const BEANS="select examples from beans_peas";
    const BLACK_PEPPER="select examples from black_pepper";
    const HOT_SPICY="select examples from hot_spicy";
    const HERBS="select examples from herbs";
    const BAKING="select examples from baking_spices ";
    const WHOLE_WHEAT="select examples from whole_wheat_grains";
    const SWEET_STARCHY_VEGE="select examples from sweet_starchy_vegetables";
    const POTATO="select examples from potato";
    const SWEET_FRUIT="select examples from fruit_berries";
    const SWEET_VANILLA="select examples from vanilla_caramel";
    const SWEET_CHOCOLATE="select examples from chocolate_cofee";


}
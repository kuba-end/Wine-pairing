<?php
declare(strict_types=1);


namespace KubaEnd\Model;


interface DbQueries
{
    const W="select strain from strain_color where color='white'";
    const R="select strain from strain_color where color='red'";
    const W_DRY="select strain from wine_strains where type=:wine and color='white'";
    const W_MEDIUMD="select strain from wine_strains where type=:wine and color='white'";
    const W_MEDIUMS="select strain from wine_strains where type=:wine and color='white'";
    const W_SWEET="select strain from wine_strains where type=:wine and color='white'";
    const R_DRY="select strain from wine_strains where type=:wine and color='red'";
    const R_MEDIUMD="select strain from wine_strains where type=:wine and color='red'";
    const R_MEDIUMS="select strain from wine_strains where type=:wine and color='red'";
    const R_SWEET="select strain from wine_strains where type=:wine and color='red'";
    const SANGIOVESE="select examples from exotic_aromatic_spices union
                      select examples from red_pepper union 
                      select examples from funghi union 
                      select examples from nightshades union 
                      select examples from alliums union 
                      select examples from pungent_cheese union 
                      select examples from pork";
    const RED_MEAT="select examples from red_meat";
    const CURED_MEAT="select examples from cured_meat";
    const PORK="select examples from pork";
    const PUNGENT_CHEESE="select examples from pungent_cheese";
    const ALLIUMS="select examples from alliums";
    const FUNGHI="select examples from funghi";
    const RED_PEPPER="select examples from red_pepper";
    const EXOTIC="select examples from exotic_aromatic_spices";


}
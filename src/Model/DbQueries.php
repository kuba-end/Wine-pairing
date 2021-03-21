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
    const SANGIOVESE="select examples from exotic_aromatic_spices,red_pepper,funghi,nightshades,alliums,pungent_cheese
                        ,pork";

}
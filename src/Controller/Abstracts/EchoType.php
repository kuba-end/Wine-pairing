<?php
declare(strict_types=1);


namespace KubaEnd\Controller\Abstracts;


use KubaEnd\Model\Interfaces\DbQueries;


abstract class EchoType
{
    const DRY='dry';
    const MDRY='medium dry';
    const MSWEET='medium sweet';
    const SWEET='sweet';

    public function getType():string
    {
        if(isset($_POST['chooseR'])){

            if (($_POST['chooseR']) == self::DRY){
                $sql=DbQueries::R_DRY;

            }
            elseif ($_POST['chooseR'] == self::MDRY){
                $sql=DbQueries::R_MEDIUMD;
            }
            elseif ($_POST['chooseR'] == self::MSWEET){
                $sql=DbQueries::R_MEDIUMS;
            }
            elseif ($_POST['chooseR'] == self::SWEET){
                $sql=DbQueries::R_SWEET;
            }
        }
        elseif (($_POST['chooseW']) == self::DRY){
            $sql=DbQueries::W_DRY;
        }
        elseif ($_POST['chooseW'] == self::MDRY){
            $sql=DbQueries::W_MEDIUMD;
        }
        elseif ($_POST['chooseW'] == self::MSWEET){
            $sql=DbQueries::W_MEDIUMS;
        }
        elseif ($_POST['chooseW'] == self::SWEET){
            $sql=DbQueries::W_SWEET;
        }
        else{
            echo 'No way error';
        }
        return $sql;
    }
}
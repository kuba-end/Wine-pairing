<?php
declare(strict_types=1);


namespace KubaEnd\Controller;


use KubaEnd\Model\DbQueries;


abstract class EchoType
{


    public function getType()
    {
        if(isset($_POST['chooseR'])){

            if (($_POST['chooseR']) == 'dry'){
                $sql=DbQueries::R_DRY;

            }
            elseif ($_POST['chooseR'] == 'medium dry'){
                $sql=DbQueries::R_MEDIUMD;
            }
            elseif ($_POST['chooseR'] == 'medium sweet'){
                $sql=DbQueries::R_MEDIUMS;
            }
            elseif ($_POST['chooseR'] == 'sweet'){
                $sql=DbQueries::R_SWEET;
            }
        }
        elseif (($_POST['chooseW']) == 'dry'){
            $sql=DbQueries::W_DRY;
        }
        elseif ($_POST['chooseW'] == 'medium dry'){
            $sql=DbQueries::W_MEDIUMD;
        }
        elseif ($_POST['chooseW'] == 'medium sweet'){
            $sql=DbQueries::W_MEDIUMS;
        }
        elseif ($_POST['chooseW'] == 'sweet'){
            $sql=DbQueries::W_SWEET;
        }
        else{
            echo 'No way error';
        }
        return $sql;
    }
}
<?php
declare(strict_types=1);

namespace KubaEnd\Model;

use PDO;
use PDOException;
use KubaEnd\Model\Interfaces\ConnectInfoInterface;


class UniversalConnect implements ConnectInfoInterface
{
    /**
     * When instance of class is needed to be creating many times, static variables allowed to reduce
     * the number of instances. In this case static variables shouldn't make any problems but there always is second way
     * for use $this-> for private variables.
     *
     * The biggest adventage of this solution is possibility to use static variables without the need for creating
     * UniversalConnect instance each time when we want to use database.
     *
     * @var string
     */
    private static string $server=ConnectInfoInterface::HOST;
    private static string $currentDB=ConnectInfoInterface::DBNAME;
    private static string $pass=ConnectInfoInterface::PW;
    private static string $user=ConnectInfoInterface::USER;
    private static object $hookup;

    /**
     * Creating an universal connecting with database.
     * @return object
     */
    public static function doConnect():object
    {
        try {
            self::$hookup = new PDO(
                'mysql:host='.self::$server.';dbname='.self::$currentDB,
                     self::$user,
                     self::$pass);
        } catch (PDOException $e){
            echo sprintf('Error!: %s',
                $e->getMessage());
        }
        return self::$hookup;
    }

}
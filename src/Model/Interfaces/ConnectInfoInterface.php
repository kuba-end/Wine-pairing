<?php
declare(strict_types=1);

namespace KubaEnd\Model\Interfaces;

interface ConnectInfoInterface
{
    const HOST="localhost";
    const USER="root";
    const PW="";
    const DBNAME="pairing";
    public static function doConnect();
}
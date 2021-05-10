<?php
declare(strict_types=1);

namespace KubaEnd\Model\Interfaces;

interface ConnectInfoInterface
{
    const HOST="localhost";
    const USER="kuba-end";
    const PW="HVV8WBm82A5BNwZ";
    const DBNAME="pairing";
    public static function doConnect();
}
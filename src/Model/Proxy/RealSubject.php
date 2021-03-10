<?php
declare(strict_types=1);


namespace KubaEnd\Model\Proxy;


use KubaEnd\Model\Proxy\Interfaces\SubjectInterface;

class RealSubject implements SubjectInterface
{
    public function request(){
        echo "Zalogowano";
    }
}
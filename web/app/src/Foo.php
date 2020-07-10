<?php

namespace App\Acme;

class Foo
{
    public function getName()
    {
        return 'Percobaan Docker Nginx Mysql PHP';
    }

    public function getServerAddress()
    {
        return $_SERVER['SERVER_ADDR'];
    }

    public function getServerName()
    {
        return gethostname();
    }
}

<?php
namespace App\Application\Ports\Outbound;

interface UnitOfWork {
    public function run(callable \): mixed;
}

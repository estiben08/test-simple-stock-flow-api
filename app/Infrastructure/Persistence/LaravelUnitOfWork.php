<?php
namespace App\Infrastructure\Persistence;

use App\Application\Ports\Outbound\UnitOfWork;
use Illuminate\Support\Facades\DB;

class LaravelUnitOfWork implements UnitOfWork {
    public function run(callable \): mixed {
        return DB::transaction(\);
    }
}

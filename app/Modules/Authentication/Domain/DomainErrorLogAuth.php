<?php

namespace App\Modules\Authentication\Domain;

use Illuminate\Support\Facades\DB;

class DomainErrorLogAuth
{
    public function insert($message, $route, $path): void
    {
        DB::insert('insert into log_errors (message,route,path,created_at,updated_at) values (?, ?, ?, ?, ?)', [$message, $route, $path, now(), now()]);
    }
}

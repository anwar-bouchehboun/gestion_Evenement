<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        $this->call([
            CategorieSdeer::class,
        ]);
           $this->call([
            PremissionSedder::class,
        ]);

        $this->call([
            RoleSedder::class,
        ]);
        $this->call([
            AdminSedder::class,
        ]);
    }
}

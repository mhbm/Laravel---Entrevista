<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();
        $this->call(PartidosSeeder::class);
        $this->call(DeputadosSeeder::class);
        $this->call(DeputadosDatasSeeder::class);
        $this->call(VerbasIndenizatoriasSeeder::class);
        $this->call(DetalhesVerbasIndenizatoriasSeeder::class);
        Model::reguard();
    }
}

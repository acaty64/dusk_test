<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            TypesTableSeeder::class,
            DataUsersTableSeeder::class,
            FacultadesTableSeeder::class,
            SedesTableSeeder::class,
            AccesosTableSeeder::class,
            SedeFacultadesTableSeeder::class,
            MenusTableSeeder::class,
            MenuTypeTableSeeder::class,
            FranjasTableSeeder::class,
            //DHorasTableSeeder::class,
            CursosTableSeeder::class,
            GruposTableSeeder::class,
            CursoGrupoTableSeeder::class
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generos = [7 => 'male', 3 => 'female'];
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index) {
            $fecha = $faker->dateTimeBetween('past Monday -15 days', 'past Monday -9 days');
            $sexo = $faker->randomElement([3,7]);
            $primer_nombre = $faker->name($generos[$sexo]);
            $segundo_nombre = $faker->name($generos[$sexo]);
            $apellido = $faker->lastName;
            $rut = $faker->numberBetween(1000000, 40000000);
            DB::table('personas')->insert([
                'rut'                   =>  $rut,
                'primer_nombre'         =>  $primer_nombre,
                'segundo_nombre'        =>  $segundo_nombre,
                'primer_apellido'       =>  $apellido,
                'segundo_apellido'      =>  $faker->lastName,
                'sexo'                  =>  $sexo,
                'fecha_de_nacimiento'   =>  $faker->date($format = 'Y-m-d', $max = 'now'),
                'estado'                =>  3,
                'telefono'              =>  $faker->numberBetween(333333333, 999999999),
                'telefono_contacto'     =>  $faker->numberBetween(333333333, 999999999),
                'created_at'            =>  $fecha,
                'updated_at'            =>  $fecha,
            ]);
            DB::table('users')->insert([
                'rut_persona'   =>  $rut,
                'name'          =>  $primer_nombre . " " . $apellido,
                'email'         =>  $faker->email,
                'password'      =>  bcrypt('123123')
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * $table->integer('rut');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->integer('sexo');
            $table->date('fecha_de_nacimiento');
            $table->integer('estado');
            $table->integer('telefono');
            $table->integer('telefono_contacto');
            $table->timestamps();
         *
         * $table->increments('id');
            $table->integer('id_persona');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('last_login');
            $table->timestamps();
         */
        $faker = Faker\Factory::create();
        $fecha = $faker->dateTimeBetween('past Monday -15 days', 'past Monday -9 days');
        DB::table('personas')->insert([
            'rut'                   =>  16327196,
            'primer_nombre'         =>  "Anibal",
            'segundo_nombre'        =>  "Esteban",
            'primer_apellido'       =>  "Llanos",
            'segundo_apellido'      =>  "Prado",
            'sexo'                  =>  7,
            'fecha_de_nacimiento'   =>  '1986-03-19',
            'estado'                =>  99,
            'telefono'              =>  992434098,
            'telefono_contacto'     =>  995420214,
            'created_at'            =>  $fecha,
            'updated_at'            =>  $fecha,
        ]);
        DB::table('users')->insert([
            'rut_persona'   =>  16327196,
            'name'          =>  "Anibal",
            'email'         =>  "shazkho@gmail.com",
            'password'      =>  bcrypt('123123')
        ]);
    }
}

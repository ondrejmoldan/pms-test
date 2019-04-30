<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'firstname' => Str::random(5),
            'lastname' => Str::random(5),
            'email' => Str::random(10).'@gmail.com',
            'phone' => rand(100000000, 999999999),
            'bank_account' => rand(100000000, 999999999),
            'dni' => rand(100000000, 999999999),
            'vat' => rand(100000000, 999999999),
            'company' => Str::random(15),
        ]);
    }
}

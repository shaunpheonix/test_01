<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class USerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'yeet',
            'email'=> 'yeet@gmail.com',
            'password'=> 'yeet',
        ]);
    }
}

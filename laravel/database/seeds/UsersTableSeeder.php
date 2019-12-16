<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'name'=>'Đức',
                'email' => 'duc@gmail.com',
                'password' =>bcrypt('12345'),
                'created_at'=>new DateTime(),
            ],
            [
                'name'=>'Đông',
                'email' => 'dong@gmail.com',
                'password' =>bcrypt('12345'),
                'created_at'=>new DateTime(),
            ],
        ];
        DB::table('users')->insert($data);
    }
}

<?php

use Illuminate\Database\Seeder;

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
                'name'=>'Duc',
                'email' => 'duc.18it@sict.udn.vn',
                'password' =>bcrypt('duc1234'),
            ],
            [
                'name'=>'Dong',
                'email' => 'mvdong.18it2@sict.udn.vn',
                'password' =>bcrypt('duc1234'),
            ],
        ];
        DB::table('users')->insert($data);
    }
}

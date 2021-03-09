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
        DB::table('users')->insert([
            [
                'name' => 'ジョブス',
                'email' => 'user1@example.com',
                'sex' => '0',
                'self_introduction' => 'ジョブスです',
                'img_name' => 'sample001.png',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'ザッカーバーグ',
                'email' => 'user2@example.com',
                'sex' => '1',
                'self_introduction' => 'ザッカーバーグです',
                'img_name' => 'sample002.png',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'ジョフペゾ付',
                'email' => 'user3@example.com',
                'sex' => '0',
                'self_introduction' => 'ジョフペゾ付です',
                'img_name' => 'sample003.png',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'イーロン',
                'email' => 'user4@example.com',
                'sex' => '0',
                'self_introduction' => 'ジョブスです',
                'img_name' => 'sample004.png',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}

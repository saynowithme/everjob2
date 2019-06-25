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
        //reset the user table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => "Đặng Trường Trúc",
                'email' => "truongtrucit@gmail.com",
                'password' => bcrypt('Abc123!@#'),
            ],
            [
                'name' => "Trần Xuân Ba",
                'email' => "tranxuanbait@gmail.com",
                'password' => bcrypt('secret'),
            ],
            [
                'name' => "Nguyễn Thành Long",
                'email' => "thanhlongit@gmail.com",
                'password' => bcrypt('secret'),
            ],
        ]);
    }
}

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
        DB::table('users')->insert([
            'name' => 'David Thâm',
            'email' => 'dvbtham@gmail.com',
            'password' => md5('123123'),
            'level'=>1,
            'is_deleted' => false
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('user_type')->insert([
            'id'=>'2',
            'EN_name'=>'user',
            'AR_name'=>'مستخدم'
        ]);

        DB::table('departments')->insert([
            'EN_name'=>'development',
            'AR_name'=>'تطوير'
        ]);

        DB::table('positions')->insert([
            'EN_name'=>'Back-End Developer',
            'AR_name'=>'مطور',
            'department_id'=>1
        ]);
    }
}

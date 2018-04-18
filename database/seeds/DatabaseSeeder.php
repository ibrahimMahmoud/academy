<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\EveliationQuestions;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
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
        $user = User::create([
                'email'=>'asdsihs@h.com',
                'password' => Hash::make(123456789),
                'position_id'=>'1',
                'first_name'=>'hassan',
                'last_name'=>'bb',
                'phone'=>'52515',
                'user_type_id'=>'2',
                'is_active'=>'1',
                'work_status'=>'employee',
            ]);
        EveliationQuestions::create([
            'question'=>'how are you man ?',
            'scoure'=>0,
            'created_by'=>$user->id,
            'position_id'=>'1',
        ]);

        EveliationQuestions::create([
            'question'=>'say hi !',
            'scoure'=>0,
            'created_by'=>$user->id,
            'position_id'=>'1',
        ]);
    }
}

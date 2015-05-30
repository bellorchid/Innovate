<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Student;



class UserTableSeeder extends Seeder 
{
	    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->delete();

        Student::create([
        'id' => 12108129,
        'name' => '吴伟',
        'password' => Hash::make('12108129')
        ]);

        Student::create([
        'id' => 12108135,
        'name' => '张坚革',
        'password' => Hash::make('12108135')
        ]);

        Student::create([
        'id' => 12108139,
        'name' => '郑齐阳',
        'password' => Hash::make('12108139')
        ]);

        Student::create([
        'id' => 12108201,
        'name' => '白林林',
        'password' => Hash::make('12108201')
        ]);

        Student::create([
        'id' => 12108203,
        'name' => '彭雅丽',
        'password' => Hash::make('12108203')
        ]);

        Student::create([
        'id' => 12108208,
        'name' => '陈浩',
        'password' => Hash::make('12108208')
        ]);

        Student::create([
        'id' => 12108209,
        'name' => '陈露耿',
        'password' => Hash::make('12108209')
        ]);

        Student::create([
        'id' => 12108210,
        'name' => '陈轲',
        'password' => Hash::make('12108210')
        ]);

        Student::create([
        'id' => 12108211,
        'name' => '段鹏飞',
        'password' => Hash::make('12108211')
        ]);

        Student::create([
        'id' => 12108216,
        'name' => '李金祥',
        'password' => Hash::make('12108216')
        ]);

        Student::create([
        'id' => 12108222,
        'name' => '沈之川',
        'password' => Hash::make('12108222')
        ]);

        Student::create([
        'id' => 12108227,
        'name' => '熊君睿',
        'password' => Hash::make('12108227')
        ]);

        Student::create([
        'id' => 12108230,
        'name' => '章晨昱',
        'password' => Hash::make('12108230')
        ]);

        Student::create([
        'id' => 12108234,
        'name' => '张旭',
        'password' => Hash::make('12108234')
        ]);

        Student::create([
        'id' => 12108238,
        'name' => '钟云昶',
        'password' => Hash::make('12108238')
        ]);

        Student::create([
        'id' => 12108305,
        'name' => '王雪莹',
        'password' => Hash::make('12108305')
        ]);

        Student::create([
        'id' => 12108306,
        'name' => '曹平涛',
        'password' => Hash::make('12108306')
        ]);

        Student::create([
        'id' => 12108315,
        'name' => '刘宏志',
        'password' => Hash::make('12108315')
        ]);

        Student::create([
        'id' => 12108316,
        'name' => '刘铁',
        'password' => Hash::make('12108316')
        ]);

        Student::create([
        'id' => 12108318,
        'name' => '罗鹏展',
        'password' => Hash::make('12108318')
        ]);

        Student::create([
        'id' => 12108327,
        'name' => '谢俊杰',
        'password' => Hash::make('12108327')
        ]);

        Student::create([
        'id' => 12108331,
        'name' => '许鹏飞',
        'password' => Hash::make('12108331')
        ]);

        Student::create([
        'id' => 12108413,
        'name' => '黄可庆',
        'password' => Hash::make('12108413')
        ]);

        Student::create([
        'id' => 11101018,
        'name' => '李智',
        'password' => Hash::make('11101018')
        ]);


    }
}


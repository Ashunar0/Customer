<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => '山田 太郎',
                'kana' => 'やまだ たろう',
                'email' => 'taro.yamada@example.com',
                'course_id' => 1,
                'classroom_id' => 1,
                'phone_number' => '090-1234-5678',
                'prefecture' => '東京都',
                'city'=>'渋谷区',
                'street'=>'1-2-3',
                'birthdate'=>20020523,
                'age'=>'21',
                'gender'=>'男',
                'university'=>'東都大学',
                'faculty'=>'工学部',
                'department'=>'電気工学科',
                'grade'=>'B3',
                'highschool'=>'日比谷',
                'emergency_contact'=>'090-2846-3844',
                'notes'=>'なんかすごそうな人',
            ],
            [
                'name' => '田中 花子',
                'kana' => 'タナカ ハナコ',
                'email' => 'hanako.tanaka@example.com',
                'course_id' => 2,
                'classroom_id' => 2,
                'phone_number' => '080-9876-5432',
                'prefecture' => '埼玉県',
                'city'=>'大宮市',
                'street'=>'4-2-35',
                'birthdate'=>20021107,
                'age'=>'21',
                'gender'=>'女',
                'university'=>'慶応大学',
                'faculty'=>'法学部',
                'department'=>'法律学科',
                'grade'=>'B3',
                'highschool'=>'新宿',
                'emergency_contact'=>'090-8934-9283',
                'notes'=>'おしとやかな人',
            ],
            [
                'name' => '光月 まひる',
                'kana' => 'コウヅキ マヒル',
                'email' => 'yoru.umi@example.com',
                'course_id' => 3,
                'classroom_id' => 1,
                'phone_number' => '070-5673-5542',
                'prefecture' => '埼玉県',
                'city'=>'大宮市',
                'street'=>'5-2-42ナイトコーポレーツ102',
                'birthdate'=>20020331,
                'age'=>'21',
                'gender'=>'女',
                'university'=>'東京芸術大学',
                'faculty'=>'美術学部',
                'department'=>'美術学科',
                'grade'=>'B3',
                'highschool'=>'大宮学園',
                'emergency_contact'=>'090-3849-5768',
                'notes'=>'海月ヨル',
            ],
            [
                'name' => '山ノ内 花音',
                'kana' => 'やまのうち かの',
                'email' => 'kano.jelee@example.com',
                'course_id' => 3,
                'classroom_id' => 1,
                'phone_number' => '070-4950-9378',
                'prefecture' => '東京都',
                'city'=>'新宿区',
                'street'=>'2-3-40',
                'birthdate'=>20020704,
                'age'=>'21',
                'gender'=>'女',
                'university'=>'海聖大学',
                'faculty'=>'経済学部',
                'department'=>'経済学科',
                'grade'=>'B3',
                'highschool'=>'大宮学園',
                'emergency_contact'=>'090-4859-9387',
                'notes'=>'じつは橘ののか',
            ],
            // 他のサンプルデータもここに追加できます
        ]);
    }
}

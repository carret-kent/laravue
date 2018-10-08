<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert([
            ['id' =>1, 'name' => '北海道', 'name_kana' =>'ﾎｯｶｲﾄﾞｳ'],
            ['id' =>2, 'name' => '青森県', 'name_kana' =>'ｱｵﾓﾘｹﾝ'],
            ['id' =>3, 'name' => '岩手県', 'name_kana' =>'ｲﾜﾃｹﾝ'],
            ['id' =>4, 'name' => '宮城県', 'name_kana' =>'ﾐﾔｷﾞｹﾝ'],
            ['id' =>5, 'name' => '秋田県', 'name_kana' =>'ｱｷﾀｹﾝ'],
            ['id' =>6, 'name' => '山形県', 'name_kana' =>'ﾔﾏｶﾞﾀｹﾝ'],
            ['id' =>7, 'name' => '福島県', 'name_kana' =>'ﾌｸｼﾏｹﾝ'],
            ['id' =>8, 'name' => '茨城県', 'name_kana' =>'ｲﾊﾞﾗｷｹﾝ'],
            ['id' =>9, 'name' => '栃木県', 'name_kana' =>'ﾄﾁｷﾞｹﾝ'],
            ['id' =>10, 'name' => '群馬県', 'name_kana' =>'ｸﾞﾝﾏｹﾝ'],
            ['id' =>11, 'name' => '埼玉県', 'name_kana' =>'ｻｲﾀﾏｹﾝ'],
            ['id' =>12, 'name' => '千葉県', 'name_kana' =>'ﾁﾊﾞｹﾝ'],
            ['id' =>13, 'name' => '東京都', 'name_kana' =>'ﾄｳｷｮｳﾄ'],
            ['id' =>14, 'name' => '神奈川県', 'name_kana' =>'ｶﾅｶﾞﾜｹﾝ'],
            ['id' =>15, 'name' => '新潟県', 'name_kana' =>'ﾆｲｶﾞﾀｹﾝ'],
            ['id' =>16, 'name' => '富山県', 'name_kana' =>'ﾄﾔﾏｹﾝ'],
            ['id' =>17, 'name' => '石川県', 'name_kana' =>'ｲｼｶﾜｹﾝ'],
            ['id' =>18, 'name' => '福井県', 'name_kana' =>'ﾌｸｲｹﾝ'],
            ['id' =>19, 'name' => '山梨県', 'name_kana' =>'ﾔﾏﾅｼｹﾝ'],
            ['id' =>20, 'name' => '長野県', 'name_kana' =>'ﾅｶﾞﾉｹﾝ'],
            ['id' =>21, 'name' => '岐阜県', 'name_kana' =>'ｷﾞﾌｹﾝ'],
            ['id' =>22, 'name' => '静岡県', 'name_kana' =>'ｼｽﾞｵｶｹﾝ'],
            ['id' =>23, 'name' => '愛知県', 'name_kana' =>'ｱｲﾁｹﾝ'],
            ['id' =>24, 'name' => '三重県', 'name_kana' =>'ﾐｴｹﾝ'],
            ['id' =>25, 'name' => '滋賀県', 'name_kana' =>'ｼｶﾞｹﾝ'],
            ['id' =>26, 'name' => '京都府', 'name_kana' =>'ｷｮｳﾄﾌ'],
            ['id' =>27, 'name' => '大阪府', 'name_kana' =>'ｵｵｻｶﾌ'],
            ['id' =>28, 'name' => '兵庫県', 'name_kana' =>'ﾋｮｳｺﾞｹﾝ'],
            ['id' =>29, 'name' => '奈良県', 'name_kana' =>'ﾅﾗｹﾝ'],
            ['id' =>30, 'name' => '和歌山県', 'name_kana' =>'ﾜｶﾔﾏｹﾝ'],
            ['id' =>31, 'name' => '鳥取県', 'name_kana' =>'ﾄｯﾄﾘｹﾝ'],
            ['id' =>32, 'name' => '島根県', 'name_kana' =>'ｼﾏﾈｹﾝ'],
            ['id' =>33, 'name' => '岡山県', 'name_kana' =>'ｵｶﾔﾏｹﾝ'],
            ['id' =>34, 'name' => '広島県', 'name_kana' =>'ﾋﾛｼﾏｹﾝ'],
            ['id' =>35, 'name' => '山口県', 'name_kana' =>'ﾔﾏｸﾞﾁｹﾝ'],
            ['id' =>36, 'name' => '徳島県', 'name_kana' =>'ﾄｸｼﾏｹﾝ'],
            ['id' =>37, 'name' => '香川県', 'name_kana' =>'ｶｶﾞﾜｹﾝ'],
            ['id' =>38, 'name' => '愛媛県', 'name_kana' =>'ｴﾋﾒｹﾝ'],
            ['id' =>39, 'name' => '高知県', 'name_kana' =>'ｺｳﾁｹﾝ'],
            ['id' =>40, 'name' => '福岡県', 'name_kana' =>'ﾌｸｵｶｹﾝ'],
            ['id' =>41, 'name' => '佐賀県', 'name_kana' =>'ｻｶﾞｹﾝ'],
            ['id' =>42, 'name' => '長崎県', 'name_kana' =>'ﾅｶﾞｻｷｹﾝ'],
            ['id' =>43, 'name' => '熊本県', 'name_kana' =>'ｸﾏﾓﾄｹﾝ'],
            ['id' =>44, 'name' => '大分県', 'name_kana' =>'ｵｵｲﾀｹﾝ'],
            ['id' =>45, 'name' => '宮崎県', 'name_kana' =>'ﾐﾔｻﾞｷｹﾝ'],
            ['id' =>46, 'name' => '鹿児島県', 'name_kana' =>'ｶｺﾞｼﾏｹﾝ'],
            ['id' =>47, 'name' => '沖縄県', 'name_kana' =>'ｵｷﾅﾜｹﾝ'],
        ]);
    }
}

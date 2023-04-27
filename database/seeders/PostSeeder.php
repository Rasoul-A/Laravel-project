<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use mysql_xdevapi\Table;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<50;$i++)
        {
            DB::table('posts')->insert(
                [
                    'title'=>Str::random('20'),
                    'description'=>Str::random(50),
                    'status'=>1,
                    'publish_date'=>date('Y-m-d')
//                    'id'=>1
                ]);
        }
    }
}

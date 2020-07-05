<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['user_id' =>  2, 'title' =>"Post one" , 'content'=> "post one content"],
            ['user_id' =>  2, 'title' =>"Post two" , 'content'=> "post two content"],
            ['user_id' =>  2, 'title' =>"Post three" , 'content'=> "post three content"],
        ]);
    }
}

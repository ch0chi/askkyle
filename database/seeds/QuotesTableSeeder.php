<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('quotes')->insert([
        'body' => 'Can\'t help you because you shoot video in vertical.',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);
      DB::table('quotes')->insert([
        'body' => 'Bullshit',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);
      DB::table('quotes')->insert([
        'body' => 'Shit, now I\'ve got to take it to the apple store.',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);
      DB::table('quotes')->insert([
        'body' => 'That sucks, check out my awesome apple watch though.',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);
    }
}

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
        'body' => 'have you tried restarting your computer',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);
      DB::table('quotes')->insert([
        'body' => 'have you checked 1password',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);
      DB::table('quotes')->insert([
        'body' => 'google it',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);
      DB::table('quotes')->insert([
        'body' => 'ugh',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);
      DB::table('quotes')->insert([
        'body' => 'this poison ivy is really spreading',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);
      DB::table('quotes')->insert([
        'body' => 'Let\'s chat this morning about it',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);
      DB::table('quotes')->insert([
        'body' => 'God you guys are young',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);
    }
}

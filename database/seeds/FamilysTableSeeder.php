<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilysTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('familys')->insert([
      'user_id' => 1,
      'name' => 'test name ',
      'birth' => new Carbon(1990-01-01),
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);
  }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SettingSeeder::class);

        DB::table('roles')->insert([
            [
                'role'=> 'Super Admin'
            ],
            
            [
                'role'=> 'Bus Admin'
            ],
            
            [
                'role'=> 'Bus Counter'
            ],
            
            [
                'role'=> 'Train Admin'
            ],
            
            [
                'role'=> 'Train Counter'
            ],
            
            [
                'role'=> 'Launch Admin'
            ],
            
            [
                'role'=> 'Launch Counter'
            ],
            
            [
                'role'=> 'Plane Admin'
            ],
            
            [
                'role'=> 'Plane Counter'
            ],
            
            [
                'role'=> 'Passenger'
            ],
            
        ]);


        DB::table('company_types')->insert([

              [
                'name'=> 'Bus',
                'description' => 'Bus Description'
              ],
              [
                'name'=> 'Train',
                'description' => 'Train Description'
              ],
              [
                'name'=> 'launch',
                'description' => 'launch Description'
              ],
              [
                'name'=> 'plane',
                'description' => 'plane Description'
              ],
        ]);
    }


}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * factory(App\User::class, 100)->create();
         */
        
        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->assignRole('user1');
        });
        factory(App\User::class, 40)->create()->each(function ($user) {
            $user->assignRole('user2');
        });
        factory(App\User::class, 50)->create()->each(function ($user) {
            $user->assignRole('user3');
        });
    }
}

<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bot = new User();
        $bot->name = 'bot';
        $bot->email = 'jamiemckeown469@gmail.com';
        $bot->password = Hash::make('Sonny1986');
        $bot->save();


        $bot = new User();
        $bot->name = 'Master Julien';
        $bot->email = 'test@test.com';
        $bot->password = Hash::make('Sonny1986');
        $bot->save();
    
    }
}

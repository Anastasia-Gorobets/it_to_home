<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UserTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();
        User::truncate();
        foreach (range(1,30) as $index){
            User::create([
                'email'=>$faker->email,
                'name'=>$faker->name,
                'password'=>Hash::make('1234')
            ]);
        }
    }
}
<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FavoriteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =  Faker\Factory::create();

        DB::table('favorites')->truncate();

        foreach (range(1,30) as $index){
            $post = \App\Teacher::orderBy(DB::raw('RAND()'))->first();

            User::orderBy(DB::raw('RAND()'))->first()->favorites()->attach($post->id);


        }
    }
}
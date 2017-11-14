<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =  Faker\Factory::create();

        \App\Teacher::truncate();

        foreach (range(1,30) as $index){
            $userId = User::orderBy(DB::raw('RAND()'))->first()->id;
            $name = User::where('id',$userId)->get();


            \App\Teacher::create([

                'user_id'=>$userId,
                'name'=>$name[0]->name,

            ]);
        }
    }
}
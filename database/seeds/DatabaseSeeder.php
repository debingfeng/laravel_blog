<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();
        $this->call('PostTableSeeder');
    }

}

class PostTableSeeder extends Seeder
{
    public function run()
    {
        App\Posts::truncate();
        factory(App\Posts::class, 20)->create();
    }
}
<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Post::factory(20)->create();

       User::find(1)->update([
        'name'=>'Lwin Moe Hein',
        'email'=>'dev.lwinmoehein@gmail.com'
       ]);
    }
}

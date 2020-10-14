<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\CategoryPost;
use App\Models\Comments;
use App\Models\Post;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Student::factory(10)->create();
        Categories::factory(20)->create();
        CategoryPost::factory(20)->create();
        Post::factory(20)->create();
        Comments::factory(20)->create();

        // $this->call([
        //     StudentsTableSeeder::class,
        //     SubjectsTableSeeder::class,
        // ]);
    }
}

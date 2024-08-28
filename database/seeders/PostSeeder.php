<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;

class PostSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncateTable('posts');
        // Post::factory(100)->state(
        //     ['title' => 'By manual']
        //     )->create();

        // Post::factory(100)->untitled()->create();
        $posts = Post::factory(100)
        // ->has(Comment::factory(10), 'comments')
        ->create();
        $posts->each(function(Post $post) {
            $post->users()->sync([FactoryHelper::getRandomModelId(User::class)]);
        });
        $this->enableForeignKeys();
    }
}

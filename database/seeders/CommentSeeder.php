<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use App\Models\Comment;
use App\Models\Post;

class CommentSeeder extends Seeder
{
    use DisableForeignKeys;
    use TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncateTable('comments');
        Comment::factory(100)
        ->for(Post::factory(10), 'post')
        ->create();
        $this->enableForeignKeys();
    }
}

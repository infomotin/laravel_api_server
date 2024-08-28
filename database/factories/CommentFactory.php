<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // //get count model
        // $count = Post::query()->count();
        // if($count===0){
        //     $post_id = Post::factory()->create()->id;
        // }else{
        //     $post_id = rand(1,$count);
        // }
        $post_id = FactoryHelper::getRandomModelId(Post::class);
        $user_id = FactoryHelper::getRandomModelId(User::class);
        return [
            'body' =>[],
            'post_id' => $post_id,
            'user_id' => $user_id,

        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentsAndCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = file_get_contents('https://jsonplaceholder.typicode.com/posts');
        $contents  = json_decode($contents, true);
        $comments = file_get_contents('https://jsonplaceholder.typicode.com/comments');
        $comments  = json_decode($comments, true);

        foreach ($contents as $content){
            Content::query()->create($content);
        }

        foreach ($comments as $comment){
            Comment::query()->create($comment);
        }

        dump('Загружено '. count($contents) . ' постов и ' . count($comments) . ' комментариев');
    }
}

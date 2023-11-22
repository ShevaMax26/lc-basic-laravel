<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Tag;
use App\Models\Worker;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['title' => 'Strong'],
            ['title' => 'Smart'],
            ['title' => 'Fancy'],
            ['title' => 'Developer'],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }

        $createdTags = Tag::all();

        $workers = Worker::take(2)->get();

        foreach ($workers as $worker) {
            $worker->tags()->attach($createdTags);
        }

        $clients = Client::take(2)->get();

        foreach ($clients as $client) {
            $client->tags()->attach($createdTags);
        }
    }
}

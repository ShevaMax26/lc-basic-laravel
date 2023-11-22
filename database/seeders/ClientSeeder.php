<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            ['name' => 'Sasha'],
            ['name' => 'Ivan'],
            ['name' => 'Pavlo'],
            ['name' => 'Maryna'],
        ];

        foreach ($clients as $clientData) {
            $client = Client::create($clientData);

            $client->avatar()->create([
                'path' => "avatar-client-$client->id"
            ]);
        }
    }
}

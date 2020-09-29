<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('How many posts do you need ?', 50);

        $this->command->info("Creating {$count} posts.");

        // Create the Product
        $genres = factory(App\Post::class, $count)->create();

        $this->command->info('Posts Created!');
    }
}

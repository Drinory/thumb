<?php

use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ask how many messages do you need and store that number in $count, max is 50
        $count = (int)$this->command->ask('How many messages do you need ?', 50);

        // Display creating *certain number* users
        $this->command->info("Creating {$count} messages.");

        // Create the Product
        $genres = factory(App\Message::class, $count)->create();

        // Display this message
        $this->command->info('Messages Created!');
    }
}

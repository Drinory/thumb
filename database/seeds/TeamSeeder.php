<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ask how many users u need and store that number in $count, max is 50
        $count = (int)$this->command->ask('How many team members do you need ?', 50);

        // Display creating *certain number* users
        $this->command->info("Creating {$count} team members.");

        // Create the Product
        $genres = factory(App\Team::class, $count)->create();

        // Display this message
        $this->command->info('Team members Created!');
    }
}

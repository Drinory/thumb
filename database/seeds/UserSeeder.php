<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ask how many users u need and store that number in $count, max is 50
        $count = (int)$this->command->ask('How many users do you need ?', 50);

        // Display creating *certain number* users
        $this->command->info("Creating {$count} users.");

        // Create the Product
        $genres = factory(App\User::class, $count)->create();

        // Display this message
        $this->command->info('Users Created!');
    }
}

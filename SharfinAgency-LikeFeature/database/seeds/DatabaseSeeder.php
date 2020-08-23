<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AccountsTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(AgentsTableSeeder::class);
        $this->call(GuideLinesTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(PropertiesTableSeeder::class);
        $this->call(PortofoliosTableSeeder::class);
        $this->call(PropertySellsTableSeeder::class);
        $this->call(PropertyRentsTableSeeder::class);
        $this->call(LikesTableSeeder::class);
        $this->call(PropertyUpdatesTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(NewsLetterSubscribersTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
    }
}

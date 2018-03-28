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
        $this->truncateTable([
            'users',
            'reuniones'
        ]);

        $this->call(UsersSeeder::class);
        $this->call(ReunionesSeeder::class);
    }
    /**
     * truncateTable
     *
     * Delete information in the table specified
     *
     * @param array $table Name table
     * @return void
     */
    public function truncateTable(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->truncateTables(array(
            'users',
            'password_resets',
            'tickets',
            'ticket_votes',
            'ticket_comments',

        ));

        $this->call(UserTableSeeder::class);
        $this->call(TicketTableSeeder::class);
        $this->call(TicketVoteTableSeeder::class);
        $this->call(TicketCommentsTableSeeder::class);
    }

    private function truncateTables(array $tables)
    {
        $this->checkForeignKeys(false);

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::table('users')->truncate();

        $this->checkForeignKeys(true);
    }

    private function checkForeignKeys($check)
    {
        $check = $check ? '1' : '0';
        DB::statement('SET FOREIGN_KEY_CHECKS='.$check);
    }
}

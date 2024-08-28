<?php

namespace Database\Seeders;

use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    use TruncateTable,DisableForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $this->disableForeignKeys();
            $this->truncateTable('users');
            $users =   \App\Models\User::factory(100)->create();
            $this->enableForeignKeys();
    }
}

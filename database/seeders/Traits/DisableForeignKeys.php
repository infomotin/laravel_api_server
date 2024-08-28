<?php

namespace Database\Seeders\Traits;
use DB;


trait DisableForeignKeys
{
    /**
     * Disable foreign key constraints.
     *
     * @return void
     */
    protected function disableForeignKeys()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
    }

    /**
     * Re-enable foreign key constraints.
     *
     * @return void
     */
    protected function enableForeignKeys()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}

<?php


namespace Database\Seeders\Traits;
use DB;
 trait TruncateTable{
    protected function truncateTable($table){
        DB::table($table)->truncate();
    }
 }

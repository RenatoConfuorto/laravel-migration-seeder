<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class Train extends Model
{

    public static function getTableColumns($table)
    {
        return DB::getSchemaBuilder()->getColumnListing($table);


        // return Schema::getColumnListing($table);
    }
}

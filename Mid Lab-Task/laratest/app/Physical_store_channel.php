<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physical_store_channel extends Model
{
    protected $table = null;
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'id';
}

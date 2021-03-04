<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = null;
    public $timestamps = true;

    const UPDATED_AT = "updated_at";

    protected $primaryKey = 'id';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debet extends Model
{
    protected $fillable = [
        "id",
        "description",
        "value",
        "is_monthly",
        "debets_id"
    ];
    
    protected $dates = [
        "due_date",
        "created_at",
        "updated_at"
    ];
}

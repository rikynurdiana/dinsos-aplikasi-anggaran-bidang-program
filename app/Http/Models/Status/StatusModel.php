<?php

namespace App\Http\Models\Status;

use Illuminate\Database\Eloquent\Model;

class StatusModel extends Model
{
    protected $table = 'statuses';

    protected $fillable = [
        'user_id', 'status', 'badge',
    ];
}

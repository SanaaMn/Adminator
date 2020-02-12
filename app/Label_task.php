<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label_task extends Model
{
    protected $fillable = [
        'task_id', 'label_id',
    ];

}

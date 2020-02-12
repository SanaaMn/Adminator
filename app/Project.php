<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Project extends Model
{
    protected $fillable = [
        'name', 'user_id', 'deadline'
    ];

    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'    => "required",
            'deadline' => 'required|date',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            'name'    => "required",
            'deadline' => 'required|date',
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function task()
    {
        return $this->hasMany(Task::class);
    }

}

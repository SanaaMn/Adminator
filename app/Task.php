<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name', 'user_id', 'deadline','project_id','status'
    ];

    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'    => "required",
            'deadline' => 'required|date',
            'project_id' => 'required',
            'user_id' => 'required',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            'name'    => "required",
            'deadline' => 'required|date',
            'project_id' => 'required',
            'user_id' => 'required',
        ]);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function labels()
    {
        return $this->belongsToMany(Label::class,'label_tasks','task_id', 'label_id');
    }
}

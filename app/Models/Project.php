<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function task()
    {
        return $this-hasMany(Task::class, 'project_id', 'id');
    }

}

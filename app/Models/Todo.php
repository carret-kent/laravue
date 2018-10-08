<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use Filterable;

    protected $table = 'todos';

    protected $fillable = [
        'title',
    ];
}

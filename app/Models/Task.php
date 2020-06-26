<?php

namespace App\Models;

use App\Http\Traits\TimestampsTrait;
use App\Http\Traits\TasksTrait;
use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    // for timestamps we are using traits
    use TimestampsTrait;
    use TasksTrait;

    public function getDates() {
		return ['created_at', 'updated_at', 'due_date'];
	}

    // Defining the table
    // protected $table = 'stellar';
}

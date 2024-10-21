<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'status', 'due_date'];

    protected $casts = [
        'due_date' => 'date',
    ];

    public function scopeFilterByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeFilterByDueDate($query, $dueDate)
    {
        return $query->whereDate('due_date', $dueDate);
    }

    public function scopeSearchByTitle($query, $title)
    {
        return $query->where('title', 'like', '%' . $title . '%');
    }
}

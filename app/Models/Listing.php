<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
  use HasFactory;

  public function scopeFilter($query, array $filters)
  {
    if ($filters['tag'] ?? false) {
      $query->where('tags', 'like', '%' . request('tag') . '%');
    }

    if ($filters['search'] ?? false) {
      $query->where('titles', 'like', '%' . request('search') . '%')
        ->orWhere('description', 'like', '%' . request('search') . '%')
        ->orWhere('tags', 'like', '%' . request('search') . '%');
    }
  }

  // Bind to User model
  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  // Store job title and tags as an array
  protected $casts = [
    'titles' => 'array',
    'tags' => 'array'
  ];
}

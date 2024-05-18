<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

// id
// title
// company
// location
// website
// email
// discription
// tags
    protected $fillable=[
        "title",
        "company",
        "location",
        "website",
        "email",
        "discription",
        "tags",
        "logo",
        'user_id'
    ];



    public function scopeFilter($query, array $filters)
    {

        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orwhere('tags', 'like', '%' . request('search') . '%')
                ->orwhere('location', 'like', '%' . request('search') . '%')
                ->orwhere('company', 'like', '%' . request('search') . '%')
                ->orwhere('website', 'like', '%' . request('search') . '%')
                ->orwhere('discription', 'like', '%' . request('search') . '%');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}


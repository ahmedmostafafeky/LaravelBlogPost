<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //only the attributes in fillable that can be math assigned

    protected $with = ['category','author'];

    //only things in $guarded that can not be only math assigned like id
    //protected $guarded = [];

    public function scopeFilter($query,array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>
            $query->where(fn($query) => $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
            )
        );
        $query->when(
            $filters['category'] ?? false,
            fn($query, $category) =>
                $query->whereHas(
                    'category',
                    fn($query) => $query->where('slug',$category)
                )
        );
        $query->when(
            $filters['author'] ?? false,
            fn($query, $author) =>
            $query->whereHas(
                'author',
                fn($query) => $query->where('username',$author)
            )
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category() {
        //hasOne relation
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}

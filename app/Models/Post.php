<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body',
    // ];

    /**
     * The attributes that are not mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are included in query (with).
     *
     * @var string[]
     */
    protected $with = ['author','category'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters){
        //Isset Version
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title','like','%'.$filters['search'].'%')->orWhere('body','like','%'.$filters['search'].'%');
        // }

        $query->when($filters['search'] ?? false , function($query, $search){
            return $query->where(function($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                            ->orWhere('body', 'like', '%' . $search . '%');
            });
        });
        // Callback Version
        $query->when($filters['category'] ?? false, function($query,$category){
            return $query->whereHas('category',function($query) use ($category){
                $query->where('slug', $category);
            });
        });
        //Arrow Function version
        $query->when($filters['author'] ?? false, fn($query,$author)=>
            $query->whereHas('author', fn($query)=>
                $query->where('username', $author)
            )        
        );
    }
}

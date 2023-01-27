<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    //protected $guarded= ['id'];
    protected $fillable = ['name', 'description', 'price','image'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category');
    }

}

<?php

namespace App\Models\Content;

use Database\Seeders\BrandSeeder;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Section extends Model
{
    use HasFactory;

    public $filters = [
        'name',
        'price',
        'brand',
        'views'
    ];


    //has many categories
    public function categories()
    {
        return $this->hasMany(Category::class, 'section_id')->orderBy('position');
    }

    //has many products
    public function products()
    {
        return $this->hasMany(Product::class, 'section_id');
    }

    //produsele publice disponibile
    public function publicProducts()
    {

        return $this->hasMany(Product::class, 'section_id')
            ->where('active', true)
            ->where('stock', '>', 0)
            ->orderBy('name')
            ->paginate(12);

    }



    public function photoUrl()
    {
        return '/content/sections/' . $this->photo;
    }
    public function photoPath()
    {
        return 'content/sections/' . $this->photo;
    }

}

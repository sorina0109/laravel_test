<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subiect extends Model
{
    public function pages()
    {
        return $this->belongsToMany(Page::class, 'subiect_page', 'subiect_id', 'page_id');
    }

    public function public_pages()
    {
        return $this->belongsToMany(Page::class, 'subiect_page', 'subiect_id', 'page_id')
            ->where('published_at', '<>', NULL)
            ->orderByDesc('published_at')
            ->paginate(10)
            ->withQueryString();
    }
}

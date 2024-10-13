<?php

namespace App\Http\Controllers\Front;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Content\Brand;
use App\Models\Content\Product;
use App\Models\Content\Section;
use App\Models\Content\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class PagesController extends Controller
{
    public function homePage()
    {

        $trandy_products = Product::all('name', 'price', 'photo', 'slug')
            ->sortByDesc('views')
            ->take(8);

        $trandy_categories = Category::select('name', 'photo', 'slug')->withCount(['products'])
            ->where('promo', '=', 1)
            ->limit(4)
            ->get();

        $brands = Brand::all('photo', 'slug', 'active')
            ->where('active', true);

        return view('front.home')
            ->with('trandy_products', $trandy_products)
            ->with('brands', $brands)
            ->with('trandy_categories', $trandy_categories);

    }

    public function shopPage(Request $request)
    {
        $sections = Section::withCount('products')
            ->where('active', true)
            ->orderBy('position')
            ->get();

        $categories = Category::select('name', 'photo', 'slug')->withCount(['products'])
            ->where('active', true)
            ->orderBy('position')
            ->get();

        $brands = Brand::all('photo', 'slug', 'active')
            ->where('active', true);

        return view('front.magazin.shop')
        ->with('sections', $sections)
        ->with('brands', $brands)
        ->with('categories', $categories);


    }

    public function contactPage()
    {

        return view('front.contact');
    }

    public function serviciiPage()
    {

        return view('front.servicii');
    }

    public function desprePage()
    {

        return view('front.despre');
    }

    public function termeniPage()
    {

        return view('front.termeni');
    }

    public function searchPage(Request $request)
    {

        $main_query = Product::query()->where('active', true);

        if($request->search_product)
        {
           $main_query->where('name','LIKE',"%$request->search_product%")
           ->orWhere('slug','LIKE',"%$request->search_product%")
           ->orWhere('meta_title','LIKE',"%$request->search_product%")
           ->orWhere('meta_description','LIKE',"%$request->search_product%");
        }

        $products = $main_query->where('active', true)->orderBy('price')->paginate(12)->withQueryString();

        return view('front.search')
            ->with('products', $products);
    }

}

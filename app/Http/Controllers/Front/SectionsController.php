<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\content\Section;
use App\Models\content\Category;
use App\Models\content\Brand;
use App\Models\content\Product;
use App\Http\Controllers\Controller;
use Illuminate\Auth\RequestGuard;
use Termwind\Components\Raw;
use Illuminate\Support\Facades\DB;

class SectionsController extends Controller
{
    private function getSection($slug)
    {

        $section = Section::withCount('products')
        ->where('slug', $slug)->first();

        return $section;
    }
    //afisam pagina unei sectiuni
   
    
    //afisam pagina unei sectiuni
    public function showSection($slug)
    {
        $sections = Section::withCount('products');
        
        $listSections = Section::all();

        return view('front.magazin.section')
        ->with('sections', $sections)
        ->with('listSections', $listSections);

    }

    //afisam produsele unei sectiuni
    public function showSectionProducts(Request $request, $slug)
    {



        $brands = Brand::all()->where('active', true)->sortBy('position');
        $section = Section::with('products')->where('slug', $slug)->first();

        //Get minimum and maximum price to set in price filter range
        $min_price = $section->products->min('price');
        $max_price = $section->products->max('price');




        // $products = $section->publicProducts();

        $main_query = $section->products();

        if ($request->price_filter) {
            $main_query->whereBetween('price', [$min_price, $request->price_filter]);
        }

        if ($request->brand_filter) {
            $brand_filter = $request->brand_filter;
            $main_query->where(function ($query) use ($brand_filter) {

                return $query->whereIn('brand_id', $brand_filter);
            });
        }

        if($request->sort_priceAsc)
        {
            $main_query->orderBy('price');
        }
        if($request->sort_priceDesc)
        {
            $main_query->orderByDesc('price');
        }
        if($request->sort_name)
        {
            $main_query->orderBy('name');
        }
        if($request->sort_views)
        {
            $main_query->orderByDesc('views');
        }
        if($request->search_product)
        {
            $main_query->where('name','LIKE',"%$request->search_product%")

            ->orWhere('meta_title','LIKE',"%$request->search_product%")
            ->orWhere('meta_description','LIKE',"%$request->search_product%");
            }

        $products = $main_query->where('active', true)->orderBy('position')->paginate(12)->withQueryString();


        return view('front.magazin.section-products')
            ->with('section', $section)
            ->with('products', $products)
            ->with('min_price', $min_price)
            ->with('max_price', $max_price)
            ->with('brands', $brands);
    }

    //afisam pagina unei categorii
    public function showCategory($slug)
    {

        $category = Category::withCount('products')
            ->where('slug', $slug)->first();

        //obtinem sectiunea categoriei
        $section = $category->section;
        // obtinem lsita de categorii care sa fie afisata in bara laterala
        $listCategories = $section->categories()->whereNotIn('id', [$category->id])->get();

        // obtinem produsele favorite ale categoriei
        $promo_products = $category->products()->where('promo', 1)->orderBy('name')->get();


        return view('front.magazin.category')
            ->with('category', $category)
            ->with('listCategories', $listCategories)
            ->with('promo_products', $promo_products);
    }


    public function showCategoryProducts(Request $request, $slug)
    {
        $category = Category::withCount('products')->where('slug', $slug)->first();
        $section = Section::with('products')->where('slug', $slug)->first();
        $brands = Brand::all()->where('active', true)->sortBy('position');
        //Get minimum and maximum price to set in price filter range
        $min_price = $category->products->min('price');
        $max_price = $category->products->max('price');




        // $products = $section->publicProducts();

        $main_query = $category->products();

        if ($request->price_filter) {
            $main_query->whereBetween('price', [$min_price, $request->price_filter]);
        }

        if ($request->brand_filter) {
            $brand_filter = $request->brand_filter;
            $main_query->where(function ($query) use ($brand_filter) {

                return $query->whereIn('brand_id', $brand_filter);
            });
        }

        if($request->sort_priceAsc)
        {
            $main_query->orderBy('price');
        }
        if($request->sort_priceDesc)
        {
            $main_query->orderByDesc('price');
        }
        if($request->sort_name)
        {
            $main_query->orderBy('name');
        }
        if($request->sort_views)
        {
            $main_query->orderByDesc('views');
        }
        if($request->search_product)
        {
            $main_query->where('name','LIKE',"%$request->search_product%")

            ->orWhere('meta_title','LIKE',"%$request->search_product%")
            ->orWhere('meta_description','LIKE',"%$request->search_product%");
            }

        $products = $main_query->where('active', true)->orderBy('position')->paginate(12)->withQueryString();


        return view('front.magazin.category-products')
            ->with('category', $category)
            ->with('products', $products)
            ->with('min_price', $min_price)
            ->with('max_price', $max_price)
            ->with('brands', $brands);
    }
}

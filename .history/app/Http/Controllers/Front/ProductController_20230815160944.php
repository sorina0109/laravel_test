<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\shop\OrderItem;
use App\Models\content\Product;
use App\Models\content\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //ruta principala pentru un produs
    public function showProduct($slug)
    {
        $category = Category::select('name', 'slug')->withCount(['products'])->where('slug', $slug)->first();
        $product = Product::where('slug', $slug)->first();
        $product->views++;
        $product->save();

        $related_products = $product->section->products->sortByDesc('views')->take(4);

        // dd($suite_products->count());

        return view('front.magazin.product')
            ->with('related_products', $related_products)
            ->with('product', $product)
            ->with('category', $category);

    }

    public function searchProduct(Request $request)
    {
        $request->validate(
            [
                'search' => 'required|min:3'
            ],
            [
                'search.required' => 'trebuie sa introduceti cel putin 3 caractere pentru a efectua o cautare',
                'search.min' => 'trebuie sa introduceti cel putin 3 caractere pentru a efectua o cautare'
            ]

        );
        $products = Product::where('active', true)
            ->where('name', 'LIKE', "%$request->search%")
            ->orWhere('meta_keywords', 'LIKE', "%$request->search%")
            ->orWhere('meta_description', 'LIKE', "%$request->search%")
            ->paginate(12)
            ->withQueryString();

        /*$top_ten = OrderItem::with(['product' => function ($query) {
            $query->select('id', 'name', 'slug', 'photo');
            $query->where('active', true);
        }])
            ->select(DB::raw('product_id, product_name, qty, sum(qty) as sum_qty'))
            ->groupBy('product_id')
            ->orderByDesc('sum_qty')
            ->limit(10)
            ->get();
*/
        return view('front.search')
            ->with('products', $products)
            ->with('search_term', $request->search);
            //->with('top_ten', $top_ten);
    }
}

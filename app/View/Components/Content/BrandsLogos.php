<?php

namespace App\View\Components\content;

use App\Models\content\Brand;
use Illuminate\View\Component;

use function PHPUnit\Framework\isTrue;

class BrandsLogos extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
      

        $brands = Brand::all('photo', 'slug', 'active')
            ->where('active', true);

        return view('components.content.brands-logos')
           
            ->with('brands', $brands);
    }
}

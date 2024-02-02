<?php

namespace App\Http\Livewire\Admin\Brand;

use Livewire\Component;
use App\Models\Brand;
class Index extends Component
{

    public function render()
    {
        $brands = Brand::orderBy('id','DESC')->paginate(3);
        return view('livewire.admin.brand.index',['brands' => $brands]);
    }
}

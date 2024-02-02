<?php

namespace App\Http\Livewire\Retailers\Category;

use Livewire\Component;
use App\Models\Category;
class Index extends Component
{
    public function render()
    {
        $categories = Category::orderBy('id','DESC')->paginate(10);
        return view('livewire.retailers.category.index',['categories' => $categories]);
    }


}

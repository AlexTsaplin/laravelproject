<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;



class ShowPosts extends Component {

    public $product;

    public function mount() {
        $this->product = Product::all();
    }

    public function render()
    {
        return view('livewire.show-posts')->layout('layout');
    }

}

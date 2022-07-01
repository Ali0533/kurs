<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create() {
        return view('admin.create');
    }

    public function createPost(ProductRequest $request) {
        $validate = $request->validated();
        $file = $request->file('photo_file');

        $file->storeAs('/public', $file->getClientOriginalName());

        unset($validate['photo_file']);
        $validate['photo'] = $file->getClientOriginalName();

        Product::create($validate);

        return back()->with(['success' => true]);
    }

    public function destroy(Product $product) {
        $product->delete();
        return back();
    }
}

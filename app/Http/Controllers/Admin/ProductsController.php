<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\SaveProductRequest;
use App\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


//use Intervention\Image\ImageManagerStatic as Image;

class ProductsController extends Controller
{
    public function index() {

        return view('admin.products.index')
            ->with('products', Product::all())
            //->with('categories', Category::lists('name', 'id'));
            ->with('categories', Category::all()->pluck('name', 'id'));
    }

    public function store(SaveProductRequest $request){

        $product = new Product();
        $product->fill($request->only('category_id', 'title', 'description', 'price'));

        $products_path = 'img/products/';
        $image = $request->file('image');
        $filename = time() . '-' . $image->getClientOriginalName();
        $path = public_path($products_path . $filename);

        Image::make($image->getRealPath())
            ->resize(468,249)
            ->save($path);

        $product->image = $products_path . $filename;
        $product->save();

        return redirect(route('admin.products.index'))->with('message', 'Product created');

    }

    public function destroy($id){

        $product = Product::findOrFail($id);

        File::delete(public_path($product->image));
        $product->delete();

        return redirect(route('admin.products.index'))->with('message', 'Product deleted');

    }

    public function toggleAvailability(Request $request){

        $product = Product::findOrFail($request->get('id'));
        $product->availability = $request->get('availability');
        $product->save();

        return redirect(route('admin.products.index'))->with('message', 'Product Updated');
    }
}

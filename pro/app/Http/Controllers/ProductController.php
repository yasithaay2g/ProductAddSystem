<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create()
    {

        return view('user.product.product_add' );

    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'p_name' => 'required',
            'p_sub_name' => 'required',
            'p_price'=>'required'
        ]);






        if ($request->image !=null){
            $file = $request->file('image');

            $profileSave = time() . Auth::id() . "-post." . $file->getClientOriginalExtension();
            $public_path = 'img/product/';
            $path_url = $public_path . $profileSave;
            $file->move($public_path, $profileSave);

        } else {
            $path_url = 'img/product/NO_IMG.png';
        }



        $product = new Product();


        $product-> User_name=Auth::user()->name;
        $product-> u_id=Auth::user()->id;

        $product -> p_name = $request -> p_name;
        $product -> p_sub_name = $request -> p_sub_name;
        $product -> p_price= $request->p_price;
        $product -> description = $request -> description;
        $product -> image = $path_url;
        $product -> save();



        return redirect('/product')->with('success','product Add successfully');

    }

    public function index(){
        $product = Product::orderBy('id','desc')
            ->where('u_id',Auth::user()->id)
            ->get();

        return view('user.product.show', compact('product'));
    }




    public function edit(Request $request, $id)
    {

        $product = Product::find($id);
        return view('user.product.edit')->with('pro', $product);

    }

    public function update(Request $request, $id)
    {




        if($request->hasFile('image')){
            $file = $request->file('image');

            $profileSave = time() . Auth::id() . "-post." . $file->getClientOriginalExtension();
            $public_path = 'img/blog/';
            $path_url = $public_path . $profileSave;
            $file->move($public_path, $profileSave);

        } else {
            $path_url = $request->old_image;
        }



        $product = Product::find($id);

        $product -> p_name = $request -> p_name;
        $product -> p_sub_name = $request -> p_sub_name;
        $product -> p_price= $request->p_price;
        $product -> description = $request -> description;
        $product -> image = $path_url;


        $product -> update();

        return redirect('/productshow')->with('success','Product  Edit successfully');
    }








    public function delete($id)
    {


        $product =Product::find($id);
        $product->delete();

        return redirect('/productshow')->with('success','Product  deleted successfully');



    }



    public function p_home()
    {
        $home = DB::table('products')
            ->orderBy('created_at', 'desc')

            ->paginate(6);




        return view('welcome', ['home' => $home]);
    }
}

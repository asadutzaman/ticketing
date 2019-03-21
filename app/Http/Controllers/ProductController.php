<?php
  
namespace App\Http\Controllers;
  
use App\Product;
use Illuminate\Http\Request;
use App\Student;
  
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
  
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    // route function only
    {
        return view('products.create');
    }
    public function form()      // route function
    {
        return view('products.form');
    }
    public function table(){
        //return view('table');
        $products = Product::latest()->paginate(5);
  
        return view('products.table',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $name=$_POST['name'];
        $first_name=$_POST['first_name'];

        $request->validate([
            'name'      => '',
            'detail'    => '',
            'first_name'=> '',
            'last_name' => ''
        ]);

        if(!empty($name) && !empty($first_name)){
            Product::create($request->all());
            Student::create($request->all());    
            return redirect()->route('table')
            ->with('success','*All* created successfully.');
        }
        if(!empty($name)){
            Product::create($request->all());
            return redirect()->route('table')
            ->with('success','Product created successfully.');
        }
        if(!empty($first_name)){
            Student::create($request->all());    
            return redirect()->route('table')
            ->with('success','*Student* created successfully.');
        }

    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.view',compact('product'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.view',compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
  
        $product->update($request->all());
  
        return redirect()->route('table')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
  
        return redirect()->route('table')
                        ->with('success','Product deleted successfully');
    }
}
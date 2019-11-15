<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    private $product;
    public function __construct(Product $products)
    {
        $this->middleware('auth')->except('index');
        $this->product = $products;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = $this->product->orderBy('id')->paginate(10);
        return view('product.index', compact('product', $product));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        try {
            $this->product->create($request->all());
            flash('Produto cadastrado com sucesso!')->success();
            return redirect()->route('product.index')->withInput($request->only('name'));
        } catch (\Throwable $e) {
            flash($e->getMessage())->warning();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->product->findOrFail($id);

        return view('product.show', compact('product', $product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->product->findOrFail($id);

        return view('product.edit', compact('product', $product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $product = $this->product->findOrFail($id);
            $product->update($data);

            flash('Produto alterado com sucesso!')->success();
            return redirect()->route('product.index');
        } catch (\Throwable $e) {
            flash($e->getMessage())->warning();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $product = $this->product->findOrFail($id);
            $product->delete();

            flash('Produto removido com sucesso!')->success();
            return redirect()->route('product.index');
        } catch (\Exception $e) {
            flash($e->getMessage())->error();

            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('product.index');
    }
}

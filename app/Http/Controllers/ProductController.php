<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;

        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = $this->productService->getAll();

        return view('product.index', compact('product'));
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
        if (!$this->productService->store($request->all())) {
            flash('Ocorreu um erro.')->warning();
            return redirect()
                ->back()
                ->withInput();
        }

        flash('Produto inserido com sucesso!')->success();
        return redirect()
            ->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->productService->get($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->productService->get($id);

        return view('product.edit', compact('product'));
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
        if (!$this->productService->update($id, $request->all())) {
            flash('Ocorreu um erro.')->warning();
            return redirect()
                ->back()
                ->withInput();
        }

        flash('Produto alterado com sucesso!')->success();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$this->productService->destroy($id)) {
            flash('Ocorreu um erro.')->warning();
            return redirect()
                ->back();
        }

        flash('Produto excluído com sucesso!')->success();
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('product.index');
    }
}

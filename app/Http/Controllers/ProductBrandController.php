<?php

namespace App\Http\Controllers;

use App\Model\ProductBrand;
use Illuminate\Http\Request;
use App\Http\Resources\ProductBrandResource;

class ProductBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductBrandResource::collection(ProductBrand::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productBrand = ProductBrand::create($request->all());
        return new ProductBrandResource($productBrand);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ProductBrand  $productBrand
     * @return \Illuminate\Http\Response
     */
    public function show(ProductBrand $productBrand)
    {
        return new ProductBrandResource($productBrand);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ProductBrand  $productBrand
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductBrand $productBrand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ProductBrand  $productBrand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductBrand $productBrand)
    {
        $productBrand->update($request->all());
        return new ProductBrandResource($productBrand);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ProductBrand  $productBrand
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductBrand $productBrand)
    {
        $productBrand->delete();
        return new ProductBrandResource($productBrand);
    }
}

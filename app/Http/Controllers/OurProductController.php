<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OurProductCategory;
use App\OurProductGroup;
use App\TentangKami;
use App\OurProduct;
use App\OurProductGulma;
use App\OurProductFaq;
use App\ProductCategory;

class OurProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function kategoriProduk($id) {
        $product = OurProduct::with(['kelompokProduk'])->where('kategori_id', $id)->paginate(12);
        $namaKategori = OurProductCategory::find($id)->category_name;
        $productGroup = OurProductGroup::get();
        $productCategorys = ProductCategory::get();
		$ourProductCategorys = OurProductCategory::get();
        $tentangKami = TentangKami::first();
        $pagination = $product->links();

        return view('product-category', [
            'product' => $product,
            'productCategorys' => $productCategorys,
            'ourProductCategorys' => $ourProductCategorys,
            'namaKategori' => $namaKategori,
            'productGroup' => $productGroup,
            'tentangKami' => $tentangKami,
            'pagination' => $pagination
        ]);
    }
    
    public function detailProduk($id) {
        $product = OurProduct::find($id);
        $implementProduct = OurProductGulma::where('produk_id', $id)->first();
        $productCategorys = OurProductCategory::all();
        $productFaq = OurProductFaq::where('produk_id', $id)->get();
        $tentangKami = TentangKami::first();

        return view('product-detail', [
            'product' => $product,
            'implementProduct' => $implementProduct,
            'productFaq' => $productFaq,
            'productCategorys' => $productCategorys,
            'tentangKami' => $tentangKami
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
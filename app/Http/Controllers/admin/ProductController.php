<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\CategoryRepositories;
use App\Repositories\ProductRepositories;


class ProductController extends Controller
{

    public $ProductRepositories ;
    public $CategoryRepositories ;

    public function __construct(
        ProductRepositories $ProductRepositories,
        CategoryRepositories $CategoryRepositories)
    {
        $this->ProductRepositories = $ProductRepositories;
        $this->CategoryRepositories = $CategoryRepositories;
    }

    public function index(Request $request)
    {
        $listproduct = $this->ProductRepositories->getProduct();
        return view('admin.product.list', compact('listproduct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listCategory = $this->CategoryRepositories->getAll();

        return view('admin.product.create',compact('listCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

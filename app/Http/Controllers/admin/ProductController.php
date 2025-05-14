<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\productModel;
use Illuminate\Http\Request;

use App\Repositories\CategoryRepositories;
use App\Repositories\ProductRepositories;
use App\Repositories\ColorRepositories;
use App\Repositories\SizeRepositories;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public $ProductRepositories;
    public $CategoryRepositories;
    public $ColorRepositories;
    public $SizeRepositories;

    public function __construct(
        ProductRepositories $ProductRepositories,
        CategoryRepositories $CategoryRepositories,
        ColorRepositories $ColorRepositories,
        SizeRepositories $SizeRepositories
    ) {
        $this->ProductRepositories = $ProductRepositories;
        $this->CategoryRepositories = $CategoryRepositories;
        $this->ColorRepositories = $ColorRepositories;
        $this->SizeRepositories = $SizeRepositories;
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

        $listcolor = $this->ColorRepositories->getColor();

        $listsize = $this->SizeRepositories->getAllSize();

        return view('admin.product.create', compact('listCategory', 'listcolor', 'listsize'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     // 'SKU' => 'required|unique:product,SKU',
        //     // 'name_product' => 'required',
        //     // 'category_id' => 'required|exists:category,id',
        //     // 'content' => 'required',
        //     // 'description' => 'required',
        //     // 'price' => 'required|numeric|min:0',
        //     // 'price_sale' => 'nullable|numeric|min:0',
        //     // 'image' => 'required|image|max:2048',
        // ]);

        $imagePath = $request->file('image')->store('products', 'public');

        productModel::create([
            'SKU' => $request->SKU,
            'name_product' => $request->name_product,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'description' => $request->description,
            'price' => $request->price,
            'price_sale' => $request->price_sale,
            'image' => $imagePath,
        ]);

        return redirect()->route('listproduct')->with('success', 'Thêm sản phẩm thành công');
    }


    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = $this->ProductRepositories->getIdProduct($id);

        $listCategory = $this->CategoryRepositories->getAll();

        $listcolor = $this->ColorRepositories->getColor();

        $listsize = $this->SizeRepositories->getSize();

        return view('admin.product.edit', compact(['product'], 'listCategory', 'listcolor', 'listsize'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = productModel::findOrFail($id);

        // $request->validate([
        //     'SKU' => 'required|unique:product,SKU,' . $product->id,
        //     'name_product' => 'required',
        //     'category_id' => 'required|exists:category,id',
        //     'content' => 'required',
        //     'description' => 'required',
        //     'price' => 'required|numeric',
        //     'price_sale' => 'nullable|numeric',
        //     'image' => 'nullable|image|max:2048',
        // ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('listproduct')->with('success', 'Sửa sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = productModel::findOrFail($id);

        Storage::delete('public/' . $product->image);

        $product->delete();

        return redirect()->route('listproduct')->with('success', 'Xóa sản phẩm thành công');
    }
}

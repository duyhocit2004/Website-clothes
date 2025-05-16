<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Service\Cate\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $category;

    // Khai báo biến category
    public function __construct(CategoryService $category)
    {
        $this->category = $category;
    }

    // Danh sách thể loại
    public function index()
    {
        $category = $this->category->getCategories();

        return view('admin.category.list', compact('category'));
    }

    // Form thêm thể loại
    public function create()
    {
        return view('admin.category.create');
    }

    // Thêm thể loại
    public function store(Request $request)
    {
        $param = $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Bạn chưa nhập thể loại'
        ]);
        $this->category->createCategory($param);

        return redirect()
            ->route('listcategory')
            ->with('success', 'Thêm thể loại thành công');
    }


    // Form sửa thể loại
    public function edit(string $id)
    {
        $list = $this->category->getCategory($id);

        return view('admin.category.edit', compact('list'));
    }

    // Sửa thể loại
    public function update(Request $request, string $id)
    {
        $param = $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Bạn chưa nhập thể loại'
        ]);

        $this->category->updateCategory($id, $param);

        return redirect()
            ->route('listcategory')
            ->with('success', 'Sửa thể loại thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->category->deleteCategory($id);

        return redirect()
            ->route('listcategory')
            ->with('success', 'Xóa thể loại thành công');
    }
}

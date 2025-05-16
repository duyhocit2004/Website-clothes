<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\ColorRepositories;

class ColorController extends Controller
{
    public $color;
    // Khai báo biến color
    public function __construct(ColorRepositories $color)
    {
        $this->color = $color;
    }

    // Danh sách màu sắc
    public function index()
    {
        $listcolor = $this->color->getColor();
        //dd($listcolor);
        return view('admin.color.list', compact('listcolor'));
    }

    // Form thêm màu sắc
    public function create()
    {
        return view('admin.color.create');
    }

    // Thêm màu sắc
    public function store(Request $request)
    {
        $color = $request->validate([
            'name' => 'required',

        ], [
            'name.required' => 'bạn chưa nhập kích cỡ'
        ]);
        $this->color->insertColor($color);

        return redirect()->back()->with('success', 'thêm thành công');
    }


    // Form sửa màu sắc
    public function edit(string $id)
    {
        $listcolor = $this->color->getColorById($id);
        return view('admin.color.edit', compact('listcolor'));
    }

    // Sửa màu sắc
    public function update(Request $request, string $id)
    {
        //        dd($request->all());
        $color = $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'bạn chưa nhập kích cỡ'
        ]);

        $this->color->updateColorById($id, $color);

        return redirect()->route('listcolor')->with('success', 'sửa thành công');
    }

    // Xóa màu sắc
    public function destroy(string $id)
    {
        $this->color->deleteColorById($id);

        return redirect()->route('listcolor')->with('success', 'xóa thành công');
    }
}

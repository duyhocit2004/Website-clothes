<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\ColorRepositories;
class ColorController extends Controller
{
    public $color;
    public function __construct(ColorRepositories $color){
        $this->color = $color;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listcolor = $this->color->getColor();
//        dd($listcolor);
        return view('admin.color.list',compact( 'listcolor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $color = $request->validate([
            'name' => 'required',

        ],[
            'name.required' => 'bạn chưa nhập kích cỡ'
        ]);
        $this->color->insertColor($color);
        return redirect()->back()->with('success','thêm thành công');
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
        $listcolor = $this->color->getColorById($id);
        return view('admin.color.edit',compact( 'listcolor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        dd($request->all());
        $color = $request->validate([
            'name' => 'required',

        ],[
            'name.required' => 'bạn chưa nhập kích cỡ'
        ]);
        $this->color->updateColorById($id,$color);
        return redirect()->route('listcolor')->with('success','sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->color->deleteColorById($id);
        return redirect()->route('listcolor')->with('success','xóa thành công');

    }
}

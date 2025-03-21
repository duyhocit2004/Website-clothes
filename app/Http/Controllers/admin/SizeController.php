<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\SizeRepositories;

class SizeController extends Controller
{
    public $size;
    public function __construct(SizeRepositories $size){
        $this->size = $size;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listSize = $this->size->getSize();
        return view('admin.size.list',compact('listSize'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $param = $request->validate([
            'name' => 'required',
        ],[
            'name.required'=>'Bạn chưa nhập thể loại'
        ]);
        $this->size->createSize($param);
        return redirect()->route('Listsize')->with('success','Thêm kích cỡ thành công');
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
        $size = $this->size->getSizeId($id);
        return view('admin.size.edit',compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $param = $request->validate([
            'name' => 'required',
        ],[
            'name.required'=>'Bạn chưa nhập thể loại'
        ]);
        $this->size->updateSize($id,$param);
        return redirect()->route('listsize')->with('success','sửa kích cỡ thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->size->deleteSize($id);
        return redirect()->route('listsize')->with('success','xóa kích cỡ thành công');
    }
}

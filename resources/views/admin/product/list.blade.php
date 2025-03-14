@extends('admin.index');
@section('main')
    <div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 my-3 px-3 xl:px-4 ac-transition">
        <div class="card">
            <h2 class="card-title">Danh sách sàn phẩm</h2>
        </div>
        <div class="grid grid-cols gap-x-4">
            <!-- SOLID DEFAULT COLOR ALEART -->
            <div class="col-span-full lg:col-span-6">
                <div class="card p-0">

                    <div class="p-6 space-y-4">
                        <table class="container" id="basicDataTable ">
                            <thead>
                            <tr>
                                <th class="bg-[#B2E8D9] py-5">STT</th>
                                <th class="bg-[#B2E8D9] py-5">Tên sản phẩm</th>
                                <th class="bg-[#B2E8D9] py-5">Image</th>
                                <th class="bg-[#B2E8D9] py-5">Thể loại</th>
                                <th class="bg-[#B2E8D9] py-5">giá gốc</th>
                                <th class="bg-[#B2E8D9] py-5">Giá giảm</th>
                                <th class="bg-[#B2E8D9] py-5">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-dark-border">
                            @foreach($listproduct as $index => $list)
                                <tr class="d-flex justify-content-center text-center">
                                    <td>{{$index+1}}</td>
                                    <td>{{$list->name_product}}</td>
                                    <td>{{$list->image}}</td>
                                    <td>{{$list->category->name}}</td>
                                    <td>{{$list->price}}</td>
                                    <td>{{$list->price_sale == null ? 'chưa có' : $list->price_sale  }}</td>
                                    <td style="align-content:center ">
                                        <a class="btn btn-success" href="{{route('editproduct',$list->id)}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('deleteproduct',$list->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-icon btn-danger-icon-light ">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$listproduct->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

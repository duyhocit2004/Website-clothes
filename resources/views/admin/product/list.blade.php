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
                                <th class="bg-[#B2E8D9]">STT</th>
                                <th class="bg-[#B2E8D9]">Tên sản phẩm</th>
                                <th class="bg-[#B2E8D9]">Thể loại</th>
                                <th class="bg-[#B2E8D9]">Image</th>
                                <th class="bg-[#B2E8D9]">Giá</th>
                                <th class="bg-[#B2E8D9]">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-dark-border">
                            @foreach($listproduct as $list)
                                <tr>
                                    <td>{{$list->name_product}}</td>
                                    <td>{{$list->categor}}</td>
                                    <td>{{$list->name_product}}</td>
                                    <td>{{$list->name_product}}</td>
                                    <td>{{$list->name_product}}</td>
                                    <td>$320,800</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

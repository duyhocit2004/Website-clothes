@extends('admin.index')
@section('main')
    <div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] my-2 group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="card">
            <h2 class="card-title">Danh sách thể loại</h2>
        </div>
        <div class="grid grid-cols-12">
            <div class="tablejs sr-only size-0 data-table-css"></div>
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="p-6 space-y-4  container">
                        <table id="rowSelectionDeletion" class=" container bordered">
                            <thead>
                            <tr>
                                <th class="!bg-[#FEF6EC] dark:!bg-dark-card-shade py-2">STT</th>
                                <th class="!bg-[#FEF6EC] dark:!bg-dark-card-shade py-2">Thể loại</th>
                                <th class="!bg-[#FEF6EC] dark:!bg-dark-card-shade py-2">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $index => $cate)
                                <tr class="d-flex justify-content-center text-center">
                                    <td>{{$index+1}}</td>
                                    <td>{{$cate->name}}</td>
                                    <td class="display-flex justify-content-center text-center">
                                        <div class="">
                                            <a href="{{route('editcategory',$cate->id)}}" class="btn-icon btn-primary-icon-light size-7">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="container">
                                            <form action="{{route('deletecategory',$cate->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn-icon btn-danger-icon-light size-7"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$category->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

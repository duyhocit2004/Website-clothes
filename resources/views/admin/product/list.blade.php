@extends('admin.index');
@section('main')
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 my-3 px-3 xl:px-4 ac-transition">
        <div class="card">
            <h2 class="card-title">Danh sách sản phẩm</h2>
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
                                    <th class="bg-[#B2E8D9] py-5">Hình ảnh</th>
                                    <th class="bg-[#B2E8D9] py-5">Thể loại</th>
                                    <th class="bg-[#B2E8D9] py-5">Giá</th>
                                    <th class="bg-[#B2E8D9] py-5">Giá giảm</th>
                                    <th class="bg-[#B2E8D9] py-5">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-dark-border">
                                @foreach ($listproduct as $index => $list)
                                    <tr class="d-flex justify-content-center text-center">
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $list->name_product }}</td>
                                        <td class="text-center">
                                            <img class="img-fluid mx-auto d-block mt-3"
                                                src="{{ asset('storage/' . $list->image) }}"
                                                alt="product image"style="width: 200px;">
                                        </td>
                                        <td>{{ $list->category->name }}</td>
                                        <td>{{ $list->price }}</td>
                                        <td>{{ $list->price_sale == null ? 'chưa có' : $list->price_sale }}</td>

                                        <td class="align-content:center align-middle">
                                            <a class="btn-icon btn-success-icon-light"
                                                href="{{ route('editproduct', $list->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ route('deleteproduct', $list->id) }}" method="POST"
                                                onsubmit="return confirmDelete(event)">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Bạn có chắc chắn không ?')" class="btn-icon btn-danger-icon-light mt-2">
                                                        <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $listproduct->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

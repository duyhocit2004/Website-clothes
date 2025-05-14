@extends('admin.index')

@section('main')
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 my-2 xl:px-4 ac-transition">
        <form action="{{ route('storeproduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-12 gap-x-4">
                <!-- Start Product Information -->
                <div class="col-span-full lg:col-span-7 card">
                    <div class="p-1.5">
                        <h6 class="card-title">Thêm sản phẩm</h6>
                        <div class="mt-7 pt-0.5">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseTitle" class="form-label">Tên sản phẩm</label>
                                    <input type="text" name="name_product" id="courseTitle"
                                        placeholder="Nhập tên sản phẩm" class="form-input">
                                </div>

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label class="form-label">Danh mục</label>
                                    <select name="category_id" class="form-input singleSelect">
                                        <option value="Danh mục" disabled selected>-- Danh mục --</option>
                                        @foreach ($listCategory as $cate)
                                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="price" class="form-label">Giá sản phẩm</label>
                                    <input type="number" name="price" id="coursePrice" placeholder="Giá sản phẩm"
                                        class="form-input">
                                </div>

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="price_sale" class="form-label">Giá giảm (không bắt buộc)</label>
                                    <input type="number" name="price_sale" id="price_sale" placeholder="Giảm giá"
                                        class="form-input">
                                </div>

                                <div class="col-span-full">
                                    <label for="description" class="form-label">Mô tả</label>
                                    <textarea name="description" id="description" class="summernote form-input"></textarea>
                                </div>

                                <div class="col-span-full">
                                    <label for="content" class="form-label">Nội dung</label>
                                    <textarea name="content" id="content" class="summernote form-input"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Start Product Variations -->
                    <div class="col-span-full lg:col-span-7 card">
                        <div class="p-1.5">
                            <h6 class="card-title">Biến thể sản phẩm</h6>
                            <div class="mt-7 pt-0.5">
                                <div id="variant-container" class="flex flex-col gap-4">
                                    <div class="variant-item flex gap-4 items-center">
                                        <select name="size" class="form-input">
                                            @foreach ($listsize as $size)
                                                <option value="{{ $size->id }}"> {{ $size->name }} </option>
                                            @endforeach
                                        </select>

                                        <select name="color" class="form-input">
                                            @foreach ($listcolor as $color)
                                                <option value="{{ $color->id }}"> {{ $color->name }} </option>
                                            @endforeach
                                        </select>

                                        <input type="number" name="variant_price[]" placeholder="Giá" class="form-input">
                                        <input type="number" name="variant_stock[]" placeholder="Số lượng"
                                            class="form-input">

                                        <button type="button" class="btn btn-danger remove-variant">Xóa</button>
                                    </div>
                                </div>
                                <button type="button" onclick="addVariant()"
                                    class="btn b-solid btn-primary-solid btn-lg dk-theme-card-square mt-3"
                                    id="add-variant">Thêm biến thể</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Variations -->
                </div>
                <!-- End Product Information -->

                <!-- Start Product Media File -->
                <div class="col-span-full lg:col-span-5 card">
                    <div class="p-1.5">
                        <h6 class="card-title">Thêm hình ảnh</h6>
                        <div class="mt-7 pt-0.5 flex flex-col gap-5">
                            <div class="col-span-full sm:col-span-4">
                                <p class="text-xs text-gray-500 dark:text-dark-text leading-none font-semibold mb-3">
                                    Ảnh chính (548x234)
                                </p>
                                <label for="thumbnailsrc"
                                    class="file-container ac-bg text-xs leading-none font-semibold mb-3 cursor-pointer aspect-[4/1.5] flex flex-col items-center justify-center gap-2.5 border border-dashed border-gray-900 dark:border-dark-border rounded-10 dk-theme-card-square">
                                    <input type="file" name="image" id="thumbnailsrc" hidden class="img-src peer/file">
                                    <span class="flex-center flex-col peer-[.uploaded]/file:hidden">
                                        <span
                                            class="size-10 md:size-15 flex-center bg-primary-200 dark:bg-dark-icon rounded-50 dk-theme-card-square">
                                            <img src="{{ asset('admin/assets/images/icons/upload-file.svg') }}"
                                                alt="icon"
                                                class="dark:brightness-200 dark:contrast-100 w-1/2 sm:w-auto">
                                        </span>
                                        <span class="mt-2 text-gray-500 dark:text-dark-text">Chọn file</span>
                                    </span>
                                </label>
                            </div>

                            <div class="col-span-full sm:col-span-4">
                                <p class="text-xs text-gray-500 dark:text-dark-text leading-none font-semibold mb-3">
                                    Ảnh phụ (có thể chọn nhiều ảnh)
                                </p>
                                <input type="file" name="images[]" multiple class="form-input">
                            </div>

                            <div class="flex-center !justify-end">
                                <button type="submit" class="btn b-solid btn-primary-solid btn-lg dk-theme-card-square">
                                    Thêm sản phẩm
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product Media File -->
            </div>
        </form>
    </div>

    <script>
        document.getElementById('add-variant').addEventListener('click', function() {
            let container = document.getElementById('variant-container');
            let newVariant = document.createElement('div');
            newVariant.classList.add('variant-item', 'flex', 'gap-4', 'items-center');
            newVariant.innerHTML = `
                <select name="size" class="form-input">
                    @foreach ($listsize as $size)
                        <option value="{{ $size->id }}"> {{ $size->name }} </option>
                    @endforeach
                </select>
               <select name="color" class="form-input">
                    @foreach ($listcolor as $color)
                        <option value="{{ $color->id }}"> {{ $color->name }} </option>
                    @endforeach
                </select>
                <input type="number" name="variant_price[]" placeholder="Giá" class="form-input">
                <input type="number" name="variant_stock[]" placeholder="Số lượng" class="form-input">
                <button type="button" class="btn btn-danger remove-variant">Xóa</button>
            `;
            container.appendChild(newVariant);
        });

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-variant')) {
                e.target.parentElement.remove();
            }
        });
    </script>
@endsection

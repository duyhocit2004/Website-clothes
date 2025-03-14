@extends('admin.index');
@section('main')
    <div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 my-2 xl:px-4 ac-transition">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-12 gap-x-4">
                <!-- Start Course Information -->
                <div class="col-span-full lg:col-span-7 card">
                    <div class="p-1.5">
                        <h6 class="card-title">Thêm sản phẩm </h6>
                        <div class="mt-7 pt-0.5">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseTitle" class="form-label">Tên sản phẩm </label>
                                    <input type="text" name="name_product" id="courseTitle" placeholder="áo dài truyền thống" class="form-input" required>
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label class="form-label">Courses category</label>
                                    <select class=" form-input singleSelect">
                                            @foreach($listCategory as $cate)
                                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                                            @endforeach
                                    </select>
                                </div>

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="price" class="form-label">Giá sản phẩm</label>
                                    <input type="number" name="price" id="coursePrice" placeholder="$200.00" class="form-input" required>
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="price_sale" class="form-label">Giá giảm(không bắt buộc)</label>
                                    <input type="number" id="price_sale" placeholder="$100.00" class="form-input" >
                                </div>

                                <div class="col-span-full">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description"  class="summernote form-input"></textarea>
                                </div>

                                <div class="col-span-full">
                                    <label for="content" class="form-label">content</label>
                                    <textarea id="content"  class="summernote form-input"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Course Information -->

                <!-- Start Course Media File -->
                <div class="col-span-full lg:col-span-5 card">
                    <div class="p-1.5">
                        <h6 class="card-title">Add media files</h6>
                        <div class="mt-7 pt-0.5 flex flex-col gap-5">
                            <div class="col-span-full sm:col-span-4">
                                <p class="text-xs text-gray-500 dark:text-dark-text leading-none font-semibold mb-3">Thumbnail (548x234)</p>
                                <label for="thumbnailsrc" class="file-container ac-bg text-xs leading-none font-semibold mb-3 cursor-pointer aspect-[4/1.5] flex flex-col items-center justify-center gap-2.5 border border-dashed border-gray-900 dark:border-dark-border rounded-10 dk-theme-card-square">
                                    <input type="file" id="thumbnailsrc" hidden class="img-src peer/file">
                                    <span class="flex-center flex-col peer-[.uploaded]/file:hidden">
                                        <span class="size-10 md:size-15 flex-center bg-primary-200 dark:bg-dark-icon rounded-50 dk-theme-card-square">
                                            <img src="{{asset('admin/assets/images/icons/upload-file.svg')}}" alt="icon" class="dark:brightness-200 dark:contrast-100 w-1/2 sm:w-auto">
                                        </span>
                                        <span class="mt-2 text-gray-500 dark:text-dark-text">Choose file</span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-span-full sm:col-span-4">
                                <p class="text-xs text-gray-500 dark:text-dark-text leading-none font-semibold mb-3">Main course file</p>
                                <label for="main-file-src" class="file-container text-xs leading-none font-semibold mb-3 cursor-pointer aspect-[4/1.5] flex flex-col items-center justify-center gap-2.5 border border-dashed border-gray-900 dark:border-dark-border rounded-10 dk-theme-card-square">
                                    <input type="file" id="main-file-src" hidden class="peer/file file-src">
                                    <span class="flex-center flex-col">
                                        <span class="size-10 md:size-15 flex-center bg-primary-200 dark:bg-dark-icon rounded-50 dk-theme-card-square">
                                            <img src="assets/images/icons/upload-file.svg" alt="icon" class="dark:brightness-200 dark:contrast-100 w-1/2 sm:w-auto">
                                        </span>
                                        <span class="file-name text-gray-500 dark:text-dark-text mt-2">Choose file</span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-span-full sm:col-span-4">
                                <p class="text-xs text-gray-500 dark:text-dark-text leading-none font-semibold mb-3">Introduction file</p>
                                <label for="intro-file-src" class="file-container text-xs leading-none font-semibold mb-3 cursor-pointer aspect-[4/1.5] flex flex-col items-center justify-center gap-2.5 border border-dashed border-gray-900 dark:border-dark-border rounded-10 dk-theme-card-square">
                                    <input type="file" id="intro-file-src" hidden class="peer/file file-src">
                                    <span class="flex-center flex-col">
                                        <span class="size-10 md:size-15 flex-center bg-primary-200 dark:bg-dark-icon rounded-50 dk-theme-card-square">
                                            <img src="assets/images/icons/upload-file.svg" alt="icon" class="dark:brightness-200 dark:contrast-100 w-1/2 sm:w-auto">
                                        </span>
                                        <span class="file-name text-gray-500 dark:text-dark-text mt-2">Choose file</span>
                                    </span>
                                </label>
                            </div>
                            <div class="flex-center !justify-end">
                                <button type="submit" class="btn b-solid btn-primary-solid btn-lg dk-theme-card-square">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Course Media File -->
            </div>
        </form>
    </div>
@endsection

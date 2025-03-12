<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg">

<!-- Mirrored from template.codexshaper.com/admin/dashkit/component-aleart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Mar 2025 13:05:48 GMT -->
<head>
    @include('admin.layout.head')
</head>
<body class="">
<!-- Start Main Content -->
<div class="main-content m-4">
    <div class="grid grid-cols-12 gap-y-7 sm:gap-7 card px-4 sm:px-10 2xl:px-[70px] py-15 lg:items-center lg:min-h-[calc(100vh_-_32px)]">
        <!-- Start Overview Area -->
        <div class="col-span-full lg:col-span-6">
            <div class="flex flex-col items-center justify-center gap-10 text-center">
                <div class="hidden sm:block">
                    <img src="{{asset('admin/assets/images/loti/loti-auth.svg')}}" alt="loti" class="group-[.dark]:hidden">
                    <img src="{{asset('admin/assets/images/loti/loti-auth-dark.svg')}}" alt="loti" class="group-[.light]:hidden">
                </div>
                <div>
                    <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                        Admin
                    </h3>
{{--                    <p class="font-medium text-gray-500 dark:text-dark-text mt-4 px-[10%]">--}}
{{--                        Whether you're launching a stunning online store  optimizing your our object-oriented--}}
{{--                    </p>--}}
                </div>
            </div>
        </div>
        <!-- End Overview Area -->

        <!-- Start Form Area -->
        <div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">
            <div class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
                <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                    Đăng nhập
                </h3>
                <form action="{{route('login')}}" method="POST" class="leading-none mt-8">
                    @csrf
                    <div class="mb-2.5">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="debra.holt@example.com" required class="form-input px-4 py-3.5 rounded-lg">
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="password" class="form-label">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" value="{{old('password')}}" placeholder="Password" required class="form-input px-4 py-3.5 rounded-lg">
                            <label for="toggleInputType" class="size-8 rounded-md flex-center hover:bg-gray-200 dark:hover:bg-dark-icon foucs:bg-gray-200 dark:foucs:bg-dark-icon position-center !left-auto -right-2.5">
                                <input type="checkbox" id="toggleInputType" value="{{old('password')}}" class="inputTypeToggle peer/it" hidden>
                                <i class="ri-eye-off-line text-gray-500 dark:text-dark-text peer-checked/it:before:content-['\ecb5']"></i>
                            </label>
                            @error('password')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-3 mb-7">
                        <div class="flex items-center gap-1 select-none">
                            <input type="checkbox" name="remember-me" id="rememberMe">
                            <label for="rememberMe" class="font-spline_sans text-sm leading-none text-gray-900 dark:text-dark-text cursor-pointer">nhớ mật khẩu</label>
                        </div>
                        <a href="forgot-password.html" class="text-xs leading-none text-primary-500 font-semibold">quên mật khẩu</a>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="btn b-solid btn-primary-solid w-full dk-theme-card-square">Đăng nhập</button>
                </form>
                <div class="font-spline_sans text-gray-900 dark:text-dark-text leading-none text-center my-4">Hoặc</div>
                <div class="flex items-center flex-col xl:flex-row gap-4 2xl:gap-5">
                    <a href="#" class="btn b-outline-static btn-disable-outline w-full grow xl:w-auto dk-theme-card-square">
                        <img src="{{asset('admin/assets/images/icons/google.svg')}}" alt="icon">
                        <span class="shrink-0">Đăng nhập với google</span>
                    </a>
                    <a href="#" class="btn b-outline-static btn-disable-outline w-full grow xl:w-auto dk-theme-card-square">
                        <img src="{{asset('admin/assets/images/icons/apple.svg')}}" alt="icon" class="dark:brightness-[3]">
                        <span class="shrink-0">Đăng nhập với Apple Apple</span>
                    </a>
                </div>
                <div class="text-gray-900 dark:text-dark-text font-medium leading-none mt-5">
                    Bạn chưa có Tài khoản
                    <a href="{{route('fromregister')}}" class="text-primary-500 font-semibold">Đăng ký</a>
                </div>
            </div>
        </div>
        <!-- End Form Area -->
    </div>
</div>
<!-- End Main Content -->

{{--@extends()--}}
@include('admin.layout.js')
</body>

<!-- Mirrored from template.codexshaper.com/admin/dashkit/component-aleart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Mar 2025 13:05:48 GMT -->
</html>

@extends('admin.index');
@section('main')
    <div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 my-2 xl:px-4 ac-transition">
        <form action="{{route('updatesize',$size->id)}}" method="POST" class="container" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class=" container">
                <div class="col-span-full lg:col-span-6 ">
                    <div class="card p-0">
                        <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                            <h3 class="text-lg card-title leading-none">Thêm size</h3>
                        </div>
                        <div class="p-6 space-y-4 ">
                            <div>
                                <div>
                                    <label for="name" class="form-label">Tên</label>
                                    <input type="text" id="name" name="name" value="{{old('name',$size->name)}}" class="form-input" autocomplete="off" required >
                                </div>
                            </div>
                            @error('name')
                                <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="flex-center !justify-center">
                            <button type="submit" class="btn b-solid btn-primary-solid btn-sm dk-theme-card-square">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

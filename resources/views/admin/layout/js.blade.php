<script data-cfasync="false" src="{{asset('admin/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{asset('admin/assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/js/vendor/flowbite.min.js')}}"></script>
<script src="{{asset('admin/assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/assets/js/vendor/prism.min.js')}}"></script>
<script src="{{asset('admin/assets/js/component/prism-custom.js')}}"></script>
<script src="{{asset('admin/assets/js/component/app-menu-bar.js')}}"></script>
<script src="{{asset('admin/assets/js/switcher.js')}}"></script>
<script src="{{asset('admin/assets/js/layout.js')}}"></script>
<script src="{{asset('admin/assets/js/main.js')}}"></script>

{{--<!-- Thêm jQuery và Toastr JS -->--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    toastr.options = {
        "positionClass": "toast-top-right", // Các vị trí khác: toast-top-left, toast-bottom-right
        "timeOut": "3000"
    };
    @if (session('success'))
    toastr.success("{{ session('success') }}", "Thành công");
    @elseif (session('error'))
    toastr.error("{{ session('error') }}", "Lỗi");
    @elseif (session('warning'))
    toastr.warning("{{ session('warning') }}", "Cảnh báo");
    @elseif (session('info'))
    toastr.info("{{ session('info') }}", "Thông tin");
    @endif
</script>



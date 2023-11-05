<!-- Slider-tab Script -->
<script src="{{asset('front/assets/js/plugins/slider-tabs.js')}}"></script>
<!-- fslightbox Script -->
<script src="{{asset('front/assets/js/plugins/fslightbox.js')}}" defer></script>
<!-- Lodash Utility -->
<script src="{{asset('front/assets/vendor/lodash/lodash.min.js')}}"></script>
<!-- Utilities Functions -->
<script src="{{asset('front/assets/js/iqonic-script/utility.min.js')}}"></script>
<!-- Settings Script -->
<script src="{{asset('front/assets/js/iqonic-script/setting.min.js')}}"></script>
<!-- Settings Init Script -->
<script src="{{asset('front/assets/js/setting-init.js')}}"></script>
<!-- External Library Bundle Script -->
<script src="{{asset('front/assets/js/core/external.min.js')}}"></script>
<!-- Kivicare Script -->
<script src="{{asset('front/assets/js/kivicaree209.js?v=1.0.0')}}" defer></script>
<script src="{{asset('front/assets/js/kivicare-advancee209.js?v=1.0.0')}}" defer></script>
<!-- Kivicare Pages Script -->
<script src="{{asset('front/assets/js/slider.js')}}" defer></script>
<script src="{{asset('front/assets/js/scroll-text.js')}}" defer></script>  </body>
<!-- Mirrored from templates.iqonic.design/kivicare-dist/html/tab-three-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 12:27:46 GMT -->
<!--sweet alert-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(Session::has('message'))
    <script>
        swal("Message!","{{Session::get('message')}}",{button:"OK"})
    </script>
@endif
@if(Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '{{Session::get('success')}}',
            showConfirmButton: false,
            timer: 1500});
    </script>
@endif
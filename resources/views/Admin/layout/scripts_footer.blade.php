<script src="{{ asset('admin/dist/js/scripts.js')}}"></script>
<script src="{{ asset('admin/dist/js/custom.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script type="text/javascript">
 toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
</script>

<script>

   @if (Session::has('message'))

   var type = "{{ Session::get('alert-type', 'info') }}"

   switch(type){

    case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;

    case 'success':
    toastr.success("{{ Session::get('message') }}");
    break;

    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break;

    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;
   }

   @endif


</script>



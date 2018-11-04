
<script>
  @if(Session::has('message'))
    var type = "{{Session::get('alert-type', 'success')}}";
    switch(type){
        case 'success':
            toastr.success("{{Session::get('message')}}", "{{__('notify.titleSuccessMessage')}}", {timeOut: 5000}, toastr.options.closeButton = true);
            break;
        case 'error':
            toastr.error("{{Session::get('message')}}", "{{__('notify.titleErrorMessage')}}", {timeOut: 5000}, toastr.options.closeButton = true);
            break;
    }
  @endif
</script>
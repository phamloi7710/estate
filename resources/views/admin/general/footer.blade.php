<footer>
    <div class="pull-right">
        Developed by <a style="color: #4DBEE6;" href="https://www.novaweb.vn/" title="Novacom JSC">Novacom JSC</a>
    </div>
    <div class="clearfix"></div>
</footer>
</div>
</div>

<!-- Bootstrap -->
<script src="{{url('assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('assets/admin/vendors/jquery/validation/jquery.validate.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{url('assets/admin/build/js/custom.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{url('assets/admin/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{url('assets/admin/vendors/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
<script src="{{url('assets/admin/bootstrap-select/1.12.4/js/bootstrap-select.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('')}}/assets/admin/vendors/iCheck/icheck.min.js"></script>
<script src="{{url('')}}/assets/admin/filemanager/js/lfm.js" type="text/javascript" ></script>
<script src="{{url('')}}/assets/admin/plugins/image-preview/imagepreview.min.js"></script>
<script src="{{url('')}}/assets/admin/plugins/bootstrap-toastr/toastr.min.js"></script>
@yield('script')
@include('admin.general.notify')
</body>
</html>
<script src="{{url('')}}/assets/admin/plugins/momentjs/moment.js"></script>
<script src="{{url('')}}/assets/admin/plugins/bootstrap/js/bootstrap.js"></script>
<script src="{{url('')}}/assets/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-countto/jquery.countTo.js"></script>
<script src="{{url('')}}/assets/admin/plugins/raphael/raphael.min.js"></script>
<script src="{{url('')}}/assets/admin/plugins/morrisjs/morris.js"></script>
<script src="{{url('')}}/assets/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<!-- <script src="{{url('')}}/assets/admin/plugins/tinymce/tinymce.js"></script> -->ny
<script src='https://devpreview.tiny.cloud/demo/tinymce.min.js'></script>
<script src="{{url('')}}/assets/admin/plugins/chartjs/Chart.bundle.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>
<script src="{{url('')}}/assets/admin/js/admin.js"></script>
<script src="{{url('')}}/assets/admin/js/pages/tables/jquery-datatable.js"></script>
<script src="{{url('')}}/assets/admin/filemanager/js/lfm.js" type="text/javascript" ></script>
<script src="{{url('')}}/assets/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>
<script src="{{url('')}}/assets/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="{{url('')}}/assets/admin/plugins/dropzone/dropzone.js"></script>
<script src="{{url('')}}/assets/admin/plugins/node-waves/waves.js"></script>
<script src="{{url('')}}/assets/admin/plugins/nouislider/nouislider.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-validation/jquery.validate.js"></script>
<script src="{{url('')}}/assets/admin/plugins/multi-select/js/jquery.multi-select.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-spinner/js/jquery.spinner.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="{{url('')}}/assets/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="{{url('')}}/assets/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<script src="{{url('')}}/assets/admin/js/pages/forms/editors.js"></script>
<script src="{{url('')}}/assets/admin/plugins/image-preview/imagepreview.min.js"></script>
<script src="{{url('')}}/assets/admin/plugins/ckeditor/ckeditor.js"></script>
<script src="{{url('')}}/assets/admin/js/demo.js"></script>
<!-- <script src="{{url('')}}/assets/admin/js/pages/forms/advanced-form-elements.js"></script> -->
<script src="{{url('')}}/assets/admin/custom/custom.js"></script>
<script src="{{url('')}}/assets/admin/js/pages/forms/form-validation.js"></script>
<script src="{{url('')}}/assets/admin/vendors/jquery-sortable/jquery-sortable.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
crossorigin="anonymous"></script>
<script>
    localizeErrors(navigator.language.replace(/-.*$/,""));
    function localizeErrors(lang){
        $.getScript("{{url('')}}/assets/admin/plugins/jquery-validation/localization/messages_{{App::getLocale()}}.js");
    }
</script>
<!-- <script>tinymce.init({ selector:'textarea' });</script> -->
<script>
	var options = {
    filebrowserImageBrowseUrl: '/uploads?type=Images',
    filebrowserImageUploadUrl: '/uploads/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/uploads?type=Files',
    filebrowserUploadUrl: '/uploads/upload?type=Files&_token='
  };
CKEDITOR.replace('editor', options);

</script>
@yield('script')
@include('admin.general.notify')
</body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- InputMask -->
<script src="{{ asset('js/plugins/input-mask/jquery.inputmask.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/plugins/input-mask/jquery.inputmask.date.extensions.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/plugins/input-mask/jquery.inputmask.extensions.js') }}" type="text/javascript"></script>
<!-- date-range-picker -->
<script src="{{ asset('js/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('js/plugins/colorpicker/bootstrap-colorpicker.min.js') }}" type="text/javascript"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('js/plugins/timepicker/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/AdminLTE/app.js') }}" type="text/javascript"></script>

<!-- CK Editor -->
<script src="{{ asset('js/plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
$(function() {
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace('editor1');
  //bootstrap WYSIHTML5 - text editor
  $(".textarea").wysihtml5();
});
</script>

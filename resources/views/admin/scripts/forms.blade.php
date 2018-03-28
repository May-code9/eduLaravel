<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
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

$(function () {
  $("#editBtn").on('click', function () {
    $("#editBtn").fadeOut(500);
    $("#date").fadeOut(500);
    $("#changeDate").slideToggle(1000);
  })
});

$(function () {
  $("#category_id").on('change', function () {
    var category = $("#category_id").val();
    if(category == 1) {
      $("#content_video").slideToggle(1000);
      $("#content_image").fadeOut(1000);
    } else if (category == 3) {
      $("#content_image").slideToggle(1000);
      $("#content_video").fadeOut(1000);
    }
  })
})
</script>

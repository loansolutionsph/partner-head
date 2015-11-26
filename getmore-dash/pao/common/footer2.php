<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
<script type="text/javascript" src="js/behaviour/general.js"></script>
<script type="text/javascript" src="js/jquery.ui/jquery-ui.js"></script>
<script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="js/jquery.select2/select2.min.js"></script>
<script type="text/javascript" src="js/jquery.icheck/icheck.min.js"></script>
<script type="text/javascript" src="js/jquery.niftymodals/js/jquery.modalEffects.js"></script>
<script type="text/javascript" src="js/bootstrap.daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="js/bootstrap.daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="js/autosize/jquery.autosize.min.js"></script>
<script type="text/javascript" src="js/summernote/summernote.min.js"></script>
<!-- <script type="text/javascript" src="js/pace.min.js"></script> -->

<script type="text/javascript">
  $(document).ready(function(){
    $('#reportrange').daterangepicker({
      ranges: {
       'Today': [moment(), moment()],
       'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
       'Last 7 Days': [moment().subtract('days', 6), moment()],
       'Last 30 Days': [moment().subtract('days', 29), moment()],
       'This Month': [moment().startOf('month'), moment().endOf('month')],
       'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
     },
     startDate: moment().subtract('days', 29),
     endDate: moment()
   },
   function(start, end) {
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
  }
  );
    $(".tags").select2({tags: 0,width: '100%'});
    $(".tag-amenities").select2({
      tags:["Swimming Pools","Pool Deck","Landscaped Podium Gardens", "Roof Deck Garden", "Clubhouse", "Lounge Areas"],
      width: '100%'
    });
    $(".tag-unitDeliverables").select2({
      tags:["Open Layout in Bare Units", "Kitchen Sink", "Lavatory", "Toilet", "Sink", "Light Switch"],
      width: '100%'
    });

    $('#email-editor').summernote({
      airMode: true,
      height: 200,
      toolbar: [
      ['style', ['bold', 'italic', 'underline', 'clear']],
      ['fontsize', ['fontsize']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['height', ['height']],
      ['insert', ['link', 'picture']]
      ]});
    $('.rte').summernote({
      airMode: true,
      height: 200,
      toolbar: [
      ['style', ['bold', 'italic', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['insert', ['link', 'picture']],
      ['misc', ['codeview']]
      ]});
    $('textarea.note-area').autosize();
    $(".select2").select2({width: '100%'});
    $('.switch').bootstrapSwitch();
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue checkbox',
      radioClass: 'icheckbox_square-blue'
    });
    $("#check-all").on('ifChanged',function(){
      var checkboxes = $(".mails").find(':checkbox');
      if($(this).is(':checked')) {
        checkboxes.iCheck('check');
      } else {
        checkboxes.iCheck('uncheck');
      }
    });

    App.init();
  });
</script>
<!-- Bootstrap core JavaScript ========== -->
<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
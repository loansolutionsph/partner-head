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
<!--
 <script type="text/javascript" src="js/jquery.morris/morris.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script type="text/javascript" src="js/behaviour/morris-script.js"></script> -->

<!-- <script type="text/javascript" src="js/pace.min.js"></script> -->
<script type="text/javascript">
  $(document).ready(function(){
  $(".select2").select2({width: '100%'});
    $('.switch').bootstrapSwitch();
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

/*$('input').iCheck({
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
});*/
App.init();
});
</script>
<!-- Bootstrap core JavaScript ========== -->
<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>
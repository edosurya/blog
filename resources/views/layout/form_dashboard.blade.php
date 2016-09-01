  <!-- gauge js -->
  {!! HTML::script('/js/flot/jquery.flot.js') !!} 
  {!! HTML::script('/js/gauge/gauge.min.js') !!} 
  {!! HTML::script('/js/gauge/gauge_demo.js') !!} 
  <!-- bootstrap progress js -->
  {!! HTML::script('/js/progressbar/bootstrap-progressbar.min.js') !!} 
  {!! HTML::script('/js/nicescroll/jquery.nicescroll.min.js') !!} 
  <!-- icheck -->
  {!! HTML::script('/js/icheck/icheck.min.js') !!} 
  <!-- daterangepicker -->
  {!! HTML::script('/js/moment/moment.min.js') !!} 
  {!! HTML::script('/js/datepicker/daterangepicker.js') !!} 
  <!-- chart js -->
  {!! HTML::script('/js/chartjs/chart.min.js') !!} 

  <!-- select2 -->
  {!! HTML::script('/js/select/select2.full.js') !!} 

  {!! HTML::script('/js/custom.js') !!} 

  <!-- form validation -->
  {!! HTML::script('/js/parsley/parsley.min.js') !!} 



  <script>
    $(document).ready(function() {
      $.listen('parsley:field:validate', function() {
        validateFront();
      });
      $('#demo-form2 .btn').on('click', function() {
        $('#demo-form2').parsley().validate();
        validateFront();
      });
      var validateFront = function() {
        if (true === $('#demo-form2').parsley().isValid()) {
          $('.bs-callout-info').removeClass('hidden');
          $('.bs-callout-warning').addClass('hidden');
        } else {
          $('.bs-callout-info').addClass('hidden');
          $('.bs-callout-warning').removeClass('hidden');
        }
      };
    });
    try {
      hljs.initHighlightingOnLoad();
    } catch (err) {}

      // function delete
    function delFunc(id,name,param) {
      $("#name").empty().append(name);
      if (param == '1') {
        $("#del").attr('href', '/admin/category/'+id+'/delete');
      } else {
        $("#del").attr('href', '/admin/articles/'+id+'/delete');
      }
    };

    NProgress.done();
  </script>
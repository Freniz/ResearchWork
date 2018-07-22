<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Ion Slider -->
  <link rel="stylesheet" href="plugins/ionslider/ion.rangeSlider.css">
  <!-- ion slider Nice -->
  <link rel="stylesheet" href="plugins/ionslider/ion.rangeSlider.skinNice.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="plugins/bootstrap-slider/slider.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
             Form Name
      </h1> 
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-9">
          <div class="box box-info">
            <div class="box-header with-border">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Tab 1</a>
                  </li>
                  <li><a href="#tab_2" data-toggle="tab">Tab 2</a>
                  </li>
                  <li><a href="#tab_3" data-toggle="tab">Tab 3</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <!-- Text Box -->
                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Text Box</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="text" placeholder="text"> </div>
                </div>

                <!-- Text area -->
                <div class="form-group">
                  <label for="textarea" class="col-sm-2 control-label">Text Area</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5" placeholder="Text Area"></textarea>
                  </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Password"> </div>
                </div>

                <!-- Number -->
                <div class="form-group">
                  <label for="number" class="col-sm-2 control-label">Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="number" placeholder="number"> </div>
                </div>

                <!-- Select -->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Select</label>
                  <div class="col-sm-10">
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>

                <!-- Check Box -->
                <div class="form-group">
                  <label for="checkbox" class="col-sm-2 control-label">Check Box</label>
                  <div class="col-sm-10 pull-right">
                    <input type="checkbox"> Yes &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox"> No </div>
                </div>

                <!-- Radio -->
                <div class="form-group">
                  <label for="radio" class="col-sm-2 control-label">Radio</label>
                  <div class="col-sm-10 pull-right">
                    <input type="radio"> Yes &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio"> No </div>
                </div>

                <!-- Range Slider -->
                <div class="form-group">
                  <label for="slider" class="col-sm-2 control-label">Slider</label>
                  <div class="col-sm-10">
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="aqua"> </div>
                </div>

                <!-- Date Picker -->
                <div class="form-group">
                  <label for="date" class="col-sm-2 control-label">Date</label>
                  <div class="input-group date">
                    <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                    <input type="text" class="form-control pull-right" id="datepicker"> </div>
                </div>

                <!-- Time Picker -->
                <div class="form-group">
                  <label for="time" class="col-sm-2 control-label">Time</label>
                  <div class="input-group  bootstrap-timepicker">
                    <div class="input-group-addon"> <i class="fa fa-clock-o"></i> </div>
                    <input type="text" class="form-control timepicker"> </div>
                  <!-- /.input group -->
                </div>

                <!-- Date and Time Picker -->
                <div class="form-group">
                  <label for="dateTime" class="col-sm-2 control-label">Date & Time</label>
                  <div class="input-group">
                    <div class="input-group-addon"> <i class="fa fa-clock-o"></i> </div>
                    <input type="text" class="form-control pull-right" id="reservationtime"> </div>
                </div>

                <!-- Upload -->
                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">File Upload</label>
                  <div class="col-sm-10">
                    <input type="file" id="exampleInputFile"> </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                  <label for="button" class="col-sm-2 control-label">Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-info">Button</button>
                  </div>
                </div>

                <!-- Rich Text -->
                <div class="form-group">
                  <label for="textEditor" class="col-sm-2 control-label">Text Editor</label>
                </div>
                <div class="pull-right box-tools col-sm-10"> </div>
                <form>
                  <textarea id="editor1" name="editor1" rows="10" cols="80"> This is my textarea to be replaced with CKEditor. </textarea>
                </form>
              </div>

              <!-- /.box-body -->
              <div class="box-footer"> </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Ion Slider -->
    <script src="plugins/ionslider/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap slider -->
    <script src="plugins/bootstrap-slider/bootstrap-slider.js"></script>
    <script>
    $(function() {
      /* BOOTSTRAP SLIDER */
      $('.slider').slider();
      /* ION SLIDER */
      $("#range_1").ionRangeSlider({
        min: 0,
        max: 5000,
        from: 1000,
        to: 4000,
        type: 'double',
        step: 1,
        prefix: "$",
        prettify: false,
        hasGrid: true
      });
      $("#range_2").ionRangeSlider();
      $("#range_5").ionRangeSlider({
        min: 0,
        max: 10,
        type: 'single',
        step: 0.1,
        postfix: " mm",
        prettify: false,
        hasGrid: true
      });
      $("#range_6").ionRangeSlider({
        min: -50,
        max: 50,
        from: 0,
        type: 'single',
        step: 1,
        postfix: "°",
        prettify: false,
        hasGrid: true
      });
      $("#range_4").ionRangeSlider({
        type: "single",
        step: 100,
        postfix: " light years",
        from: 55000,
        hideMinMax: true,
        hideFromTo: false
      });
      $("#range_3").ionRangeSlider({
        type: "double",
        postfix: " miles",
        step: 10000,
        from: 25000000,
        to: 35000000,
        onChange: function(obj) {
          var t = "";
          for(var prop in obj) {
            t += prop + ": " + obj[prop] + "\r\n";
          }
          $("#result").html(t);
        },
        onLoad: function(obj) {
          //
        }
      });
      //Date range picker
      $('#reservation').daterangepicker();
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        format: 'MM/DD/YYYY h:mm A'
      });
      //Date range as a button
      $('#daterange-btn').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      }, function(start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      });
      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      });
      //Timepicker
      $(".timepicker").timepicker({
        showInputs: false
      });
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
    </script>
  </body>

</html>
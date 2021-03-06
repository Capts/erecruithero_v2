@extends('view_applicant.layouts.app')

@section('content')



Full Listing
CSS Includes
Datepicker Markup
Manual Entry Markup
JavaScript Include
jQuery Source
<!doctype html>
<html>
<head>
<title>Auto calculate age from DOB  using Moment.JS</title>
<style type="text/css">
</style>
</head>
<body>
<div class="wrapper">
  <header>
    <div class="container">
    <h1 class="col-lg-9">Auto calculate age from DOB using Moment.JS</h1>
    </div>
  </header>
  <div class="container">
    <h5>Author: Julian Hansen, October 2015</h5>
    <form class="form">
      <div class="container">
<p>Using a datepicker</p>
        <div class="row">
          <div class='col-sm-6'>
            <div class="form-group">
              <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
          </div>
        </div>
<p>Using manual entry</p>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Enter DOB:</label> <input type="text" name="man_dob" class="form-control manual"/>
            </div>
          </div>
        </div>
<div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Age:</label> <input type="text" id="age" class="form-control"/>
        </div>
      </div>
    </div>
      </div>
    </form>
</div>
</div>
<footer>
  <div class="container">
    Copyright Julian Hansen &copy; 2015
  </div>
</footer>
 


 
<script>
function setAge(d)
{
  var age = moment().diff(d, 'years', true);
  $('#age').val(age);
  
}
 
$(function() {
  $('.manual').change(function() {
    var isoDate = new Date($(this).val()).toISOString();
    setAge(moment(isoDate));
  });
  
  $('#datetimepicker1').datetimepicker().on('dp.change', function(e) {
    setAge(e.date);
  });
});
</script>
</body>
</html>
 
		

@stop
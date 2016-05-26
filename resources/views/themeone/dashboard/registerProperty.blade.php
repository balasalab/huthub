<?php
use Illuminate\Support\Facades\Input;
$assert = url('/')."/resources/assets/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo $assert; ?>/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo $assert; ?>/js/jquery-2.1.4.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
</head>

<body>
    <div class='container'>
        <div class="row">
            <div class="col-md-3">
                <h3>Side Bar</h3>
            </div>
            <div class="col-md-9">
                <h3>Enroll your property:</h3>
                <!-- {{ Form::open(array('url' => 'login')) }}
                <h1>Login</h1>
                <p>
                    {{ $errors->first('email') }}
                    {{ $errors->first('password') }}
                </p>

                <p>
                    {{ Form::label('email', 'Email Address') }}
                    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
                </p>

                <p>
                    {{ Form::label('password', 'Password') }}
                    {{ Form::password('password') }}
                </p>

                <p>{{ Form::submit('Submit!') }}</p>
                {{ Form::close() }} -->

                <form class="" id="properly_register_form" method="POST" action="">
                  <div class="form-group">
                    <label for="propertyName">Name</label>
                    <input type="text" class="form-control" name="name" id="propertyName" placeholder="Property name">
                  </div>
                  <div class="form-group">
                    <label for="propertyType">Type</label>
                    <input type="text" class="form-control" name="type_id" id="propertyType" placeholder="Property type">
                  </div>
                  <div class="form-group">
                    <label for="propertyAddress">Address</label>
                    <input type="text" class="form-control" name="address" id="propertyAddress" placeholder="Property address">
                  </div>
                  <div class="form-group">
                    <label for="propertyContact">Contact</label>
                    <input type="text" class="form-control" name="contact" id="propertyContact" placeholder="Property contact number">
                  </div>
                  <div class="form-group">
                    <label for="propertyCity">City</label>
                    <input type="text" class="form-control" name="city" id="propertyCity" placeholder="Property city">
                  </div>
                  <div class="form-group">
                    <label for="propertyPincode">Pincode</label>
                    <input type="text" class="form-control" name="pincode" id="propertyPincode" placeholder="Property pincode">
                  </div>
                  <div class="form-group">
                    <label for="propertyState">State</label>
                    <input type="text" class="form-control" name="state" id="propertyState" placeholder="Property state">
                  </div>
                  <div class="form-group">
                    <label for="propertyCountry">Country</label>
                    <input type="text" class="form-control" name="country" id="propertyCountry" placeholder="Property country">
                  </div>
                  <div class="form-group">
                    <label for="propertyLatitude">Latitude</label>
                    <input type="text" class="form-control" name="latitude" id="propertyLatitude" placeholder="Property country">
                  </div>
                  <div class="form-group">
                    <label for="propertyLongitude">Longitude</label>
                    <input type="text" class="form-control" name="longitude" id="propertyLongitude" placeholder="Property country">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> I agree terms and conditions
                    </label>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
$('document').ready(function()
{ 
     /* validation */
  $("#properly_register_form").validate({
    rules:
    {
        propertyName: {
            required: true,
            minlength: 5
        },
        propertyType: {
            required: true,
            minlength: 3,
        },
        propertyAddress: {
            required: true,
            minlength: 10,
        },
        propertyCity: {
            required: true,
            minlength: 10,
        },
    },
    messages:
    {
        propertyName: "please enter name",
        propertyType: "please enter a valid type",
        propertyAddress: "please enter a valid address",
        propertyCity: "please enter a valid city",
    },
    submitHandler: submitForm 
    });  
    /* validation */
    
    /* form submit */
    function submitForm()
    {
        var data = $("#properly_register_form").serialize();

        $.ajax({
            type : 'POST',
            url  : '../api/add/property/',
            data : data,
            beforeSend: function()
            { 
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success :  function(data)
            {
                if(data.status=='error'){
                    $("#error").fadeIn(1000, function(){
                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
                       
                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
                    });
                }
                else if(data.status=="success")
                {
                    // $("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing Up ...');
                    // setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("success.php"); }); ',5000);
                    $("#error").fadeIn(1000, function(){
                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Registration successfull !</div>');
                       
                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
                    });
                }
                else{
                    $("#error").fadeIn(1000, function(){
                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data.message+' !</div>');
                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
                    });
                }
            }
        });
        return false;
    }
        /* form submit */ 
});    
</script>
</html>
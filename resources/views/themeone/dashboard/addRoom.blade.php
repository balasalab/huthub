<?php
use Illuminate\Support\Facades\Input;
$assert = url('/')."/resources/assets/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo $assert; ?>/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo $assert; ?>/js/jquery-2.1.4.min.js"></script>
    <!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> -->
</head>

<body>
    <div class='container'>
        <div class="row">
            <div class="col-md-3">
                <h3>Side Bar</h3>
            </div>
            <div class="col-md-9">
                <h3>Add property room :</h3>
                <form class="" id="add_room_form" method="POST" action="">
                {{ Form::open(array('url' => 'add/room')) }}
                    <p>
                        {{ $errors->first('email') }}
                        {{ $errors->first('password') }}
                    </p>
                  <div class="form-group">
                    <label for="propertyId">Property ID</label>
                    <input type="text" class="form-control" name="property_id" id="propertyId" placeholder="Property name">
                  </div>
                  <div class="form-group">
                    <label for="roomType">Room Type</label>
                    <input type="text" class="form-control" name="room_type" id="roomType" placeholder="Property type">
                  </div>
                  <div class="form-group">
                    <label for="roomPrice">price</label>
                    <input type="text" class="form-control" name="price" id="roomPrice" placeholder="Property address">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                <!-- </form> -->
                {{ Form::close() }}
            </div>
        </div>
    </div>
</body>
</html>
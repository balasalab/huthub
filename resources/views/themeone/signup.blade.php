<?php
$assert = "../resources/assets/themeone/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>HutHub</title>
<link href="<?php echo $assert; ?>css/main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/spinner/jquery.mousewheel.js"></script>


<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/forms/uniform.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/forms/jquery.cleditor.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/forms/chosen.jquery.min.js"></script>

<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/wizard/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/wizard/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/wizard/jquery.form.wizard.js"></script>

<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/tables/datatable.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/tables/tablesort.min.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/tables/resizable.min.js"></script>

<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/ui/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/calendar.min.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>js/plugins/elfinder.min.js"></script>

<script type="text/javascript" src="<?php echo $assert; ?>js/custom.js"></script>

<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>

<body class="nobg loginPage">

<!-- Top fixed navigation -->
<div class="topNav">
    <div class="wrapper">
        <div class="userNav">
            <ul>
                <li><a href="#" title=""><img src="<?php echo $assert; ?>images/icons/topnav/mainWebsite.png" alt="" /><span>Main website</span></a></li>
                <li><a href="#" title=""><img src="<?php echo $assert; ?>images/icons/topnav/profile.png" alt="" /><span>Contact admin</span></a></li>
                <li><a href="#" title=""><img src="<?php echo $assert; ?>images/icons/topnav/messages.png" alt="" /><span>Support</span></a></li>
                <li><a href="login.html" title=""><img src="<?php echo $assert; ?>images/icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>


<!-- Main content wrapper -->
<div class="signupWrapper">
    <div class="loginLogo"><img src="<?php echo $assert; ?>images/loginLogo.png" alt="" /></div>
    <div class="widget">
        <div class="title"><img src="<?php echo $assert; ?>images/icons/dark/files.png" alt="" class="titleIcon" /><h6>Signup</h6></div>
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        <form method="POST" action="" id="validate" class="form">
            <fieldset>
                <div class="formRow">
                    <label for="username">Username:</label>
                    <div class="signupInput"><input type="text" name="username" class="validate[required]" id="username" /></div>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label for="email">Email:</label>
                    <div class="signupInput"><input type="text" name="email" class="validate[required]" id="email" /></div>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label for="mobile">Mobile:</label>
                    <div class="signupInput"><input type="text" name="mobile" class="validate[required]" id="mobile" /></div>
                    <div class="clear"></div>
                </div>
                
                <div class="formRow">
                    <label for="pass">Password:</label>
                    <div class="signupInput"><input type="password" name="password" class="validate[required]" id="pass" /></div>
                    <div class="clear"></div>
                </div>
                
                <div class="loginControl">
                    <input type="submit" value="Sign up" class="dredB signMeUp" />
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<!-- Footer line -->
<div id="footer">
    <div class="wrapper">As usually all rights reserved. And as usually brought to you by <a href="#" title="">HutHub</a></div>
</div>


</body>

<script type="text/javascript">
$('document').ready(function()
{ 
     /* validation */
  $("#validate").validate({
    rules:
    {
        username: {
            required: true,
            minlength: 3
        },
        password: {
            required: true,
            minlength: 6,
            maxlength: 15
        },
        // cpassword: {
        // required: true,
        // equalTo: '#password'
        // },
        email: {
            required: true,
            email: true
        },
    },
    messages:
    {
        username: "please enter user name",
        password:{
                  required: "please provide a password",
                  minlength: "password at least have 8 characters"
                 },
        email: "please enter a valid email address",
        // cpassword:{
        //     required: "please retype your password",
        //     equalTo: "password doesn't match !"
        // }
    },
    submitHandler: submitForm 
    });  
    /* validation */
    
    /* form submit */
    function submitForm()
    {
        var data = $("#validate").serialize();

        $.ajax({
            type : 'POST',
            url  : '../api/signup/',
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
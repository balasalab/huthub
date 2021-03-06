<?php
use Illuminate\Support\Facades\Input;
$assert = url('/')."/resources/assets/themeone/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>HutHub</title>
<link href="<?php echo $assert; ?>css/main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo $assert; ?>externaljs/jquery.min.1.7.js"></script>
<script type="text/javascript" src="<?php echo $assert; ?>externaljs/jquery-ui.min.1.8.js"></script>

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
<div class="loginWrapper">
    <div class="loginLogo"><img src="<?php echo $assert; ?>images/loginLogo.png" alt="" /></div>
    <div class="widget">
        <div class="title"><img src="<?php echo $assert; ?>images/icons/dark/files.png" alt="" class="titleIcon" /><h6>Login panel</h6></div>
        <!-- <form action="index.html" id="validate" class="form"> -->
        {{ Form::open(array('url' => 'login', 'class'=>'form' , 'id'=>'validate')) }}
        <div class="nNote hideit" style="position: absolute; margin-top: 206px">
            {{ $errors->first('email') }}</p>
        </div>
            <fieldset>
                <div class="formRow">
                    <label for="login">Username:</label>
                    <div class="loginInput">
                        <!-- <input type="text" name="login" class="validate[required]" id="login" /> -->
                        {{ Form::text('email', Input::old('email'), array('placeholder' => 'example@domain.com', 'class'=>'validate[required]', 'id'=>'login')) }}
                    </div>
                    <div class="clear"></div>
                </div>
                
                <div class="formRow">
                    <label for="pass">Password:</label>
                    <div class="loginInput">
                        <!-- <input type="password" name="password" class="validate[required]" id="pass" /> -->
                        {{ Form::password('password', array('class'=>'validate[required]', 'id'=>'password', 'placeholder' => 'Secure key')) }}
                    </div>
                    <div class="clear"></div>
                </div>
                
                <div class="loginControl">
                    <div class="rememberMe"><input type="checkbox" id="remMe" name="remMe" /><label for="remMe">Remember me</label></div>
                    <input type="submit" value="Log me in" class="dredB logMeIn" />
                    <div class="clear"></div>
                </div>
            </fieldset>
        <!-- </form> -->
        {{ Form::close() }}
    </div>
</div>    

<!-- Footer line -->
<div id="footer">
    <div class="wrapper">As usually all rights reserved. And as usually brought to you by <a href="http://themeforest.net/user/Kopyov?ref=kopyov" title="">Eugene Kopyov</a></div>
</div>


</body>
</html>
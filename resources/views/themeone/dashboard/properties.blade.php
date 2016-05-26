<?php
$assert = url('/')."/resources/assets/themeone/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('themeone.dashboard.head')
</head>

<body>

<!-- Left side content -->
@include('themeone.dashboard.sidebar')


<!-- Right side -->
<div id="rightSide">

    <!-- Top fixed navigation -->
    @include('themeone.public.header')
    <!-- Responsive header -->
    <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="<?php echo $assert; ?>images/loginLogo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="<?php echo $assert; ?>images/icons/light/home.png" alt="" />Dashboard</span>
            <ul class="smallDropdown">
                <li><a href="index.html" title=""><img src="<?php echo $assert; ?>images/icons/light/home.png" alt="" />Dashboard</a></li>
                <li><a href="charts.html" title=""><img src="<?php echo $assert; ?>images/icons/light/stats.png" alt="" />Statistics and charts</a></li>
                <li><a href="#" title="" class="exp"><img src="<?php echo $assert; ?>images/icons/light/pencil.png" alt="" />Forms stuff<strong>4</strong></a>
                    <ul>
                        <li><a href="forms.html" title="">Form elements</a></li>
                        <li><a href="form_validation.html" title="">Validation</a></li>
                        <li><a href="form_editor.html" title="">WYSIWYG and file uploader</a></li>
                        <li class="last"><a href="form_wizards.html" title="">Wizards</a></li>
                    </ul>
                </li>
                <li><a href="ui_elements.html" title=""><img src="<?php echo $assert; ?>images/icons/light/users.png" alt="" />Interface elements</a></li>
                <li><a href="tables.html" title="" class="exp"><img src="<?php echo $assert; ?>images/icons/light/frames.png" alt="" />Tables<strong>3</strong></a>
                    <ul>
                        <li><a href="table_static.html" title="">Static tables</a></li>
                        <li><a href="table_dynamic.html" title="">Dynamic table</a></li>
                        <li class="last"><a href="table_sortable_resizable.html" title="">Sortable &amp; resizable tables</a></li>
                    </ul>
                </li>
                <li><a href="#" title="" class="exp"><img src="<?php echo $assert; ?>images/icons/light/fullscreen.png" alt="" />Widgets and grid<strong>2</strong></a>
                    <ul>
                        <li><a href="widgets.html" title="">Widgets</a></li>
                        <li class="last"><a href="grid.html" title="">Grid</a></li>
                    </ul>
                </li>
                <li><a href="#" title="" class="exp"><img src="<?php echo $assert; ?>images/icons/light/alert.png" alt="" />Error pages<strong>6</strong></a>
                    <ul class="sub">
                        <li><a href="403.html" title="">403 page</a></li>
                        <li><a href="404.html" title="">404 page</a></li>
                        <li><a href="405.html" title="">405 page</a></li>
                        <li><a href="500.html" title="">500 page</a></li>
                        <li><a href="503.html" title="">503 page</a></li>
                        <li class="last"><a href="offline.html" title="">Website is offline</a></li>
                    </ul>
                </li>
                <li><a href="file_manager.html" title=""><img src="<?php echo $assert; ?>images/icons/light/files.png" alt="" />File manager</a></li>
                <li><a href="#" title="" class="exp"><img src="<?php echo $assert; ?>images/icons/light/create.png" alt="" />Other pages<strong>3</strong></a>
                    <ul>
                        <li><a href="typography.html" title="">Typography</a></li>
                        <li><a href="calendar.html" title="">Calendar</a></li>
                        <li class="last"><a href="gallery.html" title="">Gallery</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="cLine"></div>
    </div>
    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>HutHub</h5>
                <span>Do your layouts deserve better than Lorem Ipsum.</span>
            </div>
            <div class="middleNav">
                <ul>
                    <li class="mUser"><a title=""><span class="users"></span></a>
                        <ul class="mSub1">
                            <li><a href="#" title="">Add user</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Orders</a></li>
                        </ul>
                    </li>
                    <li class="mMessages"><a title=""><span class="messages"></span></a>
                        <ul class="mSub2">
                            <li><a href="#" title="">New tickets<span class="numberRight">8</span></a></li>
                            <li><a href="#" title="">Pending tickets<span class="numberRight">12</span></a></li>
                            <li><a href="#" title="">Closed tickets</a></li>
                        </ul>
                    </li>
                    <li class="mFiles"><a href="#" title="Or you can use a tooltip" class="tipN"><span class="files"></span></a></li>
                    <li class="mOrders"><a title=""><span class="orders"></span><span class="numberMiddle">8</span></a>
                        <ul class="mSub4">
                            <li><a href="#" title="">Pending uploads</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Trash</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    
    <!-- Page statistics and control buttons area -->
    <div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
                	<li><a href="#" title=""><img src="<?php echo $assert; ?>images/icons/control/32/plus.png" alt="" /><span>Add new session</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo $assert; ?>images/icons/control/32/database.png" alt="" /><span>New DB entry</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo $assert; ?>images/icons/control/32/hire-me.png" alt="" /><span>Add new user</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo $assert; ?>images/icons/control/32/statistics.png" alt="" /><span>Check statistics</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo $assert; ?>images/icons/control/32/comment.png" alt="" /><span>Review comments</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo $assert; ?>images/icons/control/32/order-149.png" alt="" /><span>Check orders</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    
    <div class="line"></div>
    
    <!-- Main content wrapper -->
    <div class="wrapper">
    
        <!-- Note -->
        <div class="nNote nInformation hideit">
            <p><strong>INFORMATION: </strong>Top buttons area has 3 versions - 2 kinds of buttons and statistics. All of them could be viewed on <a href="ui_elements.html" title="">Interface elements page</a></p>
        </div>
        
        <!-- Widgets -->
        <div class="widgets">
        	<!-- 2 columns widgets -->
            <div class="one">
                @foreach($data as $key => $property)
                <!-- Property info widget -->
                <div class="widget">
                    <div class="title">
                        <img src="<?php echo $assert; ?>images/icons/dark/money.png" alt="" class="titleIcon" />
                        <h6>{{$property['property_name']}}</h6>
                    </div>
                    <div class="newOrder">
                        <div class="userRow">
                            <a href="#" title=""><img src="<?php echo $assert; ?>images/user.png" alt="" class="floatL" /></a>
                            <ul class="leftList">
                                <li><a href="#" title=""><strong>Julia Maria Shine</strong></a></li>
                                <li>Order status:</li>
                            </ul>
                            <ul class="rightList">
                                <li><a href="#" title=""> <strong>#2112</strong></a></li>
                                <li class="orderIcons"><span class="oUnfinished"></span><span class="oShipped tipN" title="Shipped on Feb 2nd, 2012"></span><span class="oPaid tipN" title="Paid on Feb 1st, 2012"></span></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    
                        <div class="cLine"></div>
                        
                        <div class="orderRow">
                            <ul class="leftList">
                                <li>Date and time:</li>
                                <li>Subtotal amount:</li>
                                <li>Taxes</li>
                            </ul>
                            <ul class="rightList">
                                <li><strong>Jan 31, 2012</strong> |  12:51</li>
                                <li><strong class="green">$5,514.36</strong></li>
                                <li><strong class="orange">- $1,158.54</strong></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        
                        <div class="cLine"></div>
                        <div class="totalAmount"><h6 class="floatL blue">Total:</h6><h6 class="floatR blue">$12,157.99</h6><div class="clear"></div></div>
                    </div>
                </div>                
                <div class="clear"></div>
                <!-- Property info widget -->
                @endforeach

            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">As usually all rights reserved. And as usually brought to you by <a href="http://themeforest.net/user/Kopyov?ref=kopyov" title="">Eugene Kopyov</a></div>
    </div>

</div>

<div class="clear"></div>

</body>
</html>
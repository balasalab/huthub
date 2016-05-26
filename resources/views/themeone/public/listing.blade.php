<?php
$assert = url('/')."/resources/assets/themeone/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('themeone.dashboard.head')
</head>

<body style="background-image: none;">

<!-- Right side -->
<div id="rightSide">
    
    @include('themeone.public.header')

    <!-- Responsive header -->
    <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="<?php echo $assert; ?>images/loginLogo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="<?php echo $assert; ?>images/icons/light/frames.png" alt="" />Content widgets</span>
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
                <h5>Content and sidebar widgets</h5>
                <span>Do your layouts deserve better than Lorem Ipsum.</span>
            </div>
            <div class="middleNav">
                <ul>
                    <li class="mUser"><a href="#" title=""><span class="users"></span></a>
                        <ul class="mSub1">
                            <li><a href="#" title="">Add user</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Orders</a></li>
                        </ul>
                    </li>
                    <li class="mMessages"><a href="#" title=""><span class="messages"></span></a>
                        <ul class="mSub2">
                            <li><a href="#" title="">New tickets<span class="numberRight">8</span></a></li>
                            <li><a href="#" title="">Pending tickets<span class="numberRight">12</span></a></li>
                            <li><a href="#" title="">Closed tickets</a></li>
                        </ul>
                    </li>
                    <li class="mFiles"><a href="#" title="Or you can use a tooltip" class="tipN"><span class="files"></span></a></li>
                    <li class="mOrders"><a href="#" title=""><span class="orders"></span><span class="numberMiddle">8</span></a>
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
    
    <!-- Main content wrapper -->
    <div class="wrapper">
    
        <!-- Note -->
        <div class="nNote nInformation hideit">
            <p><strong>NOTE: </strong>These are predefined content and sidebar widgets. Also please check content grid page</p>
        </div>
        
        <!-- Widgets -->
        <div class="widgets">
            <div class="oneThree">
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/money2.png" alt="" class="titleIcon"><h6>Invoices statistics</h6></div>
                    <div class="wInvoice">
                        <ul>
                            <li><h4 class="green">$63,456</h4><span>amount paid</span></li>
                            <li><h4 class="blue">$218,518</h4><span>in queue</span></li>
                            <li><h4 class="red">$16,542</h4><span>total taxes</span></li>
                        </ul>
                        <div class="content">
                            <div class="contentProgress"><div class="barG tipN" id="bar5" original-title="61%" style="width: 61%;"></div></div>
                            <ul class="ruler">
                                <li>0</li>
                                <li class="textC">50%</li>
                                <li class="textR">100%</li>
                            </ul>
                            <div class="clear"></div>
                            <div class="invButtons">
                                <a href="#" title="" class="bFirst button basic"><img src="images/icons/dark/photos.png" class="icon" alt=""><span>Add new invoice</span></a>
                                <a href="#" title="" class="bLast button basic"><img src="images/icons/dark/pdfDoc.png" class="icon" alt=""><span>Generate report</span></a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <!-- 2 columns widgets -->
            <div class="twoOne">
            
                <!-- Search -->
                <div class="searchWidget">
                    <form action="">
                        <input type="text" name="search" placeholder="Enter search text..." />
                        <input type="submit" name="find" value="" />
                    </form>
                </div>
                <!-- Search -->
            
                <!-- Purchase info widget -->
                <div class="widget">
                    <div class="title">
                        <img src="<?php echo $assert; ?>images/icons/dark/money.png" alt="" class="titleIcon" />
                        <h6>Property list</h6>
                        <div class="topIcons">
                            <a href="#" class="tipS" title="Download statement"><img src="<?php echo $assert; ?>images/icons/downloadTop.png" alt="" /></a>
                            <a href="#" class="tipS" title="Print invoice"><img src="<?php echo $assert; ?>images/icons/printTop.png" alt="" /></a>
                            <a href="#" class="tipS" title="Edit"><img src="<?php echo $assert; ?>images/icons/editTop.png" alt="" /></a>
                        </div>
                    </div>
                    @foreach($data['properties'] as $key => $property)
                    <div class="newOrder">
                        <div class="userRow">
                            <a href="#" title=""><img src="<?php echo $assert; ?>images/user.png" alt="" class="floatL" /></a>
                            <ul class="leftList">
                                <li><a href="#" title=""><strong>{{$property['name']}}</strong></a></li>
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
                    @endforeach
                </div>       
                <!-- Purchase info widget -->
            </div>
            <div class="clear"></div>
        </div>
        
    </div>
    
    <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">As usually all rights reserved. And as usually brought to you by <a href="http://themeforest.net/user/Kopyov?ref=kopyov" title="">Eugene Kopyov</a></div>
    </div>

</div>
<!-- Right side -->

<div class="clear"></div>

</body>
</html>
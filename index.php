<?php
  /*
    file_name:    index_main.php

    Description:  Landing page for this website
    
    Authors:      Martin Rose/JB
    Copyright:    Copyright (c) 2013 
    Webaddress:   http://www.example.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    Revision:     0.1
    Comments:     2013-08-01 Add the global variable to display the host in the git tab (Temp)
                  2013-08-01 Added links to left menu
                  2013-08-14 Updated the text and added ccs to centre the site add the logo position and style the fonts
  */  
?>
<?php include('assets/includes/header.php'); ?>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">WP Shepherd</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#tabs-2" id="websites" onclick="splash(this.id)">Websites</a></li>
            <li><a href="#about">Admin</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


<img src="assets/images/logo.png" alt="WP Shepherd" />

<div id="tabs">
  <ul>
    <li> <a href="#tabs-1">Home</a> </li>
    <li> <a href="#tabs-2" id="websites" onclick="splash(this.id)">Websites</a> </li>
    <li> <a href="#tabs-3" id="admin" onclick="splash(this.id)">Admin</a> </li>
    <li> <a href="#tabs-4">Contact</a> </li>
    <li> <a href="#tabs-5">About</a> </li>
  </ul>
  <div id="tabs-1">
    <div id="left-box"> </div>
    <div id="content_1">
      <?php include ('page-content/index-content.php'); ?>
    </div>
  </div>
  <div id="tabs-2">
    <div class="menu_div" id="left-box">
      <ul>
        <li> <a href="#" id="inst" onclick="page(this.id)">New Set-up
          <div id="i"></div>
          </a><!--index_inst.php--> 
        </li>
        <li> <a href="#" id="dev" onclick="page(this.id)">Develop
          <div id="d"></div>
          </a><!-- List of all the current installed websites--> 
        </li>
        <li> <a href="#" id="bac" onclick="page(this.id)">Back-up
          <div id="b"></div>
          </a> </li>
        <li> <a href="#" id="rem" onclick="page(this.id)">Remove
          <div id="r"></div>
          </a><!--index_rem.php--> 
        </li>
      </ul>
    </div>
    <div id="content_2"> </div>
  </div>
  <div id="tabs-3">
    <div class="menu_div"  id="left-box">
      <ul>
        <li> <a href="#" id="admin_set" onclick="page(this.id)">Installation Settings
          <div id="a_s"></div>
          </a><!--index_admin_set.php--> 
        </li>
        <li> <a href="#" id="admin_res" onclick="page(this.id)">Re-set Settings
          <div id="a_r"></div>
          </a><!--index_admin_res.php--> 
        </li>
        <li> <a href="#" id="admin_dis" onclick="page(this.id)">Display Settings
          <div id="a_d"></div>
          </a><!--index_admin_dis.php--> 
        </li>
        <li> <a href="#" id="admin_bac" onclick="page(this.id)">Back-up this code
          <div id="a_b"></div>
          </a><!--index_admin_bac.php--> 
        </li>
      </ul>
    </div>
    <div id="content_3"> </div>
  </div>
  <div id="tabs-4">
    <div class="menu_div"  id="left-box"> </div>
    <div id="content_4">
      <div id="sitename">
        <h3>How to get in touch for requests, bugs and comments</h3>
        <p>Email <a href="mailto:bncoders@yahoo.co.uk?Subject=Hello%20again" target="_top">BNCoders</p>
      </div>
    </div>
  </div>
  <div id="tabs-5">
    <div class="menu_div"  id="left-box">
      <div id="content_7">
        <h3>All about the BNCoders</h3>
        <p>Formed in 2013</p>
      </div>
    </div>
  </div>
</div>
<?php include('assets/includes/footer.php'); ?>
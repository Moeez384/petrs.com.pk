<div class="slimScrollDiv">
  <section class="sidebar">
      
      <!-- Left menu -->
      <!-- Check if role is Admin -->
      <?php// if ($this->session->userdata['UserInfo']['role'] == 'Admin') { ?>
        <ul class="sidebar-menu tree" data-widget="tree">
              <li><label class="sub-header">INSIGHTS</label> </li>
              <li class="dashboard-active"> <a href="/Dashboard"> <i class="fa fa-bar-chart"></i><span>Dashboard</span></a> </li>
              <li class="analytics-active"> <a href="#"> <i class="fa fa-line-chart"></i> <span>Analytics</span> </a></li>
              <li><label class="sub-header">Management</label></li>
              <li class="customers-active"> <a href="/Users"><i class="fa fa-users"> </i> <span>Customers</span> </a></li>
              <li class="outlets-active"> <a href="#" onclick="OpenMenu('outlets-submenu', '78px')"> <i class="fa fa-map-marker"></i> <span>Outlets</span> <span class="icon-menudrpdwn"> <i class="fa fa-angle-left"></i> </span> </a>
              
                <!-- Outlets submenu -->
                <ul id="outlets-submenu" class="ul-submenu">
                  <li><a href="/Outlets/"> <i class="fa fa-bars"></i><span> Manage</span> </a>  </li>
                  <li><a href="/Outlets/add"><i class="fa fa-plus-circle"></i> <span>Add New</span> </a></li>
                </ul>
              </li>

              <!-- Holidays menu -->
              <li class="holidays-active" ><a href="#" onclick="OpenMenu('holidays-submenu', '78px')"> <i class="fa fa-calendar"></i> <span>Holidays Setup</span> <span class="icon-menudrpdwn"> <i class="fa fa-angle-left"></i> </span> </a> 
                 <ul id="holidays-submenu" class="ul-submenu">
                  <li> <a href="/Holidays"><i class="fa fa-bars"></i><span>Manage</span> </a> </li>
                  <li> <a href="/Holidays/add"> <i class="fa fa-plus-circle"></i> <span>Add New</span> </a> </li>
                 </ul>
              </li>

              <li class="categories-active"> <a href="#" onclick="OpenMenu('categories-submenu', '78px')"> <i class="fa fa-shopping-cart"></i> <span>Product Categories</span> <span class="icon-menudrpdwn"> <i class="fa fa-angle-left"></i> </span> </a>
                <!-- Categories submenu -->
                <ul id="categories-submenu" class="ul-submenu">
                  <li><a href="/Categories"> <i class="fa fa-bars"></i> <span>Manage</span></a> </li>
                  <li><a href="/Categories/add"> <i class="fa fa-plus-circle"></i> <span>Add New</span> </a></li>
                </ul>
              </li>

              
              <li class="products-active"> <a href="#" onclick="OpenMenu('products-submenu', '78px')"> <i class="fa fa-shopping-cart"> </i> <span>Products</span> <span class="icon-menudrpdwn"><i class="fa fa-angle-left"></i></span> </a>
                <!-- Reports submenu -->
                <ul id="products-submenu" class="ul-submenu">
                  <li><a href="/Products"><i class="fa fa-bars"></i> <span>Manage</span> </a></li>
                  <li><a href="/Products/add"><i class="fa fa-plus-circle"></i> <span>Add New</span> </a></li>
                </ul>
              </li>

              <li class="campaigns-active"> <a href="#" onclick="OpenMenu('campaigns-submenu', '118px')"> <i class="fa fa-bullhorn"></i> <span>Campaigns</span> <span class="icon-menudrpdwn"> <i class="fa fa-angle-left"></i></span></a> 
                  <ul id="campaigns-submenu" class="ul-submenu">
                    <li><a href="/Campaigns"> <i class="fa fa-bars"></i><span>Manage</span> </a>  </li>
                    <li><a href="/Campaigns/add"><i class="fa fa-plus-circle"></i> <span>Add New</span> </a></li>
                    <li> <a href="/QRCodes/basecoins"> <i class="fa fa-star"></i> <span>Base Coins Setup</span> </a> </li>
                  </ul>
              </li>


              <!-- Point System menu -->
              <li class="pointsystem-active"> <a href="#" onclick="OpenMenu('pointsystem-submenu', '78px')"> <i class="fa fa-calendar"></i> <span>Point System</span> <span class="icon-menudrpdwn"><i class="fa fa-angle-left"></i> </span> </a>
                <ul id="pointsystem-submenu" class="ul-submenu">
                  <li> <a href="/PointSystem"> <i class="fa fa-bars"></i> <span>Listing</span> </a> </li>
                  <li> <a href="/PointSystem/add"><i class="fa fa-plus-circle"></i><span>Add New</span> </a> </li>
                </ul>
              </li>

              
              <li class="qrcode-active"><a href="#" onclick="OpenMenu('qrcode-submenu', '78px')" ><i class="fa fa-qrcode"></i> <span>QR Code</span> <span class="icon-menudrpdwn"><i class="fa fa-angle-left"></i> </span> </a>

                  <!-- QRCode submenu -->
                  <ul id="qrcode-submenu" class="ul-submenu">
                    <li> <a href="/QRCodes"> <i class="fa fa-bars"></i> <span>Listing</span> </a></li>
                    <li> <a href="/QRCodes/generate"> <i class="fa fa-plus-circle"></i> <span>Generate New</span> </a></li>
                  </ul>            
              <li>

              <li class="rewards-active"> <a href="#" onclick="OpenMenu('rewards-submenu', '118px')"> <i class="fa fa-gift"></i><span>Rewards</span> <span class="icon-menudrpdwn"><i class="fa fa-angle-left"></i></span> </a>
                  <ul id="rewards-submenu" class="ul-submenu">
                    <li> <a href="/Rewards"> <i class="fa fa-bars"></i> <span>Manage</span> </a> </li>
                    <li> <a href="/Rewards/add"><i class="fa fa-plus-circle"></i> <span>Add New</span> </a> </li>
                    <li> <a href="/Rewards/customerrewards"> <i class="fa fa-gift"></i> <span>Customer Rewards</span> </a> </li>
                  </ul>
              </li>

              <!-- Promotion menu -->
              <li class="promotions-active"> <a href="#" onclick="OpenMenu('promotions-submenu', '78px')"> <i class="fa fa-bullhorn"></i> <span>Promotions</span> <span class="icon-menudrpdwn">  <i class="fa fa-angle-left"></i> </span>  </a>
                <ul id="promotions-submenu" class="ul-submenu">
                  <li> <a href="/Promotions"> <i class="fa fa-bars"></i> <span>Manage</span> </a> </li>
                  <li> <a href="/Promotions/add"> <i class="fa fa-plus-circle"></i> <span>Add New</span> </a></li>
                </ul>
              </li>

              <!-- Slider Setup -->
              <li class="slider-active"> <a href="#" onclick="OpenMenu('slider-submenu','78px')"> <i class="fa fa-picture-o"></i> <span>Slider Setup</span> <span class="icon-menudrpdwn"><i class="fa fa-angle-left"></i></span> </a>
                <ul id="slider-submenu" class="ul-submenu">
                  <li><a href="/ImageSlider"> <i class="fa fa-bars"></i><span>Manage</span> </a> </li>
                  <li> <a href="/ImageSlider/add"> <i class="fa fa-plus-circle"></i> <span>Add New</span> </a> </li>
                </ul>
              </li>

                <!--event url link-->
                <li><a data-toggle="modal" data-target="#modal_event" href="#"><i class="fa fa-link"></i> <span>Events Link</span> </a>
                </li>

              <!-- logout menu -->
              <li> <a href="/Welcome/logout"> <i class="fa fa-sign-out"></i><span>Logout</span> </a> </li>
        </ul>
      <?php //} else { ?>

<!--         <ul class="sidebar-menu tree" data-widget="tree">

          <li> <label class="sub-header">Management</label> </li>
          <li class="rewards-active"> <a href="#" onclick="OpenMenu('rewards-submenu', '38px')"> <i class="fa fa-gift"></i> <span>Rewards</span> <span class="icon-menudrpdwn"> <i class="fa fa-angle-left"></i> </span>  </a>
              <ul id="rewards-submenu" class="ul-submenu">
                <li> <a href="/Rewards/customerrewards"> <i class="fa fa-gift"></i> <span>Customer Rewards</span> </a> </li>
              </ul>
          </li>
          <li>
            <a href="/Welcome/logout"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a>
          </li>
        </ul> -->
      <?php //} ?>

   </section>
</div>


<!-- Script for submenu -->
<script>
  
  //Function to open submenu (by height)
  function OpenMenu(SubmenuID, height)
  {
    //Close all submenus
    $('.ul-submenu').css('height', '0px');

    //Get submenu object
    let submenu = $('#' + SubmenuID);

    //Check if height is 0
    if (submenu.height() == 0)
      submenu.css('height', height);
    else
      submenu.css('height', '0px');
  }
</script>


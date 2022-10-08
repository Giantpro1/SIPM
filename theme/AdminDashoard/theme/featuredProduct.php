<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Mono - Responsive Admin & Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="plugins/simplebar/simplebar.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/nprogress/nprogress.css" rel="stylesheet" />
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="css/style.css" />

  


  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="plugins/nprogress/nprogress.js"></script>
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-info" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index">
                <img src="images/logo.png" alt="SIPM">
                <span class="brand-name">SIPM</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li
                   class="active"
                   >
                    <a class="sidenav-item-link" href="index">
                      <i class="mdi mdi-briefcase-account-outline"></i>
                      <span class="nav-text">Business Dashboard</span>
                    </a>
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="featuredProduct">
                      <i class="mdi mdi-chart-line"></i>
                      <span class="nav-text">Feature Products</span>
                    </a>
                  </li>
                

                

                
                  <li class="section-title">
                    Actions
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="chat">
                      <i class="mdi mdi-wechat"></i>
                      <span class="nav-text">Chat</span>
                    </a>
                  </li>
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email"
                      aria-expanded="false" aria-controls="email">
                      <i class="mdi mdi-email"></i>
                      <span class="nav-text">Users</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="email"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="verifyUsers">
                                <span class="nav-text">Verify User</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="pendingUsers">
                                <span class="nav-text">Pending Users</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="disapprovedUser">
                                <span class="nav-text">Disapproved USers</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Products"
                      aria-expanded="false" aria-controls="email">
                      <i class="mdi mdi-email"></i>
                      <span class="nav-text">User Products</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="Products"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="email-inbox">
                                <span class="nav-text">Verify Products</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="email-details">
                              <span class="nav-text">Pending Products</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="Upload">
                                <span class="nav-text">Disapproved Products</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                        
                        
     

                
              </ul>

            </div>

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <ul class="d-flex">
                  <li>
                    <a href="user-account-settings" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
                  <li>
                    <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>

      

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">
        
          <!-- Header -->
          <header class="main-header" id="header">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>

              <span class="page-title">email details</span>

              <div class="navbar-right ">

                <!-- search form -->
                <div class="search-form">
                  <form action="index" method="get">
                    <div class="input-group input-group-sm" id="input-group-search">
                      <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..." />
                      <div class="input-group-append">
                        <button class="btn" type="button">/</button>
                      </div>
                    </div>
                  </form>
                  <ul class="dropdown-menu dropdown-menu-search">

                    <li class="nav-item">
                      <a class="nav-link" href="index">Morbi leo risus</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index">Dapibus ac facilisis in</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index">Porta ac consectetur ac</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index">Vestibulum at eros</a>
                    </li>

                  </ul>

                </div>

                <ul class="nav navbar-nav">
                  <!-- Offcanvas -->
                  <li class="custom-dropdown">
                    <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:" >
                      <i class="mdi mdi-contacts icon"></i>
                    </a>
                  </li>
                  <li class="custom-dropdown">
                    <button class="notify-toggler custom-dropdown-toggler">
                      <i class="mdi mdi-bell-outline icon"></i>
                      <span class="badge badge-xs rounded-circle">21</span>
                    </button>
                    <div class="dropdown-notify">

                      <header>
                        <div class="nav nav-underline" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="nav-home"
                            aria-selected="true">All (5)</a>
                          <a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Msgs (4)</a>
                          <a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="nav-contact"
                            aria-selected="false">Others (3)</a>
                        </div>
                      </header>

                      <div class="" data-simplebar style="height: 325px;">
                        <div class="tab-content" id="myTabContent">

                          <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">

                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile">
                                  <img src="images/user/user-sm-02.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile">
                                  <span class="title mb-0">John Doe</span>
                                  <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 bg-light mb-0">
                              <div class="media-sm-wrapper bg-primary">
                                <a href="user-profile">
                                  <i class="mdi mdi-calendar-check-outline"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile">
                                  <span class="title mb-0">New event added</span>
                                  <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                  <span class="time">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile">
                                  <img src="images/user/user-sm-03.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile">
                                  <span class="title mb-0">Sagge Hudson</span>
                                  <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info-dark">
                                <a href="user-profile">
                                  <i class="mdi mdi-account-multiple-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile">
                                  <span class="title mb-0">Add request</span>
                                  <span class="discribe">Add Dany Jones as your contact.</span>
                                  <div class="buttons">
                                    <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                    <a href="#" class="btn btn-sm shadow-none">delete</a>
                                  </div>
                                  <span class="time">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info">
                                <a href="user-profile">
                                  <i class="mdi mdi-playlist-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile">
                                  <span class="title mb-0">Task complete</span>
                                  <span class="discribe">Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>

                          <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile">
                                  <img src="images/user/user-sm-01.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile">
                                  <span class="title mb-0">Selena Wagner</span>
                                  <span class="discribe">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                  <span class="time">
                                    <time>15 min ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile">
                                  <img src="images/user/user-sm-03.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile">
                                  <span class="title mb-0">Sagge Hudson</span>
                                  <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile">
                                  <img src="images/user/user-sm-02.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile">
                                  <span class="title mb-0">John Doe</span>
                                  <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid
                                    at highly months do things on at.</span>
                                  <span class="time">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile">
                                  <img src="images/user/user-sm-04.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile">
                                  <span class="title mb-0">Albrecht Straub</span>
                                  <span class="discribe"> Beatae quia natus assumenda laboriosam, nisi perferendis aliquid consectetur expedita non tenetur.</span>
                                  <span class="time">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                          <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="contact-tab">

                            <div class="media media-sm p-4 bg-light mb-0">
                              <div class="media-sm-wrapper bg-primary">
                                <a href="user-profile">
                                  <i class="mdi mdi-calendar-check-outline"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile">
                                  <span class="title mb-0">New event added</span>
                                  <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                  <span class="time">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info-dark">
                                <a href="user-profile">
                                  <i class="mdi mdi-account-multiple-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile">
                                  <span class="title mb-0">Add request</span>
                                  <span class="discribe">Add Dany Jones as your contact.</span>
                                  <div class="buttons">
                                    <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                    <a href="#" class="btn btn-sm shadow-none">delete</a>
                                  </div>
                                  <span class="time">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info">
                                <a href="user-profile">
                                  <i class="mdi mdi-playlist-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile">
                                  <span class="title mb-0">Task complete</span>
                                  <span class="discribe">Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <footer class="border-top dropdown-notify-footer">
                        <div class="d-flex justify-content-between align-items-center py-2 px-4">
                          <span>Last updated 3 min ago</span>
                          <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
                        </div>
                      </footer>
                    </div>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                      <span class="d-none d-lg-inline-block">John Doe</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a class="dropdown-link-item" href="user-profile">
                          <i class="mdi mdi-account-outline"></i>
                          <span class="nav-text">My Profile</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="email-inbox">
                          <i class="mdi mdi-email-outline"></i>
                          <span class="nav-text">Message</span>
                          <span class="badge badge-pill badge-primary">24</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="user-activities">
                          <i class="mdi mdi-diamond-stone"></i>
                          <span class="nav-text">Activitise</span></a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="user-account-settings">
                          <i class="mdi mdi-settings"></i>
                          <span class="nav-text">Account Setting</span>
                        </a>
                      </li>

                      <li class="dropdown-footer">
                        <a class="dropdown-link-item" href="sign-in"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content">	<!-- ====================================
	——— EMAIL WRAPPER
	===================================== -->
  <div class="email-wrapper rounded border bg-white">
    <div class="row no-gutters justify-content-center">
      <div class="col-lg-4 col-xl-3 col-xxl-2">
        <div class="email-left-column email-options p-4 p-xl-5">
          <a href="Upload" class="btn btn-block btn-primary btn-pill mb-4 mb-xl-5">Upload</a>
          <ul class="pb-2">
            <li class="d-block active mb-4">
              <a href="email-inbox">
                <i class="mdi mdi-download mr-2"></i>Total</a>
              <span class="badge badge-secondary">20</span>
            </li>
        </div>
      </div>
      <div class="col-lg-8 col-xl-9 col-xxl-10">
        <div class="email-right-column p-4 p-xl-5">
          <!-- Email Right Header -->
          <div class="email-right-header mb-5">
            <!-- head left option -->
            <div class="head-left-options">
              <button type="button" class="btn btn-icon btn-outline btn-rounded-circle" id="reFreshBtn">
                <i class="mdi mdi-refresh"></i>
              </button>
            </div>
            <!-- head right option -->
            <div class="head-right-options">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn border btn-pill">
                  <i class="mdi mdi-chevron-left"></i>
                </button>
                <button type="button" class="btn border btn-pill">
                  <i class="mdi mdi-chevron-right"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="border rounded email-details">

            <div class="email-details-header">
              <h4 class="text-dark">Uplaoded Products</h4>
            </div>
            <table id="productsTable" class="table table-hover table-product" style="width:100%">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Product Name</th>
                  <th>ID</th>
                  <th>Qty</th>
                  <th>Variants</th>
                  <th>Committed</th>
                  <th>User Activity</th>
                  <th>Sold</th>
                  <th>In Stock</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-01.jpg" alt="Product Image">
                  </td>
                  <td>Coach Swagger</td>
                  <td>24541</td>
                  <td>27</td>
                  <td>1</td>
                  <td>2</td>
                  <td>
                    <div id="tbl-chart-01"></div>
                  </td>
                  <td>4</td>
                  <td>18</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-02.jpg" alt="Product Image">
                  </td>
                  <td>Toddler Shoes, Gucci Watch</td>
                  <td>24542</td>
                  <td>18</td>
                  <td>7</td>
                  <td>5</td>
                  <td>
                    <div id="tbl-chart-02"></div>
                  </td>
                  <td>1</td>
                  <td>14</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-03.jpg" alt="Product Image">
                  </td>
                  <td>Hat Black Suits</td>
                  <td>24543</td>
                  <td>20</td>
                  <td>3</td>
                  <td>7</td>
                  <td>
                    <div id="tbl-chart-03"></div>
                  </td>
                  <td>6</td>
                  <td>26</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-04.jpg" alt="Product Image">
                  </td>
                  <td>Backpack Gents</td>
                  <td>24544</td>
                  <td>37</td>
                  <td>8</td>
                  <td>3</td>
                  <td>
                    <div id="tbl-chart-04"></div>
                  </td>
                  <td>6</td>
                  <td>7</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-05.jpg" alt="Product Image">
                  </td>
                  <td>Speed 500 Ignite</td>
                  <td>24545</td>
                  <td>8</td>
                  <td>3</td>
                  <td>4</td>
                  <td>
                    <div id="tbl-chart-05"></div>
                  </td>
                  <td>8</td>
                  <td>42</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-06.jpg" alt="Product Image">
                  </td>
                  <td>Olay</td>
                  <td>24546</td>
                  <td>19</td>
                  <td>6</td>
                  <td>6</td>
                  <td>
                    <div id="tbl-chart-06"></div>
                  </td>
                  <td>79</td>
                  <td>12</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-07.jpg" alt="Product Image">
                  </td>
                  <td>Ledger Nano X</td>
                  <td>24547</td>
                  <td>61</td>
                  <td>46</td>
                  <td>18</td>
                  <td>
                    <div id="tbl-chart-07"></div>
                  </td>
                  <td>76</td>
                  <td>36</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-08.jpg" alt="Product Image">
                  </td>
                  <td>Surface Laptop 2</td>
                  <td>24548</td>
                  <td>33</td>
                  <td>56</td>
                  <td>89</td>
                  <td>
                    <div id="tbl-chart-08"></div>
                  </td>
                  <td>38</td>
                  <td>5</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-09.jpg" alt="Product Image">
                  </td>
                  <td>TIGI Bed Head Superstar Queen</td>
                  <td>24549</td>
                  <td>3</td>
                  <td>9</td>
                  <td>15</td>
                  <td>
                    <div id="tbl-chart-09"></div>
                  </td>
                  <td>6</td>
                  <td>46</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-10.jpg" alt="Product Image">
                  </td>
                  <td>Wattbike Atom</td>
                  <td>24550</td>
                  <td>61</td>
                  <td>56</td>
                  <td>68</td>
                  <td>
                    <div id="tbl-chart-10"></div>
                  </td>
                  <td>3</td>
                  <td>19</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-11.jpg" alt="Product Image">
                  </td>
                  <td>Smart Watch</td>
                  <td>24551</td>
                  <td>19</td>
                  <td>76</td>
                  <td>38</td>
                  <td>
                    <div id="tbl-chart-11"></div>
                  </td>
                  <td>3</td>
                  <td>17</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-12.jpg" alt="Product Image">
                  </td>
                  <td>Magic Bullet Blender</td>
                  <td>24552</td>
                  <td>12</td>
                  <td>30</td>
                  <td>14</td>
                  <td>
                    <div id="tbl-chart-12"></div>
                  </td>
                  <td>26</td>
                  <td>9</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-13.jpg" alt="Product Image">
                  </td>
                  <td>Kanana rucksack</td>
                  <td>24553</td>
                  <td>14</td>
                  <td>65</td>
                  <td>39</td>
                  <td>
                    <div id="tbl-chart-13"></div>
                  </td>
                  <td>9</td>
                  <td>55</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-14.jpg" alt="Product Image">
                  </td>
                  <td>Copic Opaque White</td>
                  <td>24554</td>
                  <td>43</td>
                  <td>29</td>
                  <td>75</td>
                  <td>
                    <div id="tbl-chart-14"></div>
                  </td>
                  <td>7</td>
                  <td>15</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
                <tr>
                  <td class="py-0">
                    <img src="images/products/products-xs-15.jpg" alt="Product Image">
                  </td>
                  <td>Headphones</td>
                  <td>24555</td>
                  <td>17</td>
                  <td>6</td>
                  <td>7</td>
                  <td>
                    <div id="tbl-chart-15"></div>
                  </td>
                  <td>6</td>
                  <td>98</td>
                  <td>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      </a>
        
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
        
        
        
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
          
        </div>
        
          <!-- Footer -->
          <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a class="text-primary" href="http://www.iamabdus.com/" target="_blank" >Abdus</a>.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>
    



    
                    <script src="plugins/jquery/jquery.min.js"></script>
                    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="plugins/simplebar/simplebar.min.js"></script>
                    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

                    
                    <script src="js/mono.js"></script>
                    <script src="js/chart.js"></script>
                    <script src="js/map.js"></script>
                    <script src="js/custom.js"></script>

                    


                    <!--  -->


  </body>
</html>

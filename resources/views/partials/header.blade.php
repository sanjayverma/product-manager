<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    <title>Dashboard Team | Remark Admin Template</title>
    <link rel="apple-touch-icon" href="../public/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/assets/images/favicon.ico">
    <!-- Stylesheets -->
    {!!Html::style('../public/assets/global/css/bootstrap.min.css')!!}
    {!!Html::style('../public/assets/global/css/bootstrap-extend.min.css')!!}
    {!!Html::style('../public/assets/css/site.min.css')!!}
    <!-- Plugins -->
    {!!Html::style('../public/assets/global/vendor/animsition/animsition.css')!!}
    {!!Html::style('../public/assets/global/vendor/asscrollable/asScrollable.css')!!}
    {!!Html::style('../public/assets/global/vendor/switchery/switchery.css')!!}
    {!!Html::style('../public/assets/global/vendor/intro-js/introjs.css')!!}
    {!!Html::style('../public/assets/global/vendor/slidepanel/slidePanel.css')!!}
    {!!Html::style('../public/assets/global/vendor/flag-icon-css/flag-icon.css')!!}
    {!!Html::style('../public/assets/global/vendor/chartist/chartist.css')!!}
    {!!Html::style('../public/assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')!!}
    {!!Html::style('../public/assets/global/vendor/aspieprogress/asPieProgress.css')!!}
    {!!Html::style('../public/assets/global/vendor/jquery-selective/jquery-selective.css')!!}
    {!!Html::style('../public/assets/global/vendor/jsgrid/jsgrid.css')!!}
    {!!Html::style('../public/assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css')!!}
    {!!Html::style('../public/assets/global/vendor/tables/jsgrid.css')!!}
    {!!Html::style('../public/assets/examples/css/dashboard/team.css')!!}
    <!-- Fonts -->
    {!!Html::style('../public/assets/global/fonts/web-icons/web-icons.min.css')!!}
    {!!Html::style('../public/assets/global/fonts/brand-icons/brand-icons.min.css')!!}
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <!--[if lt IE 9]>
      {!!Html::script('../public/assets/global/vendor/html5shiv/html5shiv.min.js')!!}
      <![endif]-->
    <!--[if lt IE 10]>
      {!!Html::script('../public/assets/global/vendor/media-match/media.match.min.js')!!}
      {!!Html::script('../public/assets/global/vendor/respond/respond.min.js')!!}
      <![endif]-->
    <!-- Scripts -->
    {!!Html::script('../public/assets/global/vendor/breakpoints/breakpoints.js')!!}
    <script>
        Breakpoints();
    </script>
  </head>
  <body class="animsition site-navbar-small dashboard">



    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
         role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <a class="navbar-brand navbar-brand-center" href="{{URL::to('/')}}">
          <img class="navbar-brand-logo navbar-brand-logo-normal" src="{{URL::to('assets/images/logo.png')}}" title="Remark">
          <img class="navbar-brand-logo navbar-brand-logo-special" src="{{URL::to('assets/images/logo-blue.png')}}" title="Remark">
          <span class="navbar-brand-text hidden-xs-down"> Remark</span>
        </a>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search" data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon wb-search" aria-hidden="true"></i>
        </button>
      </div>
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <li class="nav-item hidden-sm-down" id="toggleFullscreen">
              <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                <span class="sr-only">Toggle fullscreen</span>
              </a>
            </li>
            <li class="nav-item hidden-float">
              <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                 role="button">
                <span class="sr-only">Toggle Search</span>
              </a>
            </li>
            <li class="nav-item dropdown dropdown-fw dropdown-mega">
              <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade"
                 role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
              <div class="dropdown-menu" role="menu">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-xs-12 col-md-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu m-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('advanced/animation')}}">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('uikit/buttons')}}">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('uikit/colors')}}">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('uikit/dropdowns')}}">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('uikit/icons')}}">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('advanced/lightbox')}}">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu m-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('uikit/modals')}}">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('uikit/panel-structure')}}">Panels</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('structure/overlay')}}">Overlay</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('uikit/tooltip-popover')}}">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('advanced/scrollable')}}">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('uikit/typography')}}">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-12 col-md-4">
                      <h5>Media
                        <span class="label label-pill label-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{URL::to('assets/global/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{URL::to('assets/global/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{URL::to('assets/global/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{URL::to('assets/global/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{URL::to('assets/global/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{URL::to('assets/global/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-12 col-md-4">
                      <h5 class="m-b-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                           role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                               aria-expanded="false" aria-controls="siteMegaCollapseOne">
                              Collapsible Group Item #1
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                               role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque accusamus
                              clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                               data-parent="#siteMegaAccordion" aria-expanded="false"
                               aria-controls="siteMegaCollapseTwo">
                              Collapsible Group Item #2
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                               role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur
                              mortis animus adoptionem, bello statuat expediunt naturales.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                               data-parent="#siteMegaAccordion" aria-expanded="false"
                               aria-controls="siteMegaCollapseThree">
                              Collapsible Group Item #3
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                               role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <!-- End Navbar Toolbar -->
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
                 aria-expanded="false" role="button">
                <span class="flag-icon flag-icon-us"></span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-gb"></span> English</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-fr"></span> French</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-de"></span> German</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-nl"></span> Dutch</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                 data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="{{URL::to('assets/global/portraits/5.jpg')}}" alt="...">
                  <!--<img src="{{URL::to('assets/global/photos/placeholder.png')}}" alt="..." />-->
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                <div class="dropdown-divider" role="presentation"></div>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
                 aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon wb-bell" aria-hidden="true"></i>
                <span class="label label-pill label-danger up">5</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header">
                  <h5>NOTIFICATIONS</h5>
                  <span class="label label-round label-danger">New 5</span>
                </div>
                <div class="list-group">
                  <div data-role="container">
                    <div data-role="content">
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="media-left p-r-10">
                            <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">A new order has been placed</h6>
                            <time class="media-meta" datetime="2016-06-12T20:50:48+08:00">5 hours ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="media-left p-r-10">
                            <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Completed the task</h6>
                            <time class="media-meta" datetime="2016-06-11T18:29:20+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="media-left p-r-10">
                            <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Settings updated</h6>
                            <time class="media-meta" datetime="2016-06-11T14:05:00+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="media-left p-r-10">
                            <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Event started</h6>
                            <time class="media-meta" datetime="2016-06-10T13:50:18+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="media-left p-r-10">
                            <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Message received</h6>
                            <time class="media-meta" datetime="2016-06-10T12:34:48+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer">
                  <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon md-settings" aria-hidden="true"></i>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Messages"
                 aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon wb-envelope" aria-hidden="true"></i>
                <span class="label label-pill label-info up">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header" role="presentation">
                  <h5>MESSAGES</h5>
                  <span class="label label-round label-info">New 3</span>
                </div>
                <div class="list-group" role="presentation">
                  <div data-role="container">
                    <div data-role="content">
                      <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="media-left p-r-10">
                            <span class="avatar avatar-sm avatar-online">
                              <img src="{{URL::to('assets/global/portraits/2.jpg')}}" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Mary Adams</h6>
                            <div class="media-meta">
                              <time datetime="2016-06-17T20:22:05+08:00">30 minutes ago</time>
                            </div>
                            <div class="media-detail">Anyways, i would like just do it</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="media-left p-r-10">
                            <span class="avatar avatar-sm avatar-off">
                              <img src="{{URL::to('assets/global/portraits/3.jpg')}}" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Caleb Richards</h6>
                            <div class="media-meta">
                              <time datetime="2016-06-17T12:30:30+08:00">12 hours ago</time>
                            </div>
                            <div class="media-detail">I checheck the document. But there seems</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="media-left p-r-10">
                            <span class="avatar avatar-sm avatar-busy">
                              <img src="{{URL::to('assets/global/portraits/4.jpg')}}" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">June Lane</h6>
                            <div class="media-meta">
                              <time datetime="2016-06-16T18:38:40+08:00">2 days ago</time>
                            </div>
                            <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="media-left p-r-10">
                            <span class="avatar avatar-sm avatar-away">
                              <img src="{{URL::to('assets/global/portraits/5.jpg')}}" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Edward Fletcher</h6>
                            <div class="media-meta">
                              <time datetime="2016-06-15T20:34:48+08:00">3 days ago</time>
                            </div>
                            <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer" role="presentation">
                  <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon wb-settings" aria-hidden="true"></i>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    See all messages
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item" id="toggleChat">
              <a class="nav-link" data-toggle="site-sidebar" href="javascript:void(0)" title="Chat"
                 data-url="site-sidebar.tpl">
                <i class="icon wb-chat" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                        data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>
    <div class="site-menubar site-menubar-light">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                  <span class="site-menu-title">Dashboard</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <div class="dropdown-menu">
                  <div class="site-menu-scroll-wrap is-list">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-normal-list">
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('layouts/grids')}}">
                              <span class="site-menu-title">Grid Scaffolding</span>
                            </a>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                  <span class="site-menu-title">Jobs</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <div class="dropdown-menu">
                  <div class="site-menu-scroll-wrap is-list">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-normal-list">
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('layouts/grids')}}">
                              <span class="site-menu-title">Orders</span>
                            </a>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                  <span class="site-menu-title">Inventory</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <div class="dropdown-menu">
                  <div class="site-menu-scroll-wrap is-list">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-normal-list">
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('layouts/grids')}}">
                              <span class="site-menu-title">Grid Scaffolding</span>
                            </a>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>


              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                  <span class="site-menu-title">Inbox</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <div class="dropdown-menu">
                  <div class="site-menu-scroll-wrap is-list">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-normal-list">
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('layouts/grids')}}">
                              <span class="site-menu-title">Grid Scaffolding</span>
                            </a>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>



              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                  <span class="site-menu-title">Settings</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <div class="dropdown-menu">
                  <div class="site-menu-scroll-wrap is-list">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-normal-list">
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('settings/users')}}">
                              <span class="site-menu-title">Users</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('settings/roles')}}">
                              <span class="site-menu-title">Roles</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('settings/machine-types')}}">
                              <span class="site-menu-title">Machine Types</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('settings/workflow-stages')}}">
                              <span class="site-menu-title">Workflow Stages</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('settings/workflow-templates')}}">
                              <span class="site-menu-title">Workflow Templates</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('settings/notifications')}}">
                              <span class="site-menu-title">Notifications</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('settings/shipping')}}">
                              <span class="site-menu-title">Shipping</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('settings/email-templates')}}">
                              <span class="site-menu-title">Email Templates</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('settings/payment-gateways')}}">
                              <span class="site-menu-title">Payment Gateways</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL('settings/pricing')}}">
                              <span class="site-menu-title">Pricing</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>


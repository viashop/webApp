<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student - Dashboard</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
<meta name="robots" content="noindex">

<!-- Material Design Icons  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Roboto Web Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

<!-- MDK -->
<link type="text/css" href="/app/vendor/learning/learnplus_v200/dist/assets/vendor/material-design-kit.css" rel="stylesheet">

<!-- Sidebar Collapse -->
<link type="text/css" href="/app/vendor/learning/learnplus_v200/dist/assets/vendor/sidebar-collapse.min.css" rel="stylesheet">

<!-- App CSS -->
<link type="text/css" href="/app/vendor/learning/learnplus_v200/dist/assets/css/style.min.css" rel="stylesheet">

  

  

</head>
<body class="top-navbar">

  <!-- Navbar -->
<nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">

  <!-- Toggle sidebar -->
  <button class="navbar-toggler" type="button" data-toggle="sidebar"></button>

  <!-- Brand -->
  <a href="student-dashboard.html" class="navbar-brand"><i class="material-icons">school</i> LearnPlus</a>
  
  <!-- Search -->
<form class="navbar-search-form hidden-sm-down">
  <input type="text" class="form-control" placeholder="Search">
  <button class="btn" type="button"><i class="material-icons">search</i></button>
</form>
<!-- // END Search -->

  <div class="navbar-spacer"></div>
  
  <!-- Menu --> 
  <ul class="nav navbar-nav hidden-sm-down">
    <li class="nav-item">
      <a class="nav-link" href="student-forum.html">Forum</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="student-help-center.html">Get Help</a>
    </li>
  </ul>
  
  <!-- Menu -->
  <ul class="nav navbar-nav">

    <li class="nav-item">
      <a href="student-cart.html" class="nav-link">
        <i class="material-icons">shopping_cart</i>
      </a>
    </li>
    
    <!-- User dropdown -->
<li class="nav-item dropdown">
  <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"><img src="/app/vendor/learning/learnplus_v200/dist/assets/images/people/50/guy-6.jpg" alt="Avatar" class="rounded-circle" width="40"></a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
    <a class="dropdown-item" href="student-account-edit.html">
      <i class="material-icons">edit</i> Edit Account
    </a>
    <a class="dropdown-item" href="student-profile.html">
      <i class="material-icons">person</i> Public Profile
    </a>
    <a class="dropdown-item" href="guest-login.html">
      <i class="material-icons">lock</i> Logout
    </a>
  </div>
</li>
<!-- // END User dropdown -->

  </ul>
  <!-- // END Menu -->

</nav>
<!-- // END Navbar -->

  <div class="mdk-drawer-layout mdk-js-drawer-layout" push has-scrolling-region>
    <div class="mdk-drawer-layout__content">
      <div class="container-fluid">
        
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
  <li class="breadcrumb-item active">Dashboard</li>
</ol>   
<div class="card card-stats-primary">
  <div class="card-block">
    <div class="media">
      <div class="media-left media-middle">
        <i class="material-icons text-muted-light">credit_card</i>
      </div>
      <div class="media-body media-middle">
        Your subscription ends on <strong>25 February 2015</strong>
      </div>
      <div class="media-right">
        <a class="btn btn-success" href="student-pay.html">Upgrade</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-7">
    <div class="card">
      <div class="card-header bg-white">
        <div class="media">
          <div class="media-body">
            <h4 class="card-title">Courses</h4>
            <p class="card-subtitle">Your recent courses</p>
          </div>
          <div class="media-right media-middle">
            <a class="btn btn-sm btn-primary-outline" href="student-my-courses.html">My courses</a>
          </div>
        </div>
      </div>
      <ul class="list-group list-group-fit mb-0">
        <li class="list-group-item">
          <div class="media">
            <div class="media-body media-middle">
              <a href="student-take-course.html">Basics of HTML</a>
            </div>
            <div class="media-right media-middle">
              <div class="text-xs-center">
                <p><span class="tag tag-pill tag-primary mb-05">25%</span></p>
                <progress class="progress progress-primary mb-0" value="25" max="100" style="width:100px">25%</progress>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="media">
            <div class="media-body media-middle">
              <a href="student-take-course.html">Angular in Steps</a>
            </div>
            <div class="media-right media-middle">
              <div class="text-xs-center">
                <p><span class="tag tag-pill tag-success mb-05">100%</span></p>
                <progress class="progress progress-success mb-0" value="100" max="100" style="width:100px">100%</progress>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="media">
            <div class="media-body media-middle">
              <a href="student-take-course.html">Bootstrap Foundations</a>
            </div>
            <div class="media-right media-middle">
              <div class="text-xs-center">
                <p><span class="tag tag-pill tag-warning mb-05">80%</span></p>
                <progress class="progress progress-warning mb-0" value="80" max="100" style="width:100px">80%</progress>
              </div>
            </div>
          
          </div>
        </li>
      </ul>
    </div>
    <div class="card">
      <div class="card-header bg-white">
        <div class="media">
          <div class="media-body">
            <h4 class="card-title">Quizzes</h4>
            <p class="card-subtitle">Your Performance</p>
          </div>
          <div class="media-right media-middle">
            <a class="btn btn-sm btn-primary-outline" href="#">Quiz results</a>
          </div>
        </div>
      </div>
      <ul class="list-group list-group-fit mb-0">
        <li class="list-group-item">
          <div class="media">
            <div class="media-body media-middle">
              <a href="student-quiz-results.html">Title of quiz goes here?</a><br>
              <small class="text-light">Course: <a href="student-take-course.html">Basics of HTML</a></small>
            </div>
            <div class="media-right text-xs-center">
              <h4 class="mb-0">5.8</h4>
              <span class="text-muted-light">Good</span>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="media">
            <div class="media-body media-middle">
              <a href="student-quiz-results.html">Directives &amp; Routing</a><br>
              <small class="text-light">Course: <a href="student-take-course.html">Angular in Steps</a></small>
            </div>
            <div class="media-right text-xs-center">
              <h4 class="mb-0 text-success">9.8</h4>
              <span class="text-muted-light">Great</span>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="media">
            <div class="media-body media-middle">
              <a href="student-take-quiz.html">Responsive &amp; Retina</a><br>
              <small class="text-light">Course: <a href="student-take-course.html">Bootstrap Foundations</a></small>
            </div>
            <div class="media-right text-xs-center">
              <h4 class="mb-0 text-danger">2.8</h4>
              <span class="text-muted-light">Failed</span>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="card">
      <div class="card-header bg-white">
        <h4 class="card-title">Rewards</h4>
        <p class="card-subtitle">Your latest achievements</p>
      </div>
      <div class="card-block text-xs-center">
        <div class="btn btn-primary btn-circle"><i class="material-icons">thumb_up</i></div>
        <div class="btn btn-danger btn-circle"><i class="material-icons">grade</i></div>
        <div class="btn btn-success btn-circle"><i class="material-icons">bubble_chart</i></div>
        <div class="btn btn-warning btn-circle"><i class="material-icons">keyboard_voice</i></div>
        <div class="btn btn-info btn-circle"><i class="material-icons">event_available</i></div>
      </div>
    </div>
    <div class="card">
      <div class="card-header bg-white">
        <div class="media">
          <div class="media-body media-middle">
            <h4 class="card-title">Forum Activity</h4>
            <p class="card-subtitle">Latest forum topics &amp; comments</p> 
          </div>
          <div class="media-right media-middle">
            <a class="btn btn-sm btn-primary-outline" href="student-forum.html"> <i class="material-icons">keyboard_arrow_right</i></a>
          </div>
        </div>
      </div>
      <ul class="list-group list-group-fit">
        <li class="list-group-item forum-thread media">
          <div class="media-left">
            <div class="forum-icon-wrapper" id="forum-item-1">
              <a href="student-forum-thread.html" class="forum-thread-icon">
                <i class="material-icons">description</i>
              </a>
              <a href="#public-profile" class="forum-thread-user">
                <img src="/app/vendor/learning/learnplus_v200/dist/assets/images/people/50/guy-7.jpg" alt="" width="20" class="rounded-circle">
              </a>
            </div>
            <span class="mdk-tooltip mdk-js-tooltip" for="forum-item-1">
              replied by Brian S.
            </span>
          </div>
          <div class="media-body media-middle">
            <a href="student-forum-thread.html">Am I learning the right way?</a>
          </div>
          <div class="media-right media-middle">
            <div style="width:80px; text-align: right;">
              <small class="text-muted-light">5 min ago</small>
            </div>
          </div>
        </li>
        <li class="list-group-item forum-thread media">
          <div class="media-left">
            <div class="forum-icon-wrapper" id="forum-item-2">
              <a href="student-forum-thread.html" class="forum-thread-icon">
                <i class="material-icons">description</i>
              </a>
              <a href="#public-profile" class="forum-thread-user">
                <img src="/app/vendor/learning/learnplus_v200/dist/assets/images/people/50/guy-4.jpg" alt="" width="20" class="rounded-circle">
              </a>
            </div>
            <span class="mdk-tooltip mdk-js-tooltip" for="forum-item-2">
              posted by Adrian D.
            </span>
          </div>
          <div class="media-body media-middle">
            <a href="student-forum-thread.html">Can someone help me with the basic Setup?</a>
          </div>
          <div class="media-right media-middle">
            <div style="width:80px; text-align: right;">
              <small class="text-muted-light">5 min ago</small>
            </div>
          </div>
        </li>
        <li class="list-group-item forum-thread media">
          <div class="media-left">
            <div class="forum-icon-wrapper" id="forum-item-3">
              <a href="student-forum-thread.html" class="forum-thread-icon">
                <i class="material-icons">description</i>
                <img src="/app/vendor/learning/learnplus_v200/dist/assets/images/people/50/guy-2.jpg" alt="" width="20" class="forum-thread-user rounded-circle">
              </a>
            </div>
            <span class="mdk-tooltip mdk-js-tooltip" for="forum-item-3">
              replied by Michael D.
            </span>
          </div>
          <div class="media-body media-middle">
            <a href="student-forum-thread.html">I think this is the right way?</a>
          </div>
          <div class="media-right media-middle text-xs-right" style="min-width: 80px;">
            <small class="text-muted-light">5 min ago</small>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

      </div>
    </div>
    <!-- Sidebar -->
<div class="mdk-drawer mdk-js-drawer" id="default-drawer">
  <div class="mdk-drawer__content ">
    <div class="sidebar sidebar-left sidebar-light sidebar-transparent-sm-up sidebar-p-y">
      <div class="sidebar-heading">APPLICATIONS</div>
      <ul class="sidebar-menu">
        <li class="sidebar-menu-item active">
          <a class="sidebar-menu-button" href="student-dashboard.html">
            <i class="sidebar-menu-icon material-icons">account_box</i> Student
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="instructor-dashboard.html">
            <i class="sidebar-menu-icon material-icons">school</i> Instructor
          </a>
        </li>
      </ul>
      <div class="sidebar-heading">Layout</div>
      <ul class="sidebar-menu">
        <li class="sidebar-menu-item active">
          <a class="sidebar-menu-button" href="student-dashboard.html">
            <i class="sidebar-menu-icon material-icons">dashboard</i> Fluid Layout
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="fixed-student-dashboard.html">
            <i class="sidebar-menu-icon material-icons">dashboard</i> Fixed Layout
          </a>
        </li>
      </ul>
      <div class="sidebar-heading">Student</div>
      <ul class="sidebar-menu">
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="student-browse-courses.html">
            <i class="sidebar-menu-icon material-icons">search</i> Browse Courses
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="student-view-course.html">
            <i class="sidebar-menu-icon material-icons">import_contacts</i> View Course
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="student-take-course.html">
            <i class="sidebar-menu-icon material-icons">class</i> Take Course 
            <span class="sidebar-menu-label tag tag-default">PRO</span>
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="student-take-quiz.html">
            <i class="sidebar-menu-icon material-icons">dvr</i> Take a Quiz
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="student-quiz-results.html">
            <i class="sidebar-menu-icon material-icons">poll</i> Quiz Results
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="student-account-edit.html">
            <i class="sidebar-menu-icon material-icons">account_box</i> Edit Account
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="student-my-courses.html">
            <i class="sidebar-menu-icon material-icons">school</i> My Courses
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="student-messages.html">
            <i class="sidebar-menu-icon material-icons">comment</i> Messages 
            <span class="sidebar-menu-label tag tag-default">2</span>
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="student-billing.html">
            <i class="sidebar-menu-icon material-icons">monetization_on</i> Billing 
            <span class="sidebar-menu-label tag tag-default">$25</span>
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="guest-login.html">
            <i class="sidebar-menu-icon material-icons">lock_open</i> Logout
          </a>
        </li>
      </ul>
      <!-- Components menu -->
<div class="sidebar-heading">UI Components</div>
<ul class="sidebar-menu">
  <li class="sidebar-menu-item">
    <a class="sidebar-menu-button sidebar-js-collapse" href="#">
      <i class="sidebar-menu-icon material-icons">tune</i> UI Components
    </a>
    <ul class="sidebar-submenu sm-condensed">
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-buttons.html">Buttons</a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-cards.html">Cards</a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-tabs.html">Tabs</a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-tree.html">Tree</a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-nestable.html">Nestable</a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-notifications.html">Notifications</a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-progress.html">Progress Bars</a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-forms.html">Forms</a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-tables.html">Tables</a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-charts.html">Charts</a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-calendar.html">Calendar</a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-maps-vector.html">Maps Vector</a>
      </li>
    </ul>
  </li>
</ul>
<!-- // END Components Menu -->
    </div>
  </div>
</div>
<!-- // END Sidebar -->
  </div>

  <!-- jQuery -->
<script src="/app/vendor/learning/learnplus_v200/dist/assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="/app/vendor/learning/learnplus_v200/dist/assets/vendor/tether.min.js"></script>
<script src="/app/vendor/learning/learnplus_v200/dist/assets/vendor/bootstrap.min.js"></script>

<!-- MDK -->
<script src="/app/vendor/learning/learnplus_v200/dist/assets/vendor/dom-factory.js"></script>
<script src="/app/vendor/learning/learnplus_v200/dist/assets/vendor/material-design-kit.js"></script>

<!-- Sidebar Collapse -->
<script src="/app/vendor/learning/learnplus_v200/dist/assets/vendor/sidebar-collapse.js"></script>

<!-- App JS -->
<script src="/app/vendor/learning/learnplus_v200/dist/assets/js/main.min.js"></script>

  

  

  
</body>
</html>
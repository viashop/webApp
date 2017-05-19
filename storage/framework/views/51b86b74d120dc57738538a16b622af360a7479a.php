<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

	<link href="/app/vendor/dashboard/build/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="/app/vendor/dashboard/build/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="/app/vendor/dashboard/build/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="/app/vendor/dashboard/build/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="/app/vendor/dashboard/build/img/favicon.png" rel="icon" type="image/png">
	<link href="/app/vendor/dashboard/build/img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="/app/vendor/dashboard/build/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="/app/vendor/dashboard/build/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="/app/vendor/dashboard/build/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/app/vendor/dashboard/build/css/main.css">
</head>
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box">
                    <div class="sign-avatar">
                        <img src="/app/vendor/dashboard/build/img/avatar-sign.png" alt="">
                    </div>
                    <header class="sign-title">Sign In</header>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-Mail or Phone"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in"/>
                            <label for="signed-in">Keep me signed in</label>
                        </div>
                        <div class="float-right reset">
                            <a href="reset-password.html">Reset Password</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-rounded">Sign in</button>
                    <p class="sign-note">New to our website? <a href="sign-up.html">Sign up</a></p>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </form>
            </div>
        </div>
    </div><!--.page-center-->


<script src="/app/vendor/dashboard/build/js/lib/jquery/jquery.min.js"></script>
<script src="/app/vendor/dashboard/build/js/lib/tether/tether.min.js"></script>
<script src="/app/vendor/dashboard/build/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="/app/vendor/dashboard/build/js/plugins.js"></script>
    <script type="text/javascript" src="/app/vendor/dashboard/build/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="/app/vendor/dashboard/build/js/app.js"></script>
</body>
</html>
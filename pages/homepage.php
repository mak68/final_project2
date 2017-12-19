<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>Login and Registration Form with HTML5 and CSS3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />

    <link rel="stylesheet" type="text/css" href="pages/assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="pages/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="pages/assets/css/animate-custom.css" />
</head>
<body>
<div class="container">
    <!-- Codrops top bar -->
    <div class="codrops-top">


        <div class="clr"></div>
    </div><!--/ Codrops top bar -->
    <header>
        <h1>To Do Application</h1>
        <nav class="codrops-demos">

        </nav>
    </header>
    <section>
        <div id="container_demo" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form  action="index.php?page=accounts&action=login" method="post" autocomplete="on">
                        <h1>Log in</h1>
                        <p>
                            <label for="username" class="uname" data-icon="u" > Your email or username </label>
                            <input id="username" name="email" required="required" type="text" placeholder=""/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                            <input id="password" name="password" required="required" type="password" placeholder="" />
                        </p>
                        
                        <p class="login button">
                            <input type="submit" value="Login" />
                        </p>
                        <p class="change_link">
                            Not a member yet ?
                            <a href="#toregister" class="to_register">Sign Up</a>
                        </p>
                    </form>
                </div>

                <div id="register" class="animate form">
                    <form  action="index.php?page=accounts&action=store" method="POST" autocomplete="on">
                        <h1> Sign up </h1>
                        <p>
                            <label for="usernamesignup" class="uname" data-icon="u">First Name</label>
                            <input id="usernamesignup" name="fname" required="required" type="text" placeholder="" />
                        </p>
                        <p>
                            <label for="usernamesignup" class="uname" data-icon="u">Last Name</label>
                            <input id="usernamesignup" name="lname" required="required" type="text" placeholder="" />
                        </p>
                        <p>
                            <label for="emailsignup" class="youmail" data-icon="e" > Email</label>
                            <input id="emailsignup" name="email" required="required" type="email" placeholder=""/>
                        </p>
                        <p>
                            <label for="emailsignup" class="youmail" data-icon="u" > Phone</label>
                            <input id="emailsignup" name="phone" required="required" type="text" placeholder=""/>
                        </p>
                        <p>
                            <label for="emailsignup" class="uname" data-icon="u" > Birthday</label>
                            <input id="emailsignup" name="birthday" required="required" type="text" placeholder=""/>
                        </p>
                        <p>
                            <label for="emailsignup" class="uname" data-icon="u" > Gender</label>
                            <input id="emailsignup" name="gender" required="required" type="text" placeholder=""/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                            <input id="password" name="password" required="required" type="password" placeholder="" />
                        </p>


                        <p class="signin button">
                            <input type="submit" value="Sign up"/>
                        </p>
                        <p class="change_link">
                            Already a member ?
                            <a href="#tologin" class="to_register"> Log in </a>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
</body>
</html>
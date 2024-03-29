<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fas/css/all.min.css">
    <link rel="shortcut icon" type="image/jpg" href="images/precious.jpg"/>

    <title>Precious Newssy</title>
</head>
    
<body>

    <!--Side navigation-->

    <div class="overlay" onclick="closeSideNav()"></div>
    <div class="side-nav">
        
        <span class="close">
            <i onclick="closeSideNav()">&times;</i>
        </span>

        <span class="side-menu-links" id="side-menu-links">
            <a class="side-nav-link" id="link1" href="#home"><p>Home</p></a>
            <a class="side-nav-link" id="link2" href="#about"><p>About</p></a>
            <a class="side-nav-link" id="link3" href="#education"><p>Education</p></a>
            <a class="side-nav-link" id="link4" href="#services"><p>Services</p></a>
            <a class="side-nav-link" id="link5" href="#hire"><p>Hire Me</p></a>
        </span>
    </div>

    <!--Side navigation end-->

    <div class="container" id="home">
        <header class="website-header" id="head">
            <span class="header-content" id="header-content">

                <span class="brand-name">
                    <a href="index.html" id="brand">
                        <strong>PRECIOUS NEWSSY</strong>
                    </a>
                </span>

                <span class="menu-links" id="menu-links">
                    <a class="navbar-link" id="link1" onclick="activate1()" href="#home"><p>Home</p></a>
                    <a class="navbar-link" id="link2" onclick="activate2()" href="#about"><p>About</p></a>
                    <a class="navbar-link" id="link3" onclick="activate3()" href="#education"><p>Education</p></a>
                    <a class="navbar-link" id="link4" onclick="activate4()" href="#services"><p>Services</p></a>
                    <a class="navbar-link" id="link5" onclick="activate5()" href="#hire"><p>Hire Me</p></a>

                        <span class="navigate" id="navigate"><i class="fas fa-bars" onclick="openSideNav()"></i></span>
                </span>

            </span>

        </header>
        
        <div class="page-body" onclick="closeNav()">
            <div class="landing-body">

                <div class="landing-content">
                    <p class="hi">Hello & Welcome!</p>

                        <span class="large">
                            I Am <span class="name">Precious Newssy</span><span class="developer">A Web Developer</span><span class="programmer">A Programmer</span>
                        </span>
                        <span class="social-icons">
                            <a href="https://web.facebook.com/profile.php?id=100018896417862" target="blank" class="fb" title="Facebook">
                            <i class="fab fa-facebook-square"></i>
                            </a>

                            <a href="https://twitter.com/PIfaka/" target="blank" class="twitter" title="Twitter">
                            <i class="fab fa-twitter light-blue"></i>
                            </a>
                            
                            <a href="https://www.instagram.com/precious_jw/" target="blank" class="ig"  title="Instagram">
                            <i class="fab fa-instagram"></i>
                            </a>

                            <a href="https://www.linkedin.com/in/precious-newssy-4b979919b/?clickid=Wao2Ta3OyxyORoBwUx0Mo3ERUknSOkUb1VR01A0&src=aff-lilpar&veh=aff_src%2Eaff-lilpar_c%2Epartners_pkw%2E123201_plc%2Eadgoal+GmbH_pcrid%2E449670_learning&irgwc=1&trk=aff_src%2Eaff-lilpar_c%2Epartners_pkw%2E123201_plc%2Eadgoal+GmbH_pcrid%2E449670_learning&originalSubdomain=ng" target="blank" class="linkedin" title="Linkedin">
                            <i class="fab fa-linkedin-in"></i>
                            </a>

                            <a href="mailto:ifakaprecious43@gmail.com?" target="blank" class="email"  title="Email">
                            <i class="far fa-envelope"></i>
                            </a>

                            <a href="https://youtube.com" target="blank" class="youtube" title="Youtube">
                            <i class="fab fa-youtube red"></i>
                            </a>
                        </span>
                </div>
                
                <a href="#home">
                    <span class="scroll" id="scrollTop"><i class="fa fa-angle-up"></i>
                    </span>
                </a>
            </div>
        </div>
            
            <a href="#about">
                <span class="continue"><i class="fa fa-angle-down"></i>
                </span>
            </a>

            

        <div class="main-body" id="about">

            <div class="about">
                <div class="about-body">
                    <h1 class="about-header headers">About Me</h1><br>
                    <p class="about-text-lg">Hey there!<br> </p>
                    <p class="about-text">I'm Precious Newssy, a Web Developer, a Computer Programmer and a Gaming enthusiast. I have a passion for working with computers and the internet. I am honest, trustworthy, reliable and I derive joy in making sure that my clients are absolutely satisfied. I'm also a fan of Soccer. I am proficient in the following skills:
                    </p>
                </div>

                <div class="skills">
                    <div class="skills-row-1">
                        <section class="html-progress progress">
                            <span class="skill-html skill"><p class="html">Html</p><p class="html-percent percent">85%</p></span>
                            <progress value="85" max="100"></progress>
                        </section>
                    
                        <section class="css-progress progress">
                            <span class="skill-css skill"><p class="css">CSS</p><p class="css-percent percent">80%</p></span>
                            <progress value="80" max="100"></progress>
                        </section>

                        <section class="js-progress progress">
                            <span class="skill-js skill"><p class="js">Javascript</p><p class="js-percent percent">60%</p></span>
                            <progress value="60" max="100"></progress>
                        </section>
                        
                    </div>
                    <div class="skills-row-2">
                        <section class="php-progress progress">
                            <span class="skill-php skill"><p class="php">PHP</p><p class="php-percent percent">60%</p></span>
                            <progress value="60" max="100"></progress>
                        </section>

                        <section class="sql-progress progress">
                            <span class="skill-sql skill"><p class="sql">SQL</p><p class="sql-percent percent">80%</p></span>
                            <progress value="80" max="100"></progress>
                        </section>
                    </div>
                </div>
            </div>
            
            <div class="education" id="education">
                <h1 class="education-header headers">Education & Experience</h1><br>

                <div class="education-text">
                    <span class="education-row-1 education-rows">
                        <h3 class="text-head">
                            TERTIARY EDUCATION
                        </h3>
                        <p class="text-body">
                            Started studing <strong>Information Technology</strong> at National Open University of Nigeria.
                        </p>
                        <h4 class="edu-date">2018 - PRESENT</h4>
                    </span>

                    <span class="education-row-2 education-rows">
                        <h3 class="text-head">
                            WEBSITE DEVELOPMENT
                        </h3>
                        <p class="text-body">
                            Started learning <strong>Web Development</strong>.
                        </p>
                        <h4 class="edu-date">2018 - PRESENT</h4>
                    </span>

                    <span class="education-row-3 education-rows">
                        <h3 class="text-head">
                            COMPUTER PROGRAMMING
                        </h3>
                        <p class="text-body">
                            Started learning <strong>Programming Languages</strong> which include javascript and php.
                        </p>
                        <h4 class="edu-date">2019 - PRESENT</h4>
                    </span>
                </div>

            </div>

            <div class="services" id="services">
                <div class="services-body">
                    <h1 class="services-header">Services</h1><br>
                    <h3 class="services-sub">These are some services I can offer</h3>
                </div>

                <div class="services-main">
                    <span class="services-row-1 services-rows">
                        <img src="images/responsive-web.jpg">
                        <span class="right-content">
                                <strong>RESPONSIVE WEBSITE DEVELOPMENT</strong>
                            <p class="text-body">
                                I can create a website that will be <strong>Responsive</strong> on all type of devices.
                            </p>
                        </span>
                    </span>

                    <span class="services-row-2 services-rows">
                        <span class="right-content">
                                <strong>ONLINE BLOG</strong>
                            <p class="text-body">
                                I can help you set up an <strong>Online Blog</strong> with minimal cost.
                            </p>
                        </span>

                        <img src="images/blog.jpg">
                    </span>

                    <span class="services-row-3 services-rows">
                        <img src="images/manager.jpg">

                        <span class="right-content">
                                <strong>WEBSITE MANAGER</strong>
                            <p class="text-body">
                                I can help you manage various aspects of your website such as updating, regular maintenance and performance optimization.
                            </p>
                        </span>
                    </span>
                </div>

            </div>

            <div class="hire" id="hire">
                <div class="hire-body">
                    <h1 class="hire-header">Hire Me</h1><br>
                    <h3 class="hire-sub">These are ways in which you can hire my services</h3>
                </div>

                <div class="hire-main">
                    <span class="hire-rows">
                        <span>WHATSAPP</span>
                        <p class="text-body hire-wa">
                            Chat me on whatsapp<br>
                            <a href="https://api.whatsapp.com/send?phone=2347059035326" target="blank" class="wa">
                                <img src="images/whatsapp logo.png" alt="Whatsapp image" class="wa-img">
                            </a>
                        </p>
                    </span>
                    
                    <span class="hire-rows">
                        <span>E-MAIL</span>
                        <p class="text-body">
                            Send me an Email at <a href="#">ifakaprecious43@gmail.com.</a>
                        </p>
                    </span>

                    <span class="hire-rows">
                        <span>FACEBOOK</span>
                        <p class="text-body hire-facebook">
                            You can also send me a message on Facebook <br> <a href="https://web.facebook.com/profile.php?id=100018896417862" target="blank" class="fb">
                                <i class="fab fa-facebook-square"></i>
                                </a>
                        </p>
                    </span>
                </div>

            </div>

            <footer class="footer">
                <p class="footer-text">Designed by Precious Newssy.</p>
                <p class="copyright">Copyright &copy; <span id="currentDate"></span> </p>
            </footer>
        </div>
    </div>


    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
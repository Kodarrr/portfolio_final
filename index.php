<?php

 include 'info.php';
 $sql="SELECT * FROM `infos` WHERE `infos`.`id`=1";
 $result=mysqli_query($conn,$sql);
 $data=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['name']?>-<?php echo $data['Work']?></title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Box Icons -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        h1, h2, p {
            margin-bottom: 10px;
        }

        ul {
            list-style-type: square;
            margin-left: 20px;
        }
    </style>

 
</head>
<body>
    <!-- Navbar -->
    <header>
        <a href="#" class="logo">Portfolio</a>
 
        <div class="bx bx-menu" id="menu-icon"></div>
 
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <!-- <li><a href="#services">Services</a></li> -->
            <li><a href="#portfolio">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php">login</a></li>
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
    </header>
    <!-- Home -->
 
    <section class="home" id="home">
        <div class="social">
            <a href="<?php echo $data['github']?>"><i class='bx bxl-github'></i></a>
            <a href="<?php echo $data['facebook']?>"><i class='bx bxl-facebook' ></i></a>
            
        </div>
        <div class="home-img">
            <img src="p1.jpg" alt="">
        </div>
        <div class="home-text">
            <span>Hello, I'm</span>
            <h1><?php echo $data['name']?></h1>
            <h2><?php echo $data['Work']?></h2>
            
            <!-- <p>Lorem ipsum dolor sit amet cons <br> adipisicing elit. Minima, consectetur <br> ullam?</p> -->
            <br>
            <a href="#contact" class="btn">Contact Me</a>
        </div>
 
    </section>
    <!-- About -->
    <section class="about" id="about">
        <div class="heading">
            <h2>About Me</h2>
            
        </div>
        <!-- About Content -->
        <div class="about-container">
            <div class="about-img">
                <img src="p2.jpg" alt="">
            </div>
            <div class="about-text">
                 
    <section>
    <p>Hello, I'm Shah Md Khalil Ullah, a Computer Science and Engineering student at KUET. Proficient in C++, Java, and JavaScript, I excel in app and web development, specializing in ReactJS and NodeJS. As a competitive programmer, I thrive under pressure, refining problem-solving skills and optimizing code efficiency. While I haven't worked extensively with machine learning, I have a keen interest in the field and aspire to explore its intricacies in the future. I'm not just a coder but a creator, approaching every project with innovation and a keen eye for detail.</p>
    </section>

        <div class="information">
         <!-- Box 1 -->
            <div class="info-box">
            <i class='bx bxs-user' ></i>
            <span><?php echo $data['name']?></span>
            </div>
            <!-- Box 2 -->
            <div class="info-box">
                <i class='bx bxs-phone' ></i>
                    <span><?php echo $data['phone']?></span>
            </div>
            <!-- Box 3 -->
            <div class="info-box">
                <i class='bx bxs-envelope' ></i>
                <span><?php echo $data['email']?></span>
                </div>
                </div>
                <a href="demo cv.docx" target="_blank" class="btn">Download Cv</a>
            </div>
        </div>
    </section>
    <!-- Skills -->
    <section class="skills" id="skills">
        <div class="heading">
            <h2>Skills</h2>
            <span>My Skills</span>
        </div>
        <!-- Skills Content -->
        <div class="skills-container">
            <div class="bars">
                <!-- Box 1 -->
                <div class="bars-box">
                    <h3>HTML</h3>
                    <span>94%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar html-bar"></div>
                </div>
                <!-- Box 2 -->
                <div class="bars-box">
                    <h3>CSS</h3>
                    <span>84%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar css-bar"></div>
                </div>
                <!-- Box 3 -->
                <div class="bars-box">
                    <h3>JavaScript</h3>
                    <span>74%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar js-bar"></div>
                </div>
                <!-- Box 4 -->
                <div class="bars-box">
                    <h3>React</h3>
                    <span>80%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar react-bar"></div>
                </div>
            </div>
            <div class="skills-img">
                <img src="skill_new.jpg" alt="">
            </div>
        </div>
 
    </section>
    
    <!-- Projects -->
    <section class="portfolio" id="portfolio">
        <div class="heading">
            <h2>Projects</h2>
            <span>My Recent Work</span>
        </div>
        <div class="portfolio-content">
            <div class="portfolio-img" >
                <img src="location.jpg" alt="">
                <span>Location Tracker</span>
            </div>
            <div class="portfolio-img" onclick="window.location='https://github.com/Kodarrr/oop_project';">
                <img src="tr.jpg" alt="">
                <span>Travell Management</span>
            </div>
            <!-- <div class="portfolio-img">
                <img src="blog-4.jpg" alt="">
            </div>
            <div class="portfolio-img">
                <img src="blog-5.jpg" alt="">
            </div>
            <div class="portfolio-img">
                <img src="blog-6.jpg" alt="">
            </div>
            <div class="portfolio-img">
                <img src="blog-7.jpg" alt="">
            </div> -->
            
        </div>
    </section>

    <!-- <section class="projects" id="projects">
        <div class="heading">
            <h2>Projects</h2>
            <span>Check Out Our Latest Projects</span>
        </div>
        <div class="project-content">
            <div class="project" onclick="window.location='https://github.com/your-username/project-1';">
                <h3>Project 1</h3>
                <p>Description of Project 1.</p>
            </div>
            <div class="project" onclick="window.location='https://github.com/your-username/project-2';">
                <h3>Project 2</h3>
                <p>Description of Project 2.</p>
            </div>
            <div class="project" onclick="window.location='https://github.com/your-username/project-3';">
                <h3>Project 3</h3>
                <p>Description of Project 3.</p>
            </div>
            Add more projects as needed -->
        <!-- </div>
    </section> -->




    
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="heading">
            <h2>Contact</h2>
            <span>Connect With Us</span>
        </div>
        <div class="contact-form">
            <form action="save.php" method="post">
                <input type="text" name="yourname" placeholder="Your Name">
                <input type="email" name="email" id="" placeholder="Your Email">
                <!-- <textarea name="msg" id="" cols="30" rows="10" placeholder="Write Message Here..."></textarea> -->
                <input type="text" name="msg" id="" placeholder="Your msg">
                <input type="submit" class="form-control" value="Send">
            </form>
        </div>
    </section>






    <!-- Footer -->
    <div class="footer">
        <h2>Coding Home</h2>
        <div class="footer-social">
            <a href="#"><i class='bx bxl-facebook' ></i></a>
            <a href="#"><i class='bx bxl-twitter' ></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
            <a href="#"><i class='bx bxl-youtube' ></i></a>
        </div>
 
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <p>Create By <a href="">Foolish Developer</a> | All Right Reserved.</p>
    </div>
 
 
 
    <!-- Link To JS -->
    <script src="./js/script.js"></script>
</body>
</html>
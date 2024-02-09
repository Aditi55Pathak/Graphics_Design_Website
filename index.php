<?php 

$insert=false;
if(isset($_POST['name'])){

$server="localhost:3307";
$name="root";
$password="";

$con = mysqli_connect($server, $name, $password);

if(!$con){

    die("Connection to database failed due to " . mysqli_connect_error());

}

  //echo"Connection established to database..";

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$sql="INSERT INTO `web_prj` .`contact`(`name`, `email`, `subject`,`message`) VALUES ('$name', '$email', '$subject','$message');";

//echo $sql;

 if($con->query($sql)== true){

 // echo"Successfully inserted";
     $insert=true;

 }
else{

   echo"ERROR : $sql <br> $con->error";

 }

 $con->close();
 }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphics Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">D-A<span> Graphics</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Our home section -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <a href="hire.php" target="_blank">Hire</a>
            </div>
        </div>
    </section>

    <!-- Our about section -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About us</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/img10.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">We are Graphic designers <span class="typing-2"></span></div>
                    <p>Meet us, the dynamic duo of design—yours truly and my creative companion, Dinky. With a passion
                        for pixels and an eye for aesthetics, we navigate the vast canvas of creativity, crafting visual
                        wonders that speak louder than words. Armed with our trusty design tools, we embark on a journey
                        to transform ideas into captivating visuals. Together, we bring a blend of innovation and
                        artistry to the world of graphics, turning every project into a masterpiece. Join us on this
                        visual adventure, where imagination knows no bounds, and every pixel tells a story.</p>
                    <a href="gallary.php" target="_blank">Our Gallery</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our services section -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title"> Services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-globe"></i>
                        <div class="text">Web Design</div>
                        <p>We weave digital dreams into stunning web realities, where every click tells a captivating
                            story.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-image"></i>
                        <div class="text">Poster Design</div>
                        <p>We turn visions into vibrant poster tales that leap off the page, leaving a lasting
                            impression.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Illustrations</div>
                        <p>We magically bring ideas to life through enchanting illustrations and endless possibilities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our skills section -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Expertise</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text"> Creative skills & experiences.</div>&nbsp;&nbsp;&nbsp;
                    <p>In the digital landscape, where attention spans are fleeting and first impressions are paramount,
                        design emerges as the silent storyteller. It's not just about making things look good; it's
                        about creating an experience that resonates. In this sea of pixels and constant stimuli,
                        thoughtful design acts as a guiding light, navigating users through a seamless journey. Whether
                        it's a website, a poster, or an illustration, each visual element has the power to captivate,
                        communicate, and leave a lasting imprint in a world that moves at the speed of a click. Design
                        isn't just a luxury; it's the language that connects, engages, and elevates in the age of
                        digital discourse.</p>
                    <a href="tool.php" target="_blank">Tools</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>Illustration</span>
                            <span>95%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Photoshop</span>
                            <span>70%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Figma</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Indesign</span>
                            <span>60%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>After Effects</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact section -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Let's build Connection</div>
                    <p>Feel free to reach out and let the pixels do the talking! Your ideas, our canvas—let's create
                        something extraordinary together. Get in touch, and let the collaboration begin!?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Aditi Pathak, Dinky Unadkat</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">PDEU, Gandhinagar</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">Contact</div>
                                <div class="sub-title">+91 8925533526, +91 7846253419</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Drop Query Here</div>
                    <form action="index.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input name="name" type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input name="email" type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input name="subject" type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea name="message" cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="Submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer section -->
    <footer>
        <span>Graphics World Created by A-D Graphics | <span class="far fa-copyright"></span> 2023 All rights
            reserved.</span>
    </footer>

    <!-- External Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="script.js"></script>
</body>

</html>
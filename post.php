<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Blog Website</title>
    <!-- CUSTOM STYLESHEET--> 
    <link rel="stylesheet" href="./style.css">
    <!-- ICONSCOUT CDN--> 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT (MONTSERRAT) --> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">EGATOR</a>
            <ul class="nav__items">
                <li> <a href="blog.html">Blog</a></li>
                <li> <a href="about.html">About</a></li>
                <li> <a href="services.html">Services</a></li>
                <li> <a href="contact.html">Contact</a></li>
                <!-- <li> <a href="signin.html">Sign in</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Log out</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--================END OF NAV======================-->

    <section class="singlepost">
        <div class="container singlepost__container">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, nisi.</h2>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar2.jpg">
                </div>
                <div class="post__author-info">
                    <h5>By: Quang Phong </h5>
                    <small>21:50-16/05/2023</small>
                </div>
            </div>
            <div class="singlepost__thumbnail">
                <img src="./images/blog33.jpg">
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Nemo eligendi qui a recusandae optio cupiditate eum, corrupti nostrum quidem placeat earum dicta 
                 exercitationem molestiae voluptatum magnam ipsum illo, temporibus omnis cum repellendus unde? Reprehenderit beatae provident excepturi
                  quae aut culpa.</p>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Nemo eligendi qui a recusandae optio cupiditate eum, corrupti nostrum quidem placeat earum dicta 
                    exercitationem molestiae voluptatum magnam ipsum illo, temporibus omnis cum repellendus unde? Reprehenderit beatae provident excepturi
                     quae aut culpa.</p>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi adipisci quas sequi in, similique laboriosam delectus qui commodi blanditiis dignissimos, amet suscipit
                 veniam fugiat sit sapiente tempore facilis iusto beatae quibusdam dolores! Alias perferendis nobis quaerat,
                  maxime impedit hic quam temporibus accusamus quibusdam commodi reprehenderit recusandae et officia accusantium iusto vel vitae 
                  possimus nostrum magni aliquam voluptatibus voluptas. Sed, ullam!</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Nemo eligendi qui a recusandae optio cupiditate eum, corrupti nostrum quidem placeat earum dicta 
                exercitationem molestiae voluptatum magnam ipsum illo, temporibus omnis cum repellendus unde? Reprehenderit beatae provident excepturi
                  quae aut culpa.</p>
        </div>
    </section>
     <!--================ END OF SINGLE POST======================-->


     <!--================ END OF CATEGORY BUTTONS======================-->

     <footer>
        <div class="footer__socials">
            <a href="https://www.youtube.com/channel/UCFSON-ZYa7ASpNP7GusibaQ" target="_blank"> <i class="uil uil-youtube"></i></a>
            <a href="https://www.facebook.com/CaoPhong3107" target="_blank"> <i class="uil uil-facebook-f"></i></a>
            <a href="https://www.instagram.com/cao_phong__/" target="_blank"> <i class="uil uil-instagram-alt"></i></a>
            <a href="https://www.linkedin.com/in/phongcao3107/" target="_blank"> <i class="uil uil-linkedin"></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Art</a></li>
                    <li><a href="">Wild Life</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Sciene & Technology</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>
            <article>
                <h4>Permalink</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>Coppyright @coppy: CAO QUANG PHONG</small>
        </div>
     </footer>

     <script src="./main.js"></script>
</body>
</html>
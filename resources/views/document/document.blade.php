<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSIST: Document</title>

    <!--Favicon Logo Web-->
    <link rel="shortcut icon" href="./assets/icon/nm.png" type="image/x-icon"/>

    <!--CSS-->
    <link rel="stylesheet" href="./dist/CSS/activity.css"/>

    <!--Jonsuh Hamburger-->
    <link rel="stylesheet" href="./dist/CSS/hamburgers.css"/>

    <!--Font Poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>

    <!--Font Awsome CDN-->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <!--Link Swiper's CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--AOS Motion-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="logo">
                <a class="m-0 navbar-brand" href="/homepage">
                    <img src="./assets/icon/pt_inovasi_sistem_teknologi_logo.jpeg" width="32" alt="Logo">
                </a>
                <a class="m-0 navbar-brand" href="/homepage">
                    <h1>INSIST</h1>
                </a>
            </div>
            <ul class="menu">
                <li>
                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                        <button type="button" class="logout-btn" id="logout-btn">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="services">
            <div class="service-box">
                <div class="box">
                    <a href="{{ route('attendance') }}">
                        <i class="fa-solid fa-house"></i>
                        <h3>Attendance Log</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque recusandae ad asperiores beatae, atque quo!</p>
                    </a>
                </div>
                <div class="box">
                    <a href="{{ route('attendance') }}">
                        <i class="fa-solid fa-handshake-simple"></i>
                        <h3>Overview</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque recusandae ad asperiores beatae, atque quo!</p>
                    </a>
                </div>
                <div class="box">
                    <a href="{{ route('document') }}">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                        <h3>User Attendance</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque recusandae ad asperiores beatae, atque quo!</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

   <!-- Footer -->
   <footer>
        <div class="container">
            <div class="footer-box">
                <div class="box">
                <img src="./assets/icon/pt_inovasi_sistem_teknologi_logo.jpeg" width="32" alt="Logo">
                    <h2>INSIST</h2>
                    <p>as a leading principal partner in the field of information technology that offers the best solutions in Data Center services, SOC (Security Operation Center), consulting and maintenance of network security systems.</p>
                <div class="footer-icon">
                    <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-square-x-twitter"></i>
                    <i class="fa-brands fa-square-instagram"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
                </div>
                <div class="box">
                    <h3>Menu</h3>
                    <a href="g-homepage.html">Home</a>
                    <a href="g-homepage.html#about">About Us</a>
                    <a href="g-homepage.html#services">Services</a>
                    <a href="c-ourhouse.html">Our House</a>
                    <a href="c-ouragent.html">Our Agent</a>
                </div>
                <div class="box">
                    <h3>Company</h3>
                    <a href="#">Blog</a>
                    <a href="#">Our Apps</a>
                    <a href="#">Brochure</a>
                </div>
                <div class="box">
                    <h3>Contact Us</h3>
                    <p><i class="fa-solid fa-envelope"></i> info@insist.co.id</p>
                    <p><i class="fa-solid fa-phone"></i> (021) 2253 1530</p>
                    <p><i class="fa-solid fa-location-dot"></i> MTH Square Building, Jl. Otto Iskandardinata No.390 Kelurahan Bidara Cina, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13330</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Copyright -->
    <div class="copyright">
        <p>&copy; 2024 <span>INSIST.</span> All Rights Reserved.</p>
    </div>
    <!-- Copyright -->


    <!--JS Home Page-->
    <script src="./dist/JavaScript/javascript.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                535: {
                slidesPerView: 2,
                spaceBetween: 40,
                },
                1024: {
                slidesPerView: 3,
                spaceBetween: 50,
                },
            },
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('logout-btn').addEventListener('click', function () {
                if (confirm('Are you sure you want to log out?')) {
                    document.getElementById('logout-form').submit();
                }
            });
        });
    </script>

    <!--AOS Motion-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>

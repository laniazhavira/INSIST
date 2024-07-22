<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSIST: Reset Password</title>

    <!--Favicon Logo Web-->
    <link rel="shortcut icon" href="./assets/icon/nm.png" type="image/x-icon"/>

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('dist/CSS/reset-password.css') }}"/>

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
</head>

<body id="reset-password-page">
    <!--Header-->
    <header>
        <div class="container">
            <!--Navbar-->
            <div class="navbar">
                <div class="logo">
                <a class="m-0 navbar-brand" href="/">
                    <img src="./assets/icon/pt_inovasi_sistem_teknologi_logo.jpeg" width="32" alt="Logo">
                    </a>
                    <h1>INSIST</h1>
                </div>
                <div class="login">
                    <button class="login-btn" onclick="window.location.href = 'login';">Login</button>
                    <button class="signup-btn" onclick="window.location.href = 'signup';">Sign Up</button>
                </div>
            </div>

            <!--Form Box-->
            <div class="container-formbox">
                <h1>
                    Reset Password
                </h1>
                <div class="input-box">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('reset-password.submit') }}">
                        @csrf
                        <input type="hidden" name="EmailUser" value="{{ $email }}">
                        <div>
                            <label>Security Question:</label>
                            <p>{{ $securityQuestion }}</p>
                        </div>
                        <div>
                            <input type="text" id="Answer" name="Answer" class="input-field" placeholder="Answer" required>
                        </div>
                        <div>
                            <input type="password" id="NewPassword" name="NewPassword" class="input-field" placeholder="New Password" required>
                        </div>
                        <div>
                            <input type="password" id="NewPassword_confirmation" name="NewPassword_confirmation" class="input-field" placeholder="Confirm New Password" required>
                        </div>
                        <button type="submit">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-box">
                <div class="box">
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
</body>
</html>
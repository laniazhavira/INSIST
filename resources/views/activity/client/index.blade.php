<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSIST: Client</title>

    <!-- Favicon Logo Web -->
    <link rel="shortcut icon" href="{{ asset('assets/icon/nm.png') }}" type="image/x-icon"/>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('dist/CSS/client.css') }}">

    <!-- Jonsuh Hamburger -->
    <link rel="stylesheet" href="{{ asset('dist/CSS/hamburgers.css') }}"/>

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>

    <!-- Font Awesome CDN -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- AOS Motion -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div class="navbar">
            <div class="logo">
                <a class="m-0 navbar-brand" href="/homepage">
                    <img src="{{ asset('assets/icon/pt_inovasi_sistem_teknologi_logo.jpeg') }}" width="32" alt="Logo">
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
    <!-- Navbar -->

    <header>
        <!-- Container -->
        <div class="container">
            <h1>Client List</h1>

            @if(in_array($userPosition, ['Super Admin', 'Admin/Finance']))
                <select id="search-client" class="input-field select">
                    <option value="">Search Client...</option>
                    @foreach($clients as $client)
                        <option value="{{ $client->ID_Client }}">{{ $client->Client_Name }}</option>
                    @endforeach
                </select>
                <form method="POST" id="client-form" class="formbox">
                    @csrf
                    <input type="hidden" id="client-id" name="client-id">
                    <div>
                        <input type="text" id="Client_Name" name="Client_Name" class="input-field" placeholder="Client Name" required>
                    </div>
                    <div>
                        <select name="Category" id="Category" class="input-field select">
                            <option value="" disabled selected>Select Category</option>
                            <option value="Financial Service Industry">Financial Service Industry</option>
                            <option value="Government">Government</option>
                            <option value="Hospital">Hospital</option>
                            <option value="Education">Education</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Military">Military</option>
                            <option value="Private">Private</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" id="Client_Address" name="Client_Address" class="input-field" placeholder="Client Address" required>
                    </div>
                    <div class="form-actions">
                        <button type="button" id="add-record">Add Record</button>
                        <button type="button" id="update-record">Update Record</button>
                        <button type="button" id="delete-record">Delete Record</button>
                    </div>
                </form>
            @endif

            <br><br>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Client Name</th>
                        <th>Client Address</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{ $client->ID_Client }}</td>
                            <td>{{ $client->Client_Name }}</td>
                            <td>{{ $client->Client_Address }}</td>
                            <td>{{ $client->Category }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Container -->
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

    <!-- JS Home Page -->
    <script src="{{ asset('dist/JavaScript/javascript.js') }}"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Button Function -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('add-record').addEventListener('click', function () {
                const form = document.getElementById('client-form');
                form.action = '{{ route("activity.client.store") }}';
                form.method = 'POST';
                form.submit();
            });

            document.getElementById('update-record').addEventListener('click', function () {
                const form = document.getElementById('client-form');
                const clientId = document.getElementById('client-id').value;

                if (clientId) {
                    form.action = `{{ url('activity/client') }}/${clientId}`;
                    form.method = 'POST';
                    form.innerHTML += '<input type="hidden" name="_method" value="PUT">';
                    form.submit();
                } else {
                    alert('This is not a valid existing data, you can\'t update this data.');
                }
            });

            document.getElementById('delete-record').addEventListener('click', function () {
                const clientId = document.getElementById('client-id').value;

                if (clientId && confirm('Are you sure you want to delete this record?')) {
                    const form = document.createElement('form');
                    form.action = `{{ url('activity/client') }}/${clientId}`;
                    form.method = 'POST';
                    form.innerHTML += '<input type="hidden" name="_method" value="DELETE">';
                    form.innerHTML += `<input type="hidden" name="_token" value="{{ csrf_token() }}">`;
                    document.body.appendChild(form);
                    form.submit();
                } else {
                    alert('This is not a valid existing data, you can\'t delete this data.');
                }
            });

            document.getElementById('search-client').addEventListener('change', function () {
                const id = this.value;

                if (id) {
                    fetch(`/activity/client/${id}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(`HTTP error! status: ${response.status}`);
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data) {
                                document.getElementById('client-id').value = data.ID_Client;
                                document.getElementById('Client_Name').value = data.Client_Name;
                                document.getElementById('Client_Address').value = data.Client_Address;
                                document.getElementById('Category').value = data.Category;
                            }
                        })
                        .catch(error => console.error('Fetch error:', error));
                } else {
                    document.getElementById('client-form').reset();
                }
            });

            document.getElementById('logout-btn').addEventListener('click', function () {
                if (confirm('Are you sure you want to log out?')) {
                    document.getElementById('logout-form').submit();
                }
            });
        });
    </script>
</body>
</html>

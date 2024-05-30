<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #0151a7;
            --secondary: #343a40;
            --dropdown: #007bff;
            --background: #f8f9fa;
            --text: #343a40;
            --nav-bg: rgba(255, 255, 255, 0.8);
            --headfont: bold 24px 'Times New Roman', serif;
            --parafont: 18px 'Poppins', serif;
        }

        *,
        html,
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font: var(--parafont);
        }

        body {
            background-color: #f2f2f2;
            margin-top: 80px;
            color: var(--text);
        }

        h1,h2,h3,h4,h5,h6 {
            font: var(--headfont);
        }

        header {
            position: fixed;
            top: 0;
            background-color: var(--nav-bg);
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            z-index: 10;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            width: 100%;
            max-width: 1200px;
        }

        .logo img {
            max-height: 50px;
            cursor: pointer;
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-links a {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 12px;
            margin-left: 25px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav-links a:hover {
            background-color: var(--primary);
            color: #fff;
        }

        .nav-links .active {
            background-color: var(--primary);
            color: #fff !important;
        }

        .nav-links .active:hover {
            background-color: var(--secondary);
        }

        .dropdown {
            position: relative;
        }

        .dropdown .dropbtn {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
            display: inline-block;
        }

        .dropdown .dropbtn:hover {
            background-color: var(--primary);
            color: #fff;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 10px;
            background-color: var(--nav-bg);
            min-width: 200px;
            z-index: 1;
            border-radius: 5px;
            padding: 5px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .dropdown-content a {
            color: var(--primary);
            padding: 8px 10px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #343a40;
        }

        .dropdown:hover .dropdown-content {
            display: flex;
            opacity: 1;
            transform: translateY(0);
            flex-direction: column;
            align-items: start;
            row-gap: 5px;
        }

        .menu-toggle {
            display: none;
            font-size: 24px;
            background: none;
            border: none;
            color: var(--text);
            cursor: pointer;
            background-color: var(--nav-bg);
            padding: 10px;
            border-radius: 5px;
        }

        @media (max-width: 769px) {
            .menu-toggle {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                right: 0;
                width: 240px;
                background-color: var(--nav-bg);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
                padding-left: 10px;
                padding-block: 15px;
                row-gap: 15px;
            }

            .nav-links.show {
                display: flex;
                align-items: flex-start;

            }

            .dropdown-content {
                position: static;
                box-shadow: none;
                row-gap: 10px;
            }

            .dropdown-content {
                padding-left: 14px;
            }
        }

        .nav-links a,
        .dropbtn {
            display: flex;
            align-items: center;
        }

        .nav-links a i,
        .dropbtn i {
            margin-right: 8px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="static/img/logo.png" alt="Your Logo">
            </div>
            <div class="nav-links">
                <a href="#" class="nav active"><i class="fas fa-home"></i> Home</a>
                <div class="dropdown">
                    <a href="#" class="nav dropbtn"><i class="fas fa-info-circle"></i> About Us</a>
                    <div class="dropdown-content">
                        <a href="#" class="dropnav"><i class="fas fa-users"></i> Our Team</a>
                        <a href="#" class="dropnav"><i class="fas fa-bullseye"></i> Our Mission</a>
                    </div>
                </div>
                <a href="#" class="nav"><i class="fas fa-laptop-code"></i> Services</a>
                <a href="#" class="nav"><i class="fas fa-envelope"></i> Contact</a>
            </div>
            <button class="menu-toggle"><i class="fas fa-bars"></i></button>
        </nav>
    </header>
    <main>
        <h1>Welcome to Our Company</h1>
    </main>

    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('show');
        });

        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', (event) => {
                event.stopPropagation();
                dropdown.querySelector('.dropdown-content').classList.toggle('show');
            });
        });

        document.addEventListener('click', (event) => {
            dropdowns.forEach(dropdown => {
                if (!dropdown.contains(event.target)) {
                    dropdown.querySelector('.dropdown-content').classList.remove('show');
                }
            });
        });
    </script>
</body>

</html>

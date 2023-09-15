<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="mobile">
        <ul>
            <div class="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </ul>
        <nav class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </nav>
    <nav class="desktop">
        <ul class="d-flex flex-row justify-content-around p-2" style="list-style-type: none;">
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </nav>
    <h1 class="text-center">Applications</h1>

  


    <script>
    // Function to toggle dark mode
    function toggleDarkMode() {
        const body = document.body;
        body.classList.toggle('dark-mode'); // Toggle dark mode class on the body
        const darkModeEnabled = body.classList.contains('dark-mode');
        
        // Set a cookie to store the dark mode preference
        document.cookie = `darkMode=${darkModeEnabled}; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/`;
    }

    // Function to check and apply dark mode preference from the cookie
    function applyDarkModePreference() {
        const darkModeCookie = document.cookie.split('; ').find((row) => row.startsWith('darkMode='));
        if (darkModeCookie) {
            const darkModeEnabled = darkModeCookie.split('=')[1] === 'true';
            const body = document.body;
            
            if (darkModeEnabled) {
                body.classList.add('dark-mode');
            } else {
                body.classList.remove('dark-mode');
            }
        }
    }

    // Add an event listener to the toggle button
    const toggleButton = document.getElementById('toggleDarkMode');
    toggleButton.addEventListener('click', toggleDarkMode);

    // Apply dark mode preference when the page loads
    window.addEventListener('load', applyDarkModePreference);
</script>

<script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.querySelector(".menu-toggle");
            const mobileMenu = document.querySelector(".mobile .menu");

            menuToggle.addEventListener("click", function () {
                mobileMenu.classList.toggle("open");
            });
        });
    </script>



<!-- IonIcons Icons --> 


<!-- Bootstrap JS for popper, etc, don't place anything below this. -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
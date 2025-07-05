<?php
function activePage($page) {
    return basename($_SERVER['PHP_SELF']) == $page ? 'style="color: yellow; font-weight: bold;"' : '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QuantXpress</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<style>
    /* Hide the header on smaller screens */
    @media (max-width: 768px) {
        .desk_menu {
            display: none!important;
        }

        .mob_menu{
            display: block!important;
            position: fixed;
            width: 100%;
            z-index: 9999;
            margin-top: -1px;
            background: #fff;
            top: 0;
        }
        .sidebar li {
            width: 100%;
            margin: 0px;
        }
        .sub-menu-mob li{
            font-weight: 400!important;
        }
    }
    .mob_menu{
        display: none;
    }
</style>
<body>
    <div class="desk_menu">
        <header class="container-fluid d-flex justify-content-between align-items-center">
            <div class="w-25">
                <a href="/" <?php echo activePage('index'); ?>>
                    <img src="/assets/img/logo.svg" alt="" class="logo">
                </a>
            </div>
            <div class="w-60">
                <nav>
                    <ul class="navlinks d-flex list-unstyled">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" <?php echo activePage('products'); ?>>Products</a>
                            <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                                <li class="m-0"><a class="dropdown-item" href="/products/blitztrader" <?php echo activePage('blitztrader'); ?>>BlitTrader</a></li>
                                <li class="m-0"><a class="dropdown-item" href="/products/qxfinlib" <?php echo activePage('qxfinlib'); ?>>QX.FinLib</a></li>
                                <li class="m-0"><a class="dropdown-item" href="/products/qxfixengine" <?php echo activePage('qxfixengine'); ?>>QX.FIXEngine</a></li>
                                <li class="m-0"><a class="dropdown-item" href="/products/qxmarket" <?php echo activePage('qxmarket'); ?>>QX.Market Data API</a></li>
                                <li class="m-0"><a class="dropdown-item" href="http://192.168.1.6:3006/">Fix Parser Tool</a></li>
                                <li class="m-0"><a class="dropdown-item" href="http://192.168.1.6:3006/calculators/option-value-calculator">Option Value Calculator</a></li>
                                <li class="m-0"><a class="dropdown-item" href="http://192.168.1.6:30i06/calculators/implied-volatility-calculator">IV Calculator</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" <?php echo activePage('solutions'); ?>>Solutions</a>
                            <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
                                <li class="m-0"><a class="dropdown-item" href="/mds" <?php echo activePage('mds'); ?>>Market Data Solutions</a></li>
                                <li class="m-0"><a class="dropdown-item" href="/algorithmic_trading" <?php echo activePage('algorithmic_trading'); ?>>Algorithmic Trading</a></li>
                                <li class="m-0"><a class="dropdown-item" href="/HFT" <?php echo activePage('HFT'); ?>>HFT Solutions</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" <?php echo activePage('resources'); ?>>Resources</a>
                            <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">
                                <li class="m-0"><a class="dropdown-item" href="/developers_corner" <?php echo activePage('developers_corner'); ?>>Developers Corner</a></li>
                                <li class="m-0"><a class="dropdown-item" href="/blogs" <?php echo activePage('about'); ?>>Blogs</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="companyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" <?php echo activePage('company'); ?>>Company</a>
                            <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                                <li class="m-0"><a class="dropdown-item" href="/about" <?php echo activePage('about'); ?>>About Us</a></li>
                                <li class="m-0"><a class="dropdown-item" href="/careers" <?php echo activePage('careers'); ?>>Careers</a></li>
                                <li class="m-0"><a class="dropdown-item" href="/contact-us" <?php echo activePage('contact-us'); ?>>Contact Us</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="w-15">
                <a href="contact-us">
                    <button class="lets_talk">Let’s talk</button>
                </a>
            </div>
        </header>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        function showSidebar() {
            const sidebar = document.querySelector(".sidebar");
            sidebar.style.display = 'flex';
            setTimeout(() => {
                sidebar.style.transform = 'translateX(0)';
            }, 10);
        }

        function closeSidebar() {
            const sidebar = document.querySelector(".sidebar");
            sidebar.style.transform = 'translateX(100%)';
            setTimeout(() => {
                sidebar.style.display = 'none';
            }, 300);
        }
    </script>

    <style>
        .sidebar {
            position: fixed;
            top: 0;
            right: 0;
            width: 250px;
            height: 100%;
            background: #ffffff;
            color: white;
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            /* align-items: center; */
            padding-top: 20px;
            z-index: 1000; /* Ensures it appears above other content */
        }

.sidebar a {
    color: white;
    text-decoration: none;
    padding: 5px;
    display: block;

}

.sidebar-links {
    list-style: none;
    padding: 0;
    margin-top: 20%;
    margin-left: 5%;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: -90px;
    background: none;
    border: none;
    color: #171321;
    font-size: 24px;
    cursor: pointer;
}

.menu-btn {
    top: 15px;
    right: 15px;
    background: none;
    border: none;
    font-size: 25px;
    cursor: pointer;
}


    </style>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <button class="close-btn" id="closeSidebar">✖</button>
        <ul class="sidebar-links">
            <li><a href="index">Home</a></li>
            <li>
                <a href="#">Products</a>
                <ul class="sub-menu-mob">
                    <li><a href="blitztrader">BlitTrader</a></li>
                    <li><a href="qxfinlib">QX.FinLib</a></li>
                    <li><a href="qxfixengine">QX.FIXEngine</a></li>
                    <li><a href="qxmarket">QX.Market Data API</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Solutions</a>
                <ul class="sub-menu-mob">
                    <li><a href="/mds">Market Data Solutions</a></li>
                    <li><a href="/algorithmic_trading">Algorithmic Trading</a></li>
                    <li><a href="/HFT">HFT Solutions</a></li>
                </ul>
            </li>
            <li>
                <a href="resources">Resources</a>
                <ul class="sub-menu-mob">
                    <li><a href="/blogs">Blog</a></li>
                    <li><a href="/developers_corner">Developer Corner</a></li>
                </ul>
            </li>
            <li>
                <a href="company">Company</a>
                <ul class="sub-menu-mob">
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="/contact-us">Contact Us</a></li>
                </ul>
            </li>
        </ul>

    </div>
    <div  class="mob_menu">
        <div class="d-flex bd-highlight ">
            <div class="p-2 w-100 bd-highlight">
                <a href="index" <?php echo activePage('index'); ?>>
                    <img src="/assets/img/logo.svg" alt="" class="logo" style="padding:5%;">
                </a>
            </div>
            <div class="p-2 flex-shrink-1 bd-highlight">
                <button class="menu-btn" id="openSidebar" style="color:#7687ff;">☰</button>
            </div>
        </div>
    </div>
<!-- Open Menu Button -->



<script>
    document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const openBtn = document.getElementById("openSidebar");
    const closeBtn = document.getElementById("closeSidebar");

    // Function to open the sidebar
    function showSidebar() {
        sidebar.style.transform = "translateX(0)";
    }

    // Function to close the sidebar
    function closeSidebar() {
        sidebar.style.transform = "translateX(100%)";
    }

    // Attach event listeners
    openBtn.addEventListener("click", showSidebar);
    closeBtn.addEventListener("click", closeSidebar);
});



</script>



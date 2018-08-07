<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home 02</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<!-- header fixed -->
<div class="wrap_header fixed-header2 trans-0-4">
    <!-- Logo -->
    <a href="index.html" class="logo">
        <img src="images/icons/logo.png" alt="IMG-LOGO">
    </a>

    <!-- Menu -->
    <div class="wrap_menu">
        <nav class="menu">
            <ul class="main_menu">
                <li>
                    <a href="index.html">Home</a>
                    <ul class="sub_menu">
                        <li><a href="index.html">Homepage V1</a></li>
                        <li><a href="home-02.html">Homepage V2</a></li>
                        <li><a href="home-03.html">Homepage V3</a></li>
                    </ul>
                </li>

                <li>
                    <a href="product.html">Shop</a>
                </li>

                <li class="sale-noti">
                    <a href="product.html">Sale</a>
                </li>

                <li>
                    <a href="cart.html">Features</a>
                </li>

                <li>
                    <a href="blog.html">Blog</a>
                </li>

                <li>
                    <a href="about.html">About</a>
                </li>

                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>
    </div>

    @include('layouts.nav')
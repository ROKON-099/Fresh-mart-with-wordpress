<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <!-- Logo -->
            <a
                class="navbar-brand site-logo"
                href="<?php echo esc_url(home_url('/')); ?>"
            >
                G3 Architect
            </a>

            <!-- Hamburger -->
            <button
                class="navbar-toggler"
                id="navbarToggler"
                type="button"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div id="mainNavbar">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Contact Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Login
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

</header>
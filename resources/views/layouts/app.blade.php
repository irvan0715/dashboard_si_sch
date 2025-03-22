<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />

</head>

<body>
    <div class="wrapper">
        @include('components.sidebar')
        <div class="main-panel">
            @include('components.topbar')
            <div class="container">
                @yield('content')
            </div>
            @include('components.footer')
        </div>
    </div>

    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    {{-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> --}}

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.js"></script>
    <script src="assets/js/kaiadmin.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navItems = document.querySelectorAll('.nav-item');
            const currentUrl = window.location.href;

            navItems.forEach(item => {
                const link = item.querySelector('a[data-bs-toggle="collapse"]'); // Select the toggle link
                const collapseDiv = item.querySelector('.collapse');
                const subLinks = item.querySelectorAll('.nav-collapse a'); // Select submenu links

                subLinks.forEach(subLink => {
                    const href = subLink.getAttribute('href');
                    const li = subLink.parentElement;

                    if (currentUrl === href) {
                        li.classList.add('active');
                        item.classList.add('active', 'submenu'); // Add classes to parent nav-item
                        if (collapseDiv) {
                            collapseDiv.classList.add('show');
                            if (link) {
                                link.setAttribute('aria-expanded', 'true');
                            }
                        }
                    }
                });

                // Handle the case where the parent nav-item is active but none of the submenu links are.
                if (item.querySelector('.nav-collapse li.active')) {
                    item.classList.add('active', 'submenu');
                    if (collapseDiv) {
                        collapseDiv.classList.add('show');
                        if (link) {
                            link.setAttribute('aria-expanded', 'true');
                        }
                    }

                }

            });
        });
    </script>
</body>

</html>

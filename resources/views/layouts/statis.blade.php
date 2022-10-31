<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E - Vote | @yield('title')</title>

    <link href="/assets/images/UI/Icon/logo-icon-white.svg" rel="shortcut icon" />
    <link rel="stylesheet" href="/assets/css/main/app.css">
    <link rel="stylesheet" href="/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="/assets/css/shared/iconly.css">
    <link rel="stylesheet" href="/assets/extensions/chart.js/Chart.min.css">
    <link rel="stylesheet" href="/assets/extensions/quill/quill.snow.css">
    <link rel="stylesheet" href="/assets/extensions/quill/quill.bubble.css">
    <link rel="stylesheet" href="/assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="/assets/css/pages/simple-datatables.css">

    @stack('addon')

    <script src="https://cdn.tiny.cloud/1/2cj4v0itcxtk8lrl33mvg8hjzuf5idqobtehi3vyo2fpdln5/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '.myeditablediv',
            inline: true,
            menubar: true
        });
    </script>

</head>

<body>
    <div id="app">

        <div id="main">
            @yield('content')

            <footer class="">
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>@2022 Pejuangdaring</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="">Pejuangdaring</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/extensions/chart.js/Chart.min.js"></script>
    <script src="/assets/js/pages/ui-chartjs.js"></script>
    <script src="/assets/extensions/quill/quill.min.js"></script>
    <script src="/assets/js/pages/quill.js"></script>
    <script src="/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="/assets/js/pages/simple-datatables.js"></script>

    <!-- Need: Apexcharts -->
    <script src="/assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>

</body>

</html>

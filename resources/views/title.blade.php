<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Footer -->
    <link href="/css/footers.css" rel="stylesheet">
    <title>Mini Project</title>
    <!-- Nav Bar -->
    <link href="/css/navbar.css" rel="stylesheet">
    <!-- Sign In -->
    <link href="/css/signin.css" rel="stylesheet">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- Header -->
    <link href="/css/headers.css" rel="stylesheet">
    <!-- Modals -->
    <link href="/css/modals.css" rel="stylesheet">
    <!-- Heroes for First Page -->
    <link href="/css/heroes.css" rel="stylesheet">
    <!-- Website Logo -->
    <link rel="shortcut icon" href="/images/icon.png" type="image/x-icon">

    <style>
        a {
            text-decoration: none;
            color: black;
        }

        a .bi-trash:hover {
            text-decoration: none;
            color: red;
        }

        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        }

        @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        @media print {
            .noprint {
                visibility: hidden;
            }
        }

        body {
            background: rgb(232,125,124);
            background: linear-gradient(45deg, rgba(232,125,124,1) 0%, rgba(124,185,232,1) 100%);
            background-size: cover;
        }

        .hidetext {
            -webkit-text-security: disc;
        }
    </style>

</head>
<body>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script>
        function removeFadeOut( el, speed ) {
            var seconds = speed/1000;
            el.style.transition = "opacity "+seconds+"s ease";

            el.style.opacity = 0;
            setTimeout(function() {
                el.parentNode.removeChild(el);
            }, speed);
        }

        function closeFunction() {
            // document.getElementById("message").style.display="none";
            removeFadeOut(document.getElementById('message'), 2000);
        }
    </script>
</body>
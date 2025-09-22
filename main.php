<?php
if (empty($_SESSION['username_warung'])) {
    header('location:login');
}

include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_warung]'");
$hasil = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Laverpool - Aplikasi Pemesanan Makanan dan Minuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Header start -->
    <?php include "header.php" ?>
    <!-- Header End -->

    <div class="container-lg">
        <div class="row">
            <!-- Sidebar Start -->
            <?php include "sidebar.php"; ?>
            <!-- Sidebar End -->

            <!-- Content Start -->
            <?php
            include $page;
            ?>
            <!-- Content End -->
        </div>
        <footer>
            <div class="fixed-bottom text-center bg-light py-2">
                Copyright &copy;Raden Gunawan 2024
            </div>
        </footer>
    </div>

    <!-- Script Start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <!-- Script End -->
</body>

</html>
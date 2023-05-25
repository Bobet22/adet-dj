<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        .software-logo {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>

<body>
    <?php
    session_start();

    // Check if the user is logged in
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        
    } else {
        header('Location: login.php');
    }
    ?>
    <div class="container">
        <h2 class="text-center mt-4">DJ Softwares</h2>
        <div class="text-right">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Software</th>
                    <th>Description</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="software_22118.png" alt="GIMP Logo" class="software-logo"></td>
                    <td>Hello.py</td>
                    <td>HEllo po</td>
                    <td><a href="hello.py" download="" class="btn btn-primary">Download Hello.py</a></td>
                </tr>
                <tr>
                    <td><img src="software_22118.png" alt="GIMP Logo" class="software-logo"></td>
                    <td>RSA.py</td>
                    <td>RSA po</td>
                    <td><a href="RSA.py" download="" class="btn btn-primary">Download RSA.py</a></td>
                </tr>

            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>

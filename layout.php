<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="layout.css"> <!-- Your custom CSS file -->
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
    <header class="bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="home.php">
                    <img src="assets/logo.png" alt="Logo" class="logo" width="150" height="40">
                </a>

                <ul class="navbar-nav mx-auto"> <!-- Use "mx-auto" to center align -->
                    <li class="nav-item">
                        <a class="nav-link" href="deals.php">Deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="courses.php">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fun.php">Fun</a>
                    </li>
                    
                </ul>

                <div class="user-info ml-auto">
                    <?php
                    if ($loggedIn) { // Check if the user is logged in
                        echo '<span class="username text-light">Username</span>';
                        echo '<div class="dropdown">';
                        echo '   <button class="btn btn-link text-light dropdown-toggle" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                        echo '   </button>';
                        echo '   <div class="dropdown-menu" aria-labelledby="userDropdown">';
                        echo '       <a class="dropdown-item" href="my-account.php">My Account</a>';
                        echo '       <a class="dropdown-item" href="my-shop.php">My Shop</a>';
                        echo '       <a class="dropdown-item" href="my-orders.php">Orders</a>';
                        echo '       <a class="dropdown-item" href="logout.php">Logout</a>';
                        echo '   </div>';
                        echo '</div>';
                    } else {
                        echo '<a href="sign-up.php" class="btn btn-light">Sign Up</a>';
                    }
                    ?>
                </div>
            </nav>
        </div>
    </header>

    <div class="main-content container">
        <div class="row">
            <div class="col-md-3 left">
                <ul class="list-group navigation">
                    <li class="list-group-item">
                        <a href="discover.php">Discover</a>
                    </li>
                    <li class="list-group-item">
                        <a href="chat.php">Chat</a>
                    </li>
                    <li class="list-group-item">
                        <a href="community.php">Community</a>
                    </li>
                    <li class="list-group-item">
                        <a href="cart.php">Cart <span id="badge"><?php echo mysqli_num_rows($all_cart);  ?></span></a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9 right">
                <?php include($pageContent); ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Include Font Awesome for icons -->
</body>
</html>

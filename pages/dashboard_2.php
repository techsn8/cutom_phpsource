<?php
session_start();

 $backgroundImage =
   // Default background image
'./images/dashboard.jpg';
// Default condition
    $someCondition = true; 

    // Determine background image based on condition
    if ($someCondition) {
        $backgroundImage =
'./images/dashboard.jpg';
    }

// Check if the user is logged in, if
// not then redirect them to the login page
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/295/295128.png">
    <script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
  content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-image: url('<?php echo $backgroundImage; ?>');
            background-size: cover;
            /* Other CSS properties */
        }
        /* dropdown */
.dropbtn {
  background-color: green;
  /* #04AA6D; */
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a sup {
  color: red;
  /* padding: 12px 16px;
  text-decoration: none;
  display: block; */
}

.dropdown-content a:hover {background-color: #80df94ff;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: green;}
<?php include 'CSS/custom_style.css'; ?>
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-success">
        <div class="container">
             <form class="d-flex my-2 my-lg-0">
                <div class="dropdown">
                    <a class="navbar-brand" href="#" style="font-weight:bold; color:white;">Home-Appliances</a>
                        <div class="dropdown-content">
                    <a href="./product.php">Product <sup>NEW</sup></a>
                    <a href="./smashing_layout.php">Product 1</a>
                    <a href="./school_layout.php">Product 2</a>
                        </div>
                </div>
                <div class="dropdown">
               <a class="navbar-brand" href="#" style="font-weight:bold; color:white;">Sports & Books</a>
                <a class="navbar-brand" href="#" style="font-weight:bold; color:white;">Flights</a>
                 <a class="navbar-brand" href="#" style="font-weight:bold; color:white;">Contacts</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="dropdown" id="collapsibleNavId">
                <ul class="navbar-nav m-auto mt-2 mt-lg-0">
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <a href="./logout.php" class="btn btn-light my-2 my-sm-0"
                      type="submit" style="font-weight:bolder;color:green;">
                        logout</a>
                </form>
            </div>
            </div>
        </div>
    </nav>

    <div>
        <h2 class="p-4 mt-5">Welcome To Custom Dashboard</h2>
    </div>
    <footer>
		<p>&copy; 2025 cutom Portal</p>
	</footer>
</body>

</html>
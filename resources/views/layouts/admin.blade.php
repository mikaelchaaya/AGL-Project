<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="navbar.css" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Wash Time</title>
    <style>
        @charset "utf-8";
        /* CSS Document */

        body {
            font-family: "Lato", sans-serif;
        }

        .abc{
            margin-left: 200px;
        }
        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a, .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }

        .sidenav a:hover, .dropdown-btn:hover {
            color: #f1f1f1;
        }


        .main {
            margin-left: 200px;
            font-size: 20px;
            padding: 0px 10px;
        }


        .active {
            background-color: green;
            color: white;
        }


        .dropdown-container {
            display: none;
            background-color: #262626;
            padding-left: 8px;
        }


        .fa-caret-down {
            float: right;
            padding-right: 8px;
        }


        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }


    </style>
</head>

<body>

<div class="sidenav " >
    <a href="./home">Home</a>

    <button class="dropdown-btn">Users
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/AdminViewAllUsers">View all users</a>
        <a href="/AdminCreateUser">Create new user</a>

    </div>
    <button class="dropdown-btn">Washes
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/AdminViewAllWashes">View all washes</a>

    </div>
    <button class="dropdown-btn">Feedbacks
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/AdminViewAllFeedbacks">View all feedbacks</a>

    </div>
    <a href="/logoutAdmin">Logout</a>



</div>
<main class="abc">
    @yield('content')
</main>

</body>

<script>

    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>
</html>



<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="color: rgb(118, 250, 114);">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.html"><img height="60px" src="logo_gif.gif"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div style="padding: 0 auto 0;" class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a style="margin: 0 10px 0; font-weight: 600;" class="nav-link active" aria-current="page" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a style="margin: 0 10px 0; font-weight: 600;" class="nav-link" href="buy.php">Buy Equipments</a>
                </li>
                <li class="nav-item">
                    <a style="margin: 0 10px 0; font-weight: 600;" class="nav-link" href="sell.php">Sell Equipments</a>
                </li>
                <li class="nav-item">
                    <a style="margin: 0 10px 0; font-weight: 600;" class="nav-link" href="findplayer.php">Find Players/Coaches</a>
                </li>
                <li class="nav-item">
                    <a style="margin: 0 10px 0; font-weight: 600;" class="nav-link" href="about.php">About Us</a>
                </li>
                <?php if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != 1) {
                    // echo $_SESSION['loggedIn'];
                    echo '
                    <li>
                    <a class="btn btn-primary mt-1 mx-1" href="login.php">Log In</a>
                    </li>
                   <li>
                   <a class="btn btn-success mt-1 mx-1" href="signup.php">Sign Up</a>
                    </li>';
                } else {
                    echo '
                    <li>
                    <a href="./logout.php" class="btn btn-danger mt-1 mx-1">Logout</a>
                    </li> ';
                }
                ?>


            </ul>
        </div>
    </div>
</nav>
<style>
    div a img {
        opacity: 0;
    }
    div.container-fluid a img{
        opacity: 1;
    }
</style>


<script>
   
    window.onload = ()=>{
         const a = document.querySelectorAll("div a img");
        a[1].style.display = "none";
    }
</script>
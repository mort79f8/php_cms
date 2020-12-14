<?php
session_start();
?>

<header>

    <div class="navbar">
        <nav>
            <ul>
                <li>
                    <a href="./index.php">Home</a>
                </li>
                <li>
                    <a href="#">Shop</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
            </ul>
        </nav>
        <div class="nav-right">
            <div>
                <?php
                if (isset($_SESSION['userfirstname'])) { ?>
                    <ul>
                        <li style="color: white;">
                            <?php echo $_SESSION['userfirstname'] ?>
                        </li>
                        <li>
                            <a href="includes/logout.php" id="logout">Logout</a>
                        </li>
                    </ul>
                <?php } elseif (isset($_SESSION["pass_error"])) {
                ?>
                    <ul>
                        <li style="color: red;">
                            <p>Wrong password</p>
                        </li>
                        <li>
                            <a href="#" id="login">Login</a>
                        </li>
                    </ul>
                <?php } else { ?>
                    <ul>
                        <li>
                            <a href="#" id="login">Login</a>
                        </li>
                    </ul>
                <?php } ?>
                <div class="userform-holder hidden">
                    <form class="userform" action="includes/login.php" method="POST">
                        <label for="username">Bruger navn</label>
                        <input type="text" id="username" name="username" placeholder="Bruger navn">
                        <label for="userpass">Kodeord</label>
                        <input type="password" id="userpass" name="userpass" placeholder="Kodeord">
                        <input class="" type="submit" value="Login">
                    </form>
                </div>
            </div>
            <form class="form-search" action="action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="bg">
        <div class="product-lastest">
            <h1>Latest products</h1>
            <div class="images">
                <?php include_once './includes/getLatest.php' ?>
            </div>
        </div>

    </div>
</header>
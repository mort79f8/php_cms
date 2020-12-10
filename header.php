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
                <ul>
                    <li>
                        <a href="#">Login</a>
                    </li>
                </ul>
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
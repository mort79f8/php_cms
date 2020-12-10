<!-- index.html is temp name, until we start using php then we will rename it to index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the Otaku Shop the one stop shop for anime series and movies.">
    <title>Otaku Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php
    include_once './header.php';
    ?>

    <section>
        <?php
        include_once './includes/getArticles.php';
        ?>
        <!-- <article>
            <h2>Iwakakeru -Sport Climbing Girls</h2>
            <img src="./img/04d6e612172326ee0446efdf7aa06cf71601693621_full.jpg" alt="Iwakakeru -Sport Climbing Girls">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, quia, quidem eos asperiores, tempora
                voluptatibus aliquid nesciunt at excepturi aut dolorem ex facere nisi. Recusandae architecto sunt
                quaerat ea ratione.</p>
            <p><span>Price:</span> 50$</p>
            <p class="tags">Tags: Sport</p>
            <div class="article-footer">
                <div>
                    <p>Added by: Smoketrail</p>
                    <p>Date: 04-12-2020</p>
                </div>
                <button>Buy</button>
            </div>
        </article>
        <article>
            <h2>Noblesse</h2>
            <img src="./img/0ed5852794fe3e504e5f8ff028f28ce31601933917_full.jpg" alt="Noblesse">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, quia, quidem eos asperiores, tempora
                voluptatibus aliquid nesciunt at excepturi aut dolorem ex facere nisi. Recusandae architecto sunt
                quaerat ea ratione.</p>
            <p><span>Price:</span> 50$</p>
            <p class="tags">Tags: action, supernatural</p>
            <div class="article-footer">
                <div>
                    <p>Added by: Smoketrail</p>
                    <p>Date: 04-12-2020</p>
                </div>
                <button>Buy</button>
            </div>
        </article>
        <article>
            <h2>Black Clover</h2>
            <img src="./img/1a39d39cbe3346cce5e44577cbb895041579741401_full.jpg" alt="Black Clover">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, quia, quidem eos asperiores, tempora
                voluptatibus aliquid nesciunt at excepturi aut dolorem ex facere nisi. Recusandae architecto sunt
                quaerat ea ratione.</p>
            <p><span>Price:</span> 50$</p>
            <p class="tags">Tags: shounen, magic, fantasy, adventure, action, shonen, comedy, manga</p>
            <div class="article-footer">
                <div>
                    <p>Added by: Smoketrail</p>
                    <p>Date: 04-12-2020</p>
                </div>
                <button>Buy</button>
            </div>
        </article>
        <article>
            <h2>I'm standing on a million lives</h2>
            <img src="./img/2e4a0cdbe01f971f421426a83cdb0a2f1601618251_full.jpg" alt="I'm standing on a million lives">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, quia, quidem eos asperiores, tempora
                voluptatibus aliquid nesciunt at excepturi aut dolorem ex facere nisi. Recusandae architecto sunt
                quaerat ea ratione.</p>
            <p><span>Price:</span> 50$</p>
            <p class="tags">Tags: isekai, action, fantasy</p>
            <div class="article-footer">
                <div>
                    <p>Added by: Smoketrail</p>
                    <p>Date: 04-12-2020</p>
                </div>
                <button>Buy</button>
            </div>
        </article>
        <article>
            <h2>Strike Witches - Road to Berlin</h2>
            <img src="./img/7a47288d46971db4f170e560885f95901603123467_full.jpg" alt="Strike Witches - Road to Berlin">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, quia, quidem eos asperiores, tempora
                voluptatibus aliquid nesciunt at excepturi aut dolorem ex facere nisi. Recusandae architecto sunt
                quaerat ea ratione.</p>
            <p><span>Price:</span> 50$</p>
            <p class="tags">Tags: ecchi, action</p>
            <div class="article-footer">
                <div>
                    <p>Added by: Smoketrail</p>
                    <p>Date: 04-12-2020</p>
                </div>
                <button>Buy</button>
            </div>
        </article>
        <article>
            <h2>Jujusu Kaisen</h2>
            <img src="./img/85bff91a3d0bfdf40f279392677ae7081603999766_full.jpg" alt="Jujusu Kaisen">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, quia, quidem eos asperiores, tempora
                voluptatibus aliquid nesciunt at excepturi aut dolorem ex facere nisi. Recusandae architecto sunt
                quaerat ea ratione.</p>
            <p><span>Price:</span> 50$</p>
            <p class="tags">Tags: action, supernatual, shonen</p>
            <div class="article-footer">
                <div>
                    <p>Added by: Smoketrail</p>
                    <p>Date: 04-12-2020</p>
                </div>
                <button>Buy</button>
            </div>
        </article>
        <article>
            <h2>Fire Force season 2</h2>
            <img src="./img/aab5d51e5e199851554d3910b2ecdff21594706748_full.jpg" alt="Fire Force season 2">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, quia, quidem eos asperiores, tempora
                voluptatibus aliquid nesciunt at excepturi aut dolorem ex facere nisi. Recusandae architecto sunt
                quaerat ea ratione.</p>
            <p><span>Price:</span> 50$</p>
            <p class="tags">Tags: action, shonen, supernatural, fire fighting, fantasy</p>
            <div class="article-footer">
                <div>
                    <p>Added by: Smoketrail</p>
                    <p>Date: 04-12-2020</p>
                </div>
                <button>Buy</button>
            </div>
        </article>
        <article>
            <h2>Is the order a rabbit season 2</h2>
            <img src="./img/eb7240c98ed971b547c24d00c6753dfa1502320432_full.jpg" alt="Is the order a rabbit season 2">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, quia, quidem eos asperiores, tempora
                voluptatibus aliquid nesciunt at excepturi aut dolorem ex facere nisi. Recusandae architecto sunt
                quaerat ea ratione.</p>
            <p><span>Price:</span> 50$</p>
            <p class="tags">Tags: moe, slice of life, comedy, koi, manga, yuri</p>
            <div class="article-footer">
                <div>
                    <p>Added by: Smoketrail</p>
                    <p>Date: 04-12-2020</p>
                </div>
                <button>Buy</button>
            </div>
        </article> -->
    </section>

    <?php
    include_once 'productform.php';
    ?>

    <?php
    include_once './footer.php';
    ?>
    <script src="./js/script.js"></script>
</body>

</html>
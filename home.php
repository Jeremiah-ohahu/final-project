
<?php
// Get the 9 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 9');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!-- Page header -->
<?=page_header('Discoverize')?>

<!-- home section starts  -->
<section class="home" id="home">

    <div class="content">
        <h3> Discover Quality and <span>Affordable</span> Fashion products just for you </h3>
        <p>We discover New fashion trend and We also give you nothing but just the best when it comes to delivering quality products to our esteemed customers.</p>
        <a href="#products" class="btn">start shopping</a>
    </div>
</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features sec" id="features">
    <h1 class="heading"> why <span>choose us</span> </h1>

    <div class="box-container">

        <div class="box reveal">
            <img src="image/feature-img-1.png" alt="" loading="lazy">
            <h3>Discover quality products</h3>
            <p>Quality products just for you, do check us out here</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box reveal">
            <img src="image/feature-img-2.png" alt="" loading="lazy">
            <h3>free delivery</h3>
            <p>You buy, we deliver it to your doorstep with no extra charges</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box reveal">
            <img src="image/feature-img-3.png" alt="" loading="lazy">
            <h3>easy payments</h3>
            <p>Our payment methods are easy with no stress, give it a try </p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->

<!---go to home section-->

<!-- products section starts  -->

<section class="products sec" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider swiper1">

        <div class="swiper-wrapper">

             <?php foreach ($recently_added_products as $product): ?>
                <div class="swiper-slide box reveal">
                <a href="index.php?page=product&id=<?=$product['id']?>">
                    <img src="image/<?=$product['img']?>" alt="<?=$product['name']?>" loading="lazy">
                    <h3><?=$product['name']?></h3>
                   <div class="price">&#8358;<?=$product['price']?>/-</div>
                   <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>(455)
                </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

       <!-- If we need pagination -->
       <div class="swiper-pagination"></div>
    </div>

</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories sec" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box reveal">
            <img src="image/item.jpeg" alt="" loading="lazy">

            <h3>Shirts</h3>
            <p>25% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box reveal">
            <img src="image/product-02.jpeg" alt="" loading="lazy">
            <h3>Trousers</h3>
            <p>40% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box reveal">
            <img src="image/thumb-03.jpeg" alt="" loading="lazy">
            <h3>Bags and shoes</h3>
            <p>20% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box reveal">
            <img src="image/women.jpg" alt="" loading="lazy">
            <h3>Female wears</h3>
            <p>35% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- categories section ends -->

<!-- review section starts  -->

<section class="review sec" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box reveal">
                <img src="image/badge.jpg" alt="" loading="lazy">
                <p>I love shopping with Discoverize. </p>
                <h3>ohahu Emmanuel</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box reveal">
                <img src="image/badge.jpg" alt="" loading="lazy">
                <p>You guys deserves a five star.</p>
                <h3>Akane bright</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide box reveal">
                <img src="image/badge.jpg" alt="" loading="lazy">
                <p>I love discoverize.</p>
                <h3>wisdom ajifor</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box reveal">
                <img src="image/badge.jpg" alt="" loading="lazy">
                <p>You guys are amazing keep it up.</p>
                <h3>Ademola Emmanuel</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

         </div>

          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs sec" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box reveal">
            <img src="image/loo.jpeg" alt="" loading="lazy">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by Emmanuel</a>
                    <a href="#"> <i class="fas fa-clock"></i> 1<sup>st</sup> oct. 2023 </a>
                </div>
                <h3>best E-commerce plartforms
                </h3>
                <p>i love discoverise because i dont need to stree myself about fashion.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box reveal">
            <img src="image/mer.jpg" alt="" loading="lazy">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by George </a>
                    <a href="#"> <i class="fas fa-clock"></i> 25<sup>th</sup> jan. 2022 </a>
                </div>
                <h3>best Shopping offers</h3>
                <p>i love discoverize because they discover new fashion items .</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box reveal">
            <img src="image/banner-b.jpg" alt="" loading="lazy">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by Sarah </a>
                    <a href="#"> <i class="fas fa-clock"></i> 3<sup>rd</sup> may. 2023 </a>
                </div>
                <h3>Packages</h3>
                <p>i somuch love discoverize because there are always there for me.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>
</section>

<!-- blogs section ends -->


<!-- footer section starts  -->
<?=page_footer()?>
<main class="container">
    <section class="deals">
        <h1>Deals</h1>
        <p>Explore a variety of deals and listings from local businesses and sellers.</p>

        <!-- Product Listings -->
        <div class="product-listings">
            <h2>Products</h2>
            <div class="row">
                <?php
                // Example data for products
                $products = [
                    [
                        'image' => 'product-image.jpg',
                        'title' => 'Product Title',
                        'description' => 'Product Description',
                        'price' => '$XX.XX',
                        'rating' => 'X.X',
                    ],
                    // Add more product data here
                ];

                foreach ($products as $product) {
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                            <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['title']; ?></h5>
                                <p class="card-text"><?php echo $product['description']; ?></p>
                                <p class="card-text">Price: <?php echo $product['price']; ?></p>
                                <p class="card-text">Rating: <?php echo $product['rating']; ?></p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <!-- Business Listings -->
        <div class="business-listings">
            <h2>Local Businesses</h2>
            <div class="row">
                <?php
                // Example data for local businesses
                $businesses = [
                    [
                        'name' => 'Business Name',
                        'description' => 'Description of the business',
                        'location' => 'Location: City, State',
                    ],
                    // Add more business data here
                ];

                foreach ($businesses as $business) {
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $business['name']; ?></h5>
                                <p class="card-text"><?php echo $business['description']; ?></p>
                                <p class="card-text"><?php echo $business['location']; ?></p>
                                <a href="#" class="btn btn-primary">View Business</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- Dropship Products -->
        <div class="dropship-listings">
            <h2>Dropship Products</h2>
            <div class="row">
                <?php
                // Example data for dropship products
                $dropshipProducts = [
                    [
                        'image' => 'product-image.jpg',
                        'title' => 'Product Title',
                        'description' => 'Product Description',
                        'price' => '$XX.XX',
                        'rating' => 'X.X',
                    ],
                    // Add more dropship product data here
                ];

                foreach ($dropshipProducts as $product) {
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                            <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['title']; ?></h5>
                                <p class="card-text"><?php echo $product['description']; ?></p>
                                <p class="card-text">Price: <?php echo $product['price']; ?></p>
                                <p class="card-text">Rating: <?php echo $product['rating']; ?></p>
                                <!-- Add a "View Details" or "Buy Now" button here -->
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <!-- Digital Products -->
        <div class="digital-listings">
            <h2>Digital Products</h2>
            <div class="row">
                <?php
                // Example data for digital products
                $digitalProducts = [
                    [
                        'image' => 'product-image.jpg',
                        'title' => 'Product Title',
                        'description' => 'Product Description',
                        'price' => '$XX.XX',
                        'rating' => 'X.X',
                    ],
                    // Add more digital product data here
                ];

                foreach ($digitalProducts as $product) {
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                            <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['title']; ?></h5>
                                <p class="card-text"><?php echo $product['description']; ?></p>
                                <p class="card-text">Price: <?php echo $product['price']; ?></p>
                                <p class="card-text">Rating: <?php echo $product['rating']; ?></p>
                                <!-- Add a "View Details" or "Buy Now" button here -->
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <!-- Services Listings -->
        <div class="services-listings">
            <h2>Services</h2>
            <div class="row">
                <?php
                // Example data for services
                $services = [
                    [
                        'provider' => 'Service Provider Name',
                        'description' => 'Description of the service',
                        'location' => 'Location: City, State',
                    ],
                    // Add more service data here
                ];

                foreach ($services as $service) {
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $service['provider']; ?></h5>
                                <p class="card-text"><?php echo $service['description']; ?></p>
                                <p class="card-text"><?php echo $service['location']; ?></p>
                                <a href="#" class="btn btn-primary">View Service</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>


        <!-- Repeat the same structure for other sections -->
    </section>
</main>

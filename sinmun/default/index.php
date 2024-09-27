<?php require_once "../../includes/header.php" ?>

<header class="header-area">
    <?php require_once "../../includes/topheader.php" ?>

    <?php include "../../includes/navbar.php" ?>
    <div class="breaking-news">
        <div class="container">
            <div class="breaking-news-content clearfix">
                <h6 class="breaking-title"><i class="icofont-flash"></i> Breaking News:</h6>
                <div class="breaking-news-slides owl-carousel owl-theme">
                    <?php $result = $datcon->query("SELECT * FROM post LIMIT 5 ");
                    if ($result->num_rows > 0) {
                        while ($unzip = $result->fetch_assoc()) {
                    ?>
                            <div class="single-breaking-news">
                                <p><a href="post-category-1.html"><?= $unzip['name'] ?></a></p>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ******************************************************************************************************************** -->



<section class="default-news-area ptb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <?php $result = $datcon->query("SELECT category,`name`,`description`,`image`,created_at FROM post WHERE `status` = 'publish' ORDER BY RAND() LIMIT 1 ");
                if ($result->num_rows > 0) {
                    while ($unzip = $result->fetch_assoc()) {
                ?>
                        <div class="single-default-news">
                            <img src="assets/img/1.jpg" src="../../../Chi-DevByt/uploads/post/<>" alt="image">
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-2.html"><?= $unzip['name'] ?></a></h3>
                            </div>
                            <div class="tags"><a href="post-category-1.html"><?= $unzip['category'] ?></a></div>
                        </div>

                <?php
                    }
                }
                ?>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-default-inner-news">
                            <div class="news-image"><img src="assets/img/2.jpg" alt="image"></div>
                            <div class="news-content">
                                <h3>Cloud Infrastructure: is Hosting Review</h3>
                                <span><i class="icofont-calendar"></i> March 22, 2024</span>
                            </div>
                            <a href="post-category-3.html" class="link-overlay"></a>
                            <div class="tags bg-2"><a href="post-category-2.html">Sports</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-default-inner-news">
                            <div class="news-image"><img src="assets/img/3.jpg" alt="image"></div>
                            <div class="news-content">
                                <h3>How to Customize your PHP Footer</h3>
                                <span><i class="icofont-calendar"></i> March 22, 2024</span>
                            </div>
                            <a href="post-category-3.html" class="link-overlay"></a>
                            <div class="tags bg-3"><a href="post-category-2.html">Sports</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="small-image-ads text-center">
                    <a href="single-post-2.html"><img src="assets/img/1-ads.png" alt="image"></a>
                </div>
                <div class="single-default-inner-news">
                    <div class="news-image"><img src="assets/img/4.jpg" alt="image"></div>
                    <div class="news-content">
                        <h3>Banning Winter Holiy As Islands Offers</h3>
                        <span><i class="icofont-calendar"></i> March 22, 2024</span>
                    </div>
                    <a href="post-category-3.html" class="link-overlay"></a>
                    <div class="tags bg-4"><a href="post-category-4.html">Sports</a></div>
                </div>
                <div class="single-default-inner-news">
                    <div class="news-image"><img src="assets/img/5.jpg" alt="image"></div>
                    <div class="news-content">
                        <h3>Gloost Better They Are With A Featured</h3>
                        <span><i class="icofont-calendar"></i> March 22, 2024</span>
                    </div>
                    <a href="post-category-3.html" class="link-overlay"></a>
                    <div class="tags bg-5"><a href="post-category-3.html">Sports</a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="default-video-news">
                    <h3 class="title">Video</h3>
                    <div class="single-video-news">
                        <div class="image">
                            <img src="assets/img/video-1.jpg" alt="image"> <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i class="icofont-video-cam"></i></a>
                        </div>
                        <div class="content">
                            <h3><a href="single-post-3.html">Gloost Better They Are With A Featured</a></h3>
                        </div>
                    </div>
                    <div class="single-video-news">
                        <div class="image">
                            <img src="assets/img/video-2.jpg" alt="image"> <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i class="icofont-video-cam"></i></a>
                        </div>
                        <div class="content">
                            <h3><a href="single-post-2.html">Differences between User Experience Interface</a></h3>
                        </div>
                    </div>
                    <div class="single-video-news">
                        <div class="image">
                            <img src="assets/img/video-3.jpg" alt="image"> <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i class="icofont-video-cam"></i></a>
                        </div>
                        <div class="content">
                            <h3><a href="single-post-4.html">A Guide to Avoiding Web Design Mistakes</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- ******************************************************************************************************************** -->
<section class="popular-news-area ptb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="popular-section-ads">
                    <a href="single-post-2.html"><img src="assets/img/2-ads.png" alt="image"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="section-title">
                    <h2>Most Popular</h2>
                </div>
                <div class="row">
                    <div class="popular-news-slides owl-carousel owl-theme">
                        <div class="col-lg-12 col-md-12">
                            <div class="single-popular-news">
                                <div class="news-image"><img src="assets/img/6.jpg" alt="image"></div>
                                <div class="news-content">
                                    <h3>Create the Perfect Logo for your Website</h3>
                                    <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                </div>
                                <a href="post-category-3.html" class="link-overlay"></a>
                                <div class="tags bg-2"><a href="post-category-2.html">Sports</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-popular-news">
                                <div class="news-image"><img src="assets/img/7.jpg" alt="image"></div>
                                <div class="news-content">
                                    <h3>Take the Tour to Explore the New Header Manager</h3>
                                    <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                </div>
                                <a href="post-category-3.html" class="link-overlay"></a>
                                <div class="tags bg-5"><a href="post-category-3.html">Sports</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-popular-news">
                                <div class="news-image"><img src="assets/img/8.jpg" alt="image"></div>
                                <div class="news-content">
                                    <h3>Sinmun theme is part of the big WPML family</h3>
                                    <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                </div>
                                <a href="post-category-3.html" class="link-overlay"></a>
                                <div class="tags bg-3"><a href="post-category-2.html">Sports</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-popular-news">
                                <div class="news-image"><img src="assets/img/1.jpg" alt="image"></div>
                                <div class="news-content">
                                    <h3>Copy – Paste the Style of your elements in Newspaper</h3>
                                    <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                </div>
                                <a href="post-category-3.html" class="link-overlay"></a>
                                <div class="tags bg-4"><a href="post-category-4.html">Sports</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="international-news-area pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="section-title">
                    <h2>International</h2>
                </div>
                <div class="international-news-inner">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-international-news">
                                <div class="news-image"><img src="assets/img/6.jpg" alt="image"></div>
                                <div class="news-content">
                                    <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                    <h3><a href="single-post-3.html">Gloost Better They Are With A Featured</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="international-news-list">
                                <div class="media news-media align-items-center">
                                    <a href="single-post-3.html"> <img src="assets/img/small-1.jpg" alt="image"> </a>
                                    <div class="content">
                                        <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                        <h3><a href="single-post-1.html">Introducing the New 404 Page Templates</a></h3>
                                    </div>
                                </div>
                                <div class="media news-media align-items-center">
                                    <a href="single-post-2.html"> <img src="assets/img/small-2.jpg" alt="image"> </a>
                                    <div class="content">
                                        <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                        <h3><a href="single-post-2.html">Newspaper Theme: What’s new in v.9</a></h3>
                                    </div>
                                </div>
                                <div class="media news-media align-items-center">
                                    <a href="single-post-3.html"> <img src="assets/img/small-3.jpg" alt="image"> </a>
                                    <div class="content">
                                        <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                        <h3><a href="single-post-4.html">Tricks to Boost your WordPress Site’s Traffic</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="section-title">
                    <h2>Stay Connected</h2>
                </div>
                <ul class="stay-connected">
                    <li>
                        <a href="https://www.facebook.com/login/" target="_blank"><i class="icofont-facebook"></i><b>10.2K</b> <span>Fans</span></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/login/" target="_blank"><i class="icofont-twitter"></i><b>14.2K</b> <span>Followers</span></a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/login/" target="_blank"><i class="icofont-linkedin"></i><b>11.2K</b> <span>Fans</span></a>
                    </li>
                    <li>
                        <a href="https://en.wikipedia.org/wiki/RSS" target="_blank"><i class="icofont-rss"></i><b>15.2K</b> <span>Subscriber</span></a>
                    </li>
                </ul>
                <div class="stay-connected-ads">
                    <a href="post-category-3.html"><img src="assets/img/3-ads.png" alt="image"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hot-news-area pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="health-lifestyle-news">
                            <div class="section-title">
                                <h2>Health & Lifestyle</h2>
                            </div>
                            <div class="health-lifestyle-news-slides owl-carousel owl-theme">
                                <div class="single-health-lifestyle-news">
                                    <div class="news-image">
                                        <a href="single-post-3.html"><img src="assets/img/8.jpg" alt="image"></a>
                                    </div>
                                    <div class="news-content">
                                        <ul>
                                            <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                            <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                        </ul>
                                        <h3><a href="single-post-1.html">Disabled People Must Be Front And Centre On TV</a></h3>
                                        <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                    </div>
                                </div>
                                <div class="single-health-lifestyle-news">
                                    <div class="news-image">
                                        <a href="single-post-3.html"><img src="assets/img/7.jpg" alt="image"></a>
                                    </div>
                                    <div class="news-content">
                                        <ul>
                                            <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                            <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                        </ul>
                                        <h3><a href="single-post-1.html">Disabled People Must Be Front And Centre On TV</a></h3>
                                        <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                    </div>
                                </div>
                                <div class="single-health-lifestyle-news">
                                    <div class="news-image">
                                        <a href="single-post-4.html"><img src="assets/img/6.jpg" alt="image"></a>
                                    </div>
                                    <div class="news-content">
                                        <ul>
                                            <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                            <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                        </ul>
                                        <h3><a href="single-post-1.html">Disabled People Must Be Front And Centre On TV</a></h3>
                                        <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="politics-news">
                            <div class="section-title">
                                <h2>Politics</h2>
                            </div>
                            <div class="politics-news-slides owl-carousel owl-theme">
                                <div class="single-politics-news">
                                    <div class="news-image">
                                        <a href="single-post-4.html"><img src="assets/img/6.jpg" alt="image"></a>
                                    </div>
                                    <div class="news-content">
                                        <ul>
                                            <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                            <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                        </ul>
                                        <h3><a href="single-post-2.html">The New-Style GCSEs Show Why Politicians.</a></h3>
                                        <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                    </div>
                                </div>
                                <div class="single-politics-news">
                                    <div class="news-image">
                                        <a href="single-post-3.html"><img src="assets/img/7.jpg" alt="image"></a>
                                    </div>
                                    <div class="news-content">
                                        <ul>
                                            <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                            <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                        </ul>
                                        <h3><a href="single-post-1.html">Disabled People Must Be Front And Centre On TV</a></h3>
                                        <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                    </div>
                                </div>
                                <div class="single-politics-news">
                                    <div class="news-image">
                                        <a href="single-post-3.html"><img src="assets/img/8.jpg" alt="image"></a>
                                    </div>
                                    <div class="news-content">
                                        <ul>
                                            <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                            <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                        </ul>
                                        <h3><a href="single-post-1.html">Disabled People Must Be Front And Centre On TV</a></h3>
                                        <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="around-the-world-news pt-40">
                            <div class="section-title">
                                <h2>Around The World</h2>
                                <a href="single-post-1.html" class="view-more">View More <i class="icofont-rounded-double-right"></i></a>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-around-the-world-news">
                                        <div class="news-image">
                                            <a href="single-post-2.html"><img src="assets/img/1.jpg" alt="image"></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                            </ul>
                                            <h3><a href="single-post-2.html">The New-Style GCSEs Show Why Politicians.</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-around-the-world-news">
                                        <div class="news-image">
                                            <a href="single-post-3.html"><img src="assets/img/2.jpg" alt="image"></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2024</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="single-post-1.html">50</a></li>
                                            </ul>
                                            <h3><a href="single-post-1.html">Disabled People Must Be Front And Centre On TV</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="media around-the-world-news-media align-items-center">
                                        <a href="single-post-3.html"> <img src="assets/img/small-1.jpg" alt="image"> </a>
                                        <div class="content">
                                            <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                            <h3><a href="single-post-3.html">Gloost Better They Are With A Featured</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="media around-the-world-news-media align-items-center">
                                        <a href="single-post-2.html"> <img src="assets/img/small-2.jpg" alt="image"> </a>
                                        <div class="content">
                                            <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                            <h3><a href="single-post-3.html">Happy Newspaper Day: 50,000+ Delighted Customers!</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="media around-the-world-news-media align-items-center">
                                        <a href="single-post-3.html"> <img src="assets/img/small-3.jpg" alt="image"> </a>
                                        <div class="content">
                                            <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                            <h3><a href="single-post-2.html">Newspaper 8.5. – Discover Landing Page Elements</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="media around-the-world-news-media align-items-center">
                                        <a href="single-post-2.html"> <img src="assets/img/small-4.jpg" alt="image"> </a>
                                        <div class="content">
                                            <span><i class="icofont-calendar"></i> March 22, 2024</span>
                                            <h3><a href="single-post-1.html">New in Newspaper: Social Network Buttons</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="featured-news">
                    <div class="section-title">
                        <h2>Featured News</h2>
                    </div>
                    <div class="single-featured-news">
                        <img src="assets/img/1.jpg" alt="image">
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                <li><i class="icofont-calendar"></i> March 22, 2024</li>
                            </ul>
                            <h3><a href="post-category-2.html">As well as stopping goals, Cristiane Endler is opening doors</a></h3>
                        </div>
                        <div class="tags"><a href="post-category-1.html">Sports</a></div>
                    </div>
                    <div class="single-featured-news">
                        <img src="assets/img/2.jpg" alt="image">
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                <li><i class="icofont-calendar"></i> March 22, 2024</li>
                            </ul>
                            <h3><a href="post-category-3.html">You’ve got mail! All about the tagDiv Newsletter plugin</a></h3>
                        </div>
                        <div class="tags bg-2"><a href="post-category-2.html">Sports</a></div>
                    </div>
                    <div class="single-featured-news">
                        <img src="assets/img/3.jpg" alt="image">
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                <li><i class="icofont-calendar"></i> March 22, 2024</li>
                            </ul>
                            <h3><a href="post-category-3.html">Newspaper Theme: Enhance Your Pages with the Row Divider</a></h3>
                        </div>
                        <div class="tags bg-3"><a href="post-category-2.html">Sports</a></div>
                    </div>
                </div>
                <div class="newsletter-box">
                    <div class="section-title">
                        <h2>Newsletter</h2>
                    </div>
                    <div class="newsletter-box-inner">
                        <h3>Subscribe To Our Mailing List To Get The New Updates!</h3>
                        <i class="icofont-email"></i>
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="newsletter-input" placeholder="Enter your email" name="EMAIL" required="" autocomplete="off"> <button type="submit"><i class="icofont-paper-plane"></i></button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
                <div class="hot-news-ads">
                    <a href="post-category-4.html"><img src="assets/img/4-ads.png" alt="image"></a>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="hot-news-ads2">
                    <a href="post-category-3.html"><img src="assets/img/5-ads.png" alt="image"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="all-news-area ptb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="fashion-news">
                    <div class="section-title">
                        <h2>Fashion</h2>
                    </div>
                    <div class="single-fashion-news">
                        <img src="assets/img/1.jpg" alt="image">
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                <li><i class="icofont-calendar"></i> March 22, 2024</li>
                            </ul>
                            <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                        </div>
                    </div>
                    <div class="fashion-inner-news">
                        <div class="single-fashion-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                        <div class="single-fashion-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                        <div class="single-fashion-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="food-news">
                    <div class="section-title">
                        <h2>Food & Hobbbies</h2>
                    </div>
                    <div class="single-food-news">
                        <img src="assets/img/2.jpg" alt="image">
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                <li><i class="icofont-calendar"></i> March 22, 2024</li>
                            </ul>
                            <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                        </div>
                    </div>
                    <div class="food-inner-news">
                        <div class="single-food-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                        <div class="single-food-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                        <div class="single-food-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="north-america-news">
                    <div class="section-title">
                        <h2>North America</h2>
                    </div>
                    <div class="single-north-america-news">
                        <img src="assets/img/3.jpg" alt="image">
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                <li><i class="icofont-calendar"></i> March 22, 2024</li>
                            </ul>
                            <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                        </div>
                    </div>
                    <div class="north-america-inner-news">
                        <div class="single-north-america-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                        <div class="single-north-america-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                        <div class="single-north-america-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="economics-news">
                    <div class="section-title">
                        <h2>Economics</h2>
                    </div>
                    <div class="single-fashion-news">
                        <img src="assets/img/4.jpg" alt="image">
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                <li><i class="icofont-calendar"></i> March 22, 2024</li>
                            </ul>
                            <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                        </div>
                    </div>
                    <div class="fashion-inner-news">
                        <div class="single-fashion-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                        <div class="single-fashion-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                        <div class="single-fashion-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="science-technology-news">
                    <div class="section-title">
                        <h2>Science and Technology</h2>
                    </div>
                    <div class="single-food-news">
                        <img src="assets/img/5.jpg" alt="image">
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                <li><i class="icofont-calendar"></i> March 22, 2024</li>
                            </ul>
                            <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                        </div>
                    </div>
                    <div class="food-inner-news">
                        <div class="single-food-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                        <div class="single-food-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                        <div class="single-food-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="living-life-news">
                    <div class="section-title">
                        <h2>Living Life</h2>
                    </div>
                    <div class="single-north-america-news">
                        <img src="assets/img/6.jpg" alt="image">
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                <li><i class="icofont-calendar"></i> March 22, 2024</li>
                            </ul>
                            <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                        </div>
                    </div>
                    <div class="north-america-inner-news">
                        <div class="single-north-america-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                        <div class="single-north-america-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                        <div class="single-north-america-inner-news">
                            <span><i class="icofont-calendar"></i> March 10, 2024</span>
                            <h3><a href="single-post-2.html">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="all-news-ads">
                    <a href="post-category-3.html"><img src="assets/img/5-ads.png" alt="image"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="more-news-area">
    <div class="container">
        <div class="more-news-inner">
            <div class="section-title">
                <h2>More News</h2>
            </div>
            <div class="row">
                <div class="more-news-slides owl-carousel owl-theme">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-more-news">
                            <img src="assets/img/1.jpg" alt="image">
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                            <div class="tags bg-2"><a href="post-category-2.html">Sports</a></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-more-news">
                            <img src="assets/img/2.jpg" alt="image">
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                            <div class="tags bg-3"><a href="post-category-2.html">Sports</a></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-more-news">
                            <img src="assets/img/3.jpg" alt="image">
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                            <div class="tags bg-4"><a href="post-category-4.html">Sports</a></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-more-news">
                            <img src="assets/img/4.jpg" alt="image">
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="author.html">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2024</li>
                                </ul>
                                <h3><a href="single-post-4.html">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                            <div class="tags bg-5"><a href="post-category-3.html">Sports</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "../../includes/footer.php" ?>
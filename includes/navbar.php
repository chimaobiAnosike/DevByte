<div class="navbar-area">
    <div class="sinmun-mobile-nav">
        <div class="logo">
            <a href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
        </div>
    </div>
    <div class="sinmun-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <h1>DevByte</h1>
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">Home</a>
                        </li>
                        <?php $result = $datcon->query("SELECT * FROM Categories LIMIT 5");
                        if ($result->num_rows > 0) {
                            while ($unzip = $result->fetch_assoc()) {
                        ?>
                                <li class="nav-item"><a href="post-category-2.html" class="nav-link"><?= $unzip['ctitle']
                                                                                                                                  ?>
                                    </a></li>

                        <?php
                            }
                        }
                        ?>
                    </ul>

                    <div class="others-options">

                        <div class="header-search d-inline-block">
                            <div class="nav-search">
                                <div class="nav-search-button"><i class="icofont-ui-search"></i></div>
                                <form>
                                    <span class="nav-search-close-button" tabindex="0">✕</span>
                                    <div class="nav-search-inner"><input name="search" placeholder="Search here...."></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
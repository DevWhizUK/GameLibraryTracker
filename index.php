<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameLibraryTracker</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/index.css">
</head>

<body>
    <?php include 'assets/inc/logged-out-nav.html' ?>

    <div class="slideshow-container">
        <div class="slideshow-title">
            <h1>DISCOVER, TRACK, AND MANAGE<br>YOUR GAME COLLECTION<br>WITH EASE!</h1>
        </div>
        <div class="mySlides fade">
            <img src="assets\media\img\website\index-page\banners\star-banner.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="assets\media\img\website\index-page\banners\star-banner.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="assets\media\img\website\index-page\banners\star-banner.png" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <div class="content-container">
        <div class="left-sections">

            <section class="recent-additions">
                <h2>RECENT ADDITIONS</h2>
                <button id="prevButton">Previous</button> <!-- Navigation button -->
                <div class="carousel">
                    <?php include 'assets/classes/index-page/fetch-recent-additions.php'; ?>
                </div>
                <button id="nextButton">Next</button>
            </section>

            <section class="genres-section">
                <h2>GENRES</h2>
                <div class="carousel">
                    <?php include 'assets/classes/index-page/fetch-genres.php'; ?>
                </div>
            </section>
        </div>

        <aside class="friends-section">
            <h2>YOUR FRIENDS</h2>
            <div class="login-friends">
                <p>LOGIN TO VIEW & ADD FRIENDS</p>
            </div>
        </aside>
    </div>

    <section class="news-section">
        <h2>RECENT NEWS</h2>
        <div class="carousel">
            <?php include 'assets/classes/index-page/fetch-articles.php'; ?>
        </div>
    </section>

    <?php include 'assets\inc\footer.html'; ?>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/banner.js"></script>
</body>

</html>
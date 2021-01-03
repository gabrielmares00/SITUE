<?php
    //Connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "situe";
    
    $db = mysqli_connect($servername, $username, $password, $database);

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //Tracking data about user, containing his IP and User Agent
    $ip = $_SERVER['REMOTE_ADDR'];
    $actual_link = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $short_link = $_SERVER['HTTP_HOST'];
    $actual_page = $_SERVER['REQUEST_URI'];

    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    //SQL query to insert the tracking data
    $sql = "INSERT INTO tracking (DOMAIN, PAGE_ACCESSED, FULL_LINK, IP, USER_AGENT) VALUES ('$short_link', '$actual_page', '$actual_link', '$ip', '$user_agent')";

    mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITUE - About SITUE</title>
    <link rel="icon" href="Style/favicon.ico">

    <link href="Style/reset.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="https://www.w3schools.com/w3css/3/w3.css" rel="stylesheet">
    <link href="Style/index.css" rel="stylesheet">
    <link href="Style/about.css" rel="stylesheet">
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="Load-Nav-Bar.js"></script>
    <script src="Load-Footer.js"></script>
</head>

<body>
    <main>
        <div id="main-page">
            <div id="nav-bar"></div>
        </div>

        <center><img src="Style/Logo.png" class="logo">
            <p id="subtitle">
                Image and text uploading has never been easier.
            </p>

            <br>
        <!-- Collapsible buttons -->
        <button type="button" class="collapsible" style="text-decoration: none;">What is SITUE?</button>
            <div class="content">
                <p>SITUE stands for "Simplest Image & Text Uploader Ever and that is exactly what it is: the easiest to use
                 ,not feature-packed to prevent visual clutter and lightweight, in order to make the site run even on the slowest of hardware.</p>
            </div>

        <button type="button" class="collapsible">How it works?</button>
            <div class="content">
                <p>SITUE puts emphasis on the "simple" part. Therefore, it is simple to upload either text or image. You just click on the buttons on the front page, 
                then, you'll get redirected to the selected upload page, where you'll either select your image or write your text.</p>
            </div>

        <button type="button" class="collapsible">How do I upload an image?</button>
            <div class="content">
                <button type="button" class="collapsible" style="width:50vw; text-align:center">Watch video tutorial</button>
                    <div class="content-video sizer embed-responsive embed-responsive-16by9">
                        <p> <center><iframe class="embed-responsive-item" src="https://streamable.com/e/h6ynrb" allowfullscreen style="border:none"></iframe></center></p>
                    </div>
                    <br>
                    <p>1) You select "Upload Image" on the home page.</p>
                    <p>2) Click on "Browse..."</p>
                    <p>3) Choose your image</p>
                    <p>4) (Optional) Add a keyword to your image</p>
                    <p>5) Click on "Upload"</p>
                    <p>That's it. You just uploaded your image on SITUE. You should now be on the image's share page. You can
                    copy any of the links below in order to share your image on the internet.</p>
            </div>

        <button type="button" class="collapsible">How do I upload a text?</button>
        <div class="content">
                <button type="button" class="collapsible" style="width:50vw; text-align:center">Watch video tutorial</button>
                    <div class="content-video sizer embed-responsive embed-responsive-16by9">
                        <p> <center><iframe class="embed-responsive-item" src="https://streamable.com/e/wcadko" allowfullscreen style="border:none"></iframe></center></p>
                    </div>
                    <br>
                    <p>1) You select "Upload Text" on the home page.</p>
                    <p>2) Add a title to your text</p>
                    <p>3) Start writing the text you want to share</p>
                    <p>4) (Optional) Add a keyword to your text</p>
                    <p>5) Click on "Upload"</p>
                    <p>That's it. You just uploaded your text on SITUE. You should now be on the text's share page. You can
                    copy any of the links below in order to share your text on the sites such as Twitter in order to bypass
                    the site's post character limit.</p>
            </div>

        <button type="button" class="collapsible">What are keywords?</button>
            <div class="content">
                <p>Keyword is what we use in order to both achieve user anonomity and be able to let the user track down their
                uploaded material on our website. We think this is easier to use than traditional user logins.</p>
                <p>You keyword, as long as it is 256 characters long or less and it is only one word, it can be anything</p>
                <p><strong>Example:</strong> 4FUcO0FMFd3iaA8tg1GIuaUvV5fv4VmcGqO5BkWnmhy6rYfwoJdsnZd6oHVPFqswk</p>
                <p>We let the user decide on their keyword, as long as it meets the mentioned criteria.</p>
            </div>

        <button type="button" class="collapsible">How do I use the search function?</button>
            <div class="content">
                <button type="button" class="collapsible" style="width:50vw; text-align:center">Watch video tutorial</button>
                    <div class="content-video sizer embed-responsive embed-responsive-16by9">
                        <p> <center><iframe class="embed-responsive-item" src="https://streamable.com/e/9h650q" allowfullscreen style="border:none"></iframe></center></p>
                    </div>
                    <br>
                    <p>1) You select either "Image search" or "Text search" at the right corner of any page. You will be redirected to the search page</p>
                    <p>2) If you material is keyworded, write your keyword in the field for keywords.
                    If you don't use a keyword or just want to look for some unkeyworded images, leave this space blank.</p>
                    <p>3) Click on "Search"</p>
                    <p>That's it. You should now see your search results. If nothing shows up, maybe you have written your keyword wrong 
                    or there is no image with the keyword used. If you do see something, congratiulations, you just used our search function.</p>
            </div>

        <button type="button" class="collapsible">Who are you?</button>
            <div class="content">
                I am just your average student, trying to innovate in a world were everything has been created. This is just
                a project for uni with a weird twist.
            </div>

        </center>

        <script src="Collapsible-Buttons.js"></script>

        <div id="social-media"></div>
    </main>
</body>
</html>
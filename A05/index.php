<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>CORE MEMORIES</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Poppins", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey">

    <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
                <header class="w3-container w3-center w3-padding-32">
                    <h1><b>CORE MEMORIES</b></h1>
                    <p>Welcome to my <span class="w3-tag">sea of memories</span></p>
                </header>

                <!-- Introduction menu -->
                

                <!-- Faith Haven Card -->
                <div class="w3-row">
            <!-- Faith Haven Card (Left) -->
            <div class="w3-col l8 s12">
                <div class="w3-card-4 w3-margin w3-white">
                    <?php
                    // Query to get the details of "Faith Haven"
                    $query = "SELECT * FROM islandsOfPersonality WHERE name = 'Faith Haven'";
                    $result = executeQuery($query);

                    // Check if any data is returned
                    if ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="card" style="background-color: #C4D199">
                            <!-- Title -->
                            <div class="w3-container">
                                <h3><b><?php echo $row['name']; ?></b></h3>
                                <!-- Long Description -->
                                <h5><?php echo $row['longDescription']; ?></h5>

                                <div class="w3-row">
                                    <?php
                                    // Query to get the images associated with Faith Haven
                                    $imageQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = " . $row['islandOfPersonalityID'];
                                    $imageResult = executeQuery($imageQuery);
                                    while ($imageRow = mysqli_fetch_array($imageResult)) {
                                        $imageFile = $imageRow['image'];
                                        $content = $imageRow['content']; 
                                    ?>
                                        <div class="w3-col l12 m6 s12" style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-bottom: 30px;">
                                            <img src="images/<?php echo $imageFile; ?>" alt="Faith Haven Image" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                            <p style="text-align: center; margin-top: 10px;"><?php echo $content; ?></p> <!-- Display the content from islandcontents -->
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <!-- Introductory Card (Right) -->
            <div class="w3-col l4 s12">
                <div class="w3-card w3-margin w3-margin-top">
                    <img src="../A05/images/self.png" style="width:100%">
                    <div class="w3-container w3-white">
                        <h4><b>Christell Angelica</b></h4>
                        <p>Hello! I’m Christell Angelica Chavez, a 22-year-old student and babysitter from San Pablo, Sto. Tomas. I’m someone who values faith, family, hobbies, and work, as these define who I am. Whether I’m nurturing young minds or pursuing my passions, I approach life with dedication and care.<br><br>This website is a window into the moments and memories that shape me. Each section reflects an island of my personality, offering a glimpse into what inspires me, keeps me grounded, and drives me forward. <br><br>Welcome to a collection of experiences that make me, me.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Grid -->
        <div class="w3-row">

            <!-- Blog entries -->
            <div class="w3-col l8 s12">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="/w3images/woods.jpg" alt="Nature" style="width:100%">
                    <div class="w3-container">
                        <h3><b>TITLE HEADING</b></h3>
                        <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
                    </div>

                    <div class="w3-container">
                        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem
                            euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed
                            ultricies mi non congue ullam corper. Praesent tincidunt sed
                            tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida
                            diam non fringilla.</p>
                    </div>
                </div>
                <hr>

                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="/w3images/bridge.jpg" alt="Norway" style="width:100%">
                    <div class="w3-container">
                        <h3><b>BLOG ENTRY</b></h3>
                        <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
                    </div>

                    <div class="w3-container">
                        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem
                            euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed
                            ultricies mi non congue ullam corper. Praesent tincidunt sed
                            tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida
                            diam non fringilla.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE
                                            »</b></button></p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span
                                            class="w3-badge">2</span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END BLOG ENTRIES -->
            </div>

            <!-- Introduction menu -->
            <div class="w3-col l4">
                <!-- About Card -->
                <div class="w3-card w3-margin w3-margin-top">
                    <img src="../A05/images/self.png" style="width:100%">
                    <div class="w3-container w3-white">
                        <h4><b>Christell Angelica</b></h4>
                        <p>Hello! I’m Christell Angelica Chavez, a 22-year-old student and babysitter from San Pablo, Sto. Tomas. I’m someone who values faith, family, hobbies, and work, as these define who I am. Whether I’m nurturing young minds or pursuing my passions, I approach life with dedication and care.<br><br>This website is a window into the moments and memories that shape me. Each section reflects an island of my personality, offering a glimpse into what inspires me, keeps me grounded, and drives me forward. <br><br>Welcome to a collection of experiences that make me, me.</p>
                    </div>
                </div>
                <hr>

                <!-- Posts -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <li class="w3-padding-16">
                            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Lorem</span><br>
                            <span>Sed mattis nunc</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="/w3images/gondol.jpg" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Ipsum</span><br>
                            <span>Praes tinci sed</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="/w3images/skies.jpg" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Dorum</span><br>
                            <span>Ultricies congue</span>
                        </li>
                        <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                            <img src="/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Mingsum</span><br>
                            <span>Lorem ipsum dipsum</span>
                        </li>
                    </ul>
                </div>
                <hr>

                <!-- Labels / tags -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
                        </p>
                    </div>
                </div>

                <!-- END Introduction Menu -->
            </div>

            <!-- END GRID -->
        </div><br>

        <!-- END w3-content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
        <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
        <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>

</body>

</html>
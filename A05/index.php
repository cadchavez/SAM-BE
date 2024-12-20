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

        body {
            margin: 0;
            background-color: #92789F;
        }
    </style>
</head>

<body>

    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <img src="../A05/images/logo.png" style="width:15%">
            <h1 style="color:#432457"><b>CORE MEMORIES</b></h1>
            <h5 style="color:#432457">Welcome to my <span class="w3-tag" style="background-color:#2B153A">sea of memories</span></h5>
        </header>

        <div class="w3-row">
                    
                    <div class="w3-col l8 s12">
                        <!-- Faith Haven Card -->
                        <div class="w3-card-4 w3-margin w3-white" id="faith-haven">
                            <?php
                            // Query to get the details of "Faith Haven"
                            $query = "SELECT * FROM islandsOfPersonality WHERE name = 'Faith Haven'";
                            $result = executeQuery($query);

                            // Check if any data is returned
                            if ($row = mysqli_fetch_array($result)) {
                            ?>
                                <div class="card" style="background-color: #F1D05A">
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

                        <!-- Bonded Isle Card -->
                        <div class="w3-card-4 w3-margin w3-white" id="bonded-isle">
                            <?php
                            // Query to get the details of "Faith Haven"
                            $query = "SELECT * FROM islandsOfPersonality WHERE name = 'Bonded Isle'";
                            $result = executeQuery($query);

                            // Check if any data is returned
                            if ($row = mysqli_fetch_array($result)) {
                            ?>
                                <div class="card" style="background-color: #7A9BAE">
                                    <!-- Title -->
                                    <div class="w3-container">
                                        <h3><b><?php echo $row['name']; ?></b></h3>
                                        <!-- Long Description -->
                                        <h5><?php echo $row['longDescription']; ?></h5>

                                        <div class="w3-row">
                                            <?php
                            
                                            $imageQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = " . $row['islandOfPersonalityID'];
                                            $imageResult = executeQuery($imageQuery);
                                            while ($imageRow = mysqli_fetch_array($imageResult)) {
                                                $imageFile = $imageRow['image'];
                                                $content = $imageRow['content']; 
                                            ?>
                                                <div class="w3-col l12 m6 s12" style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-bottom: 30px;">
                                                    <img src="images/<?php echo $imageFile; ?>" alt="Bonded Isle Image" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
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

                        <!-- Leisure Lagoon Card -->
                        <div class="w3-card-4 w3-margin w3-white" id="leisure-lagoon">
                            <?php
                            
                            $query = "SELECT * FROM islandsOfPersonality WHERE name = 'Leisure Lagoon'";
                            $result = executeQuery($query);

                            // Check if any data is returned
                            if ($row = mysqli_fetch_array($result)) {
                            ?>
                                <div class="card" style="background-color: #A75B5B">
                                    <!-- Title -->
                                    <div class="w3-container">
                                        <h3><b><?php echo $row['name']; ?></b></h3>
                                        <!-- Long Description -->
                                        <h5><?php echo $row['longDescription']; ?></h5>

                                        <div class="w3-row">
                                            <?php
                                            
                                            $imageQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = " . $row['islandOfPersonalityID'];
                                            $imageResult = executeQuery($imageQuery);
                                            while ($imageRow = mysqli_fetch_array($imageResult)) {
                                                $imageFile = $imageRow['image'];
                                                $content = $imageRow['content']; 
                                            ?>
                                                <div class="w3-col l12 m6 s12" style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-bottom: 30px;">
                                                    <img src="images/<?php echo $imageFile; ?>" alt="Bonded Isle Image" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
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

                        <!-- The Helping Hand Card -->
                        <div class="w3-card-4 w3-margin w3-white" id="the-helping-hand">
                            <?php
                            
                            $query = "SELECT * FROM islandsOfPersonality WHERE name = 'The Helping Hand'";
                            $result = executeQuery($query);

                            // Check if any data is returned
                            if ($row = mysqli_fetch_array($result)) {
                            ?>
                                <div class="card" style="background-color: #99E699">
                                    <!-- Title -->
                                    <div class="w3-container">
                                        <h3><b><?php echo $row['name']; ?></b></h3>
                                        <!-- Long Description -->
                                        <h5><?php echo $row['longDescription']; ?></h5>

                                        <div class="w3-row">
                                            <?php
                                           
                                            $imageQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = " . $row['islandOfPersonalityID'];
                                            $imageResult = executeQuery($imageQuery);
                                            while ($imageRow = mysqli_fetch_array($imageResult)) {
                                                $imageFile = $imageRow['image'];
                                                $content = $imageRow['content']; 
                                            ?>
                                                <div class="w3-col l12 m6 s12" style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-bottom: 30px;">
                                                    <img src="images/<?php echo $imageFile; ?>" alt="Bonded Isle Image" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
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

            <!-- Introductory Card  -->
            <div class="w3-col l4 s12">
                <div class="w3-card w3-margin w3-margin-top">
                    <img src="../A05/images/self.png" style="width:100%">
                    <div class="w3-container w3-white">
                        <h4><b>Christell Angelica</b></h4>
                        <p>Hello! I’m Christell Angelica Chavez, a 22-year-old student and babysitter from San Pablo, Sto. Tomas. I’m someone who values faith, family, hobbies, and work, as these define who I am. Whether I’m nurturing young minds or pursuing my passions, I approach life with dedication and care.<br><br>This website is a window into the moments and memories that shape me. Each section reflects an island of my personality, offering a glimpse into what inspires me, keeps me grounded, and drives me forward. <br><br>Welcome to a collection of experiences that make me, me.</p>
                    </div>
                </div>
                <!-- Posts -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4 style="color:white">Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <li class="w3-padding-16">
                            <img src="../A05/images/post1.png" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Surviving College: Top 5 Study Hacks Every Student Should Know</span><br>
                        </li>
                        <li class="w3-padding-16">
                            <img src="../A05/images/post2.png" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Finding Your Voice: Tips for Aspiring Singers</span><br>
                        </li>
                        <li class="w3-padding-16">
                            <img src="../A05/images/post3.png" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Easy Weeknight Dinners: 5 Quick Recipes for Busy Students</span><br>
                        </li>
                        <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                            <img src="../A05/images/post4.png" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Faith and Fellowship: How to Stay Connected to Your Church</span><br>
                        </li>
                    </ul>
                </div>
                <hr>

                <!-- Labels / tags -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4 style="color:white">Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><span class="w3-tag w3-black w3-margin-bottom">Core Memories</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Chirstell Angelica</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Islands of Personality</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Island Contents</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Inside Out</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">HTML</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">PHP</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Self</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Church</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Passion</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Babysitting</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Joy</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sea of memories</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
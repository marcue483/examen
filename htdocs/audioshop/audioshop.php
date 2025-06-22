<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="custom.css">
    <script src="custom.js"></script>
</head>
<body>
    <nav>
        <a class="navlink" href="#container1">HOME</a>
        <a class="navlink" href="#container2">NEW PRODUCTS</a>
        <a class="navlink" href="#container3">GALLERY</a>
        <div></div>
    </nav>
    <div class="container1" id="container1">
        <div class="text">PUT THE WORLD ON MUTE</div>
    </div>
    <div class="container2" id="container2">
        <div class="new">NEW PRODUCTS</div>
        <div class="products">
            <div class="imgtext">
                <img class="prod" src="images/prod1.png" alt="">
                <div style="font-size: 25px;" class="bottom">
                    <div>Beats Solo</div>
                    <div style="display: flex; gap:5px;">
                        <div class="cerculete" style="background-color:red;"></div>
                        <div class="cerculete" style="background-color:rgb(0, 132, 255);"></div>
                        <div class="cerculete" style="background-color:green;"></div>
                        <div class="cerculete" style="background-color:lightblue;"></div>
                    </div>
                </div>
                <div>$255.00</div>
            </div>
            <div class="imgtext">
                <img class="prod" src="images/prod2.png" alt="">
                <div style="font-size: 25px;" class="bottom">
                    <div>Beats Solo</div>
                    <div style="display: flex; gap:5px;">
                        <div class="cerculete" style="background-color:red;"></div>
                        <div class="cerculete" style="background-color:rgb(0, 132, 255);"></div>
                        <div class="cerculete" style="background-color:green;"></div>
                        <div class="cerculete" style="background-color:lightblue;"></div>
                    </div>
                </div>
                <div>$255.00</div>
            </div>
            <div class="imgtext">
                <img class="prod" src="images/prod3.png" alt="">
                <div style="font-size: 25px;" class="bottom">
                    <div>Beats Solo</div>
                    <div style="display: flex; gap:5px;">
                        <div class="cerculete" style="background-color:red;"></div>
                        <div class="cerculete" style="background-color:rgb(0, 132, 255);"></div>
                        <div class="cerculete" style="background-color:green;"></div>
                        <div class="cerculete" style="background-color:lightblue;"></div>
                    </div>
                </div>
                <div>$255.00</div>
            </div>
        </div>
    </div>
    
    <!--db connection-->
    <?php
        $server="localhost";
        $username="root";
        $password="";
        $dbname="audioshop";
        $conn=new mysqli($server,$username,$password,$dbname);
    ?>

    <div class="container3" id="container3">
        <div class="new">GALLERY</div>
        <div class="gallerycontainer">
            <?php
                $images = [];
                $sql = "SELECT filename FROM images";
                $result = $conn->query($sql);
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $images[] = 'images/' . $row['filename'];
                    }
                }
            ?>
            <?php foreach ($images as $index => $image): ?>
                <div class="slide <?php echo $index === 0 ? 'active' : ''; ?>">
                    <img class="galleryimage" src="<?php echo $image; ?>" alt="Gallery image">
                </div>
            <?php endforeach; ?>

            <div class="navigation">
                <a class="arrowleft" onclick="plusSlides(-1)"></a>
                <div>
                    <?php foreach ($images as $index => $image): ?>
                        <button class="selectbutton <?php echo $index === 0 ? 'active' : ''; ?>" onclick="currentSlide(<?php echo $index + 1; ?>)"></button>
                    <?php endforeach; ?>
                </div>
                <a class="arrowright" onclick="plusSlides(1)"></a>
            </div>
        </div>
    </div>
    <hr>
    <footer>
        <div>Enache Marcu</div>
        <div><a href="mailto:marcue483@gmail.com">marcue483@gmail.com</a></div>
    </footer>
</body>
</html>
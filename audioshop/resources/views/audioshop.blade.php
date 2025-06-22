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
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
    <nav>
        <a class="navlink" href="#container1">HOME</a>
        <a class="navlink" href="#container2">NEW PRODUCTS</a>
        <a class="navlink" href="#container3">GALLERY</a>
        <a class="navlink" href="admin.php">ADMIN</a>
        <div></div>
    </nav>

    <!-- First container -->
    <div class="container1" id="container1">
        <div class="text">PUT THE WORLD ON MUTE</div>
    </div>

    <!-- Second container -->
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

    <div class="container3" id="container3">
        <div class="new">GALLERY</div>
        <div class=gallerycontainer>
@foreach ($images as $image)
                    <div class="slide" style="display: none;">
                        <img class="galleryimage" src="{{ asset('images/' . $image->filename) }}" alt="Gallery Image">
                    </div>
                @endforeach

            <div class="navigation">
                <a class="arrowleft" onclick="plusSlides(-1)"></a>
                    <div>
                    @foreach ($images as $index => $image)
                        <button class="selectbutton" data-index="{{ $index }}"></button>
                    @endforeach
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
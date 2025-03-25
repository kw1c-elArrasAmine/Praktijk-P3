// // var slideIndex = 1;
// // toonSlides(slideIndex);
// //
// // // Functie voor de knoppen (volgende/vorige)
// // function plusSlides(nummer) {
// //     toonSlides(slideIndex += nummer);
// // }
// //
// // // Functie voor de bolletjes onder de slideshow
// // function currentSlide(nummer) {
// //     toonSlides(slideIndex = nummer);
// // }
// //
// // // Hoofdfunctie die bepaalt welke slide zichtbaar is
// // function toonSlides(nummer) {
// //     var i;
// //     var slides = document.getElementsByClassName("mySlides");
// //     var dots = document.getElementsByClassName("dot");
// //
// //     if (nummer > slides.length) {
// //         slideIndex = 1;
// //     }
// //     if (nummer < 1) {
// //         slideIndex = slides.length;
// //     }
// //
// //     // Verberg alle slides
// //     for (i = 0; i < slides.length; i++) {
// //         slides[i].style.display = "none";
// //     }
// //
// //     // Verwijder "active" van alle bolletjes
// //     for (i = 0; i < dots.length; i++) {
// //         dots[i].className = dots[i].className.replace(" active", "");
// //     }
// //
// //     // Toon de juiste slide en maak het bolletje actief
// //     slides[slideIndex - 1].style.display = "block";
// //     dots[slideIndex - 1].className += " active";
// // }
// //
// // // Automatisch wisselen elke 10 seconden
// // setInterval(function() {
// //     plusSlides(1);
// // }, 10000);
//
//
//
// <?php
//
//     ?>
// <!DOCTYPE html>
// <html lang="en">
//     <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <link rel="stylesheet" href="styles/nav.css">
//     <script src="script/index.js" defer></script>
// <title>HOME</title>
// </head>
// <body>
// <nav>
//     <?php
//     include "include/navformulier.php";
//     ?>
// </nav>
// <main>
//     <div id="intromain">
//         <h2>Welkom bij de homepagina!</h2>
//         <h3>Hier vindt u informatie over tanks</h3>
//     </div>
//
//     <!-- Slideshow container -->
//     <div class="slideshow-container">
//
//         <!-- Full-width images with number and caption text -->
//         <div class="mySlides fade">
//             <div class="numbertext">1 / 3</div>
//             <img src="img1.jpg">
//                 <div class="text">Caption Text</div>
//         </div>
//
//         <div class="mySlides fade">
//             <div class="numbertext">2 / 3</div>
//             <img src="images/img.png">
//                 <div class="text">Krupp Protze (Lichte Verkenningsauto):
//
//                     Dit was een licht militair voertuig dat veel werd gebruikt tijdens de Tweede Wereldoorlog voor verkenning en transport.</div>
//         </div>
//
//         <div class="mySlides fade">
//             <div class="numbertext">3 / 3</div>
//             <div class="text">Caption Three</div>
//         </div>
//
//         <!-- Next and previous buttons -->
//         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
//         <a class="next" onclick="plusSlides(1)">&#10095;</a>
//     </div>
//     <br>
//
//         <!-- The dots/circles -->
//         <div style="text-align:center">
//             <span class="dot" onclick="currentSlide(1)"></span>
//             <span class="dot" onclick="currentSlide(2)"></span>
//             <span class="dot" onclick="currentSlide(3)"></span>
//         </div>
// </main>
// </body>
// </html>

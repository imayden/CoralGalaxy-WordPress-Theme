<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays the front page by default.
 * Please note that this is the WordPress construct of front-page and that other 'home' pages on your WordPress site will use a different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CG-3.0
 */

require_once(ABSPATH . 'wp-content/themes/cg-3-0/header.php');
// get_header();
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<main id="primary" class="site-main">

    <!-- Section 1 -->
    <div id="section-1" class="cover-block-container">
        <div class="cover-block">

            <!-- Video -->
            < <div class="video-background">
                <iframe 
                    src="https://www.youtube.com/embed/r9jVoCLLQQs?autoplay=1&loop=1&controls=0&mute=1&playlist=r9jVoCLLQQs&vq=hd1080" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe>
            </div>

            <div class="cover-content">
                <div class="dynamic-heading">
                    <h1>Section 1</h1> 
                    <!-- H1 Text Carousel Effect for 6 words  -->
                    <div class="text-carousel-container">
                        <h1><span id="carousel-text"></span></h1>
                    </div>
                </div>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Nulla posuere sollicitudin aliqu
                    am ultrices sagittis orci a scelerisque. Congue quisque egestas diam in arcu 
                    cursus euismod. Augue lacus viverra vitae congue eu. Mattis rhoncus urna nequ
                    e viverra justo nec ultrices dui. Tellus pellentesque eu tincidunt tortor ali
                    quam. Non quam lacus suspendisse faucibue.
                </p>

                <div class="button-heading">

                    <!-- Framed Button -->
                    <div class="w-framed-button">
                        <a href="/#section-1" >Button 1</a>
                    </div>

                    <!-- Frameless Button 2 -->
                    <div class="w-frameless-button">
                        <a href="/#section-2">Button 2</a>
                    </div>
            
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Section 2 -->
    <div id="section-2" class="cover-block-container-2">
        <div class="cover-block-2">
            <!-- Video -->
            <div class="cover-content-2">
                <div class="Filtering-Section">
                    <h3>Filtering Section</h3>
                </div>
                <h1>Section 2</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        cursus euismod. Augue lacus viverra vitae congue eu. Mattis rhoncus urna nequ
                        e viverra justo nec ultrices dui. Tellus pellentesque eu tincidunt tortor ali
                        quam. Non quam lacus suspendisse faucibue.
                    </p>

                <div class="dropdown-container">
                    <div class="dropdown">
                        <button onclick="toggleDropdown()" class="dropbtn">
                            Select What to Filter
                            <span class="arrow-down">&#9662;</span>
                            <span class="arrow-up">&#9652;</span>
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <label class="dropdown-item"><input type="checkbox" value="green"> Green</label>
                            <label class="dropdown-item"><input type="checkbox" value="blue"> Blue</label>
                            <label class="dropdown-item"><input type="checkbox" value="black"> Black</label>
                        </div>
                    </div>
                </div>

                <div class="carousel-container">
                    <div id="carousel" class="carousel">
                        <div class="carousel-item" data-title="Black 1">
                            <a href="/black-1/" target="_blank" rel="noopener">
                                <img src="https://raw.githubusercontent.com/imayden/Images-cdn-repo/main/CaseGuard-Theme-Images/Black1-1536x1026.png" alt="Black1">
                            </a>
                        </div>
                        <div class="carousel-item" data-title="Black 2">
                            <a href="/black-2/" target="_blank" rel="noopener">
                                <img src="https://raw.githubusercontent.com/imayden/Images-cdn-repo/main/CaseGuard-Theme-Images/Black2-1536x1023.png" alt="Black2">
                            </a>
                        </div>
                        <div class="carousel-item" data-title="Blue 1">
                            <a href="/blue-1/" target="_blank" rel="noopener">
                                <img src="https://raw.githubusercontent.com/imayden/Images-cdn-repo/main/CaseGuard-Theme-Images/Blue1-1536x1025.png" alt="Blue1">
                            </a>
                        </div>
                        <div class="carousel-item" data-title="Blue 2">
                            <a href="/blue-2/" target="_blank" rel="noopener">
                                <img src="https://raw.githubusercontent.com/imayden/Images-cdn-repo/main/CaseGuard-Theme-Images/Blue2-1536x1025.png" alt="Blue2">
                            </a>
                        </div>
                        <div class="carousel-item" data-title="Green 1">
                            <a href="/green-1/" target="_blank" rel="noopener">
                                <img src="https://raw.githubusercontent.com/imayden/Images-cdn-repo/main/CaseGuard-Theme-Images/Green1-1536x1025.png" alt="Green1">
                            </a>
                        </div>
                        <div class="carousel-item" data-title="Green 2">
                            <a href="/green-2/" target="_blank" rel="noopener">
                                <img src="https://raw.githubusercontent.com/imayden/Images-cdn-repo/main/CaseGuard-Theme-Images/Green2-1536x1025.png" alt="Green2">
                            </a>
                        </div>

                    </div>
                    <div class="carousel-title"></div>
                    <div class="controls-container">
                        <div class="carousel-controls left"><i class="fas fa-chevron-left"></i></div>
                        <div class="carousel-indicators"></div>
                        <div class="carousel-controls right"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
?>


<!-- ---------------------------------------------
    Key Components Styles and Scripts in this Page
 --------------------------------------------- -->


<!-- Text Carousel-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const carouselText = ["Alpha", "Bravo", "Charlie", "Delta", "Echo", "Foxtrot"];
        const carouselElement = document.getElementById("carousel-text");
        let index = -1;

        function updateText() {
            carouselElement.classList.add('fade-out');
            setTimeout(() => {
                carouselElement.innerText = carouselText[index];
                carouselElement.classList.remove('fade-out');
                carouselElement.classList.add('fade-in');
                setTimeout(() => {
                    carouselElement.classList.remove('fade-in');
                }, 500);
            }, 500);
            index = (index + 1) % carouselText.length;
        }

        updateText();
        setInterval(updateText, 3000); 
    });
</script>

<style>

#carousel-text {
    display: inline-block;
    transition: opacity 0.5s, transform 0.5s;
}

.fade-out {
    opacity: 0;
    transform: translateY(-50%);
}

.fade-in {
    opacity: 1;
    transform: translateY(0%);
}
</style>


<!-- Dropdown Menu -->
<style>
.dropdown-container {
    /*position: relative;*/
    text-align: center; 
    padding-top: 20px;
}

.dropdown {
    position: relative;
    display: inline-block;
    text-align: left; 
}

.dropbtn {
    background-color: rgba(255, 255, 255, 0.75);
    backdrop-filter: blur(50px);
    color: #888;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 200px; 
}

.dropbtn .arrow-up {
    display: none;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: rgba(255, 255, 255, 0.75);
    backdrop-filter: blur(50px);
    color: black;
    width: 200px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 10px;
    padding: 10px;
    margin-top: 5px;
}

.dropdown-item {
    padding: 12px 16px;
    display: block;
    font-size: 16px;
}

.dropdown-item input {
    margin-right: 10px;
}

.dropdown-content label {
    display: block;
}

.show {
    display: block;
}

.show .arrow-down {
    display: none;
}

.show .arrow-up {
    display: inline;
}
</style>

<script>
function toggleDropdown() {
    var dropdown = document.getElementById("myDropdown");
    dropdown.classList.toggle("show");

    var arrows = document.querySelector(".dropbtn");
    if (dropdown.classList.contains("show")) {
        arrows.querySelector(".arrow-down").style.display = "none";
        arrows.querySelector(".arrow-up").style.display = "inline";
    } else {
        arrows.querySelector(".arrow-down").style.display = "inline";
        arrows.querySelector(".arrow-up").style.display = "none";
    }
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn') && !event.target.closest('.dropdown-content')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
                var arrows = document.querySelector(".dropbtn");
                arrows.querySelector(".arrow-down").style.display = "inline";
                arrows.querySelector(".arrow-up").style.display = "none";
            }
        }
    }
}
</script>

<!-- Photo Carousel -->
<style>


/* 
=================
Carousel 
=================
*/

.controls-container {
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    bottom: 0px; 
    left: 0;
    right: 0;
    margin: 0 auto;
    
}


.carousel-controls {
    font-size: 20px;
    color: #FFF;
    user-select: none;
    cursor: pointer;
    margin: 0; 
}

.carousel-controls.left {
    left: 40%;
}

.carousel-controls.right {
    right: 40%;
}


.carousel-container {
    max-width: 1080px;
    width: auto;
    height: 600px;
    overflow: hidden;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
}

.carousel {
    width: 80%;
    height: 70%;
    position: relative;
    perspective: 1500px;
}

.carousel-item {
    position: absolute;
    width: 100%;
    height: 100%;
    transition: transform 0.5s, opacity 0.5s;
    transform-origin: center center;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel-item a {
    width: 100%;
    height: 100%;
    display: block;
    cursor: pointer;
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50px;
    overflow: hidden;
}

.carousel-item a:hover img {
    /* opacity: 0.8; */
    transform: scale(1.02);
    transition: all 0.3s ease;
}

.carousel-title {
    color: #ffffff;
    font-size: 26px;
    font-weight: 500;
    margin: 20px;
    text-align: center;
}

.carousel-indicators {
    display: flex;
    align-items: center;
    justify-content: center;
}

.carousel-indicator {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.5);
    margin: 0 5px; 
    cursor: pointer;
}

.carousel-indicator.active {
    background-color: #CF4520;
}
</style>

<script>
    
    document.addEventListener('DOMContentLoaded', function() {
    const dropdownInputs = document.querySelectorAll('.dropdown-item input');
    const carousel = document.getElementById('carousel');
    const items = carousel.querySelectorAll('.carousel-item');
    const titleContainer = document.querySelector('.carousel-title');
    const indicatorContainer = document.querySelector('.carousel-indicators');
    const leftButton = document.querySelector('.carousel-controls.left');
    const rightButton = document.querySelector('.carousel-controls.right');
    let current = 0;
    let autoPlayInterval;

    function filterItems() {
        const filters = Array.from(dropdownInputs).filter(input => input.checked).map(input => input.value);
        items.forEach(item => {
            const itemColor = item.dataset.title.split(' ')[0].toLowerCase();
            if (filters.length === 0 || filters.includes(itemColor)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
        updateIndicators();
        setCurrentSlide(0); 
        restartAutoPlay();  
    }

    function updateIndicators() {
        indicatorContainer.innerHTML = ''; 
        Array.from(items).forEach((item, index) => {
            if (item.style.display !== 'none') {
                const indicator = document.createElement('div');
                indicator.classList.add('carousel-indicator');
                indicator.onclick = () => setCurrentSlide(index);
                indicatorContainer.appendChild(indicator);
            }
        });
        updateCarousel(); // Update the carousel view
    }

    function setCurrentSlide(index) {
        const visibleItems = Array.from(items).filter(item => item.style.display !== 'none');
        if (index < 0) index = visibleItems.length - 1;
        if (index >= visibleItems.length) index = 0;
        current = index;
        updateCarousel();
    }

    function updateCarousel() {
        const visibleItems = Array.from(items).filter(item => item.style.display !== 'none');
        visibleItems.forEach((item, index) => {
            let delta = index - current;
            if (delta < 0) delta += visibleItems.length;
            if (delta > 2) delta -= visibleItems.length;

            item.style.opacity = (delta === 0 ? 1 : 0.5);
            item.style.transform = `translateX(${delta * 100}%) scale(${1 - Math.abs(delta) * 0.1})`;
            item.style.zIndex = -Math.abs(delta);
            item.classList.toggle('active', delta === 0);
        });

        const indicators = indicatorContainer.querySelectorAll('.carousel-indicator');
        indicators.forEach((indicator, idx) => {
            indicator.classList.toggle('active', idx === current);
        });

        if (visibleItems.length) {
            titleContainer.textContent = visibleItems[current].dataset.title;
        }
    }

    function restartAutoPlay() {
        clearInterval(autoPlayInterval);
        autoPlayInterval = setInterval(() => {
            setCurrentSlide(current + 1);
        }, 3000);
    }

    dropdownInputs.forEach(input => input.addEventListener('change', filterItems));

    leftButton.onclick = () => setCurrentSlide(current - 1);
    rightButton.onclick = () => setCurrentSlide(current + 1);

    filterItems(); // Apply filter at initial load
    restartAutoPlay(); // Start auto play
});
</script>
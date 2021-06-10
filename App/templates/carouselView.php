<div class="slideshow-container">
    <div class="mySlides">
        <img src="./App/templates/img/baner.jpg" style="width:100%">
       
    </div>

    <div class="mySlides">
        <img src="./App/templates/img/blog1.jpg" style="width:100%">
        <div class="text">
            <div class="button_cont">
                <a class="button-slide" href="blog">Voir plus</a>
            </div>
     </div>
    </div>

    <div class="mySlides">
        <img src="./App/templates/img/blog2.jpg" style="width:100%">
        <div class="text">
            <div class="button_cont">
                <a class="button-slide" href="blog">Voir plus</a>
            </div>
     </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }
</script>
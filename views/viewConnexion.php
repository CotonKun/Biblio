<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <link rel="stylesheet" href="home2.css" />
    <title>Biblio'Manga</title>
  </head>

  <body>
    <div class="wrapper">
      <div class="left"></div>
      <div class="right"></div>

      <div class="strips">
        <div class="left-strip"></div>
        <div class="right-strip"></div>
      </div>

      <div class="nav">
        <div class="logo">
          <a href="#">Biblio'<br />Manga</a>
        </div>

        <!-- <div class="menu"><i class="fa fa-bars"></i></div> -->

        <div class="categories">
          <ul>
            <li><a href="home2.php">Home</a></li>
            <li><a href="signin2.php">Connection/Inscription</a></li>
            <li><a href="#">Agenda</a></li>
          </ul>
        </div>

        <!-- <div class="search"><i class="fa fa-search"></i></div> -->

        <div class="bag">
          <a class="fa fa-user" href="signin2.html"></a>
        </div>
      </div>

      <div class="media">
        <ul>
          <li><a href="https://twitter.com/home">Facebook</a></li>
          <li><a href="https://twitter.com/home">Twitter</a></li>
          <li><a href="https://twitter.com/home">Instagram</a></li>
        </ul>
      </div>

      <div class="size">
        <button class="product-sliderfav js-fav fav">
          <span class="heart"></span> ADD TO WISHLIST
        </button>
      </div>

      <!-- <img
        class="product-img"
        src="https://res.cloudinary.com/muhammederdem/image/upload/v1536405217/starwars/item-2.png"
        alt=""
      /> -->

      <div id="pagination">
        <button class="active" data-slide="0"></button>
        <button data-slide="1"></button>
        <button data-slide="2"></button>
        <button data-slide="3"></button>
      </div>

      <div class="js-simple-slider simple-slider">
        <div class="simple-slider_item">
          <div class="product-text">
            <h1 class="product-title">The Promised Neverland</h1>
            <p class="product-subtitle">Vol.15 - 19 août 2020</p>
          </div>
          <img class="product-img" src="img/man_promised.jpg" />
        </div>
        <div class="simple-slider_item is-hidden">
          <div class="product-text">
            <h1 class="product-title">Act-Age</h1>
            <p class="product-subtitle">Vol.3 - 27 août 2020</p>
          </div>
          <img class="product-img" src="img/man_actage.jpg" />
        </div>
        <div class="simple-slider_item is-hidden">
          <div class="product-text">
            <h1 class="product-title">My Hero Academia</h1>
            <p class="product-subtitle">Vol.23 - Déjà disponible!</p>
          </div>
          <img class="product-img" src="img/man-mha.jpg" />
        </div>
      </div>

      <!-- <div class="product-text">
        <h1 class="product-title">colorblock</h1>
        <p class="product-subtitle">Full sleeve t-shirt</p>
      </div> -->

      <div class="dots">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>

      <div class="bottomnav">
        <div class="bottomnav-img"></div>

        <ul>
          <li><i class="fa fa-chevron-left"></i></li>
          <li><i class="fa fa-chevron-right"></i></li>
        </ul>
      </div>
    </div>

    <script type="text/javascript">
      TweenMax.from(".left", 1.6, {
        delay: 0.6,
        width: 0,
        ease: Expo.easeInOut
      });

      TweenMax.from(".right", 1.6, {
        delay: 0.6,
        width: 0,
        ease: Expo.easeInOut
      });

      TweenMax.from(".logo", 1, {
        delay: 1,
        opacity: 0,
        x: -20,
        ease: Expo.easeInOut
      });

      TweenMax.from(".menu", 1, {
        delay: 1.2,
        opacity: 0,
        x: -20,
        ease: Expo.easeInOut
      });

      TweenMax.from(".categories", 1, {
        delay: 1.4,
        opacity: 0,
        x: -150,
        ease: Expo.easeInOut
      });

      TweenMax.from(".search", 0.8, {
        delay: 1.6,
        opacity: 0,
        x: -20,
        ease: Expo.easeInOut
      });

      TweenMax.from(".bag", 1, {
        delay: 1.6,
        opacity: 0,
        x: -20,
        ease: Expo.easeInOut
      });

      TweenMax.staggerFrom(
        ".media ul li",
        1,
        {
          delay: 2,
          opacity: 0,
          x: -20,
          ease: Power3.easeInOut
        },
        0.08
      );

      TweenMax.from(".size", 1, {
        delay: 1.8,
        opacity: 0,
        x: -20,
        ease: Expo.easeInOut
      });

      TweenMax.staggerFrom(
        ".size ul li",
        0.3,
        {
          delay: 2,
          opacity: 0,
          y: 20,
          ease: Power3.easeInOut
        },
        0.08
      );

      TweenMax.staggerFrom(
        ".dot",
        1,
        {
          delay: 2.4,
          opacity: 0,
          x: 20,
          ease: Power3.easeInOut
        },
        0.08
      );

      TweenMax.from(".bottomnav", 1, {
        delay: 2.4,
        opacity: 0,
        x: -20,
        ease: Expo.easeInOut
      });

      TweenMax.from(".bottomnav ul li:first-child", 0.5, {
        delay: 2.4,
        opacity: 0,
        x: -20,
        ease: Expo.easeInOut
      });

      TweenMax.from(".bottomnav ul li:last-child", 0.6, {
        delay: 2.4,
        opacity: 0,
        x: -20,
        ease: Expo.easeInOut
      });

      TweenMax.from(".product-img", 3, {
        delay: 2,
        opacity: 0,
        y: 20,
        ease: Expo.easeInOut
      });

      TweenMax.from(".product-title", 3, {
        delay: 2.2,
        opacity: 0,
        y: 50,
        ease: Expo.easeInOut
      });

      TweenMax.from(".product-subtitle", 3, {
        delay: 2.4,
        opacity: 0,
        y: 50,
        ease: Expo.easeInOut
      });
    </script>
    <script>
      var slideshowDuration = 4000;
      var slideshow = $(".main-content .slideshow");

      function slideshowSwitch(slideshow, index, auto) {
        if (slideshow.data("wait")) return;

        var slides = slideshow.find(".slide");
        var pages = slideshow.find(".pagination");
        var activeSlide = slides.filter(".is-active");
        var activeSlideImage = activeSlide.find(".image-container");
        var newSlide = slides.eq(index);
        var newSlideImage = newSlide.find(".image-container");
        var newSlideContent = newSlide.find(".slide-content");
        var newSlideElements = newSlide.find(".caption > *");
        if (newSlide.is(activeSlide)) return;

        newSlide.addClass("is-new");
        var timeout = slideshow.data("timeout");
        clearTimeout(timeout);
        slideshow.data("wait", true);
        var transition = slideshow.attr("data-transition");
        if (transition == "fade") {
          newSlide.css({
            display: "block",
            zIndex: 2
          });
          newSlideImage.css({
            opacity: 0
          });

          TweenMax.to(newSlideImage, 1, {
            alpha: 1,
            onComplete: function() {
              newSlide.addClass("is-active").removeClass("is-new");
              activeSlide.removeClass("is-active");
              newSlide.css({ display: "", zIndex: "" });
              newSlideImage.css({ opacity: "" });
              slideshow.find(".pagination").trigger("check");
              slideshow.data("wait", false);
              if (auto) {
                timeout = setTimeout(function() {
                  slideshowNext(slideshow, false, true);
                }, slideshowDuration);
                slideshow.data("timeout", timeout);
              }
            }
          });
        } else {
          if (newSlide.index() > activeSlide.index()) {
            var newSlideRight = 0;
            var newSlideLeft = "auto";
            var newSlideImageRight = -slideshow.width() / 8;
            var newSlideImageLeft = "auto";
            var newSlideImageToRight = 0;
            var newSlideImageToLeft = "auto";
            var newSlideContentLeft = "auto";
            var newSlideContentRight = 0;
            var activeSlideImageLeft = -slideshow.width() / 4;
          } else {
            var newSlideRight = "";
            var newSlideLeft = 0;
            var newSlideImageRight = "auto";
            var newSlideImageLeft = -slideshow.width() / 8;
            var newSlideImageToRight = "";
            var newSlideImageToLeft = 0;
            var newSlideContentLeft = 0;
            var newSlideContentRight = "auto";
            var activeSlideImageLeft = slideshow.width() / 4;
          }

          newSlide.css({
            display: "block",
            width: 0,
            right: newSlideRight,
            left: newSlideLeft,
            zIndex: 2
          });

          newSlideImage.css({
            width: slideshow.width(),
            right: newSlideImageRight,
            left: newSlideImageLeft
          });

          newSlideContent.css({
            width: slideshow.width(),
            left: newSlideContentLeft,
            right: newSlideContentRight
          });

          activeSlideImage.css({
            left: 0
          });

          TweenMax.set(newSlideElements, { y: 20, force3D: true });
          TweenMax.to(activeSlideImage, 1, {
            left: activeSlideImageLeft,
            ease: Power3.easeInOut
          });

          TweenMax.to(newSlide, 1, {
            width: slideshow.width(),
            ease: Power3.easeInOut
          });

          TweenMax.to(newSlideImage, 1, {
            right: newSlideImageToRight,
            left: newSlideImageToLeft,
            ease: Power3.easeInOut
          });

          TweenMax.staggerFromTo(
            newSlideElements,
            0.8,
            { alpha: 0, y: 60 },
            { alpha: 1, y: 0, ease: Power3.easeOut, force3D: true, delay: 0.6 },
            0.1,
            function() {
              newSlide.addClass("is-active").removeClass("is-new");
              activeSlide.removeClass("is-active");
              newSlide.css({
                display: "",
                width: "",
                left: "",
                zIndex: ""
              });

              newSlideImage.css({
                width: "",
                right: "",
                left: ""
              });

              newSlideContent.css({
                width: "",
                left: ""
              });

              newSlideElements.css({
                opacity: "",
                transform: ""
              });

              activeSlideImage.css({
                left: ""
              });

              slideshow.find(".pagination").trigger("check");
              slideshow.data("wait", false);
              if (auto) {
                timeout = setTimeout(function() {
                  slideshowNext(slideshow, false, true);
                }, slideshowDuration);
                slideshow.data("timeout", timeout);
              }
            }
          );
        }
      }

      function slideshowNext(slideshow, previous, auto) {
        var slides = slideshow.find(".slide");
        var activeSlide = slides.filter(".is-active");
        var newSlide = null;
        if (previous) {
          newSlide = activeSlide.prev(".slide");
          if (newSlide.length === 0) {
            newSlide = slides.last();
          }
        } else {
          newSlide = activeSlide.next(".slide");
          if (newSlide.length == 0) newSlide = slides.filter(".slide").first();
        }

        slideshowSwitch(slideshow, newSlide.index(), auto);
      }

      function homeSlideshowParallax() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > windowHeight) return;
        var inner = slideshow.find(".slideshow-inner");
        var newHeight = windowHeight - scrollTop / 2;
        var newTop = scrollTop * 0.8;

        inner.css({
          transform: "translateY(" + newTop + "px)",
          height: newHeight
        });
      }

      $(document).ready(function() {
        $(".slide").addClass("is-loaded");

        $(".slideshow .arrows .arrow").on("click", function() {
          slideshowNext(
            $(this).closest(".slideshow"),
            $(this).hasClass("prev")
          );
        });

        $(".slideshow .pagination .item").on("click", function() {
          slideshowSwitch($(this).closest(".slideshow"), $(this).index());
        });

        $(".slideshow .pagination").on("check", function() {
          var slideshow = $(this).closest(".slideshow");
          var pages = $(this).find(".item");
          var index = slideshow.find(".slides .is-active").index();
          pages.removeClass("is-active");
          pages.eq(index).addClass("is-active");
        });

        /* Lazyloading
      $('.slideshow').each(function(){
        var slideshow=$(this);
        var images=slideshow.find('.image').not('.is-loaded');
        images.on('loaded',function(){
          var image=$(this);
          var slide=image.closest('.slide');
          slide.addClass('is-loaded');
        });
      */

        var timeout = setTimeout(function() {
          slideshowNext(slideshow, false, true);
        }, slideshowDuration);

        slideshow.data("timeout", timeout);
      });

      if ($(".main-content .slideshow").length > 1) {
        $(window).on("scroll", homeSlideshowParallax);
      }
    </script>
    <script>
      function simpleSlider() {
        var options = arguments[0] || {};
        var sliderSelector = options.selector || ".js-simple-slider";
        var sliderHiddenClass = options.classHidden || "is-hidden";
        var sliderInterval = options.interval || 12000;

        var slider = document.querySelector(sliderSelector);
        var slidesCount = slider.children.length;
        var i = 0;

        setInterval(function() {
          slider.children[i].classList.add(sliderHiddenClass);
          i++;
          if (i >= slider.children.length) {
            i = 0;
          }
          slider.children[i].classList.remove(sliderHiddenClass);
        }, sliderInterval);
      }

      simpleSlider();
    </script>

    <!-- FAV -->
    <script>
      $(".js-fav").on("click", function() {
        $(this)
          .find(".heart")
          .toggleClass("h-is-active");
      });
    </script>
  </body>
</html>

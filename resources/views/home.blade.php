@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{url('css/style.css')}}">
@endsection

@section('title')
    @lang('home.title')
@endsection

@section('meta')
    <meta name="description" content="@lang('home.description')">
    <meta name="keywords" content="@lang('home.keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@endsection

@section('content')

<div id="slider-home" class="carousel slide" data-ride="carousel" data-pause="false">
        <ul class="carousel-indicators">
            <li data-target="#slider-home" data-slide-to="0" class="active"></li>
            <li data-target="#slider-home" data-slide-to="1"></li>
            
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/slideshow/show_one.webp')}}" alt="slide_one">
            </div>
      
            <div class="carousel-item">
                <img src="{{asset('img/slideshow/show_three.webp')}}" alt="slide_two">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slider-home" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slider-home" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

<div class="about-section" id="about">
        <div class="inner-width">
          <h1>نبذة عنا</h1>
          <div class="border"></div>
          <div class="about-section-row">
            <div class="" dir="rtl">
              <div class="about content_section">
                <div class="col-md-6 col-sm-12 about-text">
                <p>
تأسست شركة دندانة للصناعات الغذائية عام ٢٠٠٤ بجهود عائلية ورأس مال متواضع، وكما هو الحال مع جميع البدايات، كانت دندانة شركة صغيرة تعتمد على خط إنتاج واحد في مبنى مستأجر، وتنتج ثلاثة أنواع فقط من رقائق البطاطس، ولديها سيارتان للتوزيع. وبفضل الرؤية الثاقبة والخبرة الإدارية والتصنيعية، تحققت الشركة بفضل الله نمو سريع، حيث شيدت مبنىً جديدًا كبيرًا وأضافت خمسة خطوط إنتاج جديدة.
</p>
<p>

جاء هذا النمو نتيجةً للابتكار والنزاهة والالتزام بالجودة وولاء جميع العاملين في دندانة، حيث تحولت شركتنا من شركة صغيرة إلى واحدة من الشركات الرائدة في مجال الصناعات الغذائية في الأردن، وتنتشر منتجاتها (أربعة عشر منتجًا رئيسيًا) في جميع أنحاء المملكة من الشمال إلى الجنوب، بفضل أسطول التوزيع ومندوبي المبيعات الأكفاء.
</p>
              </div>

              <div class="col-md-6 col-sm-12 about-image">
                <img src="{{asset('img/about_img.webp')}}" alt="about_us_image">
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  <div class="product-section" id="products">
          
          <h1>منتجاتنا</h1>
          <div class="border"></div>
      <section class="sliding-sprite"
         data-speed="60"
         data-direction="right"
         aria-label="Scrolling image strip">

  <div class="sprite-track">
    <figure>
       <a href="#"
         data-mobile-tooltip="true">
        <img
          src="{{asset('img/products/chipsOne.png')}}"
          alt="product_one">
      </a>
    </figure>

    <figure>
      <a href="#"
         data-mobile-tooltip="true">
        <img
          src="{{asset('img/products/chipsTwo.png')}}"
          alt="product_two">
      </a>
    </figure>

    
    <figure>
      <a href="#"
         data-mobile-tooltip="true">
        <img
          src="{{asset('img/products/chipsThree.png')}}"
          alt="product_three">
      </a>
    </figure>

   
    <figure>

    <a href="#"
         target="_blank"
         rel="noopener"
         data-mobile-tooltip="true">
        <img
          src="{{asset('img/products/chipsFour.png')}}"
          alt="product_four">
      </a>
     
    </figure>

    <figure>
      <a href="#"
         data-mobile-tooltip="true">
       <img
          src="{{asset('img/products/chipsFive.png')}}"
          alt="product_five">
      </a>
    </figure>

    <figure>
      <a href="#"
         data-mobile-tooltip="true">
       <img
          src="{{asset('img/products/chipsSix.png')}}"
          alt="product_six">
      </a>
    </figure>

    <figure>
      <a href="#"
         data-mobile-tooltip="true">
       <img
          src="{{asset('img/products/chipsEight.png')}}"
          alt="product_eight">
      </a>
    </figure>

    <figure>
      <a href="#"
         data-mobile-tooltip="true">
       <img
          src="{{asset('img/products/chipsSeven.png')}}"
          alt="product_seven">
      </a>
    </figure>



    <figure>
      <a href="#"
         data-mobile-tooltip="true">
       <img
          src="{{asset('img/products/chipsNine.png')}}"
          alt="product_nine">
      </a>
    </figure>

  </div>
</section>
</div>

<div class="contact-section" id="aontact">
<div class="inner-width">
<h1>تواصل معنا</h1>
<div class="border"></div>
<div class="contact-section-row">
<div class="" dir="rtl">
              
                
 <p style="color:#fff;">
لأي استفسارات أو ملاحظات، لا تتردد في التواصل معنا عبر الوسائل التالية:
 </p>
 <ul class="type3">
<li><i class="fa fa-phone"></i>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  064164428 </li>
<li><i class=" fa fa-envelope"></i>
<a href="mailto:info@dandana.jo" title="Write a E-Mail">  info@dandana.jo</a></li>
</ul>
             

              
<div class="mapouter" style="position:relative; text-align:right;">
  <div class="gmap_canvas" style="overflow:hidden; background:none!important; height:350px;">
    <iframe width="500px" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?q=%D8%AF%D9%86%D8%AF%D9%86%D8%A9%20%D8%B4%D9%8A%D8%A8%D8%B3&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
  </div>
  <a href="https://norsumediagroup.com/embed-google-map-website-free" target="_blank" rel="noopener noreferrer" class="gme-generated-link">Embed Map on Website for Free</a>
  <style>
   .mapouter{position:relative;text-align:right;} .gmap_canvas{overflow:hidden;background:none!important;} .gmap_canvas iframe{width:100%;height:100%;} .mapouter a{display:block;font-size:0.85em;text-align:center;padding:5px 0;color:#6c757d;text-decoration:none;} .gme-generated-link{display:none!important;}
  </style>
</div>
              
             </div>
            </div>
        </div>
      </div>



@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script>
(function ($) {
  $.fn.menumaker = function (options) {
    var cssmenu = $(this),
      settings = $.extend(
        {
          format: "dropdown",
          sticky: false
        },
        options
      );
    return this.each(function () {
      $(this)
        .find(".button")
        .on("click", function () {
          $(this).toggleClass("menu-opened");
          var mainmenu = $(this).next("ul");
          if (mainmenu.hasClass("open")) {
            mainmenu.slideToggle().removeClass("open");
          } else {
            mainmenu.slideToggle().addClass("open");
            if (settings.format === "dropdown") {
              mainmenu.find("ul").show();
            }
          }
        });
      cssmenu.find("li ul").parent().addClass("has-sub");
      multiTg = function () {
        cssmenu
          .find(".has-sub")
          .prepend('<span class="submenu-button"></span>');
        cssmenu.find(".submenu-button").on("click", function () {
          $(this).toggleClass("submenu-opened");
          if ($(this).siblings("ul").hasClass("open")) {
            $(this).siblings("ul").removeClass("open").slideToggle();
          } else {
            $(this).siblings("ul").addClass("open").slideToggle();
          }
        });
      };
      if (settings.format === "multitoggle") multiTg();
      else cssmenu.addClass("dropdown");
      if (settings.sticky === true) cssmenu.css("position", "fixed");
      resizeFix = function () {
        var mediasize = 1000;
        if ($(window).width() > mediasize) {
          cssmenu.find("ul").show();
        }
        if ($(window).width() <= mediasize) {
          cssmenu.find("ul").hide().removeClass("open");
        }
      };
      resizeFix();
      return $(window).on("resize", resizeFix);
    });
  };
})(jQuery);

(function ($) {
  $(document).ready(function () {
    $("#cssmenu").menumaker({
      format: "multitoggle"
    });
  });
})(jQuery);
</script>

<script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>


<script>
(function () {

  // Public init – call after load, Barba transitions, or AJAX updates
  function initSlidingSprites() {
    if (!window.gsap) return;

    const sections = gsap.utils.toArray(".sliding-sprite");
    if (!sections.length) return;

    sections.forEach(setupSprite);
  }

  function setupSprite(section) {
    const track = section.querySelector(".sprite-track");
    if (!track) return;

    // Kill any existing tween for this section
    if (section.__tween) {
      section.__tween.kill();
      section.__tween = null;
    }

    // Reset transform
    gsap.set(track, { x: 0 });

    // ===== Ensure images are loaded (lazy-load safe) =====
    const images = track.querySelectorAll("img");
    if (images.length) {
      const allLoaded = Array.from(images).every(img => img.complete);

      // If not all images are loaded, wait and retry once they are
      if (!allLoaded) {
        if (section.__waitingForImages) return; // already set up listeners

        section.__waitingForImages = true;

        const onImgLoad = () => {
          const done = Array.from(images).every(img => img.complete);
          if (!done) return;

          images.forEach(img => img.removeEventListener("load", onImgLoad));
          section.__waitingForImages = false;
          setupSprite(section); // re-run now that widths are correct
        };

        images.forEach(img => img.addEventListener("load", onImgLoad));
        return;
      }
    }

    // ===== Clean up any prior duplication =====
    let figures = Array.from(track.querySelectorAll("figure"));
    if (!figures.length) return;

    if (section.__duplicated && section.__originalCount) {
      // Remove everything after the original set
      figures.slice(section.__originalCount).forEach(f => f.remove());
      figures = Array.from(track.querySelectorAll("figure"));
    }

    // Remember original figure count for future re-inits
    section.__originalCount = figures.length;

    // ===== Duplicate once for seamless loop =====
    figures.forEach(fig => {
      const clone = fig.cloneNode(true);
      clone.setAttribute("aria-hidden", "true");
      track.appendChild(clone);
    });

    section.__duplicated = true;

    // ===== Measure scroll distance =====
    const totalWidth = track.scrollWidth;
    if (!totalWidth) return;

    const distance = totalWidth / 2; // one full sequence

    // ===== Speed & direction =====
    let baseSpeed = parseFloat(section.dataset.speed) || 80;
    const isMobile = window.innerWidth <= 768;
    const speed = isMobile ? baseSpeed * 0.7 : baseSpeed; // slow a bit on mobile
    const duration = distance / speed; // seconds

    const direction = (section.dataset.direction || "left").toLowerCase();
    let fromX, toX;

    if (direction === "right") {
      fromX = -distance;
      toX = 0;
    } else {
      // default: left
      fromX = 0;
      toX = -distance;
    }

    const tween = gsap.fromTo(
      track,
      { x: fromX },
      {
        x: toX,
        duration,
        ease: "none",
        repeat: -1
      }
    );

    section.__tween = tween;

    // ===== Re-bind tooltips for cloned links =====
    // Safe to call multiple times; the tooltip initializer
    // ignores elements that are already bound.
    if (window.initSpriteTooltips) {
      window.initSpriteTooltips();
    }

    // ===== Hover pause (bind once) =====
    if (!section.__hoverBound) {
      section.addEventListener("mouseenter", () => {
        if (section.__tween) section.__tween.pause();
      });

      section.addEventListener("mouseleave", () => {
        if (section.__tween) section.__tween.play();
      });

      section.__hoverBound = true;
    }
  }

  // Expose global init for Barba / AJAX
  window.initSlidingSprites = initSlidingSprites;

  // Initial run on load
  window.addEventListener("load", initSlidingSprites);

  // Rebuild on resize (debounced)
  let resizeTimeout;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      initSlidingSprites();
    }, 200);
  });


})();




(function () {
  let tooltipEl;
  let hideTimeout = null;
  let activeTrigger = null;
  let docClickBound = false;

  function ensureTooltipElement() {
    if (!tooltipEl) {
      tooltipEl = document.createElement("div");
      tooltipEl.className = "sprite-tooltip";
      document.body.appendChild(tooltipEl);
    }
  }

  function hideTooltip() {
    if (!tooltipEl) return;
    tooltipEl.classList.remove("is-visible");
  }

  // Desktop: follow mouse near cursor
  function positionTooltip(x, y) {
    if (!tooltipEl) return;

    const offsetX = 18;
    const offsetY = 20;
    const margin  = 12;

    let left = x + offsetX;
    let top  = y + offsetY;

    const rect = tooltipEl.getBoundingClientRect();
    const vw = window.innerWidth;
    const vh = window.innerHeight;

    // Right edge
    if (left + rect.width + margin > vw) {
      left = x - rect.width - offsetX;
      if (left < margin) left = margin;
    }

    // Bottom edge
    if (top + rect.height + margin > vh) {
      top = y - rect.height - offsetY;
      if (top < margin) top = margin;
    }

    tooltipEl.style.left = left + "px";
    tooltipEl.style.top  = top + "px";
    // Let CSS handle transform for desktop
  }

  // Mobile: center tooltip in viewport
  function showCenteredTooltip(text) {
    if (!tooltipEl) return;

    if (hideTimeout) {
      clearTimeout(hideTimeout);
      hideTimeout = null;
    }

    tooltipEl.textContent = text;
    tooltipEl.style.left = "50%";
    tooltipEl.style.top = "50%";
    tooltipEl.style.transform = "translate(-50%, -50%)";
    tooltipEl.classList.add("is-visible");
  }

  function initSpriteTooltips() {
    ensureTooltipElement();

    const nodes = document.querySelectorAll("[data-tooltip]");
    if (!nodes.length) return;

    const prefersNoHover =
      window.matchMedia &&
      window.matchMedia("(hover: none)").matches;

    nodes.forEach(node => {
      // Avoid duplicate binding on re-init
      if (node.dataset.tooltipBound === "true") return;
      node.dataset.tooltipBound = "true";

      const text = node.dataset.tooltip;
      if (!text) return;

      if (!prefersNoHover) {
        // ===== DESKTOP / HOVER DEVICES =====
        node.addEventListener("mouseenter", (e) => {
          if (hideTimeout) {
            clearTimeout(hideTimeout);
            hideTimeout = null;
          }

          tooltipEl.textContent = text;
          tooltipEl.classList.add("is-visible");
          positionTooltip(e.clientX, e.clientY);
        });

        node.addEventListener("mouseleave", () => {
          hideTimeout = setTimeout(() => {
            hideTooltip();
          }, 80);
        });

        node.addEventListener("mousemove", (e) => {
          positionTooltip(e.clientX, e.clientY);
        });

      } else {
        // ===== MOBILE / TOUCH DEVICES =====
        const mobileEnabled = node.dataset.mobileTooltip === "true";
        if (!mobileEnabled) return;

        node.addEventListener("click", (e) => {
          const isLink = node.tagName.toLowerCase() === "a";

          const isVisible = tooltipEl.classList.contains("is-visible");
          if (activeTrigger === node && isVisible) {
            // Second tap on same trigger:
            activeTrigger = null;
            hideTooltip();
            // For links: allow default navigation
            if (isLink) return;
          } else {
            // First tap: show tooltip, prevent nav
            e.preventDefault();
            activeTrigger = node;
            showCenteredTooltip(text);
          }
        });
      }
    });

    // Global click to close tooltip on mobile when tapping outside
    if (prefersNoHover && !docClickBound) {
      docClickBound = true;

      document.addEventListener("click", (e) => {
        if (!tooltipEl) return;
        const isVisible = tooltipEl.classList.contains("is-visible");
        if (!isVisible) return;

        if (
          (activeTrigger && activeTrigger.contains(e.target)) ||
          tooltipEl.contains(e.target)
        ) {
          return;
        }

        activeTrigger = null;
        hideTooltip();
      });
    }
  }

  // Expose for Barba / AJAX and for the sprite script
  window.initSpriteTooltips = initSpriteTooltips;

  // Init on load
  window.addEventListener("load", initSpriteTooltips);


})();

  </script>
   

@endsection
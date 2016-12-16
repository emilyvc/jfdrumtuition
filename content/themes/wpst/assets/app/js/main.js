/**
 * Title:
 *    Main Javascript
 * Description:
 *    The main Javascript file where you will write the bulk
 *    of your scripts. Make sure to include this just before
 *    the closing </body> tag.
 * Sections:
 *    $. Your Scripts
 *    $. Grunticon Loader
 */



/* $. Your Scripts - To go within the SIAF (Self invoking annonymous function)
\*----------------------------------------------------------------*/

(function($) {

      /**
     * Set variable to pool DOM only once.
     */
    var body            = $('body');
    var toggleGallery   = $('.js-toggle-gallery');
    var closeGallery    = $('.js-close-gallery');
    var gallery         = $('.js-gallery');
    var albums         = $('.js-albums');

    /**
     * Setup 'CustomSelect' plugin on all Select elements
     */
    if(!$('html').hasClass('ie')) {
        $("select").each(function() {
            new CustomSelect($(this));
        });
    }

    /**
     * Mobile nav toggle
     */
    $('#mobile-nav-toggle').click(function(){
        $('body').toggleClass('is-active-nav');
        $(this).toggleClass('icon--menu-open').toggleClass('icon--menu-close');
    });

   /**
    * Create new gallery instance for Gallery
    */
   
   // On before slide change
   gallery.on('beforeChange', function(event, slick, currentSlide, nextSlide){
     console.log(nextSlide);
   });

   /**
    * Toggle Gallery
    */
   toggleGallery.on('click', function(e) {
       var skipToSlide = $(this).attr("id");
       body.toggleClass('is-active-gallery');

       gallery.slick({
           arrows: true,
           fade: true,
           appendArrows: $('.gallery__nav'),
           prevArrow: '<span class="icon icon--prev | gallery__nav-left"></span>',
           nextArrow: '<span class="icon icon--next | gallery__nav-right"></span>',
           infinite: true,
           lazyLoad: 'progressive',
           // respondTo: 'slider'
       });
   
       console.log(" Skip to slide number " + skipToSlide);
       gallery.slick('slickGoTo', skipToSlide, 1);

       e.preventDefault();
   });


   /**
    * Close Product Gallery with general click outside element
    */
   if(closeGallery.length) {
       $('body').on('mouseenter', '.gallery__container', function(e) {
            $(this).closest('.mixd-gallery').removeClass('is-hover');
        });
        $('body').on('mouseleave', '.gallery__container', function(e) {
            $(this).closest('.mixd-gallery').addClass('is-hover');
        });
        $('body').on('click', '.mixd-gallery.is-hover', function(e) {
            body.toggleClass('is-active-gallery');
            gallery.slick('unslick');
            e.preventDefault();
        });
   }

    /**
     * Create new gallery instance for Gallery
     */
    albums.slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      arrows: false,
      dots: true
    });


})(jQuery);



/* $. Grunticon Load
\*----------------------------------------------------------------*/

grunticon([ "/content/themes/wpst/assets/dist/grunticon/icons.data.svg.css", "/content/themes/wpst/assets/dist/grunticon/icons.data.png.css", "/content/themes/wpst/assets/dist/grunticon/icons.fallback.css" ]);

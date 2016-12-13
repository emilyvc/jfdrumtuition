<?php

/**
 ***************************************************************************
 * Partial: Gallery List - Lightbox
 ***************************************************************************
 *
 * This partial is used to list the gallery images for galleries.
 *
 */

$gallery = get_field('gallery_images');

if($gallery) :
?>



    <article class="mixd-gallery | property__gallery | is-hover">
        <div class="gallery__inner">
            <a href="#" class="gallery__icon | js-close-gallery">
                <span class="modal__close icon icon--large icon--modal-close"></span>
            </a>

            <div class="container | gallery__container">

                <ul class="gallery__slides | js-gallery">
                    <?php foreach($gallery as $k => $i): ?>
                        <?php $image = $i['gallery_image']['sizes']['gallery'] ? $i['gallery_image']['sizes']['gallery'] : $i['gallery_image']['url']; ?>

                        <li class="gallery__item" style="background-image:url('<?php echo $image; ?>');" data-caption="<?php echo $i['caption']; ?>"></li>
                        
                    <?php endforeach; ?>                   
                </ul>
                <nav class="gallery__nav"></nav>
                        <div class="gallery__caption"></div>
                
            </div> <!-- /.container -->
        </div> <!-- /.gallery__inner -->
    </article>

<?php endif; ?>

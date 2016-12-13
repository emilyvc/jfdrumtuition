<?php

/**
 ***************************************************************************
 * Partial: Gallery List
 ***************************************************************************
 *
 * This partial is used to list the gallery images for galleries.
 *
 */

$gallery = get_field('gallery_images');

if($gallery) :
?>
    <ul class="gallery-list">
        <?php foreach($gallery as $k => $gallery_item) : ?>
            <li class="gallery-list__item">
                <a href="#" class="gallery-list__link | js-toggle-gallery" id="<?php echo $k; ?>">
                    <img src="<?php echo $gallery_item['gallery_image']['sizes']['medium']; ?>" alt="<?php echo $gallery_item['caption']; ?>" class="gallery-list__image">
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

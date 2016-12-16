<?php

/**
 ***************************************************************************
 * Partial: Videos
 ***************************************************************************
 *
 * This partial is used to list the gallery images for galleries.
 *
 */

$videos = get_field('videos');


if($videos) :
?>

    <?php foreach ($videos as $v): ?>
        <div class="grid__item grid__item--6-12-bp3">
             <a href="https://www.youtube.com/watch?v=<?php echo $v['video_url']; ?>" class="article article--section">
                <?php ?>
                <div class="article__image-social">
                    <div class="flexible | u-push-top">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $v['video_url']; ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>

<?php endif; ?>

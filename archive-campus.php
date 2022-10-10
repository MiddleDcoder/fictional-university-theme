<?php

get_header();
pageBanner(array(
    'title' => 'Our Campuses',
    'subtitle' => 'We have several conveniently located campuses.'
));
?>


<div class="container container--narrow page-section">

    <ul class="link-list min-list">
        <?php
        while (have_posts()) {
            the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title();
                                                    $mapLocation = get_field('map_location');
                                                    echo    $mapLocation['address'];
                                                    ?></a></li>
        <?php  }
        echo paginate_links();
        ?>
    </ul>

</div>


<?php get_footer();

?>
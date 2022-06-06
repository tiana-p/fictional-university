<?php

get_header(); 

pageBanner(array(
    'title' => 'All Campuses',
    'subtitle' => 'We have several conveniently located campuses'
 ))
?>


<div class="container container--narrow page-section">

<div class="acf-map">

<?php
  while(have_posts()) {
    the_post(); 
    $mapLocation = get_field('map_location');

    ?>
    <div class="marker" data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
        <h3><?php the_title(); ?></h3>
        <a href="<?php the_permalink(); ?>"><?php echo $mapLocation['address']; ?></a>
    </div>

  <?php }?>
</div>



</div>

<?php get_footer();

?>
<!--banner-slider-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<?php
	$banners = service('webly')->getBanners();
?>
  <div class="carousel-inner">
  <?php foreach($banners as $i => $banner): ?>

    <div class="carousel-item <?= $i==0 ? 'active' : '' ?>">
      <img class="d-block w-100" src="/<?= $banner->banner_image ?>" alt="<?= $banner->caption ?>">
    </div>
	<?php endforeach ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
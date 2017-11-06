<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <?php foreach ($carouselImages as $key => $value): ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key ?>" class="<?php if($key == 0) echo "active" ?>"></li>
    <?php endforeach; ?>
  </ol>

  <div class="carousel-inner" role="listbox">

    <?php foreach ($carouselImages as $key => $image):  ?>
      <div class="<?php echo ($key == 0) ? "carousel-item active" : "carousel-item"  ?>">
        <img class="d-block img-fluid" src="<?php echo "static/images/". $image ?>" alt="<?php echo $image ?>">
      </div>
    <?php endforeach; ?>

  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>

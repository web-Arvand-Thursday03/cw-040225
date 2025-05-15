<?php 

$sliders=$connection->query("SELECT * FROM posts_slider,posts WHERE posts.id=posts_slider.post_id");
// var_dump($sliders->fetchAll());



?>
<section>
    <div id="carousel" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner rounded">
            <?php foreach($sliders as $slider):?>
            <div class="carousel-item overlay carousel-height <?= $slider['active']==1?"active":"" ?>">
                <img src="./assets/images/<?= $slider['image'] ?>" class="d-block w-100" alt="post-image" />
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $slider['title'] ?></h5>
                    <p><?= substr($slider['body'],0,100)."..." ?></p>
                </div>
            </div>
            <?php endforeach?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>



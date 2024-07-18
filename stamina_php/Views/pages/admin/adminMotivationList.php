
    <div class="container">
        <?php foreach($data as $motivation): ?>
            <div class="row">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $motivation['image'] ?>" class="img-fluid rounded-start" alt="image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $motivation['theme'] ?></h5>
                                <p class="card-text"><?php echo $motivation['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


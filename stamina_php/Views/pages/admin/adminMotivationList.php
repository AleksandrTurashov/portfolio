
    <div class="container motivation-section">
        <?php if(isset($_GET['request']) && $_GET['request'] == "success"): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success! Motiovation was changed</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php foreach($data as $motivation): ?>
            <div class="row">
                
                <div class="card motivation-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $motivation['image'] ?>" class="img-fluid rounded-start" alt="image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $motivation['theme'] ?></h5>
                                <p class="card-text"><?php echo $motivation['description'] ?></p>
                            </div>
                            <div>
                                <a href="<?php echo 'http://'.HOST.'/'.PREF.'?route=admin/motivationInfo&id='.$motivation['id'] ?>" class="edit-line"><i class="fa-solid fa-pencil"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    
    <?php 
        include_once("Controllers/AdminController.php");
        if(!empty($_POST)){
            $action = new AdminController;
            $result = $action->motivationEditAction($_POST);
        }
    ?>

        <div class="container sectionEdit">
            <div class="row">
                
                <?php if(isset($_GET['request']) && $_GET['request'] == 'error'): ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>You should check in on some of those fields below.</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <form class="row g-3" method="post" action="?route=admin/motivationInfo&id=<?php echo $data[0]['id']?>">
                    <input type="hidden" name="id" value="<?php echo $data[0]['id']?>">
                    <div class="col-md-6">
                        <label for="inputTheme" class="form-label">theme</label>
                        <input type="text" class="form-control" id="inputTheme" name="theme" value="<?php echo $data[0]['theme']?>">
                    </div>
                        <label for="inputDescription" class="form-label">description</label>
                        <textarea class="form-control" id="inputDescription" name="description"><?php echo $data[0]['description']?></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-secondary">send</button>
                    </div>
                </form>
            </div>
        </div>

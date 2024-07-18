<?php 
    include_once("Controllers/AdminController.php");
    if(!empty($_POST)){
        $action = new AdminController;
        $result = $action->serviceEditAction($_POST);
    }
?>

    <div class="container serviceEdit-section">
        <img src="<?php echo $data[0]['image']?>" class="img-thumbnail" alt="image">
        <div class="row">
            
            <?php if(isset($_GET['request']) && $_GET['request'] == 'error'): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>You should check in on some of those fields below.</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <form class="row g-3" method="post" action="?route=admin/serviceInfo&id=<?php echo $data[0]['id']?>">
                <input type="hidden" name="id" value="<?php echo $data[0]['id']?>">
                <div class="col-md-6">
                    <label for="inputName" class="form-label">name</label>
                    <input type="text" class="form-control" id="inputName" name="item" value="<?php echo $data[0]['item']?>">
                </div>
                <div class="col-md-9">
                    <label for="inputDescription" class="form-label">description</label>
                    <textarea class="form-control" id="inputDescription" name="description"><?php echo $data[0]['description']?></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-secondary">send</button>
                </div>
            </form>
        </div>
    </div>

   


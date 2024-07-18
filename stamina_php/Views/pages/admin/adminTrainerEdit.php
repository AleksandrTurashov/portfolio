<?php 
    include_once("Controllers/AdminController.php");
    if(!empty($_POST)){
        $action = new AdminController;
        $result = $action->trainerEditAction($_POST);
    }
?>

    <div class="container trainerEdit">
        <div class="row">
            
            <?php if(isset($_GET['request']) && $_GET['request'] == 'error'): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>You should check in on some of those fields below.</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <form class="row g-3" method="post" action="?route=admin/trainerInfo&id=<?php echo $data[0]['id']?>">
                <input type="hidden" name="id" value="<?php echo $data[0]['id']?>">
                <div class="col-md-6">
                    <label for="inputName" class="form-label">name</label>
                    <input type="text" class="form-control" id="inputName" name="name" value="<?php echo $data[0]['name']?>">
                </div>
                <div class="col-md-6">
                    <label for="inputSurname" class="form-label">surname</label>
                    <input type="text" class="form-control" id="inputSurname" name="surname" value="<?php echo $data[0]['surname']?>">
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

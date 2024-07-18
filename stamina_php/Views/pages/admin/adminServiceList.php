


    <div class="container services-section">
        <div class="row">
            <?php if(isset($_GET['request']) && $_GET['request'] == "success"): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success! Service was changed</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">photo</th>
                    <th scope="col">service</th>
                    <th scope="col">description</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $service): ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $service['item']; ?></td>
                            <td><?php echo $service['description'] ?></td>
                            <td><a href="<?php echo 'http://'.HOST.'/'.PREF.'?route=admin/serviceInfo&id='.$service['id'] ?>" class="edit-line"><i class="fa-solid fa-pencil"></i></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container section-list">
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
                    <th scope="col">name</th>
                    <th scope="col">title</th>
                    <th scope="col">small title</th>
                    <th scope="col">description</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $section): ?>
                        <tr>
                            <th scope="row"><?php echo $section['name']; ?></th>
                            <td><?php echo $section['title']; ?></td>
                            <td><?php echo $section['sm_title']; ?></td>
                            <td><?php echo $section['description'] ?></td>
                            <td><a href="<?php echo 'http://'.HOST.'/'.PREF.'?route=admin/sectionInfo&id='.$section['id'] ?>" class="edit-line"><i class="fa-solid fa-pencil"></i></a></td>
                        </tr>
                    <?php endforeach ?>
                    
                </tbody>
            </table>

            
        </div>
    </div>

    <div class="container trainer-section">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">photo</th>
                    <th scope="col">name</th>
                    <th scope="col">surname</th>
                    <th scope="col">description</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $trainer): ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $trainer['name']; ?></td>
                            <td><?php echo $trainer['surname']; ?></td>
                            <td><?php echo $trainer['description']; ?></td>
                            <td><a href="<?php echo 'http://'.HOST.'/'.PREF.'?route=admin/sectionInfo&id='.$section['id'] ?>" class="edit-line"><i class="fa-solid fa-pencil"></i></a></td>
                        </tr>
                    <?php endforeach ?>
                    
                </tbody>
            </table>

            
        </div>
    </div>
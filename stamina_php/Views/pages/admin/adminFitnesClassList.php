
    <div class="container">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">photo</th>
                    <th scope="col">Class</th>
                    <th scope="col">trainer</th>
                    <th scope="col">duration</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $fitnesClass): ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $fitnesClass['class_name']; ?></td>
                            <td><?php echo $fitnesClass['trainer_name']." ".$fitnesClass['trainer_surname']; ?></td>
                            <td><?php echo $fitnesClass['class_duration']; ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <?php endforeach ?>
                    
                </tbody>
            </table>
        </div>
    </div>
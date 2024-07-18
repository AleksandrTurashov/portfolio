<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="recources/css/adminstyle.css">
	<link rel="stylesheet" href="recources/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Stamina Admin</title>
</head>
<body>
    
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="<?php echo 'http://'.HOST.'/'.PREF.'?route=admin/admin' ?>">Stamina</a>
                            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="<?php echo 'http://'.HOST.'/'.PREF.'?route=admin/admin' ?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo 'http://'.HOST.'/'.PREF.'?route=admin/trainers' ?>">Trainers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo 'http://'.HOST.'/'.PREF.'?route=admin/fitnesClasses' ?>">Classes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo 'http://'.HOST.'/'.PREF.'?route=admin/services' ?>">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo 'http://'.HOST.'/'.PREF.'?route=admin/sections' ?>">Sections</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo 'http://'.HOST.'/'.PREF.'?route=admin/motivation' ?>">Motivation</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-2">
                    <h3>admin</h3>
                    <button type="button" class="btn btn-secondary">sign uot</button>
                </div>
            </div>
        </div>
        <?php include_once($page); ?>

</body>
</html>
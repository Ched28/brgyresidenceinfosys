<?php
    use app\core\Application;

    var_dump(Application::$app->username);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://kit.fontawesome.com/c66fb07322.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/jquery.signature.min.js"></script>
    <link rel="icon" href="assets/img/logo.png">

    <link rel="stylesheet" type="text/css" href="assets/css/jquery.signature.css">
    <title>Resident Information System</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 side-menu">
                <ul>
                    
                    <li><i class="fa-solid fa-chart-line ps-2"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/">DASHBOARD</a></li>
                    <li><i class="fa-solid fa-people-roof ps-2"></i>&nbsp;&nbsp;&nbsp;&nbsp;RESIDENT</li>
                    <li><i class="fa-solid fa-user-plus ps-2"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/AddResident">ADD </a></li>
                    <li><i class="fa-solid fa-user-pen ps-2"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/EditResident">EDIT </a></li>
                    <li><i class="fa-solid fa-magnifying-glass ps-2">&nbsp;&nbsp;&nbsp;&nbsp;</i>SEARCH </li>
                    <li><i class="fa-solid fa-id-card ps-2"></i>&nbsp;&nbsp;&nbsp;&nbsp;REQUEST ID </li>
                    <li><i class="fa-solid fa-user ps-2"></i>&nbsp;&nbsp;&nbsp;&nbsp;PROFILE </li>
                </ul>

            </div>
            <div class="col-lg-10 p-0">
                <?php if(Application::$app->session->getFlash('success')): ?>
                <div class="alert alert-success s-msg">

                        <?php echo Application::$app->session->getFlash('success')?>
                </div>
                <?php endif; ?>
                {{content}}
            </div>

    </div>
 
    
    </div>

</body>


</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/c66fb07322.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 side-menu">
                <ul>
                    
                    <li><a href="/">DASHBOARD<i class="fa-solid fa-chart-line ps-2"></i></a></li>
                    <li>RESIDENT<i class="fa-solid fa-people-roof ps-2"></i></li>
                    <li><a href="/AddResident">ADD <i class="fa-solid fa-user-plus ps-2"></i></a></li>
                    <li><a href="/EditResident">EDIT <i class="fa-solid fa-user-pen ps-2"></i></a></li>
                    <li>SEARCH <i class="fa-solid fa-magnifying-glass ps-2"></i></li>
                    <li>REQUEST ID <i class="fa-solid fa-id-card ps-2"></i></li>
                    <li>PROFILE <i class="fa-solid fa-user ps-2"></i></li>
                </ul>

            </div>
            <div class="col-lg-10 p-0">
                {{content}}
            </div>
    </div>
 
    
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>
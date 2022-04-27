<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/style.css">

    <title>Dashboard</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 side-menu">
                <ul>
                    <li><a href="/">DASHBOARD</a></li>
                    <li>RESIDENT</li>
                    <li><a href="/AddResident">ADD</a></li>
                    <li><a href="/EditResident">EDIT</a></li>
                    <li>SEARCH</li>
                    <li>REQUEST FOR ID</li>
                    <li>PROFILE</li>
                </ul>

            </div>
            <div class="col-lg-10">
                {{content}}
            </div>
    </div>
 
    
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>
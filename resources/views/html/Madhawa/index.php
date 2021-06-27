<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

            <div class="container">

                <form action="php/create.php" 
                      method="post">

                            <h4 class="display-4 text-center">Create</h4><hr><br>

                            <?php if(isset($_GET['error']))  {?>

                            <div class="alert alert-danger" role="alert">
                              <?php echo $_GET['error'];?>
                            </div>
                            
                            <?php } ?>

                            <div class="form-group mb-3">
                                <label for="name" >Name </label>
                                <input type="text" 
                                       class="form-control" 
                                       id="name"
                                       value="<?php if(isset($_GET['name']))
                                                       echo($_GET['name']); ?>"
                                       name="name"
                                       placeholder="Enter your name">

                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email </label>
                                <input type="email" 
                                       class="form-control" 
                                       id="email"
                                       value="<?php if(isset($_GET['email']))
                                                       echo($_GET['email']); ?>"
                                       name="email"
                                       placeholder="Enter your email">

                            </div>

                            <button type="submit" 
                                    class="btn btn-primary"
                                    name="create">Create</button>

                            <a href="" class="link-primary"> View </a>

                            
                        
                </form>

            </div>
            

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include '../title/title.php' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../boot/css/mdb.min.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include '../banner/banner.php'; ?>
    <div class="container" style="margin-top:3rem;">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="loginCheck.php" method="post">

                    <div class="admintext">
                        Admin Login
                    </div>
                    <hr>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="user" placeholder="Useranme" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" name="pass" placeholder="Password" required>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" name="" id="" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <?php include '../title/footer.php' ?>

</body>

</html>
<?php
include 'db.php';
session_start();

$query = "SELECT * FROM  jonogon";
$users = mysqli_query($db, $query);

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="vh-100 d-flex justify-content-center align-items-center">
        <div class="card w-50 shadow">
            <div class="card-body">
                <h1 class="bg-success text-danger p-2">
                    Joy Bangla
                </h1>

                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo $_SESSION['message'] ?>
                    </div>


                <?php } ?>

                <hr>
                <form action="action.php" method="post">

                    <div class='form-group'>
                        <label for='name'>Name</label>
                        <input type='text' value='' id='name' class='form-control' placeholder='Name' name='name'>
                    </div>
                    <div class='form-group'>
                        <label for='phone'>Phone</label>
                        <input type='text' value='' id='phone' class='form-control' placeholder='Phone' name='phone'>
                    </div>
                    <div class='form-group'>
                        <label for='email'>Email</label>
                        <input type='email' value='' id='email' class='form-control' placeholder='Email' name='email'>
                    </div>
                    <div class='form-group'>
                        <label for='password'>Password</label>
                        <input type='password' value='' id='password' class='form-control' placeholder='Password' name='password'>
                    </div>
                    <input type="submit" class="btn btn-primary mt-2" name="submit" value="Submit">
                </form>
                <hr>
                <table class="table">
                    <tr>
                        <th>
                            id
                        </th>
                        <th>
                            name
                        </th>
                        <th>

                            email
                        </th>
                        <th>
                            phone
                        </th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($users) > 0) {

                        while ( $user = mysqli_fetch_assoc($users)) {
                    ?>
                            <tr>
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['phone'] ?></td>

                            </tr>
                        <?php
                        }
                    } else {


                        ?>
                        <tr>
                            <td colspan="4">
                                <h1>
                                    Nothing
                                </h1>
                            </td>

                        </tr>

                    <?php } ?>
                </table>

            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
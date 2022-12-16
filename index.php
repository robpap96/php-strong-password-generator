<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSW GENERATOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h1>password generator</h1>
        <form class="mb-3" action="generator.php" method="GET">
            <div class="mb-3">
                <label for="password-length" class="form-label">Lunghezza password</label>
                <input type="number" class="form-control" id="password-length" name="length" value="<?php echo $_GET['length'] ?>" min="4" max="32" required>
            </div>

            <button type="submit" class="btn btn-primary">Genera</button>
        </form>

        <?php  if($_SESSION['error']) :?>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <?php echo $S_SESSION['error']; ?>
                </div>
            </div>

        <?php endif; ?>
    </div>
</body>
</html>
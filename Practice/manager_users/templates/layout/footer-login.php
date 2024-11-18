<?php

// Kiểm tra hằng số có tồn tại hay không 
if (!defined('_CODE')) die('Access denied...');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Footer</title>
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/bootstrap.min.css">
</head>
<body>
    <!-- Main Content -->
    <!-- <h1>Footer Login Example</h1> -->

    <!-- Footer -->
    <footer class="bg-light text-center text-muted py-3 mt-5 border-top">
        <div class="container">
            <p class="mb-0">© <?php echo date('Y'); ?> MyApp. All Rights Reserved.</p>
            <small>Built with love by MyApp Team.</small>
        </div>
    </footer>

    <!-- JavaScript Files -->
    <script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

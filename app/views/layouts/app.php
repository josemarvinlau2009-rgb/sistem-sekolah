<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="min-h-screen flex flex-col bg-gray-100">
<!-- Header -->
 <?php require_once '../app/views/layouts/partials/header.php'?>
 <!-- End of Header -->
    <!-- Main Content -->
    <main class="grow container mx-auto">
        <?php require_once $content ?>
    </main>
    <!-- End of Main Content -->
<!-- Footer -->
 <?php require_once '../app/views/layouts/partials/footer.php'?>

 <!-- End of Footer -->
</body>
</html>
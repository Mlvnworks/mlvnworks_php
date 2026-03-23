<?php
$allowedPages = [];
$pageFiles = glob(__DIR__ . '/../pages/*.php') ?: [];
$normalizedContent = preg_match('/^[a-z0-9\-]+$/i', $content) === 1 ? $content : 'home';

$allowedPages = array_map(function ($file) {
    return basename($file, '.php');
}, $pageFiles);

$isAllowedPage = in_array($normalizedContent, $allowedPages, true);
$pageStyleFile = __DIR__ . '/../styling/page/' . $normalizedContent . '.css';
$appName = APP_NAME;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- GLOBAL STYLING -->
    <link rel="stylesheet" href="./styling/style.css">

    <!-- COMPONENTS CSS -->
    <link rel="stylesheet" href="./styling/component/footer.css">
    <link rel="stylesheet" href="./styling/component/404.css">

    <!-- DYNAMIC STYLE -->
    <?php if ($isAllowedPage && is_file($pageStyleFile)) : ?>
        <link rel="stylesheet" href="./styling/page/<?= htmlspecialchars($normalizedContent, ENT_QUOTES, 'UTF-8') ?>.css">
    <?php endif; ?>

    <link rel="shortcut icon" href="./assets/img/icon.png" type="image/x-icon">
    <title><?= htmlspecialchars($appName, ENT_QUOTES, 'UTF-8') ?></title>
</head>

<body>
    <!-- Display Content -->
    <?php
    if ($isAllowedPage) {
        // NAVBAR
        include __DIR__ . '/../components/navbar.php';

        // MAIN CONTENT
        require __DIR__ . '/../pages/' . $normalizedContent . '.php';

        // FOOTER
        include __DIR__ . '/../components/footer.php';

        // ALERT
        $tools->alert();

    } else {
        http_response_code(404);
        require __DIR__ . '/../components/404.php';
    }
    ?>
</body>

</html>

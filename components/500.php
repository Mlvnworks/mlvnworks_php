<?php
$errorPageTitle = $errorPageTitle ?? '500 | Server Error';
$errorPageHeading = $errorPageHeading ?? 'Server Error';
$errorPageMessage = $errorPageMessage ?? 'Something failed during startup or request handling. Check your configuration and server logs.';
$errorPageActionHref = $errorPageActionHref ?? './';
$errorPageActionLabel = $errorPageActionLabel ?? 'Back to Home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($errorPageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        :root {
            color-scheme: dark;
            --bg: #08111f;
            --panel: rgba(15, 23, 42, 0.88);
            --line: rgba(34, 211, 238, 0.24);
            --text: #e2e8f0;
            --muted: #94a3b8;
            --accent: #06b6d4;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            font-family: "Segoe UI", sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top left, rgba(6, 182, 212, 0.16), transparent 32%),
                radial-gradient(circle at bottom right, rgba(59, 130, 246, 0.18), transparent 34%),
                var(--bg);
            padding: 24px;
        }

        .panel {
            width: min(640px, 100%);
            border: 1px solid var(--line);
            border-radius: 24px;
            background: var(--panel);
            padding: 32px;
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35);
        }

        .code {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 72px;
            height: 72px;
            border-radius: 20px;
            background: rgba(6, 182, 212, 0.14);
            color: var(--accent);
            font-size: 30px;
            font-weight: 700;
        }

        h1 {
            margin: 18px 0 12px;
            font-size: clamp(30px, 5vw, 42px);
        }

        p {
            margin: 0;
            color: var(--muted);
            line-height: 1.7;
        }

        a {
            display: inline-block;
            margin-top: 24px;
            padding: 12px 18px;
            border-radius: 14px;
            background: var(--accent);
            color: #082f49;
            font-weight: 700;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <section class="panel">
        <div class="code">500</div>
        <h1><?= htmlspecialchars($errorPageHeading, ENT_QUOTES, 'UTF-8') ?></h1>
        <p><?= htmlspecialchars($errorPageMessage, ENT_QUOTES, 'UTF-8') ?></p>
        <a href="<?= htmlspecialchars($errorPageActionHref, ENT_QUOTES, 'UTF-8') ?>">
            <?= htmlspecialchars($errorPageActionLabel, ENT_QUOTES, 'UTF-8') ?>
        </a>
    </section>
</body>

</html>

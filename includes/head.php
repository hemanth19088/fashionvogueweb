<?php
// Centralized HEAD include with SEO meta

// Expected optional variables from caller:
// - $page_id (string)
// - $body_class (string)
// - $meta_overrides (array)

require_once __DIR__ . '/meta.php';

$pageId = isset($page_id) && is_string($page_id) ? $page_id : 'default';
$defaults = $SEO_META['default'] ?? [];
$pageMeta = $SEO_META[$pageId] ?? [];

// Merge defaults <- pageMeta <- overrides
$overrides = isset($meta_overrides) && is_array($meta_overrides) ? $meta_overrides : [];
$meta = array_merge($defaults, $pageMeta, $overrides);

// Compute canonical URL if not provided
if (empty($meta['url'])) {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $uri = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
    $meta['url'] = $scheme . '://' . $host . $uri;
}

$lang = $meta['lang'] ?? 'en';
$title = $meta['title'] ?? '';
$description = $meta['description'] ?? '';
$keywords = $meta['keywords'] ?? '';
$author = $meta['author'] ?? '';
$siteName = $meta['site_name'] ?? '';
$image = $meta['image'] ?? '';
$robots = $meta['robots'] ?? 'index,follow';
$twitterCard = $meta['twitter_card'] ?? 'summary_large_image';

$bodyClass = isset($body_class) && is_string($body_class) ? $body_class : '';

// Compute a base href like "/fashionvogueweb/" so all relative assets resolve correctly
$scriptDir = dirname($_SERVER['SCRIPT_NAME'] ?? '/');
if ($scriptDir === '\\' || $scriptDir === '.') { $scriptDir = '/'; }
$baseHref = rtrim($scriptDir, '/') . '/';
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang, ENT_QUOTES) ?>">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title, ENT_QUOTES) ?></title>
    <meta name="description" content="<?= htmlspecialchars($description, ENT_QUOTES) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($keywords, ENT_QUOTES) ?>">
    <meta name="author" content="<?= htmlspecialchars($author, ENT_QUOTES) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="<?= htmlspecialchars($robots, ENT_QUOTES) ?>">
    <base href="<?= htmlspecialchars($baseHref, ENT_QUOTES) ?>">

    <link rel="canonical" href="<?= htmlspecialchars($meta['url'], ENT_QUOTES) ?>">
    <link rel="shortcut icon" href="assets/img/logo/ficon.png" type="image/x-icon">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($title, ENT_QUOTES) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($description, ENT_QUOTES) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($meta['url'], ENT_QUOTES) ?>">
    <meta property="og:site_name" content="<?= htmlspecialchars($siteName, ENT_QUOTES) ?>">
    <?php if (!empty($image)) : ?>
    <meta property="og:image" content="<?= htmlspecialchars($image, ENT_QUOTES) ?>">
    <?php endif; ?>

    <!-- Twitter -->
    <meta name="twitter:card" content="<?= htmlspecialchars($twitterCard, ENT_QUOTES) ?>">
    <meta name="twitter:title" content="<?= htmlspecialchars($title, ENT_QUOTES) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($description, ENT_QUOTES) ?>">
    <?php if (!empty($image)) : ?>
    <meta name="twitter:image" content="<?= htmlspecialchars($image, ENT_QUOTES) ?>">
    <?php endif; ?>

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/video.min.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="<?= htmlspecialchars($bodyClass, ENT_QUOTES) ?>">



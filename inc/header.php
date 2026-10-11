<?php
require_once __DIR__ . '/site.php';
$_title = isset($page_title) && $page_title !== '' ? $page_title . ' | ' . $SITE_NAME : $SITE_NAME . ' - Free Porn Proxy & Adult Site Unblocker';
$_desc  = isset($page_desc) && $page_desc !== '' ? $page_desc : 'PornProxy is a free porn proxy. Enter any blocked adult site URL and browse it instantly - no signup, no software, no VPN needed.';
$_canon = $SITE_DOMAIN . '/' . ltrim(isset($page_canonical) ? (string)$page_canonical : '', '/');
$_img   = $SITE_DOMAIN . '/' . ltrim(isset($page_image) ? (string)$page_image : 'images/pornproxy-home.jpg', '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlspecialchars($_title, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($_desc, ENT_QUOTES, 'UTF-8'); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($_canon, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:type" content="article">
<meta property="og:site_name" content="<?php echo htmlspecialchars($SITE_NAME, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($_title, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($_desc, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($_canon, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($_img, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($_title, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($_desc, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($_img, ENT_QUOTES, 'UTF-8'); ?>">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='7' fill='%234f46e5'/%3E%3Cpath d='M16 6l8 3v6c0 5-3.4 8.6-8 11-4.6-2.4-8-6-8-11V9z' fill='white'/%3E%3C/svg%3E">
<link rel="stylesheet" href="/style.css">
<?php if (isset($page_schema) && $page_schema !== '') echo $page_schema . "\n"; ?>
</head>
<body>
<header class="site-header">
  <div class="wrap nav-row">
    <a class="logo" href="/"><span class="logo-mark">P</span>PornProxy</a>
    <nav class="main-nav" aria-label="Main navigation">
      <a href="/">Home</a>
      <a href="/blog/">Blog</a>
      <a href="/#how">How It Works</a>
      <a href="/#faq">FAQ</a>
    </nav>
  </div>
</header>
<main>

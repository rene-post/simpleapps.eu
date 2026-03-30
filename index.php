<?php
/**
 * simpleapps.eu — front controller
 *
 * Legacy /simplemind/ redirects and file redirects are handled by .htaccess.
 * This file contains the same logic as a PHP fallback (in case mod_rewrite is
 * unavailable) AND serves the new SimpleApps homepage for all other requests.
 */

$path = ltrim(
    parse_url($_SERVER["REQUEST_URI"] ?? "", PHP_URL_PATH) ?? "",
    "/",
);

// ---------------------------------------------------------------------------
// PHP fallback: file-specific redirects → modelmakertools.com
// (mirrors .htaccess rules; only reached if mod_rewrite is not active)
// ---------------------------------------------------------------------------
$fileRedirects = [
    "simplemind/appdata/simplemind_links.xml" =>
        "https://modelmakertools.com/simplemind/appdata/simplemind_links.xml",
    "simplemind/appdata/smpmac1-blacklist.xml" =>
        "https://modelmakertools.com/simplemind/appdata/smpmac1-blacklist.xml",
    "simplemind/appdata/smpmac1-blacklist2.txt" =>
        "https://modelmakertools.com/simplemind/appdata/smpmac1-blacklist2.txt",
    "simplemind/appdata/smpmac1-versions.xml" =>
        "https://modelmakertools.com/simplemind/appdata/smpmac1-versions.xml",
    "simplemind/appdata/smpwin1-blacklist.xml" =>
        "https://modelmakertools.com/simplemind/appdata/smpwin1-blacklist.xml",
    "simplemind/appdata/smpwin1-blacklist2.txt" =>
        "https://modelmakertools.com/simplemind/appdata/smpwin1-blacklist2.txt",
    "simplemind/appdata/smpwin1-versions.xml" =>
        "https://modelmakertools.com/simplemind/appdata/smpwin1-versions.xml",
    "download/full-edition/simplemind-pro-windows" =>
        "https://modelmakertools.com/download/simplemind-pro-windows/",
    "download/full-edition/simplemind-pro-windows/" =>
        "https://modelmakertools.com/download/simplemind-pro-windows/",
    "download/full-edition/simplemind-pro-mac" =>
        "https://modelmakertools.com/download/simplemind-pro-mac/",
    "download/full-edition/simplemind-pro-mac/" =>
        "https://modelmakertools.com/download/simplemind-pro-mac/",
];

if (isset($fileRedirects[$path])) {
    header("Location: " . $fileRedirects[$path], true, 301);
    exit();
}

// ---------------------------------------------------------------------------
// PHP fallback: everything under /simplemind/ → https://simplemind.eu
// ---------------------------------------------------------------------------
if ($path === "simplemind" || str_starts_with($path, "simplemind/")) {
    header("Location: https://simplemind.eu", true, 301);
    exit();
}

// ---------------------------------------------------------------------------
// New SimpleApps homepage
// ---------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimpleApps</title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg:       #f5f7fa;
            --surface:  #ffffff;
            --accent:   #0a7cff;
            --text:     #1a1a2e;
            --muted:    #6b7280;
            --border:   #e5e7eb;
            --radius:   12px;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem 1.5rem;
        }

        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 3rem 2.5rem;
            max-width: 520px;
            width: 100%;
            text-align: center;
            box-shadow: 0 4px 24px rgba(0,0,0,.06);
        }

        .logo {
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: -0.03em;
            color: var(--text);
            margin-bottom: .25rem;
        }

        .logo span {
            color: var(--accent);
        }

        .tagline {
            font-size: 1rem;
            color: var(--muted);
            margin-bottom: 2rem;
        }

        .badge {
            display: inline-block;
            background: #eff6ff;
            color: var(--accent);
            font-size: .75rem;
            font-weight: 600;
            letter-spacing: .05em;
            text-transform: uppercase;
            padding: .35rem .75rem;
            border-radius: 999px;
            margin-bottom: 1.5rem;
        }

        h1 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: .75rem;
        }

        p {
            font-size: .975rem;
            color: var(--muted);
            line-height: 1.7;
        }

        .divider {
            border: none;
            border-top: 1px solid var(--border);
            margin: 2rem 0;
        }

        .link {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            color: var(--accent);
            font-size: .9rem;
            font-weight: 500;
            text-decoration: none;
        }

        .link:hover { text-decoration: underline; }

        footer {
            margin-top: 2rem;
            font-size: .8rem;
            color: var(--muted);
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="logo">Simple<span>Apps</span></div>
        <div class="tagline">simpleapps.eu</div>

        <span class="badge">Coming soon</span>

        <h1>Something new is on its way</h1>
        <p>
            We're working on a new home for SimpleApps.
            Check back soon to discover what we're building.
        </p>

        <hr class="divider">

        <a class="link" href="https://simplemind.eu">
            <!-- arrow icon -->
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Looking for SimpleMind? Visit simplemind.eu
        </a>
    </div>

    <footer>&copy; <?= date("Y") ?> SimpleApps</footer>

</body>
</html>

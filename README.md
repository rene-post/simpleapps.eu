# simpleapps.eu

New website for the **SimpleApps** brand, served from `www.simpleapps.eu`
(and in the future the apex domain `simpleapps.eu`).

The site also handles all legacy redirects for the retired **simpleapps.eu**
domain that previously hosted the SimpleMind product pages.

Source specification for the legacy redirects:
`redirects-mail-forwards-vanaf-simpleapps.eu.eml`

---

## File structure

```
simpleapps.eu/
├── .htaccess   # Apache redirect rules for legacy paths (mod_rewrite)
├── index.php   # New SimpleApps homepage + PHP fallback for legacy redirects
└── README.md   # This file
```

---

## Legacy redirects

Legacy redirect rules are in `.htaccess` with `index.php` as a PHP fallback
(active when `mod_rewrite` is unavailable). The root of the domain is **not**
redirected — it serves the new SimpleApps site.

### Specific file redirects → modelmakertools.com (301 permanent)

| Old path on simpleapps.eu | Redirects to (modelmakertools.com) |
|---|---|
| `/simplemind/appdata/simplemind_links.xml` | `/simplemind/appdata/simplemind_links.xml` |
| `/simplemind/appdata/smpmac1-blacklist.xml` | `/simplemind/appdata/smpmac1-blacklist.xml` |
| `/simplemind/appdata/smpmac1-blacklist2.txt` | `/simplemind/appdata/smpmac1-blacklist2.txt` |
| `/simplemind/appdata/smpmac1-versions.xml` | `/simplemind/appdata/smpmac1-versions.xml` |
| `/simplemind/appdata/smpwin1-blacklist.xml` | `/simplemind/appdata/smpwin1-blacklist.xml` |
| `/simplemind/appdata/smpwin1-blacklist2.txt` | `/simplemind/appdata/smpwin1-blacklist2.txt` |
| `/simplemind/appdata/smpwin1-versions.xml` | `/simplemind/appdata/smpwin1-versions.xml` |
| `/download/full-edition/simplemind-pro-windows/` | `/download/simplemind-pro-windows/` |
| `/download/full-edition/simplemind-pro-mac/` | `/download/simplemind-pro-mac/` |

### Catch-all `/simplemind/` redirect → simplemind.eu (301 permanent)

Everything under `/simplemind/` (the old site root used across all legacy app
and web links) redirects to `https://simplemind.eu`. Examples:

- `http://www.simpleapps.eu/simplemind/touch/quickhelp`
- `http://www.simpleapps.eu/simplemind/desktop/osx/faq#local-mindmaps`

---

## Email forwards

> **These must be configured at the mail server / hosting control panel level.**
> They cannot be set up in PHP or `.htaccess`.

All historical `@simpleapps.eu` addresses forward to **`support@simplemind.eu`**:

| Address | Notes |
|---|---|
| `simplemind-touch@simpleapps.eu` | |
| `simplemind-windows@simpleapps.eu` | |
| `simplemind-mac@simpleapps.eu` | |
| `android@simpleapps.eu` | |
| `linda@simpleapps.eu` | |
| `gerrit@simpleapps.eu` | |
| `simplemind@simpleapps.eu` | Listed as developer contact in the iOS App Store |
| `support@simpleapps.eu` | Still receives ~2 emails per month |

> From app version 2.9.0 onwards, the apps use the corresponding `@simplemind.eu`
> addresses directly. The `@simpleapps.eu` forwards are kept for legacy traffic only.
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
>
> Source of truth: `export_forwards_simpleapps_eu_03_31_2026_12_36_AM.csv`

### → `support@simplemind.eu`

| Address | Created |
|---|---|
| `android@simpleapps.eu` | 2021-10-05 |
| `gerrit@simpleapps.eu` | 2021-10-05 |
| `info@simpleapps.eu` | 2022-04-07 |
| `linda@simpleapps.eu` | 2021-10-05 |
| `linda.meddeler@simpleapps.eu` | 2021-10-05 |
| `nederland@simpleapps.eu` | 2021-11-01 |
| `postmaster@simpleapps.eu` | 2021-10-05 |
| `root@simpleapps.eu` | 2021-10-05 |
| `simpleapps@simpleapps.eu` | 2021-10-05 |
| `simplemind-mac@simpleapps.eu` | 2021-10-05 |
| `simplemind-touch@simpleapps.eu` | 2021-10-05 |
| `simplemind-windows@simpleapps.eu` | 2021-10-05 |
| `simplemindapp@simpleapps.eu` | 2021-10-05 |
| `support@simpleapps.eu` | 2021-10-05 |
| `webmaster@simpleapps.eu` | 2021-10-05 |

### → `reposting@gmail.com`

| Address | Created |
|---|---|
| `admin@simpleapps.eu` | 2021-09-27 |
| `docker@simpleapps.eu` | 2021-09-23 |
| `naturalmindapp@simpleapps.eu` | 2021-09-23 |
| `reactivego@simpleapps.eu` | 2021-09-23 |
| `rene@simpleapps.eu` | 2021-09-23 |
| `simplemind@simpleapps.eu` | 2025-04-17 |
| `smartcard@simpleapps.eu` | 2021-09-23 |

### → `netjet@xs4all.nl`

| Address | Created |
|---|---|
| `henriette@simpleapps.eu` | 2021-09-23 |
| `jet@simpleapps.eu` | 2021-09-23 |

> From app version 2.9.0 onwards, the apps use the corresponding `@simplemind.eu`
> addresses directly. The `@simpleapps.eu` forwards are kept for legacy traffic only.
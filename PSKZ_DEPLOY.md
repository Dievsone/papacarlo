# PS.kz Git Deploy (no console)

Goal: deploy Laravel from Git so PS.kz auto-install works without errors.

## Repository layout
- The **Laravel project must be at repo root**.
- Document Root on PS.kz must point to `public`.

## Panel settings
1. Git auto-deploy path: `/var/www/vhosts/papacarlo.kz/httpdocs`
2. Document Root (site root): `/var/www/vhosts/papacarlo.kz/httpdocs/public`

## Required files in repo root
- `composer.json`
- `artisan`
- `app/`, `bootstrap/`, `config/`, `public/`, `resources/`, `routes/`, `storage/`

## .env setup (via file manager)
Create `/var/www/vhosts/papacarlo.kz/httpdocs/.env` and set:
```
APP_NAME=Legenda
APP_ENV=production
APP_URL=https://papacarlo.kz
APP_DEBUG=false
APP_KEY=base64:PASTE_FROM_LOCAL

TELEGRAM_BOT_TOKEN=YOUR_TOKEN
TELEGRAM_CHAT_ID=YOUR_CHAT_ID
```

## How to get APP_KEY (locally)
Run on your local machine (not server):
```
php artisan key:generate --show
```
Copy the output and paste into `APP_KEY` in the server `.env`.

## Auto-deploy notes
- PS.kz Composer must run **in repo root** (httpdocs).
- If you see errors about missing composer.json, the repo is not in httpdocs or document root is wrong.

## Permissions (via file manager)
Ensure these folders are writable:
- `storage`
- `bootstrap/cache`

# Deploy (Kazakhstan VPS)

This project uses a simple Node.js server that sends leads to Telegram. The
fastest way to deploy in Kazakhstan is a VPS with a data center in Almaty.

## Recommended hosting (KZ)
- Timeweb Cloud (Almaty region)
- PS.kz VPS (Almaty / Astana)
- Serverspace (Almaty)

## 1) Prepare server
1. Create a VPS in Almaty.
2. Install Docker and Docker Compose on the server.
3. Open ports 80 and 443 in the firewall.

## 2) Upload project
1. Copy the project folder to the server (SFTP or `git clone`).
2. Create `.env` next to `server.js`:
```
TELEGRAM_BOT_TOKEN=your_new_token
TELEGRAM_CHAT_ID=your_numeric_chat_id
PORT=3000
```

## 3) Start
```
docker compose up -d --build
```

The site will be available on the server IP at `http://<server-ip>`.

## 4) Optional HTTPS
You can add a reverse proxy (Caddy or Nginx) for SSL with a domain name.

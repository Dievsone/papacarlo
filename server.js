const express = require("express");
const path = require("path");
require("dotenv").config();

const app = express();

const PORT = process.env.PORT || 3000;
const TELEGRAM_BOT_TOKEN = process.env.TELEGRAM_BOT_TOKEN;
const TELEGRAM_CHAT_ID = process.env.TELEGRAM_CHAT_ID;

if (!TELEGRAM_BOT_TOKEN || !TELEGRAM_CHAT_ID) {
  console.warn(
    "Missing TELEGRAM_BOT_TOKEN or TELEGRAM_CHAT_ID in environment variables."
  );
}

app.use(express.json());
app.use(express.static(path.join(__dirname)));

app.post("/lead", async (req, res) => {
  const { name, phone } = req.body || {};

  if (!name || !phone) {
    return res.status(400).json({ ok: false, message: "Invalid payload" });
  }

  if (!TELEGRAM_BOT_TOKEN || !TELEGRAM_CHAT_ID) {
    return res.status(500).json({ ok: false, message: "Bot not configured" });
  }

  const message = [
    "Новая заявка с лендинга:",
    `Имя: ${name}`,
    `Телефон: ${phone}`,
    `Дата: ${new Date().toLocaleString("ru-RU")}`,
  ].join("\n");

  try {
    const response = await fetch(
      `https://api.telegram.org/bot${TELEGRAM_BOT_TOKEN}/sendMessage`,
      {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          chat_id: TELEGRAM_CHAT_ID,
          text: message,
        }),
      }
    );

    if (!response.ok) {
      const errorText = await response.text();
      console.error("Telegram error:", errorText);
      return res.status(500).json({ ok: false, message: "Telegram error" });
    }

    return res.json({ ok: true });
  } catch (error) {
    console.error("Lead error:", error);
    return res.status(500).json({ ok: false, message: "Server error" });
  }
});

app.listen(PORT, () => {
  console.log(`Server running on http://localhost:${PORT}`);
});

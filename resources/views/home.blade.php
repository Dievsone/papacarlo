<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>ЖК «Легенда» — открытие продаж</title>
    <meta
      name="description"
      content="Открытие продаж ЖК «Легенда». Современный жилой квартал с продуманной архитектурой, панорамными окнами и приватными дворами."
    />
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
  </head>
  <body>
    <div class="hero-bg">
      <div class="hero-gradient"></div>
      <div class="hero-sheen"></div>
    </div>

    <header class="site-header">
      <div class="container header-inner">
        <div class="brand">ЛЕГЕНДА</div>
        <nav class="nav">
          <a href="#about">О проекте</a>
          <a href="#features">Преимущества</a>
          <a href="#plans">Планировки</a>
          <a href="#reviews">Отзывы</a>
        </nav>
        <div class="header-cta">
          <span class="phone">+7 (777) 240-18-30</span>
          <button class="btn btn-light">Оставить заявку</button>
        </div>
      </div>
    </header>

    <main>
      <section class="hero" id="about">
        <div class="container hero-center">
          <p class="eyebrow">Открытие продаж</p>
          <h1>ЖК «Легенда»</h1>
          <p class="hero-subtitle">
            Место, где архитектура работает на качество жизни. Панорамные окна,
            приватные дворы, лучшие маршруты города рядом с домом.
          </p>
          <button class="btn btn-primary">Открыть продажи</button>
        </div>
      </section>

      <section class="intro-card">
        <div class="container">
          <div class="card">
            <div class="card-top">
              <div class="card-copy">
                <h2>
                  «Легенда» — это не просто название. Это уровень вашей жизни
                </h2>
                <p>
                  Закрытая территория, просторные дворы и утонченная геометрия
                  фасадов. Каждая деталь — продуманная и удобная.
                </p>
              </div>
              <div class="card-image"></div>
            </div>
            <div class="card-stats">
              <div>
                <strong>17</strong>
                <span>домов в составе квартала</span>
              </div>
              <div>
                <strong>486</strong>
                <span>квартир доступно к покупке</span>
              </div>
              <div>
                <button class="btn btn-outline">Выбрать квартиру</button>
                <div class="avatars">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
            <div class="card-bottom">
              <h3>Мы построили стильный и современный спальный район</h3>
              <p>
                Сценарии для жизни и работы, зелёные пространства и собственные
                маршруты для прогулок.
              </p>
              <div class="card-portrait"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="features" id="features">
        <div class="container features-inner">
          <div class="features-copy">
            <h2>Лаконичный фасад, который захватывает внимание</h2>
            <p>
              Архитектура продумана до мелочей: баланс фактуры, света и
              геометрии, который сразу читается как премиальный.
            </p>
          </div>
          <div class="features-tags">
            <div class="tag">Арктический кирпич</div>
            <div class="tag">Дополнительный балкон</div>
            <div class="tag">Панорамная входная группа</div>
            <div class="tag">Алюминиевые оконные рамы</div>
          </div>
        </div>
      </section>

      <section class="plans" id="plans">
        <div class="container">
          <div class="section-head light">
            <h2>Выберите планировку</h2>
            <p>Мы предлагаем квартиры от 27 до 112 м² с удобной геометрией.</p>
          </div>
          <div class="plans-grid">
            <article class="plan-card">
              <div class="plan-preview"></div>
              <div class="plan-meta">
                <span>3+1</span>
                <strong>112 м²</strong>
              </div>
              <p>Легкое зонирование и просторная кухня-гостиная.</p>
              <button class="btn btn-dark">Выбрать квартиру</button>
            </article>
            <article class="plan-card">
              <div class="plan-preview"></div>
              <div class="plan-meta">
                <span>3+1</span>
                <strong>112 м²</strong>
              </div>
              <p>Раздельные спальни и удобный коридор.</p>
              <button class="btn btn-dark">Выбрать квартиру</button>
            </article>
            <article class="plan-card">
              <div class="plan-preview"></div>
              <div class="plan-meta">
                <span>3+1</span>
                <strong>112 м²</strong>
              </div>
              <p>Панорамные окна и дополнительная гардеробная.</p>
              <button class="btn btn-dark">Выбрать квартиру</button>
            </article>
            <article class="plan-card">
              <div class="plan-preview"></div>
              <div class="plan-meta">
                <span>3+1</span>
                <strong>112 м²</strong>
              </div>
              <p>Продуманная эргономика и отдельная лоджия.</p>
              <button class="btn btn-dark">Выбрать квартиру</button>
            </article>
            <article class="plan-card">
              <div class="plan-preview"></div>
              <div class="plan-meta">
                <span>3+1</span>
                <strong>112 м²</strong>
              </div>
              <p>Спокойная приватная зона и кухня с островом.</p>
              <button class="btn btn-dark">Выбрать квартиру</button>
            </article>
            <article class="plan-card">
              <div class="plan-preview"></div>
              <div class="plan-meta">
                <span>3+1</span>
                <strong>112 м²</strong>
              </div>
              <p>Мастер-спальня и вид на внутренний двор.</p>
              <button class="btn btn-dark">Выбрать квартиру</button>
            </article>
          </div>
        </div>
      </section>

      <section class="reviews" id="reviews">
        <div class="container">
          <div class="review-card">
            <div>
              <h2>Ипотека 3% для наших легендарных клиентов</h2>
              <p>
                Оставьте заявку и получите подборку лучших вариантов с
                персональным расчетом.
              </p>
              <form class="cta-form" method="post" action="{{ route('lead.store') }}">
                @csrf
                <input type="text" name="name" placeholder="Ваше имя" required />
                <input
                  type="tel"
                  name="phone"
                  placeholder="Телефон (WhatsApp)"
                  required
                />
                <button class="btn btn-primary" type="submit">
                  Оставить заявку
                </button>
                <span class="form-note">
                  Нажимая кнопку, вы соглашаетесь с политикой обработки данных.
                </span>
                @if (session('status'))
                  <span class="form-status">{{ session('status') }}</span>
                @endif
              </form>
            </div>
            <div class="review-portrait"></div>
          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="container footer-inner">
        <div>
          <strong>ЛЕГЕНДА</strong>
          <p>Современный жилой квартал</p>
        </div>
        <div>
          <strong>Режим работы</strong>
          <p>ежедневно 9:00–20:00</p>
        </div>
        <div>
          <strong>Связаться</strong>
          <p>+7 (777) 240-18-30</p>
        </div>
      </div>
    </footer>
  </body>
</html>

<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>PapaCarlo — столярный завод мебели на заказ в Алматы</title>
    <meta
      name="description"
      content="PapaCarlo — столярный завод в Алматинской области. Изготавливаем под ключ двери, кухни, лестницы, мебель, стеновые панели, столы, стулья, кровати, тумбы и другое. Замер, проект, производство, монтаж."
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
        <div class="brand">PAPACARLO</div>
        <nav class="nav">
          <a href="#about">О заводе</a>
          <a href="#products">Изделия</a>
          <a href="#process">Процесс</a>
          <a href="#contact">Контакты</a>
        </nav>
        <div class="header-cta">
          <span class="phone">+7 (701) 799-76-05</span>
          <a
            class="btn btn-light"
            href="https://wa.me/77017997605?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B0%D1%82%D1%8C%20%D0%B7%D0%B0%D0%BC%D0%B5%D1%80%20%D0%B8%20%D1%80%D0%B0%D1%81%D1%87%D0%B5%D1%82%20%D0%BC%D0%B5%D0%B1%D0%B5%D0%BB%D0%B8."
            target="_blank"
            rel="noopener"
          >
            Заказать замер
          </a>
        </div>
      </div>
    </header>

    <main>
      <section class="hero" id="about">
        <div class="container hero-center">
          <p class="eyebrow">Столярный завод в Алматы</p>
          <h1>PapaCarlo — мебель на заказ под ключ</h1>
          <p class="hero-subtitle">
            Проектируем и производим индивидуальные изделия для дома и бизнеса: двери, кухни, лестницы,
            стеновые панели, столы, стулья, кровати, тумбы и многое другое. Бережный подбор материалов,
            точная геометрия и монтаж в срок.
          </p>
          <a
            class="btn btn-primary"
            href="https://wa.me/77017997605?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%9D%D1%83%D0%B6%D0%B5%D0%BD%20%D1%80%D0%B0%D1%81%D1%87%D0%B5%D1%82%20%D0%BF%D0%BE%20%D0%BC%D0%BE%D0%B5%D0%BC%D1%83%20%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D1%83."
            target="_blank"
            rel="noopener"
          >
            Получить расчет
          </a>
        </div>
      </section>

      <section class="intro-card">
        <div class="container">
          <div class="card">
            <div class="card-top">
              <div class="card-copy">
                <h2>
                  PapaCarlo — это производство, где мебель становится частью архитектуры пространства
                </h2>
                <p>
                  Мы берем на себя весь цикл: выезд и замер, дизайн-проект, производство, доставка и
                  установка. Работаем с натуральным деревом, шпоном и современными покрытиями, чтобы
                  изделие выглядело безупречно и служило долго.
                </p>
              </div>
              <div class="card-image"></div>
            </div>
            <div class="card-stats">
              <div>
                <strong>Замер</strong>
                <span>приезжаем на объект и фиксируем детали</span>
              </div>
              <div>
                <strong>Проект</strong>
                <span>продумываем функционал и внешний вид</span>
              </div>
              <div>
                <a
                  class="btn btn-outline"
                  href="https://wa.me/77017997605?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%BE%D0%B1%D1%81%D1%83%D0%B4%D0%B8%D1%82%D1%8C%20%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%20%D0%BC%D0%B5%D0%B1%D0%B5%D0%BB%D0%B8."
                  target="_blank"
                  rel="noopener"
                >
                  Обсудить проект
                </a>
                <div class="avatars">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
            <div class="card-bottom">
              <h3>Делаем сложные изделия простыми в эксплуатации</h3>
              <p>
                Учитываем нагрузку, долговечность фурнитуры и удобство в ежедневном использовании.
                В результате вы получаете мебель, которая ощущается как продолжение интерьера.
              </p>
              <div class="card-portrait"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="features" id="products">
        <div class="container features-inner">
          <div class="features-copy">
            <h2>Изготавливаем почти любую мебель и столярные решения</h2>
            <p>
              Подбираем материалы под ваш стиль: минимализм, классика, современная эстетика или
              интерьер с акцентом на натуральные фактуры. Работаем как с частными, так и с коммерческими
              объектами.
            </p>
          </div>
          <div class="features-tags">
            <div class="tag">Двери</div>
            <div class="tag">Кухни</div>
            <div class="tag">Лестницы</div>
            <div class="tag">Стеновые панели</div>
            <div class="tag">Столы</div>
            <div class="tag">Стулья</div>
            <div class="tag">Кровати</div>
            <div class="tag">Тумбы и комоды</div>
          </div>
        </div>
      </section>

      <section class="plans" id="process">
        <div class="container">
          <div class="section-head light">
            <h2>Как мы работаем</h2>
            <p>Прозрачный процесс — от идеи до установки. Берем ответственность за результат.</p>
          </div>
          <div class="plans-grid">
            <article class="plan-card">
              <div class="plan-preview"></div>
              <div class="plan-meta">
                <span>1 шаг</span>
                <strong>Консультация и замер</strong>
              </div>
              <p>Выезжаем на объект, уточняем задачи, фиксируем размеры и особенности помещения.</p>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BD%D0%B0%20%D0%B7%D0%B0%D0%BC%D0%B5%D1%80."
                target="_blank"
                rel="noopener"
              >
                Записаться
              </a>
            </article>
            <article class="plan-card">
              <div class="plan-preview"></div>
              <div class="plan-meta">
                <span>2 шаг</span>
                <strong>Дизайн и проект</strong>
              </div>
              <p>Согласуем стилистику, материалы, наполнение и фурнитуру.</p>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%9D%D1%83%D0%B6%D0%B5%D0%BD%20%D1%8D%D1%81%D0%BA%D0%B8%D0%B7%20%D0%B8%20%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD-%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82."
                target="_blank"
                rel="noopener"
              >
                Получить эскиз
              </a>
            </article>
            <article class="plan-card">
              <div class="plan-preview"></div>
              <div class="plan-meta">
                <span>3 шаг</span>
                <strong>Производство</strong>
              </div>
              <p>Изготавливаем изделия на собственном столярном производстве.</p>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%A5%D0%BE%D1%82%D0%B5%D0%BB%28%D0%B0%29%20%D0%B1%D1%8B%20%D1%83%D1%82%D0%BE%D1%87%D0%BD%D0%B8%D1%82%D1%8C%20%D1%81%D1%80%D0%BE%D0%BA%D0%B8%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B0."
                target="_blank"
                rel="noopener"
              >
                Уточнить сроки
              </a>
            </article>
            <article class="plan-card">
              <div class="plan-preview"></div>
              <div class="plan-meta">
                <span>4 шаг</span>
                <strong>Доставка</strong>
              </div>
              <p>Аккуратно доставляем изделия и готовим к установке.</p>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%A5%D0%BE%D1%87%D1%83%20%D1%81%D0%BE%D0%B3%D0%BB%D0%B0%D1%81%D0%BE%D0%B2%D0%B0%D1%82%D1%8C%20%D0%B4%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D1%83."
                target="_blank"
                rel="noopener"
              >
                Согласовать
              </a>
            </article>
            <article class="plan-card">
              <div class="plan-preview"></div>
              <div class="plan-meta">
                <span>5 шаг</span>
                <strong>Монтаж</strong>
              </div>
              <p>Устанавливаем мебель и проверяем качество на месте.</p>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B0%D1%82%D1%8C%20%D0%BC%D0%BE%D0%BD%D1%82%D0%B0%D0%B6."
                target="_blank"
                rel="noopener"
              >
                Заказать монтаж
              </a>
            </article>
            <article class="plan-card">
              <div class="plan-preview"></div>
              <div class="plan-meta">
                <span>6 шаг</span>
                <strong>Сервис</strong>
              </div>
              <p>Остаемся на связи по уходу и настройке фурнитуры.</p>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%9D%D1%83%D0%B6%D0%BD%D0%B0%20%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8F%20%D0%BF%D0%BE%20%D1%83%D1%85%D0%BE%D0%B4%D1%83%20%D0%B8%20%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B5%20%D1%84%D1%83%D1%80%D0%BD%D0%B8%D1%82%D1%83%D1%80%D1%8B."
                target="_blank"
                rel="noopener"
              >
                Получить помощь
              </a>
            </article>
          </div>
        </div>
      </section>

      <section class="reviews" id="contact">
        <div class="container">
          <div class="review-card">
            <div>
              <h2>Получите расчет стоимости проекта</h2>
              <p>
                Оставьте заявку — мы свяжемся, уточним детали и предложим оптимальное решение
                по бюджету и срокам.
              </p>
              <form class="cta-form" method="post" action="{{ route('lead.store') }}">
                @csrf
                <input type="text" name="name" placeholder="Ваше имя" required />
                <input type="tel" name="phone" placeholder="Телефон (WhatsApp)" required />
                <button class="btn btn-primary" type="submit">Отправить заявку</button>
                <span class="form-note">
                  Нажимая кнопку, вы соглашаетесь с политикой обработки персональных данных.
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
          <strong>PAPACARLO</strong>
          <p>Столярный завод мебели на заказ</p>
        </div>
        <div>
          <strong>Адрес</strong>
          <p>Алматинская область, Карасайский район, квартал 096, 1777В</p>
        </div>
        <div>
          <strong>Связаться</strong>
          <p>Телефон / WhatsApp: +7 (701) 799-76-05</p>
          <p>Instagram: <a href="https://www.instagram.com/papa.carlo.almaty/">papa.carlo.almaty</a></p>
        </div>
      </div>
    </footer>
  </body>
</html>

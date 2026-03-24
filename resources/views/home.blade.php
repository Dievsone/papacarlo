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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
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
          <a href="#materials">Материалы</a>
          <a href="#process">Процесс</a>
          <a href="#portfolio">Проекты</a>
          <a href="#contact">Контакты</a>
        </nav>
        <div class="header-cta">
          <a class="phone" href="tel:+77017997605">+7 (701) 799-76-05</a>
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
            Проектируем и производим индивидуальные изделия для дома и бизнеса: двери, кухни,
            лестницы, стеновые панели, столы, стулья, кровати, тумбы и многое другое. Бережный подбор
            материалов, точная геометрия и монтаж в срок.
          </p>
          <div class="hero-actions">
            <a
              class="btn btn-primary"
              href="https://wa.me/77017997605?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%9D%D1%83%D0%B6%D0%B5%D0%BD%20%D1%80%D0%B0%D1%81%D1%87%D0%B5%D1%82%20%D0%BF%D0%BE%20%D0%BC%D0%BE%D0%B5%D0%BC%D1%83%20%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D1%83."
              target="_blank"
              rel="noopener"
            >
              Получить расчет
            </a>
            <a class="btn btn-dark" href="#products">Посмотреть изделия</a>
          </div>
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

      <section class="products" id="products">
        <div class="container">
          <div class="section-head">
            <h2>Изделия, которые мы делаем под ключ</h2>
            <p>
              Подбираем материалы под ваш стиль: минимализм, классика, современная эстетика или
              интерьер с акцентом на натуральные фактуры. Работаем с частными и коммерческими
              объектами.
            </p>
          </div>
          <div class="product-grid">
            <a class="product-card" href="#doors">
              <div class="product-icon"></div>
              <h3>Двери и порталы</h3>
              <p>Массив, шпон, эмаль, скрытые петли и премиальная фурнитура.</p>
            </a>
            <a class="product-card" href="#kitchens">
              <div class="product-icon"></div>
              <h3>Кухни</h3>
              <p>Функциональные системы хранения, износостойкие фасады, встроенная техника.</p>
            </a>
            <a class="product-card" href="#stairs">
              <div class="product-icon"></div>
              <h3>Лестницы</h3>
              <p>Деревянные и комбинированные конструкции с точной геометрией.</p>
            </a>
            <a class="product-card" href="#panels">
              <div class="product-icon"></div>
              <h3>Стеновые панели</h3>
              <p>Акцентные панели, рейки, акустические решения, скрытые двери.</p>
            </a>
            <a class="product-card" href="#wardrobes">
              <div class="product-icon"></div>
              <h3>Шкафы и гардеробные</h3>
              <p>Индивидуальные системы хранения с внутренним освещением.</p>
            </a>
            <a class="product-card" href="#tables">
              <div class="product-icon"></div>
              <h3>Столы и столешницы</h3>
              <p>Обеденные, рабочие, переговорные столы под нужный размер.</p>
            </a>
            <a class="product-card" href="#chairs">
              <div class="product-icon"></div>
              <h3>Стулья и мягкая мебель</h3>
              <p>Комплектация под интерьер, текстиль, кожа, высокопрочные каркасы.</p>
            </a>
            <a class="product-card" href="#beds">
              <div class="product-icon"></div>
              <h3>Кровати и тумбы</h3>
              <p>Изголовья, подсветка, вместительные ниши и аккуратная сборка.</p>
            </a>
            <a class="product-card" href="#commercial">
              <div class="product-icon"></div>
              <h3>Коммерческие проекты</h3>
              <p>Ресепшн, барные стойки, витрины, мебель для офисов и шоурумов.</p>
            </a>
          </div>
        </div>
      </section>

      <section class="product-details" id="product-details">
        <div class="container">
          <div class="section-head">
            <h2>Подробнее по направлениям</h2>
            <p>Ниже — ключевые категории с нюансами по материалам и комплектации.</p>
          </div>
          <div class="detail-grid">
            <article class="detail-card product-anchor" id="doors">
              <h3>Двери и порталы</h3>
              <p>Скрытые коробки, фрезеровка, шпонированные и окрашенные полотна.</p>
              <div class="detail-meta">Фурнитура премиум-класса, точные зазоры, высокий ресурс</div>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%9D%D1%83%D0%B6%D0%BD%D1%8B%20%D0%B4%D0%B2%D0%B5%D1%80%D0%B8%20%D0%B8%20%D0%BF%D0%BE%D1%80%D1%82%D0%B0%D0%BB%D1%8B%2C%20%D0%BF%D1%80%D0%BE%D1%88%D1%83%20%D1%80%D0%B0%D1%81%D1%87%D0%B5%D1%82."
                target="_blank"
                rel="noopener"
              >
                Запросить расчет
              </a>
            </article>
            <article class="detail-card product-anchor" id="kitchens">
              <h3>Кухни</h3>
              <p>Проектируем эргономику, фасады и системы хранения под ваш ритм жизни.</p>
              <div class="detail-meta">Фасады: эмаль, шпон, массив. Техника и освещение под ключ</div>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%A5%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B0%D1%82%D1%8C%20%D0%BA%D1%83%D1%85%D0%BD%D1%8E%20%D0%BF%D0%BE%D0%B4%20%D0%BA%D0%BB%D1%8E%D1%87%2C%20%D0%BF%D1%80%D0%BE%D1%88%D1%83%20%D1%80%D0%B0%D1%81%D1%87%D0%B5%D1%82."
                target="_blank"
                rel="noopener"
              >
                Запросить расчет
              </a>
            </article>
            <article class="detail-card product-anchor" id="stairs">
              <h3>Лестницы</h3>
              <p>Ступени, косоуры, перила, стекло и металл в единой композиции.</p>
              <div class="detail-meta">Безопасные конструкции, точная геометрия и чистый монтаж</div>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%9D%D1%83%D0%B6%D0%BD%D0%B0%20%D0%BB%D0%B5%D1%81%D1%82%D0%BD%D0%B8%D1%86%D0%B0%2C%20%D0%BF%D1%80%D0%BE%D1%88%D1%83%20%D1%80%D0%B0%D1%81%D1%87%D0%B5%D1%82."
                target="_blank"
                rel="noopener"
              >
                Запросить расчет
              </a>
            </article>
            <article class="detail-card product-anchor" id="panels">
              <h3>Стеновые панели</h3>
              <p>Рейки, панели, акустика, скрытые двери и интеграция света.</p>
              <div class="detail-meta">Создаем акцентные стены и мягкую акустику</div>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%9D%D1%83%D0%B6%D0%BD%D1%8B%20%D1%81%D1%82%D0%B5%D0%BD%D0%BE%D0%B2%D1%8B%D0%B5%20%D0%BF%D0%B0%D0%BD%D0%B5%D0%BB%D0%B8%2C%20%D0%BF%D1%80%D0%BE%D1%88%D1%83%20%D1%80%D0%B0%D1%81%D1%87%D0%B5%D1%82."
                target="_blank"
                rel="noopener"
              >
                Запросить расчет
              </a>
            </article>
            <article class="detail-card product-anchor" id="wardrobes">
              <h3>Шкафы и гардеробные</h3>
              <p>Индивидуальные системы хранения, внутреннее освещение и зонирование.</p>
              <div class="detail-meta">Продумываем организацию пространства до сантиметра</div>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%A8%D0%BA%D0%B0%D1%84%D1%8B%20%D0%B8%20%D0%B3%D0%B0%D1%80%D0%B4%D0%B5%D1%80%D0%BE%D0%B1%D0%BD%D1%8B%D0%B5%20%D0%BF%D0%BE%D0%B4%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%2C%20%D0%BF%D1%80%D0%BE%D1%88%D1%83%20%D1%80%D0%B0%D1%81%D1%87%D0%B5%D1%82."
                target="_blank"
                rel="noopener"
              >
                Запросить расчет
              </a>
            </article>
            <article class="detail-card product-anchor" id="tables">
              <h3>Столы и столешницы</h3>
              <p>Обеденные, рабочие, переговорные столы — в нужном размере и форме.</p>
              <div class="detail-meta">Массив, шпон, камень, комбинированные материалы</div>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%9D%D1%83%D0%B6%D0%B5%D0%BD%20%D1%81%D1%82%D0%BE%D0%BB%20%D0%B8%D0%BB%D0%B8%20%D1%81%D1%82%D0%BE%D0%BB%D0%B5%D1%88%D0%BD%D0%B8%D1%86%D0%B0%2C%20%D0%BF%D1%80%D0%BE%D1%88%D1%83%20%D1%80%D0%B0%D1%81%D1%87%D0%B5%D1%82."
                target="_blank"
                rel="noopener"
              >
                Запросить расчет
              </a>
            </article>
            <article class="detail-card product-anchor" id="chairs">
              <h3>Стулья и мягкая мебель</h3>
              <p>Деревянные каркасы, обивка, подбор тканей и стойких материалов.</p>
              <div class="detail-meta">Мягкие группы под дизайн кухни и гостиной</div>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%9D%D1%83%D0%B6%D0%BD%D1%8B%20%D1%81%D1%82%D1%83%D0%BB%D1%8C%D1%8F%20%D0%B8%20%D0%BC%D1%8F%D0%B3%D0%BA%D0%B0%D1%8F%20%D0%BC%D0%B5%D0%B1%D0%B5%D0%BB%D1%8C%2C%20%D0%BF%D1%80%D0%BE%D1%88%D1%83%20%D1%80%D0%B0%D1%81%D1%87%D0%B5%D1%82."
                target="_blank"
                rel="noopener"
              >
                Запросить расчет
              </a>
            </article>
            <article class="detail-card product-anchor" id="beds">
              <h3>Кровати и тумбы</h3>
              <p>Изголовья, подсветка, ящики хранения и ровные стыки.</p>
              <div class="detail-meta">Продумываем комфорт и эргономику спальни</div>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%9D%D1%83%D0%B6%D0%BD%D0%B0%20%D0%BA%D1%80%D0%BE%D0%B2%D0%B0%D1%82%D1%8C%20%D0%B8%20%D1%82%D1%83%D0%BC%D0%B1%D1%8B%2C%20%D0%BF%D1%80%D0%BE%D1%88%D1%83%20%D1%80%D0%B0%D1%81%D1%87%D0%B5%D1%82."
                target="_blank"
                rel="noopener"
              >
                Запросить расчет
              </a>
            </article>
            <article class="detail-card product-anchor" id="commercial">
              <h3>Коммерческие проекты</h3>
              <p>Ресепшн, барные стойки, витрины, мебель для офисов и шоурумов.</p>
              <div class="detail-meta">Соблюдаем сроки и стандарты эксплуатации</div>
              <a
                class="btn btn-dark"
                href="https://wa.me/77017997605?text=%D0%9D%D1%83%D0%B6%D0%BD%D0%B0%20%D0%BC%D0%B5%D0%B1%D0%B5%D0%BB%D1%8C%20%D0%B4%D0%BB%D1%8F%20%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81%D0%B0%2C%20%D0%BF%D1%80%D0%BE%D1%88%D1%83%20%D1%80%D0%B0%D1%81%D1%87%D0%B5%D1%82."
                target="_blank"
                rel="noopener"
              >
                Запросить расчет
              </a>
            </article>
          </div>
        </div>
      </section>

      <section class="materials" id="materials">
        <div class="container materials-inner">
          <div class="materials-copy">
            <h2>Материалы и отделки</h2>
            <p>
              Используем проверенные материалы и честно рассказываем, чем они отличаются. Подбираем
              решение под бюджет, влажность, нагрузку и стиль интерьера.
            </p>
            <ul class="materials-list">
              <li>Натуральный массив, шпон, МДФ и фанера.</li>
              <li>Эмаль, масло, матовые и глянцевые лаки.</li>
              <li>Надежная фурнитура: доводчики, скрытые механизмы, направляющие.</li>
              <li>Стекло, металл и камень для комбинированных изделий.</li>
            </ul>
          </div>
          <div class="materials-grid">
            <div class="materials-card">
              <h3>Долговечность</h3>
              <p>Подбираем покрытия под интенсивность использования и условия помещения.</p>
            </div>
            <div class="materials-card">
              <h3>Тактильность</h3>
              <p>Делаем акцент на фактуре дерева и приятных на ощупь поверхностях.</p>
            </div>
            <div class="materials-card">
              <h3>Точность</h3>
              <p>Четкая геометрия и аккуратные стыки во всех элементах.</p>
            </div>
            <div class="materials-card">
              <h3>Экологичность</h3>
              <p>Работаем с безопасными материалами и современными покрытиями.</p>
            </div>
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

      <section class="portfolio" id="portfolio">
        <div class="container">
          <div class="section-head">
            <h2>Проекты PapaCarlo</h2>
            <p>Ниже — примеры форм, фактур и деталей. Фото можно заменить на реальные объекты.</p>
          </div>
          <div class="gallery-grid">
            <figure class="gallery-card">
              <div class="gallery-image gallery-one"></div>
              <figcaption>
                <strong>Кухня с островом</strong>
                <span>Шпон ореха, теплый матовый лак</span>
              </figcaption>
            </figure>
            <figure class="gallery-card">
              <div class="gallery-image gallery-two"></div>
              <figcaption>
                <strong>Лестница и перила</strong>
                <span>Комбинация дерева и металла</span>
              </figcaption>
            </figure>
            <figure class="gallery-card">
              <div class="gallery-image gallery-three"></div>
              <figcaption>
                <strong>Стеновые панели</strong>
                <span>Рейки и скрытые двери</span>
              </figcaption>
            </figure>
            <figure class="gallery-card">
              <div class="gallery-image gallery-four"></div>
              <figcaption>
                <strong>Гардеробная</strong>
                <span>Подсветка и функциональные модули</span>
              </figcaption>
            </figure>
            <figure class="gallery-card">
              <div class="gallery-image gallery-five"></div>
              <figcaption>
                <strong>Двери и порталы</strong>
                <span>Скрытые коробки, ровные стыки</span>
              </figcaption>
            </figure>
            <figure class="gallery-card">
              <div class="gallery-image gallery-six"></div>
              <figcaption>
                <strong>Коммерческий ресепшн</strong>
                <span>Барная стойка и зоны ожидания</span>
              </figcaption>
            </figure>
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
            <div class="contact-panel">
              <div class="contact-card">
                <strong>Адрес</strong>
                <p>Алматинская область, Карасайский район, квартал 096, 1777В</p>
              </div>
              <div class="contact-card">
                <strong>Телефон / WhatsApp</strong>
                <p><a href="tel:+77017997605">+7 (701) 799-76-05</a></p>
                <p>
                  <a href="https://wa.me/77017997605" target="_blank" rel="noopener">
                    Написать в WhatsApp
                  </a>
                </p>
              </div>
              <div class="contact-card">
                <strong>Instagram</strong>
                <p>
                  <a
                    href="https://www.instagram.com/papa.carlo.almaty/"
                    target="_blank"
                    rel="noopener"
                  >
                    papa.carlo.almaty
                  </a>
                </p>
              </div>
            </div>
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
          <p><a href="tel:+77017997605">+7 (701) 799-76-05</a></p>
          <p>
            <a href="https://wa.me/77017997605" target="_blank" rel="noopener">
              WhatsApp
            </a>
          </p>
          <p>
            <a
              href="https://www.instagram.com/papa.carlo.almaty/"
              target="_blank"
              rel="noopener"
            >
              Instagram
            </a>
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>

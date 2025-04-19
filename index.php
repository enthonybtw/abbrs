<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/layout.css" />
    <link rel="stylesheet" href="css/page/index.css" />
    <title>ABBRS / Wassup?!</title>
  </head>
  <body>
    <section class="layout">
      <header>
        <nav>
          <a href="/" class="about nav-link">О проекте</a>
          <a href="/" class="home logo">ABBRS</a>
          <a href="/" class="add nav-link">Добавить</a>
        </nav>
        <section class="search active has-text">
          <div class="wrapper">
            <span class="mini-logo">A</span>
            <form>
              <input
                type="text"
                id="search-input"
                placeholder="Найти сокращение"
              />
              <span class="clear-btn"></span>
              <button type="submit" onclick="console.log('123123')">
                Найти
              </button>
            </form>
          </div>
        </section>
      </header>
      <main>
        <section class="stats">
          <div class="count">
            <span>Сокращений</span>
            <h1 id="abbrs-count-wrapper">1 716</h1>
          </div>
          <div class="check">
            <span>На проверке</span>
            <h1>19</h1>
          </div>
        </section>
        <section class="new-abbrs">
          <h3 class="title">Свеженькие сокращения</h3>
          <div class="wrapper" id="new-abbrs-wrapper"></div>
        </section>
      </main>
      <footer>
        <section class="carousel">
          <div class="background">
            <span class="text">ABBRS ABBRS ABBRS ABBRS ABBRS ABBRS ABBRS</span>
          </div>
          <div class="text-box">
            <h3>Понравилось?!</h3>
            <p>
              <span>Добавляй</span>
              свои сокращения и становись одним из наших редакторов!
            </p>
          </div>
        </section>
        <div class="wrapper">
          <div class="row">
            <div class="about">
              <div class="site-name">
                <span class="logo">ABBRS</span>
                <span class="desc">Словарь сокращений английского языка</span>
              </div>
              <div class="nav-col">
                <a href="/" class="col-link">Главная</a>
                <a href="/" class="col-link">О проекте</a>
                <a href="/" class="col-link">Добавить</a>
              </div>
            </div>
            <div class="contacts">
              <div class="annotation">
                <p class="title">Материал к проектной работе</p>
                <p class="author">Ковалёва Кирилла Леонидовича</p>
              </div>
              <div class="links">
                <span class="link"
                  ><img src="images/footer/folder.png" alt="Work"
                /></span>
                <span class="link"
                  ><img src="images/footer/vk-logo.png" alt="VK"
                /></span>
                <span class="link"
                  ><img src="images/footer/telegram-logo.png" alt="Telegram"
                /></span>
              </div>
            </div>
          </div>
          <div class="rights">© Все права защищены - 2025</div>
        </div>
      </footer>
    </section>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/api.js"></script>
    <script src="js/main.js"></script>
    <script src="js/search.js"></script>
  </body>
</html>

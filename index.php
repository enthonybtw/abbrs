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
          <a href="#" class="about nav-link">О проекте</a>
          <a href="#" class="home logo">ABBRS</a>
          <a href="#" class="add nav-link">Добавить</a>
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
            <h1>1 716</h1>
          </div>
          <div class="check">
            <span>На проверке</span>
            <h1>101</h1>
          </div>
        </section>
        <section class="new-abbrs">
          <h3 class="title">Свеженькие сокращения</h3>
          <div class="wrapper">
            <div class="item">
              <h2 class="name">ASAP</h2>
              <h3 class="spacer">—</h3>
              <div class="about">
                <h3 class="desc">As soon as possible</h3>
                <p class="translation">Как можно скорее</p>
              </div>
            </div>
            <div class="item">
              <h2 class="name">XMAS</h2>
              <h3 class="spacer">—</h3>
              <div class="about">
                <h3 class="desc">Christmas</h3>
                <p class="translation">Рождество</p>
              </div>
            </div>
            <div class="item">
              <h2 class="name">GIMME</h2>
              <h3 class="spacer">—</h3>
              <div class="about">
                <h3 class="desc">Give me</h3>
                <p class="translation">Дай мне</p>
              </div>
            </div>
            <div class="item">
              <h2 class="name">LOL</h2>
              <h3 class="spacer">—</h3>
              <div class="about">
                <h3 class="desc">Laughing out load</h3>
                <p class="translation">Громко смеяться</p>
              </div>
            </div>
            <div class="item">
              <h2 class="name">OMG</h2>
              <h3 class="spacer">—</h3>
              <div class="about">
                <h3 class="desc">Oh my God</h3>
                <p class="translation">Ооо, Боже мой</p>
              </div>
            </div>
            <div class="item">
              <h2 class="name">LMAO</h2>
              <h3 class="spacer">—</h3>
              <div class="about">
                <h3 class="desc">Laughing my ass out</h3>
                <p class="translation">Дико смеяться</p>
              </div>
            </div>
            <div class="item">
              <h2 class="name">XOXO</h2>
              <h3 class="spacer">—</h3>
              <div class="about">
                <h3 class="desc">Hugs and kisses</h3>
                <p class="translation">Обнимаю и целую</p>
              </div>
            </div>
            <div class="item">
              <h2 class="name">IMHO</h2>
              <h3 class="spacer">—</h3>
              <div class="about">
                <h3 class="desc">In my humble opinion</h3>
                <p class="translation">По моему скромному мнению</p>
              </div>
            </div>
            <div class="item">
              <h2 class="name">DUNNO</h2>
              <h3 class="spacer">—</h3>
              <div class="about">
                <h3 class="desc">Don't know</h3>
                <p class="translation">Не знаю</p>
              </div>
            </div>
            <div class="item">
              <h2 class="name">B4</h2>
              <h3 class="spacer">—</h3>
              <div class="about">
                <h3 class="desc">Before</h3>
                <p class="translation">До</p>
              </div>
            </div>
          </div>
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
                <a href="#" class="col-link">Главная</a>
                <a href="#" class="col-link">О проекте</a>
                <a href="#" class="col-link">Добавить</a>
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
    <script src="js/main.js"></script>
    <script src="js/search.js"></script>
  </body>
</html>

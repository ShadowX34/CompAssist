<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="CompAssist - ваш персональный помощник в сборке ПК">
  <link rel="icon" href="mat/Новая-версия-3.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/contacts.css">
  <title>CompAssist - Сборка ПК на заказ</title>
</head>
<body>
  <header class="header">
    <div class="header-container">
      <h1 class="logo">
        <img src="mat/CompAssist.svg" alt="CompAssist" width="205" height="60">
      </h1>
      <p class="tagline">Твой персональный помощник в сборке ПК</p>
      <nav class="nav">
        <ul class="nav-list">
          <li><a href="index.php" class="nav-link">Главная</a></li>
          <li><a href="assort.php" class="nav-link">Сборки ПК</a></li>
          <li><a href="contacts.php" class="nav-link active">Контакты</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="contacts-section">
    <h2 class="section-title">Почему выбирают нас</h2>
    
    <div class="advantages-grid">
        <div class="advantage-card">
            <div class="advantage-icon"></div>
            <h3 class="advantage-title">Экономия 20%</h3>
            <p>Цены ниже конкурентов</p>
        </div>
        
        <div class="advantage-card">
            <div class="advantage-icon"></div>
            <h3 class="advantage-title">Качество</h3>
            <p>Профессиональная сборка</p>
        </div>
        
        <div class="advantage-card">
            <div class="advantage-icon"></div>
            <h3 class="advantage-title">Гарантия</h3>
            <p>3 года на все компоненты</p>
        </div>
        
        <div class="advantage-card">
            <div class="advantage-icon"></div>
            <h3 class="advantage-title">Скорость</h3>
            <p>Экспресс-доставка за 24 часа</p>
        </div>
    </div>

    <div class="contact-info">
        <h3 class="contact-title">Наши контакты</h3>
        <ul class="contact-list">
            <li class="contact-item">
                📞 <a href="tel:89199561331" class="contact-link">8 (919) 956-13-31</a>
            </li>
            <li class="contact-item">
                ✉️ <a href="mailto:info@mail.ru" class="contact-link">info@mail.ru</a>
            </li>
            <li class="contact-item">
                🏢 Москва, ул. Техническая, 12
            </li>
            <li class="contact-item">
                🕒 Ежедневно 9:00 - 21:00
            </li>
        </ul>
    </div>
</section>

<!-- Подвал -->

<footer class="footer">
  <div class="footer-container">
      <div class="footer-content">
          <div class="brand-column">
              <h3 class="footer-logo"><img src="mat/CompAssist1.svg" alt="LogoFooter"></h3>
              <p class="footer-description">Профессиональная сборка компьютеров под любые задачи</p>
          </div>

          <div class="contacts-column">
              <h4 class="contacts-title">Контакты</h4>
              <ul class="contacts-list">
                  <li class="contacts-item">
                      <a href="tel:89199561331" class="contacts-link">8 (919) 956-13-31</a>
                  </li>
                  <li class="contacts-item">
                      <a href="mailto:info@mail.ru" class="contacts-link">info@mail.ru</a>
                  </li>
              </ul>
          </div>
      </div>

      <div class="footer-bottom">
          <span class="copyright">© 2025 CompAssist. Все права защищены</span>
          <div class="policy-links">
              <a href="#" class="policy-link">Политика конфиденциальности</a>
              <a href="#" class="policy-link">Условия использования</a>
          </div>
      </div>
  </div>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      // Анимация для преимуществ
      const advantages = document.querySelectorAll('.advantages-grid > *');
      advantages.forEach((item, index) => {
          setTimeout(() => {
              item.classList.add('animated');
          }, 150 * index);
      });

      // Анимация для контактного блока
      setTimeout(() => {
          document.querySelector('.contact-info').classList.add('animated');
      }, 150 * advantages.length + 300);
  });
</script>

</body>
</html>
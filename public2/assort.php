
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="CompAssist - ваш персональный помощник в сборке ПК">
  <link rel="icon" href="mat/Новая-версия-3.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/assort.css">
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
          <li><a href="assort.php" class="nav-link active">Сборки ПК</a></li>
          <li><a href="contacts.php" class="nav-link">Контакты</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="pc-builds">
    <h2 class="section-title">Популярные сборки</h2>
    
    <div class="builds-grid">
        <!-- Карточка 1 -->
        <div class="build-card">
            <div class="product-image">
                <img src="mat/Корпус.png" alt="Игровой ПК CA-4070s">
            </div>
            <div class="card-content">
                <div class="model-code">CA-4070s</div>
                <div class="gpu-spec">RTX 4070 Super</div>
                <ul class="spec-list">
                    <li class="spec-item">Core i5-13400F</li>
                    <li class="spec-item">DDR5 32ГБ 6000МГц</li>
                    <li class="spec-item">SSD 1TB NVMe</li>
                </ul>
                <div class="price-block">
                    <div class="price">124 990 ₽</div>
                    <a href="#" class="order-btn">Заказать</a>
                </div>
            </div>
        </div>

        <!-- Карточка 2 -->
        <div class="build-card">
            <div class="product-image">
                <img src="mat/Корпус 2.png" alt="Игровой ПК RA-4060">
            </div>
            <div class="card-content">
                <div class="model-code">RA-4060</div>
                <div class="gpu-spec">RTX 4060 8GB</div>
                <ul class="spec-list">
                    <li class="spec-item">Core i5-12400F</li>
                    <li class="spec-item">DDR5 16ГБ 5200МГц</li>
                    <li class="spec-item">SSD 512GB NVMe</li>
                </ul>
                <div class="price-block">
                    <div class="price">89 990 ₽</div>
                    <a href="#" class="order-btn">Заказать</a>
                </div>
            </div>
        </div>

        <!-- Карточка 3 -->
        <div class="build-card">
            <div class="product-image">
                <img src="mat/Корпус 3.png" alt="Игровой ПК CA-7600">
            </div>
            <div class="card-content">
                <div class="model-code">CA-7600</div>
                <div class="gpu-spec">RX 7600 8GB</div>
                <ul class="spec-list">
                    <li class="spec-item">Ryzen 5 7500F</li>
                    <li class="spec-item">DDR5 16ГБ 4800МГц</li>
                    <li class="spec-item">SSD 512GB NVMe</li>
                </ul>
                <div class="price-block">
                    <div class="price">76 990 ₽</div>
                    <a href="#" class="order-btn">Заказать</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Форма для отправки заявки -->

<div class="modal-overlay" id="orderModal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal()">&times;</span>
    <h3 class="form-title">Оформление заказа</h3>
    <form id="orderForm">
  <input type="hidden" id="configuration" name="configuration" value="">
  
  <div class="form-group">
    <input type="text" class="form-input" name="fullName" 
           placeholder="ФИО" required
           pattern="^[А-ЯЁа-яё\s\-']{5,100}$"
           title="Введите полное ФИО (кириллица, пробелы, дефисы)">
    <div class="validation-error" data-field="fullName"></div>
  </div>
  
  <div class="form-group">
    <input type="tel" class="form-input" name="phone" 
           placeholder="Телефон" required
           pattern="^\+?7\d{10}$"
           title="Формат: +7XXXXXXXXXX или 8XXXXXXXXXX">
    <div class="validation-error" data-field="phone"></div>
  </div>
  
  <div class="form-group">
    <input type="email" class="form-input" name="email" 
           placeholder="E-mail" required
           title="Введите корректный email адрес">
    <div class="validation-error" data-field="email"></div>
  </div>
  
  <div class="form-group">
    <input type="text" class="form-input" name="address" 
           placeholder="Адрес доставки" required
           minlength="10" maxlength="255"
           title="Введите полный адрес доставки">
    <div class="validation-error" data-field="address"></div>
  </div>
  
  <button type="submit" class="submit-btn">Подтвердить заказ</button>
  
  <div class="form-footer">
    <div class="loading-spinner" id="spinner"></div>
    <div class="form-message" id="formMessage"></div>
  </div>
</form>
  </div>
</div>

<script src="script.js"></script>

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
  // Активация анимации при загрузке страницы
  document.addEventListener('DOMContentLoaded', function() {
      const cards = document.querySelectorAll('.build-card');
      
      cards.forEach((card, index) => {
          // Задержка для последовательного появления
          setTimeout(() => {
              card.classList.add('visible');
          }, 200 * index); // Интервал 200ms между карточками
      });
  });
</script>

<script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/sw.js')
        .then(registration => console.log('SW registered'))
        .catch(err => console.log('SW registration failed'));
    });
  }
  </script>


<script>
  // Функции для модального окна
  function openModal(config) {
    document.getElementById('configuration').value = config;
    document.getElementById('orderModal').style.display = 'flex';
    setTimeout(() => {
      document.getElementById('orderModal').classList.add('active');
    }, 10);
  }

  function closeModal() {
    document.getElementById('orderModal').classList.remove('active');
    setTimeout(() => {
      document.getElementById('orderModal').style.display = 'none';
      document.getElementById('orderForm').reset();
    }, 300);
  }

  // Обработчики событий
  document.addEventListener('DOMContentLoaded', () => {
    // Открытие модалки при клике на кнопки заказа
    document.querySelectorAll('.order-btn').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        const config = btn.closest('.build-card').querySelector('.model-code').textContent;
        openModal(config);
      });
    });

    // Обработка отправки формы
    document.getElementById('orderForm').addEventListener('submit', async (e) => {
      e.preventDefault();
      const form = e.target;
      const spinner = document.getElementById('spinner');
      const message = document.getElementById('formMessage');

      spinner.style.display = 'block';
      message.style.display = 'none';

      try {
  const formData = new FormData(form);
  
  const response = await fetch('save_order.php', {
    method: 'POST',
    body: formData
  });

  const result = await response.json();

  if (!result.success) {
    throw new Error(result.message);
  }
  
  message.textContent = result.message || 'Заказ успешно оформлен! С вами свяжутся в ближайшее время.';
  message.classList.add('success');
  message.style.display = 'block';
  form.reset();
  setTimeout(closeModal, 2000);
} catch (error) {
  message.textContent = error.message || 'Ошибка отправки формы. Попробуйте ещё раз.';
  message.classList.add('error');
  message.style.display = 'block';
} finally {
  spinner.style.display = 'none';
}
    });
  });
</script>

<script>
  document.getElementById('orderForm').addEventListener('submit', async (e) => {
  e.preventDefault();
  const form = e.target;
  const spinner = document.getElementById('spinner');
  const message = document.getElementById('formMessage');
  
  // Сброс предыдущих ошибок
  clearValidationErrors();

  // Клиентская валидация
  let isValid = true;
  const fields = {
    fullName: {
      pattern: /^[А-ЯЁа-яё\s\-']{5,100}$/,
      message: 'ФИО должно содержать 5-100 символов (кириллица, пробелы, дефисы)'
    },
    phone: {
      pattern: /^\+?7\d{10}$/,
      message: 'Формат: +7XXXXXXXXXX или 8XXXXXXXXXX'
    },
    email: {
      pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
      message: 'Некорректный формат email'
    },
    address: {
      minLength: 10,
      message: 'Адрес должен содержать минимум 10 символов'
    }
  };

  for (const [name, rules] of Object.entries(fields)) {
    const input = form.elements[name];
    const value = input.value.trim();
    
    if (!value) {
      showValidationError(name, 'Это поле обязательно');
      isValid = false;
    } else if (rules.pattern && !rules.pattern.test(value)) {
      showValidationError(name, rules.message);
      isValid = false;
    } else if (rules.minLength && value.length < rules.minLength) {
      showValidationError(name, rules.message);
      isValid = false;
    }
  }

  if (!isValid) return;

  spinner.style.display = 'block';
  message.style.display = 'none';

  try {
    const formData = new FormData(form);
    const response = await fetch('save_order.php', {
      method: 'POST',
      body: formData
    });
    
    const result = await response.json();
    
    if (!result.success) throw new Error(result.message);
    
    showSuccessMessage('Заказ успешно оформлен!');
    setTimeout(closeModal, 2000);
  } catch (error) {
    showErrorMessage(error.message);
  } finally {
    spinner.style.display = 'none';
  }
});

function showValidationError(field, message) {
  const input = document.querySelector(`[name="${field}"]`);
  const errorDiv = document.querySelector(`[data-field="${field}"]`);
  
  input.classList.add('invalid');
  errorDiv.textContent = message;
  errorDiv.style.display = 'block';
}

function clearValidationErrors() {
  document.querySelectorAll('.validation-error').forEach(el => {
    el.style.display = 'none';
    el.textContent = '';
  });
  document.querySelectorAll('.form-input').forEach(input => 
    input.classList.remove('invalid'));
}

function showSuccessMessage(text) {
  const message = document.getElementById('formMessage');
  message.textContent = text;
  message.classList.add('success');
  message.style.display = 'block';
  document.getElementById('orderForm').reset();
}

function showErrorMessage(text) {
  const message = document.getElementById('formMessage');
  message.textContent = text;
  message.classList.add('error');
  message.style.display = 'block';
}
</script>
</body>
</html>
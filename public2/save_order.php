<?php
header('Content-Type: application/json');

// Настройки базы данных
define('DB_HOST', 'localhost');
define('DB_NAME', 'compassist_db');
define('DB_USER', 'db_user');
define('DB_PASS', 'secure_password');

$response = ['success' => false, 'message' => '', 'errors' => []];

try {
    // Валидация данных
    $errors = [];
    $input = [
        'configuration' => trim($_POST['configuration'] ?? ''),
        'fullName' => trim($_POST['fullName'] ?? ''),
        'phone' => trim($_POST['phone'] ?? ''),
        'email' => trim($_POST['email'] ?? ''),
        'address' => trim($_POST['address'] ?? '')
    ];

    // Проверка конфигурации
    if (empty($input['configuration'])) {
        $errors['configuration'] = 'Не указана конфигурация';
    }

    // Валидация ФИО
    if (empty($input['fullName'])) {
        $errors['fullName'] = 'ФИО обязательно';
    } elseif (!preg_match('/^[А-ЯЁа-яё\s\-\']{5,100}$/u', $input['fullName'])) {
        $errors['fullName'] = 'Некорректный формат ФИО';
    }

    // Валидация телефона
    if (empty($input['phone'])) {
        $errors['phone'] = 'Телефон обязателен';
    } elseif (!preg_match('/^\+?7\d{10}$/', $input['phone'])) {
        $errors['phone'] = 'Некорректный формат телефона';
    }

    // Валидация email
    if (empty($input['email'])) {
        $errors['email'] = 'Email обязателен';
    } elseif (!filter_var($input['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Некорректный email';
    }

    // Валидация адреса
    if (empty($input['address'])) {
        $errors['address'] = 'Адрес обязателен';
    } elseif (strlen($input['address']) < 10) {
        $errors['address'] = 'Адрес слишком короткий (мин. 10 символов)';
    } elseif (strlen($input['address']) > 255) {
        $errors['address'] = 'Адрес слишком длинный (макс. 255 символов)';
    }

    if (!empty($errors)) {
        $response['errors'] = $errors;
        throw new Exception('Исправьте ошибки в форме');
    }

    // Подключение и единственный запрос
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

    // ЕДИНСТВЕННЫЙ ЗАПРОС
    $pdo->prepare("
        INSERT INTO orders 
        (configuration, full_name, phone, email, address) 
        VALUES (:config, :name, :phone, :email, :address)
    ")->execute([
        ':config' => $input['configuration'],
        ':name' => $input['fullName'],
        ':phone' => $input['phone'],
        ':email' => $input['email'],
        ':address' => $input['address']
    ]);

    $response['success'] = true;
    $response['message'] = 'Заказ успешно сохранен';

} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    $response['message'] = 'Ошибка при сохранении заказа';
} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
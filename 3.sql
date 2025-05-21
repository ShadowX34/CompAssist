CREATE USER 'db_user'@'localhost' IDENTIFIED BY 'secure_password';
GRANT ALL PRIVILEGES ON compassist_db.* TO 'db_user'@'localhost';
FLUSH PRIVILEGES;
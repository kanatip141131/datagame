-- Create database
CREATE DATABASE IF NOT EXISTS datastruce;
USE datastruce;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create user_settings table
CREATE TABLE IF NOT EXISTS user_settings (
    user_id INT PRIMARY KEY,
    editor_theme VARCHAR(20) DEFAULT 'dark',
    font_size INT DEFAULT 14,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Create test user (password: test123)
INSERT INTO users (username, password) VALUES 
('test', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- Insert test user settings
INSERT INTO user_settings (user_id, editor_theme, font_size) VALUES 
(LAST_INSERT_ID(), 'dark', 14);

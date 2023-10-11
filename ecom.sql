CREATE TABLE IF NOT EXISTS users (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(120) NOT NULL,
    email VARCHAR(120) NOT NULL,
    password VARCHAR(120) NOT NULL,
    user_type ENUM('user', 'admin') DEFAULT 'user',
    profile VARCHAR(255) DEFAULT 'profile.jpg'
);






CREATE TABLE IF NOT EXISTS user_details (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    user_id INT(10) NOT NULL,
    country VARCHAR(120) DEFAULT NULL,
    state VARCHAR(120) DEFAULT NULL,
    district VARCHAR(120) DEFAULT NULL,
    pincode VARCHAR(120) DEFAULT NULL,
    mobile VARCHAR(15) DEFAULT NULL,
    local_address VARCHAR(255) DEFAULT NULL,
    permanent_address VARCHAR(255) DEFAULT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

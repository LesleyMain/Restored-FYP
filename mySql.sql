CREATE TABLE 'Users' (
    'userID' INT PRIMARY KEY AUTO_INCREMENT,
    'name' Char NOT NULL,
    'Email' VARCHAR(100) UNIQUE NOT NULL,
    'Password' VARCHAR(100) NOT NULL,
    'CreatedAt' TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO Users (Name, Email, Password) VALUES
('John Doe', 'john@example.com', 'password123'),
('Alice Smith', 'alice@example.com', 'securepassword'),
('Bob Johnson', 'bob@example.com', 'bobspassword');
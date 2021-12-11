--Soal 1 Membuat Database :
CREATE DATABASE myshop;

--Soal 2 Membuat Table di Dalam Database :
CREATE TABLE myshop.users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255)
);


CREATE TABLE myshop.categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)
);


CREATE TABLE myshop.items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description VARCHAR(255),
    price INT,
    stock INT,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES myshop.categories(id)
);

--Soal 3 Memasukkan Data pada Table :
INSERT INTO myshop.users(name, email, password) VALUES 
('John Doe','john@doe.com','john123'),
('Jane Doe','jane@doe.com','jane123');

INSERT INTO myshop.categories(name) VALUES 
('gadget'),
('cloth'),
('men'),
('women'),
('branded');

INSERT INTO myshop.items(name, description, price, stock, category_id) VALUES 
('Sumsang b50','hape keren dari merek sumsang',4000000,100,1),
('Uniklooh','baju keren dari brand ternama',500000,50,2),
('IMHO Watch','jam tangan anak yang jujur banget',2000000,10,1);

--Soal 4 Mengambil Data dari Database :
SELECT 'id','name','email' 
FROM myshop.users;

SELECT * 
FROM myshop.items 
WHERE price>1000000;

SELECT * 
FROM myshop.items 
WHERE name LIKE 'uniklo%';

SELECT items.*,categories.name 
FROM myshop.items 
LEFT JOIN myshop.categories ON myshop.items.category_id = myshop.categories.id;

--Soal 5 Mengubah Data dari Database :
UPDATE myshop.items 
SET price=2500000 
WHERE items.name = 'Sumsang b50';


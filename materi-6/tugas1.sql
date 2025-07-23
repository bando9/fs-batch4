create table products (
	id int auto_increment primary key,
	name VARCHAR(100) not null,
	price int default null,
	description VARCHAR(500),
	stock int default 0
)


create table users (
	id int auto_increment primary key,
	name VARCHAR(100) not null,
	email VARCHAR(100) not null UNIQUE,
	PASSWORD VARCHAR(255) not null
);

create table orders (
	order_id int auto_increment primary key,
	user_id int not null,
	product_id int not null,
	quantity int not null,
	total int not null,
	
	FOREIGN key (user_id) REFERENCES users(id) on DELETE CASCADE,
	FOREIGN KEY (product_id) REFERENCES products(id) on DELETE CASCADE
);


-- create
insert into products (name, price, description, stock)
values 
('Headphone Bluetooth A1',299000, 'Headphone nirkabel dengan kualitas suara jernih.',10),
('Meja Belajar Minimalis',450000, 'Meja kayu untuk belajar atau kerja dengan desain simpel.', 5),
('Kemeja Flanel Pria',199000,'Kemeja flanel nyaman dan stylish untuk sehari-hari.',	20),
('Laptop ASUS VivoBook',7899000,'Laptop 14 inch dengan RAM 8GB cocok untuk kerja kantoran.',7),
('Setrika Uap Portable',175000,'Setrika ringan dan mudah dibawa saat bepergian.',12);

-- read
SELECT * FROM products where id = 2;

-- update
UPDATE products set price = 199000 where id = 1;

DELETE from products WHERE id = 5;

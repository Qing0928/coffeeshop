create database shop default character set utf8 collate utf8_general_ci;
grant all on shop.* to 'yucheng'@'localhost' identified by 'coffeeshop';
use shop;
create table products(
	id int auto_increment primary key, 
	name varchar(30) not null,
	price int not null
);
create table customer (
	id int auto_increment primary key, 
	name varchar(100) not null,
	login varchar(100) not null unique,
	password varchar(100) not null
);
create table purchase (
	id int not null primary key, 
	customer_id int not null, 
	foreign key(customer_id) references customer(id)
);

create table purchase_detail (
	purchase_id int not null, 
	products_id int not null, 
	count int not null,
	primary key(purchase_id, products_id), 
	foreign key(purchase_id) references purchase(id),
	foreign key(products_id) references products(id)
);

insert into products values(null, '冰拿鐵', 80);
insert into products values(null, '卡布奇諾', 90);
insert into products values(null, '咖啡凍', 35);
insert into products values(null,'咖啡奶酪',45);
insert into products values(null,'咖啡豆餅乾',60);
insert into products values(null,'手沖咖啡',50);
insert into products values(null,'抹茶拿鐵',65);
insert into products values(null,'星冰樂',70);
insert into products values(null,'鬆餅',55);
insert into products values(null,'鴛鴦奶茶',70);
insert into customer values(null, '林昱丞', 'b10717029', 'yucheng0934');

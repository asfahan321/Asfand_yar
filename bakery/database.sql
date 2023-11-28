create database bakery;
use bakery;
create table products(
id int primary key auto_increment,
product_name varchar(200),
product_discription varchar(200),
product_piece int,
product_price int
);
select*from products; 
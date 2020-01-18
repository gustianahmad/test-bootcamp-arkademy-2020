DROP DATABASE no6;

CREATE DATABASE no6;

CREATE TABLE product (
	id int not null,
	name varchar(20),
	price varchar(20),
	id_category varchar(20),
	id_cashier varchar(20),
	primary key (id)


);

CREATE TABLE category (
	id int primary key,
	name varchar(20)
);

create table cashier (
	id int primary key,
	name_cashier varchar(20)
);


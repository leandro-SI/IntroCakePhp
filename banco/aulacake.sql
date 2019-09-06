create table users(
id int primary key auto_increment,
name varchar(220),
email varchar(220),
username varchar(220),
password varchar(220),
created datetime,
modified datetime
);

insert into users(name, email, username, password, created, modified) 
values('Leandro', 'leandro@gmail.com', 'leandro01', '842682', '2019-08-30 00:00:00', '2019-08-30 00:00:00');

insert into users(name, email, username, password, created, modified) 
values('Dayanne', 'dayanne@gmail.com', 'dayanne01', '842682', '2019-08-30 00:00:00', '2019-08-30 00:00:00');

insert into users(name, email, username, password, created, modified) 
values('Luciana', 'luciana@gmail.com', 'luciana01', '842682', '2019-08-30 00:00:00', '2019-08-30 00:00:00');

insert into users(name, email, username, password, created, modified) 
values('Silvio', 'silvio@gmail.com', 'silvio01', '842682', '2019-08-30 00:00:00', '2019-08-30 00:00:00');

insert into users(name, email, username, password, created, modified) 
values('Sara', 'sara@gmail.com', 'sara01', '842682', '2019-08-30 00:00:00', '2019-08-30 00:00:00');

insert into users(name, email, username, password, created, modified) 
values('Nega', 'nega@gmail.com', 'nega01', '842682', '2019-08-30 00:00:00', '2019-08-30 00:00:00');

insert into users(name, email, username, password, created, modified) 
values('Billi', 'billi@gmail.com', 'billi01', '842682', '2019-08-30 00:00:00', '2019-08-30 00:00:00');

select * from users;

-- OUTRAAAAAAAAAAAAAAAAAA

create table cats_artigos(
id int primary key auto_increment,
nome varchar(220),
created datetime,
modified datetime
);

create table artigos(
id int primary key auto_increment,
titulo varchar(220),
conteudo text,
slug varchar(220),
created datetime,
modified datetime
);



select * from cats_artigos;
select * from artigos;





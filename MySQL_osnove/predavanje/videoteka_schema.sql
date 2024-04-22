-- Create database videoteka
create database if not exists videoteka character set utf8mb4 collate utf8mb4_general_ci;

use videoteka;

-- Create table member
create table if not exists member (
    member_number  int not null auto_increment,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    registration_date date not null,
    primary key (member_number)
);

-- Create table price_list
create table if not exists price_list (
    id int not null auto_increment,
    movie_type varchar(50) not null,
    rental_price decimal(5,2) not null,
    late_fee_per_day decimal(5,2) not null,
    primary key (id)
);

-- Create table movie
create table if not exists movie (
    id int not null auto_increment,
    title varchar(255) not null,
    media_type varchar(50) not null,
    price_list_id int not null,
    primary key (id)
    );

-- Create table rental
create table if not exists  rental (
    id int not null auto_increment,
    rental_date date not null,
    return_date date null,
    due_date date not null,
    late_fee decimal(5,2) default 0,
    member_number int not null,
    movie_id int not null,
    primary key (id),
    foreign key (member_number) references member(member_number),
    foreign key (movie_id) references movie(id)
);

-- Create table genre
create table if not exists genre (
    id int not null auto_increment,
    name varchar(50) not null,
    primary key (id)
);

-- Create table movie_genre
create table if not exists movie_genre (
    id int not null auto_increment,
    movie_id int not null,
    genre_id int not null,
    primary key (id),
    foreign key (movie_id) references movie(id),
    foreign key (genre_id) references genre(id)
);

alter table movie
add constraint  fk_movie_pricelist
foreign key (price_list_id) references price_list(id)
on delete restrict
on update cascade


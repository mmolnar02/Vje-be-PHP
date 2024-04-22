insert into videoteka.member 
(registration_date, first_name, last_name)
values
('2023-01-15', 'Marko', 'Marković'),
('2023-02-20', 'Ivana', 'Ivnić'),
('2023-03-10', 'Petra', 'Petrić');

insert into videoteka.price_list 
(movie_type, rental_price, late_fee_per_day)
values
('hit film', '3.99', '0.99'),
('ne hit film', '2.99', '0.49'),
('stari film', '1.99', '0.29');

insert into videoteka.movie 
(title, media_type, price_list_id)
values
('Gas do daske 3', 'Blue Ray', 1),
('Kum 1', 'DVD', 3),
('Barbie', 'Blue Ray', 2);

update videoteka.price_list
set id = 4
where id = 1;
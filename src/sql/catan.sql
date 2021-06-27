create database catan;
use catan;

create table players (
                         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                         color varchar(6),
                         victory_points int,
                         stone int,
                         clay int,
                         grain int,
                         wood int,
                         sheep int
);
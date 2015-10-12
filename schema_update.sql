create table users (id_no int AUTO_INCREMENT primary key, firstname varchar(20) not null, lastname varchar(20), email varchar(50), phone varchar(15), username varchar(20) not null, password varchar(256) not null, federal_constituency int, foreign key (federal_constituency) references federal_constituencies (id_no) on update cascade on delete set null)
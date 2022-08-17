create table comments(
	id int not null auto_increment,
	name varchar(255) not null,
	text text not null,
	primary key(id)
)ENGINE = InnoDB;
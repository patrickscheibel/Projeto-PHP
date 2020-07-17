CREATE DATABASE php_crud;

use php_crud;

CREATE TABLE linguagem(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  descricao TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

insert into linguagem (`nome`, `descricao`) values('PHP', 'Web');
insert into linguagem (`nome`, `descricao`) values('Node', 'Web');
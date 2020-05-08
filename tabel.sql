CREATE TABLE teste(
  id INT NOT NULL AUTO_INCREMENT,
  email varchar(100),
  usuario varchar(50),
  senha varchar (50),
  status tinyint, 
  primary key(id)
);

/*recomendo que vcs usem a interface gráfica do phpmyadmin
   Tem pouca chance de dar erros 
   O campo status ele pode ser usado como premiação de acesso
   Esse campo ele podera receber o valor 1 depois q o usuário
   clicar no link da validação.
*/

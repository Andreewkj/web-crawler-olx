Olá!
Primeiramente gostaria de agradecer a oportunidade de participar do processo seletivo
e pedir que me enviem qualquer feed back para que eu consiga sempre melhorar minhas habilidades,
realmente espero o feedback!

Passos para a realização da tarefa

#1
Utilizei o composer para usar o vendor autoload e facilitar no carregamento das classes.

#2
Fiz a criação do arquivo Config.php para estabelecer as constantes do banco de dados.

#3
3.1
Criei três classes
Regex, para escanear o html do site e buscar o match entre as expressões regulares no site da Olx,
como apoio utilizei o site regex101.com.

Anuncio, onde utilizado os dados da classe Regex e transfiro para que possa inserir no banco de dados.

Custumo utilizar a terceira classe Conn para conexão com o banco de dados, é uma classe abstrata apenas para ser estendida quando necessário.

#4 

Utilizei o index para instânciar as classes, transferir os valores das variáveis entre Regex e Anuncio, 
em seguida executo o metodo insert para inserir os valores no banco.

#5

Criei um banco com as tabelas respectivas tabelas

CREATE TABLE `anuncios_olx` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preco_atual` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_postagem` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hora_postagem` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_anuncio` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_anuncio` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localizacao` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

Deixei a configuração do banco de dados em um arquivo na raiz para consultarem.

há um README.md para o arquivo api-json no mesmo.





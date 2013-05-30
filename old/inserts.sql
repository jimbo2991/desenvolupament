/*USUARIO*/

insert into usuario values ('moeager','45687563H', 'Alejandro', 'Huertas', 'ahuertas@gmail.com', 664654765, 'c/ MartinL, 3' );
insert into usuario values ('kobeexposito','43487568L', 'Kobe', 'Exposito', 'kb24@gmail.com', 631258769, 'Av. Pierce PP, 56' );
insert into usuario values ('KingJames','45604781J', 'LeBron', 'Reyes', 'lbj6@gmail.com', 677754234, 'c/ Schwarzenegger, 38');
insert into usuario values ('CP3','45347281K', 'Chris', 'Martinez' , 'cp3paul@gmail.com', 689843567, 'Rue Salpetrière, 24' );
insert into usuario values ('kevinlopez','42047181F', 'Kevin', 'Lopez' , 'K5G@gmail.com', 666777888,  'Av. Barcelona, 8');
insert into usuario values ('sagana7','X1234748Z', 'DeSagana', 'Diop', 'ahuertas@gmail.com', 663645765, 'c/ San Honorato, 31' );
insert into usuario values ('biofrutas','47865423P', 'Pascual', 'Denero', 'kb24@gmail.com', 631158712, 'Av. Jaume I, 2' );
insert into usuario values ('dantoniod','47875452D ', 'Antonio', 'Davis', 'lbj6@gmail.com', 674554223, 'c/ Volta, 1');
insert into usuario values ('MickaelPietrus','47885441Q ', 'Mickael', 'Pietrus' , 'cp3paul@gmail.com', 677848167, 'Av. Mayo, 36' );
insert into usuario values ('kevin23','47775423F', 'Kevin', 'Martin' , 'K5G@gmail.com', 666896888,  'Av Jaquar, 77');


/*REGISTRO*/

insert into registro values ('CP3','vendedor', 'clipper');
insert into registro values ('CP3','redactor', 'clipper');
insert into registro values ('CP3','cliente', 'clipper');
insert into registro values ('moeager','vendedor', 'mourinho');
insert into registro values ('moeager','cliente', 'mourinho');
insert into registro values ('KingJames','redactor', 'leeebron');

/*VENDEDOR*/

insert into vendedor values ('CP3');
insert into vendedor values ('moeager');

/*CLIENTE*/

insert into cliente values ('CP3');
insert into cliente values ('moeager');


/*REDACTOR*/

insert into redactor values ('CP3');
insert into redactor values ('KingJames');


/*NOTICIA*/

insert into noticia values ('235','Primeras noticia PS4','contenido de prueba','2013-02-10','23:45:34','CP3');


/*VIDEOJUEGO*/

insert into videojuego values ('420','NBA 2K14','2K','PS3','2013-10-08','69.99','Control PS MOVE','Deportes');


/*CONCURSO*/

insert into concurso values ('1001','Concurso videojuego peluche super mario','peluchemario','2013-02-22 00:00:00','CP3');


/*PREGUNTAS_CONCURSO*/

insert into preguntas_concurso values ('1001','¿Que utilizaba Super Mario para convertirse en mapache en Super Mario World 3?',
									   'Flor','Trozo de Rama','Estrella','Seta','Seta Venenosa','Hoja','Seta Verde','Pluma',
									   'Nabo','Moneda','Hoja');
									  
/*VENDE*/	
									  
insert into vende values ('420','CP3');
insert into vende values ('420','moeager');

/*COMPRA*/

insert into compra values ('420','CP3');
insert into compra values ('420','moeager');

/*VALORA*/

insert into valora values ('CP3','420');
insert into valora values ('KingJames','420');

/*PARTICIPA*/

insert into participa values ('1001','CP3');
insert into participa values ('1001','moeager');

/*PUNTUA*/

insert into puntua values ('CP3','420');
insert into puntua values ('moeager','420');
									   
									  




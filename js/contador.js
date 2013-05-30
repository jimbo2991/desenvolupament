var temps=60; //inicialitzem el temps a 6.
			interval();
			//Mostrar en la barra d'estat quant temps porta la pàgina oberta
			function mostrar()
            {
               temps = temps -1; //comptador del temps.
			   //si el temps es major o igual a 0
			   if (temps>=0){
               //Valor de la barra d'estat
               document.concurso.contador.value=temps;
			   }
			   //si es menor que 0
			   else {
			   //atura l'interval
			   clearInterval(interval);
			   }
            }
            
            //Mostra cada segon quants segons han passat
            function interval()
            {
               //activa l'interval
			   interval=setInterval("mostrar()",1000);
			}   
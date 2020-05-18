## php artisan send:post [EN]

With this command, send a simple POST request to the URL: https://atomic.incfile.com/fakepost from which the following results are obtained:

- Due to the fact that the route is ficiticia an error 404 is obtained.
- Simulating with another URL (http://httpbin.org), different results were forced.
    + Error 405: forming different methods
    + SSL certificate location error

### In response to points 4 and 5 [EN]

Answer: The guzzlehttp / guzzle dependency or package has been implemented: to handle requests or requests to external APIs or URLs, this achieves the following:

- The pericion or request will always reach its destination, and the aforementioned errors (404, 405, SSL) can be obtained.
- Because guzzlehttp / guzzle is a request handler, it can queue requests to get answers to multiple requests, and give answers to all of them.
- It is important to mention that with current 100K technology it is nothing, but it should be considered that the server supports such a number of requests simultaneously.

It is important to mention that for this practical exercise a dependency or package already pre-installed in laravel was implemented, but you can use REDIS and create a more complete command of the requests.


## php artisan send:post [ES]

Con este comando envia una simple peticion POST a la URL: https://atomic.incfile.com/fakepost de la que obtienen los siguintes resultados:

- Devido a que la ruta es ficiticia se obtiene un error 404.
- Simulando con otra URL (http://httpbin.org), se forzaron diferentes resultados.
    + Error 405: formzando diferentes metodos.
    + Error de localización del cerficado SSL

### En respuesta a los puntos 4 y 5 [ES]

Respuesta: Se ha implementado la dependencia o paquete guzzlehttp/guzzle:  para el manejo de peticiones o solicitudes a API o URL externas, con esto se logra lo siguiente:

- La pericion o solicitud siempre llegara a su destino, y se puede obtener los error antes mencionados (404, 405, SSL).
- Debido a que guzzlehttp/guzzle es un manejador de peticiones este puede encolar las peticiones para obtener respuestas a multiples solicitudes, y dar respuestas a toda ellas. 
- Es importante mencionar que con la tecnología actual 100K no es nada, pero si se debe considerar que el servidor soporte tal numero de peticiones simultaneamente.

Es importante mencionar que para este ejecicio practico se implemento una dependencia o paquete ya pre-instaldo en laravel, pero se puedes utilizar REDIS y crear un comando mas completo de las peticiones.




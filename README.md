# practicaUD3

## DESCRIPCION DEL PROBLEMA
<p>
Quiero implementar una gestion de su gimnasio.
Quiero gestionar sus usuarios, planes, entrenadores, rutina personalizadas
Para ello se necesita:
Una tabla llamada Usuarios, cada usuario debe tener 1 perfil que incluye su edad y su estado fisico, tambien el usuario tiene que tener un Plan con su nombre y precio
Tabla Planes con su nombre y precio para que cada Usuario pueda elegir la opcion que quiera
Entrenador con nombre y especializacion para que puedan asignarse a los Usuario del gimnasio
Rutinas con su nombre y  objetivo, ejercicios de cada rutina con las series y  ejercicios que cada usuario necesita una rutina con ejercicios especificos y los ejercicios tienen nombre, grupo muscular y una descripcion de dichos ejercicios
La tabla ejercicios_rutina sirve como tabla pivote ya que cada rutina incluye varios ejercicios y un ejercicio puede pertenecer a varias rutinas (N:M)

La tabla ejercicios_rutina es una tabla pivote que establece la relacion muchos a muchos entre las tablas rutinas y ejercicios. Ya que cada rutina incluye varios ejercicios y un ejercicio puede pertenecer a varias rutinas

USUARIOS 1:1 PERFILES
cada usuario tiene un unico perfil y viceversa

USUARIOS N:1 PLANES
muchos usuarios pueden tener el mismo plan pero un plan solo puede asociarse a un usuario

USUARIOS 1:N ENTRENADOR
un entrenador puede tener muchos usuarios pero un usuario solo puede tener un entrenador

USUARIOS 1:N RUTINAS
un usuario puede tener muchas rutinas pero cada rutina esta asociada a un usuario

RUTINAS 1:N EJERCICIOS_RUTINA
una rutina incluye muchos ejercicios pero cada ejercicios_rutina se asocia a una sola rutina

EJERCICIOS N:1 EJERCICIOS_RUTINA
ejercicio pertence a muchas rutinas pero ejercicios_rutina pertenece a un solo ejercicio
/<p>

## MODELO ENTIDAD-RELACION
![IMAGEN DEL MODELO E-R](/imagen/Diagrama_Practica03.webp)


## WoW (Way of Working)
<p>
Primero de todo hay que crear un proyecto Laravel
Descargar Laravel, Docker, PHP y Composer
composer create-project --prefer-dist laravel/laravel practicaUD3
para crear el proyecto laravel con php unit y no starter kit
Crear un Dockerfile para la base de datos, en este caso de MariaDB
Con nombre: mariadb-server1, puerto:3306, usuario:root, password:
docker exec -it (permite la interaccion con el contenedor)mariadb-server1 mariadb -u(usuario) root -p(contraseña)
Levanta el contenedor llamado mariadb-server1
se crea la base de datos: gestion_gym con sus tablas
Se crean las migraciones de las tablas con php artisan make:migration 
Luego se ejecutan las migraciones con php artisan migrate
Se crean datos de prueba con php artisan make:seeder
Luego se ejecutan con php artisan db:seed
Se crean los Modelos con php artisan make:model 
Se crean las rutas para la API con php artisan install:api
Y por ultimo se crean los Controllers para las solicitudes
Con Postman se comprueban dichas solicitudes
En el fichero Postman id al link para ver las solicitudes.
/<p>

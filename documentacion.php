Documentación
Para iniciar con el proyecto necesite instalar los siguientes componentes:
-	Xampp versión 7.2.5
-	Laravel versión 7.x
-	Composer última versión
Al iniciar el proyecto en laravel necesite agregar la autenticación con los siguientes comandos:
-	composer require larave/ui
-	npm install
-	npm run dev
con esto ya instalado teniamos la autenticación de usuarios y una pequeña interfaz gráfica.
Luego de esto Ingrese un par de seeders para los usuarios y los roles utilizando el comando:
php artisan make:seeder 
-	RolesTableSeeder.php
-	UsersTableSeeder.php
Al terminar con los seeders genere una vista para cada rol con una autenticación ubicada en LoginController.php en conjunto con cada controlador de home de cada usuario, tomando el rol de la sección, comparándolo y mandándolo a la vista para mostrar un dashboard especifico. 
Intento implementar Fullcalendar con pésimos resultados, luego intento cambiar todo el proyecto a la versión 8 de laravel con pésimos resultados de igual forma.
Luego implemento AdminLTE 3 con el siguiente comando:
-	npm install admin-lte@^3.0
AdminLTE 3 funciona con 3 dependencias especificas:
-	Bootstrap 4
-	jQuery 3.3.1+
-	Popper.js 1.14.7
Para más información ir a https://adminlte.io/docs/3.0/dependencies.html .
Al instalar AdminLTE 3 se instalaron una gran cantidad de plugins entre los cuales venia FullCalendar.




Implementando FullCalendar
Para implementar y modificar FullCalendar genere un Archivo Js Custom llamado custom.js dentro del cual esta toda la funcionalidad de FullCalendar.
Para que fuera visible dentro de una vista tendremos que importar todos los scripst y css de FullCalendar contenidos en las carpetas:
-	public/vendor/fullcalendar  
-	public/vendor/fullcalendar-plugin
ya terminando esto es tan simple como crear un <div> con el parámetro id=”calendar” y se generara el calendario con sus funcionalidades.
Para más información ir a https://fullcalendar.io/ .
 
Al terminar de implementar FullCalendar comencé a ver la base de datos generando las correspondientes migraciones guiándome directamente desde SqlDbm.
Luego genere vistas con formularios para las vistas Guiando desde el Mockup:
-	Agenda
-	Gestion de Centros
-	Gestion de Administradores
-	Gestion de Recursos
-	Gestion de Bloques 
-	Gestion de Bloqueos 
-	Gestion de Especialidad
-	Gestion de Medicos
-	Gestion de Equipamientos
En la gran mayoría de estas vista esta implementados los siguientes plugin:
-	Selec2 		más información en https://select2.org/  
-	DatePicker	más información en http://www.daterangepicker.com/ 
-	iCheck Bootstrap  
más información en https://github.com/bantikyan/icheck-bootstrap#readme 

-	DataTable 	más información en https://datatables.net/ 





Para implementar Select2 tendra que importar los scripts y css desde la carpeta public/vendor/selec2-bootstrap4-theme y luego en un <select> agregar class=”select2bs4” y será visible el plugin.

Para implementar DatePicker tendrá que importar los scripts y css desde la carpeta public/vendor/datepicker y además public/vendor/daterangepicker, luego generar un js custom llamado datecustom.js donde estará toda la configuración del formato de tiempo y como se visualizará. Para utilizarlo dentro de un <form> se llamara como un <input> con el parámetro id=”reservationtime”. 

Para implementar iCheck tendra que importar los scripts y css desde la carpeta public/vendor/icheck-bootstrap y para visualizarlo tendremos que generar un <div> con class=”icheck-primary” y un <input> con type=”checkbox” e id=”checkboxPrimary”.

Para implementar DateTable tendrá que importar los scripts y css desde la carpeta public/vendor/datetables y public/vendor/datetables-plugins . Para poder implementar el plugin se genera un js custom llamado tablecustom.js con los parámetros para la tabla y para ser vista se genera un <table> con id=”example2”.

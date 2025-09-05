Informe breve de lo que se realizo
 DESTINOS - Sistema de Gestión de Paquetes Turísticos
 Descripción
DESTINOS es un sistema web desarrollado con Laravel que permite la gestión de paquetes turísticos.
Actualmente cuenta con módulos de autenticación, visualización de paquetes y un CRUD básico de usuarios.
El proyecto está diseñado para aprender y practicar integración frontend-backend con Laravel, Blade y base de datos MySQL.
________________________________________
🚀 Funcionalidades implementadas (v0.2)
•	 Autenticación de usuarios
o	Registro de nuevos usuarios.
o	Inicio de sesión.
o	Cierre de sesión.
•	 Gestión de usuarios (CRUD básico)
o	Listar usuarios.
o	Editar información de usuario.
o	Eliminar usuarios.
•	 Módulo de Paquetes
o	Los paquetes turísticos se cargan desde la base de datos (no desde código).
o	Visualización de los paquetes en la página de inicio.
o	Cada paquete tiene un botón "Ver más" que redirige a un detalle dinámico (/paquetes/{id}).
o	En la vista de detalle se muestran todas las descripciones relacionadas al paquete.
________________________________________
 Base de datos y Migraciones
Las tablas principales incluyen:
•	users → generada por defecto en Laravel (autenticación).
•	paquetes → migración creada manualmente.
o	Campos:
	id
	nombre (ej: "Paquete Cusco 5 días")
	descripcion
	precio
	imagen (ruta de la imagen del paquete)
	created_at / updated_at
Ejemplo: Los paquetes se insertan con Seeders para tener datos de prueba y poder cargarlos automáticamente en el Home.
________________________________________
 Tecnologías usadas
•	Backend: Laravel 10
•	Frontend: Blade (plantillas), Livewire (dinámico)
•	Base de datos: MySQL / MariaDB
•	Autenticación: Sistema nativo de Laravel
•	ORM: Eloquent
Pruebas realizadas
✔️ Se probó el registro y login de usuarios.
✔️ Se validó que los paquetes se muestran correctamente en la página principal.
✔️ El botón "Ver más" abre la página de detalle con información real de la base de datos.
✔️ Se probaron las funciones de editar y eliminar usuarios desde el CRUD.
Requisitos implementados
 Conexión frontend ↔ backend.
 Autenticación de usuarios (login, registro, logout).
 Migración y seeder de la tabla paquetes.
 Carga dinámica de paquetes en la página principal.
 Vista de detalle dinámico de cada paquete.
 CRUD de usuarios (editar, eliminar).
 Pendientes / Próximos pasos
•	 Subida y gestión de imágenes reales para los paquetes.
•	 Implementación de botones "Reservar" y "Comprar" con flujo de pago.
•	 Reportes y dashboard administrativo.
•	 Mejoras en la interfaz con TailwindCSS/Livewire.
git add README-detalles.md

# Documentación del sistema

> Documento vivo: se completa y actualiza en cada etapa del proyecto.

## 1. El sistema
- Nombre:
- Qué problema resuelve:
- Usuarios (quién lo usa y para qué):

## 2. Entidades y datos
Entidad principal: ____________
| campo   | tipo (MySQL)          | ejemplo |
|---------|-----------------------|---------|
| id      | INT PK AUTO_INCREMENT | 1       |
|         |                       |         |

(En datos.php la misma entidad es un array: las claves = estas columnas.)

## 3. Archivos del proyecto
| archivo                | para qué sirve |
|------------------------|----------------|
| index.php / login.php  | Pagina de inicio de sesion|
| header.php / footer.php| Documentos con la cabecera y pie de pagina |
| logout.php             | Documento para cerrar la sesion |
| home.php               | Pagina principal |
| style.css              | Documento con los estilos de las paginas |
| tabla.sql              | Base con datos para la pagina |

## 4. Mapa del flujo
login -> sesion -> pagina protegida -> include cabecera ->
cartelera (foreach sobre datos.php) -> click -> ficha (lookup) ejemplo

## 5. Estado actual
- [+] Login + sesion + proteccion
- [+] Includes + navegacion
- [-] Cartelera (foreach)
- [-] Ficha (lookup)
- [+] Tabla MySQL (CREATE + INSERT + SELECT)
- [-] Repositorio actualizado

## 6. Proximas etapas
- [-] Segunda entidad y su relacion (claves foraneas + diagrama ER)
- [-] Conexion PHP-MySQL: leer la tabla desde el sitio (CRUD)
- [-] Login real (usuarios en la base) y validaciones
- [-] Pruebas y documentacion final + defensa

Ctrl + Shift + V: vista previa --- Ctrl + K, V: vista previa y editor a la vez 
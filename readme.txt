# Moodle Plugin - local_listcourses

Este plugin local para Moodle 4.5 expone un servicio web RESTful que permite obtener un listado de los cursos existentes en la plataforma.

##  Características

- Endpoint REST accesible mediante token.
- Devuelve información básica de los cursos: ID, nombre completo, nombre corto y resumen.
- Se integra con el sistema de servicios web nativo de Moodle.

---

##  Requisitos

- Moodle 4.5+
- PHP 8.0 o superior
- Base de datos MySQL/MariaDB o PostgreSQL
- Servicios web habilitados en Moodle (REST)

---

##  Instalación

1. Clona o copia este repositorio dentro de la carpeta `local` de tu instalación de Moodle:

```bash
cd /ruta/a/moodle/local
git clone https://tu-repo.git listcourses](https://github.com/DanielToledo-99/restApiMoodle.git

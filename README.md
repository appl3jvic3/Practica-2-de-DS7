# Practica-2-de-DS7

Repositorio de práctica con ejemplos básicos de **HTML + PHP**:
- Formularios con `POST`
- Recorrido de arreglos con `foreach`
- Lectura de XML con `SimpleXML`

## Requisitos
- WAMP / XAMPP / Laragon (PHP)
- Navegador

## Cómo ejecutar (WAMP)
1. Copia la carpeta del repo en: `C:\wamp64\www\Practica-2-de-DS7\`
2. Inicia WAMP (icono en verde).
3. Abre en el navegador (NO uses `file:///`):
   - `http://localhost/Practica-2-de-DS7/aechivohtmlp.html`
   - `http://localhost/Practica-2-de-DS7/ejemplo2.html`
   - `http://localhost/Practica-2-de-DS7/ejemplo3.php`

## Archivos y qué hacen
- **ejemplo1.html**  
  Formulario que envía `nombre` y `edad` por `POST` a `ejemplo1.php`.

- **ejemplo1.php**  
  Lee `$_POST` y muestra las claves/valores con `foreach`.

- **ejemplo2.html**  
  Botón que hace `POST` a `ejemplo2.php`.

- **ejemplo2.php**  
  Define un arreglo `$equipo` y lo recorre con `foreach` para imprimir posiciones y jugadores.

- **ejemplo3.php**  
  Lee `colores.xml` con `simplexml_load_file()` y muestra nombre + código hexadecimal.

- **colores.xml**  
  Datos usados por `ejemplo3.php` (colores y códigos hex).

## Flujo (qué llama a qué)
- `ejemplo1.html` → `ejemplo1.php`
- `ejemplo2.html` → `ejemplo2.php`
- `ejemplo3.php` → `colores.xml`

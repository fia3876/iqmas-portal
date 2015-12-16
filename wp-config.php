<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp_iqmasportal');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'wp_iqmasportal');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'ctdev.Q6@$gbgnq#3=@7u!');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

define('RELOCATE',true);

define('FS_METHOD', 'direct');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ' 8bs-ls6HV~9*becV@m#y0F7q3Y/qp`A}Cg,`+LRu.=1cT{}qi524s<eJu~;v=GA'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '34zgpcFLvWUEpBbF+j>OTEqJeli]P2K+^9b7mOzbyk!R?y7r$923DDTaDsYn?ht;'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'Wu0VJBG?WE:Z/(X9Rp|_.-tK(G6kH+u(.2!aLI.{e{LjEB&JHtrFAG`?5c.%RrKj'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '4o(VHr<3B)n%}127^?=vS?3YW+Kpo@wS8Q=~2q24_v<Ua@5~BuT8bwG,v]GuOht['); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'L9*Rqg {O(OjE2&WB Y+H/5{%u.W,%xCZ.#.J.2>+=a~*B8)NzI~g%@w.MLV,r;['); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'jLz9zSL3jaBGpmx2;8844h|XkAOTOSI:2CFtI(xd@;w$YGJYSKtYCRKDy6+67Q8G'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'kCiqvW[ilBWlOHt ,GAtAp%LE,y++1<+&9%Z1`<nUW>lt0H##V}5.C_<T`tprsav'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'k82CEnnif5BZOQUYg<xw{tz/*Um%_A95p31Qs^1gi-|f8]S|W`/<o9bws<KMRF<['); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);
//define('WP_ENV', 'development');
/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FORCE_SSL_LOGIN', false);
define('FORCE_SSL_ADMIN', false);

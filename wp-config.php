<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'morehost_tap2');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'morehost_tap2');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'proyectotap2014');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '|^.X+a>~C}Y6lu,-sIuN}[{F++!SRl,7#$StxmdHX3RL_ ;E1}v-hE6g,up-fN|f');
define('SECURE_AUTH_KEY', 'CZN${Cs?Rb*}-]+O!TK3-DqLi(NrUS+i/&no 3+G]Xqr0uKah6qm>**y@B.0i*X/');
define('LOGGED_IN_KEY', '#94U`tE6HDsk5qk(,R`,wBtZE~YtvkKNyloMju&Z0eRVbZV&>}I=+ru N% Qx^8H');
define('NONCE_KEY', '|n?=6]Y+Io5de&6|N-3Xa:<P<Ca|:6m[:++S7 {w|x!*|NKg)ejl[(n3w=Aa}#wJ');
define('AUTH_SALT', '8kO6)[woyTQ2-IIQ+fCvk#<[ 9F>~vgPr`cr9r58AOD})!Q@m1SR(8=K<JZ?`RP{');
define('SECURE_AUTH_SALT', 'scY=uC<sJ`]A(|i/-Kp$fo^Wz(<:n~k$gNJwD_Lm*?*Z$:k$ oCGQ5TaU5`3fl}p');
define('LOGGED_IN_SALT', '-ScmxWgMi?cSYorm2i+gwa&#3O-&+k[T0`h$9Z}m9<x-^*9+ijdJT|Jl|2w+:))b');
define('NONCE_SALT', '-Yr1PDUG@wPL93s&wUG26Q-ah9z;7~<#Zqk6iYzN/I#LDEdGuK1%8vihRd&x)zE ');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPresss.
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

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


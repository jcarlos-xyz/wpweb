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
define('DB_NAME', 'jcarlos_wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', ':Yb;fD;3ioVT~E/p^S2^*u#`~KBWd!W9C7 m}w>qj[e#,]/u.L@7/-O9z4s%df88');
define('SECURE_AUTH_KEY', '%;2MjOLIVz(?xMPsr^I#YFQaJPdq=i[91A Op%G^zr&Ra`jl~-UQ1EkR**nrKQo@');
define('LOGGED_IN_KEY', 'w(=y6e-Yqh(esO]5;g1^^M$)5,62QgNUz;MM+^|a%YV7Z^aVr.5@Boq#KpgG2Mix');
define('NONCE_KEY', '(bvSjs:Z<,<g +6t71U2o3ah:CLI.7J$#Z2v,T[gFwEB0U0 }qT;*=ntQ9NL|I:;');
define('AUTH_SALT', 'Iz[??>[uw+8n68gPA ?m6f_,r$yGlp8cg|U3_Qep/[E| ip/g=Z@Lhh=#jWD`LPy');
define('SECURE_AUTH_SALT', 'pn6:)O;YlE_yWbFeC#EzM8zUHZd1e?F<1Xap#]`]waVlHGsJgjNv+`~M]c2l2(^{');
define('LOGGED_IN_SALT', ',AM&(hK=Eb}=|b.8|H[)2mo0XDq+Q?@Ps`DQU<P%Y)=zW$SoEoWcTyn cG>/3c-F');
define('NONCE_SALT', 'V%sT8EvV{C~t<_QYNh7q?D04NrlBERB,:S_^m@FiGmCBx0h*ksJG(L-W{GCqZ$G)');

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

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


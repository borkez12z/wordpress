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
define( 'DB_NAME', 'bd_wordpress' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '2asir' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'L^7Ci*jly j.%hiEIy!)vpL{V#IKas.lN5wS+<(^6l`V8utu![]-vBTkr27V^ZUh' );
define( 'SECURE_AUTH_KEY', 'Z7rPe1Oh=H#J;NRie:;[K4,H4[#p<8V[n49.Wj3{^Bu-~_ eRfG$3ZIF 1UQ K/H' );
define( 'LOGGED_IN_KEY', 'xD&Y|%nisxHfaax?WSw6y^?nU6rL&Y[0#D5WdS%ldu)x`u+O|9m&o,W;+hX*A 9Z' );
define( 'NONCE_KEY', '}}1idfvaK1>{p{(B0]%(.c+;^aB92ig|*%OjVcp7VN)DiTgWyB=zuqMGjC~Vz5Gh' );
define( 'AUTH_SALT', ';<Xd8/lW#]Z+{@E`q$R)mZLODbej1eo^hZ+@p4_~zfY6p?9K?4o>&d#L)RlG[ jd' );
define( 'SECURE_AUTH_SALT', 'M0*Ld.U[o+y}u{#:5uz63^_#tjcv#~y9_mGi?#)!KsrL1,|Dj/Qe<o(h[@{`<wSE' );
define( 'LOGGED_IN_SALT', 'zBX/0WYgq_uK|waudg`LS5OANel~Y.FAn$(*:#;o>n+xwwP,TJ#D_2`f{}i]6HN/' );
define( 'NONCE_SALT', 'd3,=9@={7i-0s6Fv#9<1a{<T+Wr)@EqIOa#opn$m6w~cN^c!xuhP7Kw(?&{wGfXB' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'bd_';


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


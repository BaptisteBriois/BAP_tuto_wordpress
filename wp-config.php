<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'toicmoi');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost:3306');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'An FU9.x8jzi.g&Pd0.!V8f1mHygL1]=!<?KxZ_=Dm$M9:d@~W~0S#7(`TKSb7_.');
define('SECURE_AUTH_KEY',  'Zm4rG~TfV@C]cu,%H|3|ti59enxa$zjxVQn>}^<XdP7Xk)iWQU-Ql|~%&jwyt@ZY');
define('LOGGED_IN_KEY',    ',^/sp0=x*=;`hJF#6R60&^%OY(Z{U,9(<}[Fn:AdO[02IJ<&jo[?F0eP|l:R8Hon');
define('NONCE_KEY',        'dMR4$.V4*xmGn[G/4Z#j9Uchf/UXit(UlI7B~W]dV?WR&vsu8 zp%;b/3M%tD(bo');
define('AUTH_SALT',        '{t@RZjP`jM>S(:,w3uCcOG`FK,hU7<Q=,lOGyI+}F|24e(E2KAG?W;nxYq_%NDeS');
define('SECURE_AUTH_SALT', ',_ow!|*U-xdtBmLt0Ic|.&B@q/<eZu6t (Sl(w-oaSWW4|b2}AQgi5R>1&;IYLo:');
define('LOGGED_IN_SALT',   'H0]41`Uz1c!~nK+,-x;kb!Kg?Yg&l:Aqp7.-FRT]_/p$lj;>P<tt$2I9=&x7];AI');
define('NONCE_SALT',       'ZME^dYF0iOax-N7+VtLGo5Q2`FS?V/&^&:DrnX]lz=Q|14W;Iz][4rWa{Mzb0JT2');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_toicmoi';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
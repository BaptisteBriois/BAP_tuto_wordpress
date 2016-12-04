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
define('DB_NAME', 'tcm');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '8NG_YK>$qU{&M.:]HWTBH5|suGT``aFmn55XXodGp dQx+8l%PY7CNDC4arjMD9*');
define('SECURE_AUTH_KEY',  'of_azm]kv:Je6GIq%D.6(56O<tJ-l!Sfh}xKtO2 *;Pt)_cWB8Qellv&3oE(9kL ');
define('LOGGED_IN_KEY',    'Yj|G2Rx;&CJ?CAx,AE|eX;^s$H:wFb-zm1O)w-W]<GbHUZ1T#?Y7gW#L}~OF?2q^');
define('NONCE_KEY',        'c.qyM#%ur,@<Ql!jlbmF^kQzNRSXEc*V_k7x84F2wtW$V!ax#a1cu@*NNLWgtmJh');
define('AUTH_SALT',        'PPu2W@aK`e5#e,h%6YyYVBd+ka79Vs}K6:vA~sb* %!).=_,ZuX}j,ZTN)8ZyXG6');
define('SECURE_AUTH_SALT', '^7gUA6)Mr{sa~!F|g7j:E!72SM#7a~;~`-vw#;qM|A6rJH_=8V*JU-d:SRk_aguc');
define('LOGGED_IN_SALT',   ']xL=MOE5&.Tt2Kr>woW*<=4dx_iZir4gY4|*;[P3}#ri4TCHYLa=LY*EWrD3 Ft)');
define('NONCE_SALT',       ' HDzoHe$8GomHNM:{!eU7SM7Gp!8/{aa^8:d{m#imL=Y5?J$swkzv8P `_%@qv@Y');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
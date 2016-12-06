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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$Dz]%if`EM6jQ7@r]iFvJ~(Vr;h`j9.7 FHuG]K>UpE*7mTlD`-ew(3Z2v[`O008');
define('SECURE_AUTH_KEY',  'p,65xH@r/oe*1/v^!2{o@a+tVu[Pe/I#6a^Px)f2FHUACNgqL;?(NIZ9m=:{h}3X');
define('LOGGED_IN_KEY',    'KBmI`]W8obDB8tw[KE1Pu5g.}%!n^0mV#{[TZT8qf{..Lw%aXg)VdN@?X>5#JVh4');
define('NONCE_KEY',        '#W2k`eVJLD}]E;vn?*Y56G=L/w5s44w(@7NB=5ba]*+bBg=M8SNtV=A74S%R&RwI');
define('AUTH_SALT',        ' #5d`Sd!,]cO kKqGUBvkMQ|ny>+g4X%Pmam9Wu.Cb6!U{)vj&o%$uMtjddoatsk');
define('SECURE_AUTH_SALT', 'JW+zJjs@%DPsK-DHHfH>*>/,NM<+lq!VKJHAGXGh!V*<ydo~)!]6$?f6i&zpT2xj');
define('LOGGED_IN_SALT',   'pHH|M}ouE96L1Lbz^Y}%txhk@EA59m3 >LpwGj(skd:KS=w@qH&M*aDlqqeUgpV}');
define('NONCE_SALT',       'PtP]wul;B<*&>#(fttrdDILyQ=J?(6Ln`SF&>n/n!xxRK=-Qd0^q!86+9(xUBjZv');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp1_';

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
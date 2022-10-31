<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'agence' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HzY S12o]*C/Nzn2FBkzY8QU[K{$-+hoEKNnqG6]%K# d R%Ji}mMYUW5>Xi[;;J' );
define( 'SECURE_AUTH_KEY',  'M~9*OK:n^#T}a*-.RL:8Y5avbqQ*wq/Oe>MK8?Cut{|8d4BsS!OFg$5,4CcI9-~]' );
define( 'LOGGED_IN_KEY',    ',ObZAX:E=aFK[7Ll=ZUsL5asrH6$ kp*`jOXJ44@Pkv>P1lKOCI=Z}.3ANd*hXPu' );
define( 'NONCE_KEY',        '!W5(?9 Z5--l0:T))@Wc7.|x]6uFWw-5cC:Zd*&=:3:Z9C+0lkg;jH~~aG`!.!S4' );
define( 'AUTH_SALT',        '-s/_&&Qj0$M*#@|5O]9sK&gSS7tT7e*^h>I{0%hGUB@0W&+iT^sX-vw~FW1DsW1E' );
define( 'SECURE_AUTH_SALT', '.!GQ$Hs,2iK}8Q%Dv7=rrR o=k<&)WE&2x9$nKZ08LT2ND&Tq>A4ST?L1.&o*Ua1' );
define( 'LOGGED_IN_SALT',   '@8q 9a=6-3V;hv?z77)g3;hVs>M idCUjQrDM!C>5g6~djf`?K}M^c9tAFO[&j.>' );
define( 'NONCE_SALT',       '*f-y,NwC>^wo5Lc<w12gx,Gx&g6d#gew+?Z+l+`MaY)DT!BrN)RlrR?Qfeq[>yah' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

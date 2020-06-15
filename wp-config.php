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
define( 'DB_NAME', 'portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Girondins33!' );

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
define( 'AUTH_KEY',         'q Ae}G#iZ^6gN4=nK38/phUs/5B!3zFgwZp#QE-JCKFyZen0I[xQ10t~7!9~Y=}8' );
define( 'SECURE_AUTH_KEY',  '=4wyADC=()U(j86IE=/1FBuD!3qA)nz.hu<P>&ey$M}J _uj~]@8|ALR|3g};/P7' );
define( 'LOGGED_IN_KEY',    'qalTJ|#6!V@w=PG<W]G]_ld{z eMS-9a4X8?Csnx|b28.a/ 1w-;W4>Hx!!YH=RO' );
define( 'NONCE_KEY',        '%.#d|d&3C5kdus6P/qI<M,xDgT^-)8xWj*Q+y!~8fi2cA$F}{r4<,/o-^G&lP)Kj' );
define( 'AUTH_SALT',        's|]nk9tAc`0iYEH[=4k#Tel%Pwl^$Ag_@e63ote^=%ZSOrD5RAE|<3IL42^J8Mii' );
define( 'SECURE_AUTH_SALT', '>+z(SNM/tvj&&+Fr#=~q%.6h>dpyiV-js6Z~~;v:j`SyG@fRK~,w.40200+S,B.5' );
define( 'LOGGED_IN_SALT',   'M3%Mj-M>4ZAbV_UfT= rZBU?;]-N5[S?gzWBQk6nLVDW=(PhQc^+cspHl^&SQ#@B' );
define( 'NONCE_SALT',       ' vb73c6bs!!+3G^,ZXfkaIUV`]ybE54k6N=3VMOS!sZy[HNN_q#0:Rk}je5W4WWt' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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

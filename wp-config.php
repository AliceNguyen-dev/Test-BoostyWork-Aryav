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
define( 'DB_NAME', 'aryaV_stageDev_Alice' );

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
define( 'AUTH_KEY',         'cSR@,*2kGCG=]_wRP9_ *Er?g V5:;4i3<Jhb}]w,d*CP5=~<]j fvFC.Q#Qp~Z<' );
define( 'SECURE_AUTH_KEY',  'SUCrR0Y?S~NOdjl.nR}?%oI|s8&6hPZ; *.:ykJ1=QqPU,1#Qp=7c(luMMsqpu3<' );
define( 'LOGGED_IN_KEY',    '&us^FuZB]M^% ^nm]B`gLYFU7dfpd0?RqJ$2cspRX<Kdi[RYPP]:^3kNH$#+1yPU' );
define( 'NONCE_KEY',        '_a}1${yqmMjJG6zHct_?8$8_AfMu)]4Jw*PSpRJ(HoA>=[OAJHDFo=$tpw+s$hi}' );
define( 'AUTH_SALT',        '1(L9D2y`|vk2P&QlTb#tWET3t*6k_o=p]S+_r-tFZo5FXR:A Iy ?xal^hQnm_ms' );
define( 'SECURE_AUTH_SALT', '@m}f{4XhZfreTvLqU1j9Yp7rScG4.uB<*POhkQx>TOT.H6K?kH8#??]|c7(ZCt(<' );
define( 'LOGGED_IN_SALT',   ']#xc<eBG}dsAcCu^NYo.b.J0Mn7UBe{> AtF7/J$CM%M89>HXgXJ^-  b]o*$ISg' );
define( 'NONCE_SALT',       '+R2_`[3s.nY1lZVg f<``[j8O,d?K*w!^AKexoao5iP5kd-m.]58V2AlClr{ZqRk' );
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

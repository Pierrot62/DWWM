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
define( 'DB_NAME', 'wp-pierre' );

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
define( 'AUTH_KEY',         'qB.RCyb4.z19LL0]+5rq.P2gXZA12i.WgpT~jAc )pboLGd,IW8}=f^;[>9tf:6[' );
define( 'SECURE_AUTH_KEY',  '%ygrCf;4kNS;zUhf80:}sB3.?ihQ_esf%gy|QDbM0Wzr]MyPMbE*Ts;,{lhLpH8S' );
define( 'LOGGED_IN_KEY',    'v`#{xF&ob_ 6hak-?BV4(**.X%&]6TeEZy1Quf%t)Td^Z,qZGx(N<.m^7ZLx6%O|' );
define( 'NONCE_KEY',        'J[8I^!ChIInVgVepT@[kf|%e}_uu8Jk3$~lXwh6i0G>s`on{$R:C?DjnuRLpq+>S' );
define( 'AUTH_SALT',        'hthY}*sog_<_E ^Whl.d]5?WO[m}w&zaSua78^fOQ`Hey8$DTAW%[4Axk`53P(i(' );
define( 'SECURE_AUTH_SALT', '-PG&lDxJ`+S<!!x{9J%+1nayC;#<kM+xT;=g+J58P@>e3OB>3]8mYWeTLm[|-*T$' );
define( 'LOGGED_IN_SALT',   'w+&YFAB(?(H;g!vmSS6Se}FKl]i9KCa.34yA<f)r5GSzKp?Trfwt2sz-DKE|sF u' );
define( 'NONCE_SALT',       'f1CCV38l}m:@}[ffatjra_CcC$lM_=S[0Be(g$0*5Hv_?O4(_)^$</Dp_/0%/aeF' );
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

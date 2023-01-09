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
define( 'DB_NAME', 'testdemosite_db' );

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
define( 'AUTH_KEY',         'W OTVE/!mqK:>dI^KuD9n;VAI`%9+_h? 4K|4vC+i .Mz #SK4oQ)g..z-`zj4[w' );
define( 'SECURE_AUTH_KEY',  'vZlh9OO6KhFyj%bw2TUit:Ef+RkLll7Kn|ONM w5F@&0q0vf0]R5%bh%c9.9V10Q' );
define( 'LOGGED_IN_KEY',    'UV!=W<s;p*NN)C.@N_eR#B[`@9CVvModWN{WS/^]1P7.<p.f]AW=r=F&8m?s>[q]' );
define( 'NONCE_KEY',        'eA=tGz8dNcAzEAV|Qb(0mvd^a441ND4=>vvDAf,:Ffdn^(bs@[ZpMgh6[iH?y-Ku' );
define( 'AUTH_SALT',        '0Ce+`vE,YBZnZRmKEy32Z,&L^Bpz#fb70v,zv2n7[M+^?@>w_9nG~>F[MofHV@<{' );
define( 'SECURE_AUTH_SALT', 'Dl_1szJ9&#Z/e9fo(x%U3$Q44}|$g2<dBDR)fF)Yy7|5^j[/t+R>0Mz]?_Tszw*3' );
define( 'LOGGED_IN_SALT',   '3/tS8w+2/z5;qybQ?k/d%@gJPw%gA-#klglX4s_*%R(V*4sBrP]_Em)k+}Ep.}9L' );
define( 'NONCE_SALT',       '@Iu6or7@d9<*Okmus#rQixx)Y^OybNe~xN)%xe|!nga?^;%,U1<l{u3x-G*Pw9h7' );
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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define( 'UPLOADS', 'wp-content/uploads' );
define('FS_METHOD', 'direct');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
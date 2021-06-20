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
define( 'DB_NAME', 'storyteller_test' );

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
define( 'AUTH_KEY',         'l?EZ3a|1f?Oa|u7cL@7pt+Cv1lXP1DA1ZRU|kx`e18&~j3^6cfx:vnO6LQy{~m1h' );
define( 'SECURE_AUTH_KEY',  'tLEdmjkq(@>5;]LVT51NaW$&k5>rA(sr}E3o(`>t02cW5f~9 k*)Z>b_]b0>fX!%' );
define( 'LOGGED_IN_KEY',    ';Jx,0(g2:PbGl_`cV1Ph2(vxvgl`Hz <Jj`.,aNg8p>Oh364vNFVMrn,$|{#:#O#' );
define( 'NONCE_KEY',        'nGo_fo_SIIe|AsPT]UDJC<>C*qG<K+JysfZ(1gjjSB6]w *&GzpUpg=}lx9K{gv;' );
define( 'AUTH_SALT',        '|o@1 nf88IINxpt)SD~&qSkIQKbfP5,UoC#P%$dU2UQNPsFCn#`zv4@<%E17P_7j' );
define( 'SECURE_AUTH_SALT', '#}_Pn.nlXYkZN.aRZRxk>qj}fhF]acwxJ-G4>Q^`3Me<$I{*z~Y]Dih|6!e37`1]' );
define( 'LOGGED_IN_SALT',   '|eZzr?f,G_@@oZMAB3y64AELbU60KUCA0-Mzf{RqunT}G]%]2>tc<008*D>k3R4e' );
define( 'NONCE_SALT',       'tOQV0nIchrkxn~$r%|N4)5(JDr&KX=-]4/-)=R,jEH[k&S)ifUtDb{zp #]Z1>Dz' );
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

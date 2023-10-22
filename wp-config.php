<?php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
/** Les paramètres de la base de données **/
define('DB_NAME', 'Wordpress');
define('DB_USER', 'user');
define('DB_PASSWORD', 'user');
define('DB_HOST', 'sofiane'); // L'hôte de la base de données (peut rester 'localhost')
define('DB_CHARSET', 'utf8');/** Database Charset to use in creating database tables. */
define('DB_COLLATE', '');/** The Database Collate type. Don't change this if in doubt. */


/** Vos clés d'authentification unique **/
define('AUTH_KEY', '-Nc[vo!F V*M``C<fNX8|>YxY17z<{u[Yo>rOI^W:+^ur7lsnpG<7U&2HOfH,:zm');
define('SECURE_AUTH_KEY', '}:fC+&9V}tbs_@q(VP}uW d6K~5OQ+HntK|A_A-.RBOgGfh%5co99Zd6oU[f~5LV');
define('LOGGED_IN_KEY', 'S|/,+2a v^wb5t~?{o8+W&W[U9S%T?>05fJ<,H9Vy=,r!XPvHu: G1g@].-]hOKC');
define('NONCE_KEY', 'YKv7eb@`aZ(sXxuLe+jP|~Q9.U;{,mF,-{ l];Ahn0%m<cz)M?b>]p#fQt(~1+1M');
define('AUTH_SALT', '0c&|8wqYCv/C5g[!vR`k5f&-Pnz?Q}I.?{ZS0nj-~$o%x:40ajsQ*<@=;kGY;+Aq');
define('SECURE_AUTH_SALT', 'FY&wJ)_+J`~98ZVCk<-^hKPP=>Ig#{kBiBV|= j8O[Y7<Fz}#,qpI$|]oIV|p|gP');
define('LOGGED_IN_SALT', '{xhClruZAB+GD8+;(ff `K-YzGj*970yCK]x-|OK~>H<LCtP,Q-e)}G?-9G3-z-q');
define('NONCE_SALT', 's|}G&}|#=_.dflwcZ-6{5[i{ip,:&NLiuo+NTxRbPFh~j-AV?r8g{6+mHHUXd54G');

/** Préfixe des tables de la base de données **/
$table_prefix = 'wp_';

/** Langue de WordPress (facultatif) **/
define('WPLANG', 'fr_FR');


/** Type de sauvegarde des révisions (facultatif) **/
define('WP_POST_REVISIONS', false);

/** Désactiver la création automatique de répertoire de téléchargement **/
define('UPLOADS', 'wp-content/uploads');

/** Clé de débogage (facultatif) **/
define('WP_DEBUG', false);

/** Emplacement des fichiers temporaires (facultatif) **/
define('WP_TEMP_DIR', ABSPATH . 'wp-content/tmp');

/** Emplacement du répertoire de thèmes (facultatif) **/
// define('WP_CONTENT_DIR', ABSPATH . 'wp-content');
// define('WP_CONTENT_URL', WP_SITEURL . 'wp-content');

/** Activation de la réparation automatique de la base de données (facultatif) **/
define('WP_ALLOW_REPAIR', false);

if ( ! defined('ABSPATH') ) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

require_once(ABSPATH . 'wp-settings.php');















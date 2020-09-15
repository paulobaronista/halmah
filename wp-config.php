<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'halmah' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UpKVK4(t^ @O{yXH)}f<?mthIe6fRuOzqX0s#pX$X)Y[dC[AJj`VGkew)?S!UMZ ' );
define( 'SECURE_AUTH_KEY',  'aU3/i[~~v$*bXa5x/i{C_V}]xiljLTlk9$jpGQ3c7KSSU5s2}tA*0Nh9__U&T|Xq' );
define( 'LOGGED_IN_KEY',    'tRtTMf-+O.T9$G>}S`F,O*N_w&eZ3k>T<p~ GO#l/R*m(&d<QVE2Sg|kKgE%?6WO' );
define( 'NONCE_KEY',        '@0Rh[X:v&i}j}DUW.^ilwG^Sjnl9y#/xA?!d+IDnRb~U}e`8hT7Y=F_)[BH4K>J(' );
define( 'AUTH_SALT',        'jkp3SwzT=x[ZRwgOr2j (N`vH1H:BjNww1`Id6YeftgR ]]%RHwRD }tkpN?1h@%' );
define( 'SECURE_AUTH_SALT', 'eC72 giXWBIU#kA?7<jg+XI^%h}zRA<I}a(0uL1=pL)SxMR-~B(*bHP,k Cq$_]x' );
define( 'LOGGED_IN_SALT',   'Ct)]r ?pulq) v.fZU**#$S|5=Xh]!>l Bu{2fp #3s<ugvWy[~/WyNb1hpK@(7`' );
define( 'NONCE_SALT',       'MpnNfCqd>=4)JWsR0z4&~,Sv#2G}&{QIy#e3BDMssvN_f =(2U|D&i!0;km7wz8R' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

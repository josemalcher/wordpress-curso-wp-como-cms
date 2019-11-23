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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'workspace_php_wp-cmc-1' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'WK[u6N0PQ6Bdb ].%jq-7F~x0^vePKE?X r(w@q~J(^-7LD.+j` c3_iy$FRWb9<' );
define( 'SECURE_AUTH_KEY',  ']B<.w>xR=r=2PZo/ZOQc-PK$W~_~|qF{#Z]U2qEcqUtr}K2SV1P.R@B,+.y`P`Mw' );
define( 'LOGGED_IN_KEY',    'A9~O/m=1),(T(nS!CB![g@?o~rK6{YXNbw!s8|D%SMe>P!(`GSm+*>:tAzGa]1US' );
define( 'NONCE_KEY',        '-T?[,GVi6z VD/L_+o+I=&z)`}ezX3Hn8[CBzx}(%H;kkTESlNs:*QF?xlbDW$dV' );
define( 'AUTH_SALT',        'u+Kx],r`]8$RWLin)HmTuv[ewZx]fp`CcsJho@KW@~dV>h(x6i*k2+vnf$baFBgT' );
define( 'SECURE_AUTH_SALT', 'FP#O>T=1fdLo&<h8==42ETq2bCVZ3)B/(keZnj~iaUT|wi]0%d&,M3wMLmuW=9= ' );
define( 'LOGGED_IN_SALT',   '9Y3LHFUrwBmMpSzt1(uU`ud7!!bYMOT5l+Jf}3;b><Y=;3aW`G0@qE TxtP*d0{_' );
define( 'NONCE_SALT',       'aIS# ;{<{Yh^6~r4nNdO&U 1&ck:gVQFx0[f:G;Yq9Ulhu izrzg.spv,y5KDY&z' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

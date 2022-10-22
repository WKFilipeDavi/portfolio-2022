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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'portfolio1' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'mandelbrot' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'FilipeDavi@123.' );

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
define( 'AUTH_KEY',         '(y2S0*w)L0FGi,i]|}!om@>u>y`})jZTlv!L)vxS2,Qlm+$iDuEI$]X,bGm0-|gA' );
define( 'SECURE_AUTH_KEY',  '_5%KY6t,BvbK+hALWhI:KjW&ndI}|Y}%d#}9. UN-d/ASXGnL]IUO,Yt}BS+6 Ov' );
define( 'LOGGED_IN_KEY',    'dRG5c~ N}0U[L$z&1[zd(z<EmazRl%^Nmi0:BADv+uok1!9g?ngB|u:>>{h1AU6i' );
define( 'NONCE_KEY',        ']G%#d$34-I5EN(qC%%BI.?Z9h 6a$LGAS<,d$AS,:Su?$5aqYs|2oyBB;ijfH{uQ' );
define( 'AUTH_SALT',        'ABQ.8Hw3jft;zlcr#A0uDg=q#mzlsf5Mf@n--ZSk3{bx[k,.Jf|~fUWz]V~[jyY~' );
define( 'SECURE_AUTH_SALT', '0n}$lKW`@PT~@?IQALRTJH?)7h_/~ACy|];Tpi3:+un S]0a-.Z<LGxjQ(h8/qp|' );
define( 'LOGGED_IN_SALT',   'd14q:SRh$Rch)GGS6l,a{+9UT3DQp+}ebi,eVuCzzK?yb$[uJy%S)6Q>R+bjys?#' );
define( 'NONCE_SALT',       '=TKW>m9)%6zxD8Y=&!mxx1?MdL_TYLA_;}d%QoNEC>6/z%hcIH-vt>cqV(tX/V|<' );

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
define( 'WP_DEBUG', true );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

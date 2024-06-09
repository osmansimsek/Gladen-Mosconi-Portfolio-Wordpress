<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'gladen-mosconi' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QmcAIE({1q#e5;UY$b@-:~<-~Lq^@DH]njFXe!BL_s&Avc4S<]p}2f`p{RKq_}CR' );
define( 'SECURE_AUTH_KEY',  'OseEl jJ$}v+-5ot/:Zu]0-olo -oPiqjTK=G 7nG7dcNA:#a5EsvT#fl}4OC+;N' );
define( 'LOGGED_IN_KEY',    'W3WPpSO5z;Tt;(v_TnK-:_<eKZ,([J^bZ`v27W.3aySq0(S&@uXo,I)fco5.E1[w' );
define( 'NONCE_KEY',        'I1AJWV)w2#5kKSRhUv}W6EFY*ws<]*,H~|.ry2LI?SLr^oy6(!i2=OIefz@~cqRq' );
define( 'AUTH_SALT',        'Rtcum[OP_0i}H[UGl2H{>y>H|6tvpJC+V_+`GN*l$&REHm>8rX+&`(`P-/$Q>DI)' );
define( 'SECURE_AUTH_SALT', ']+#mbWPd4vLWimaHiOrtGd*E4%(KBZ&/EQOUQ;u7_({Pa?Uw)_(Pgw;]:a ;c7 +' );
define( 'LOGGED_IN_SALT',   'yPl?+$b9X3Kc-0Az pHC9%U;X^8=wt#q&s/u_P{P,2RP7bN(npS!,w0nDRC4T]>e' );
define( 'NONCE_SALT',       'Td2.f-mo1J/ho=,&IQR|[w=<v[Ghu^]6ZjKU_<q{aE.#9?zxxUy%%N3u[=-{BQM ' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';
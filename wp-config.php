<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define('DB_NAME', 'wp_kesra');

/** Nama pengguna basis data MySQL */
define('DB_USER', 'root');

/** Kata sandi basis data MySQL */
define('DB_PASSWORD', '');

/** Nama host MySQL */
define('DB_HOST', 'localhost');

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define('DB_CHARSET', 'utf8');

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v${ug=HPS-fkJ;t~~JvSKevxP(:Uw:&NE^E;v~<&?/bh)NYug)m#E4lO]J3 sx&[');
define('SECURE_AUTH_KEY',  '$jy91[T^%i:yQ5|9X!0|KC<@%0;_>K&Wi-d>{e-_^A 5brW +>djZ(-.MKk~G%_f');
define('LOGGED_IN_KEY',    'Y*LBz5YFk52AE;>pPW[t7<0(|isVlOs|E3.;&/RS}2K,ZCu=-}iW8vF(?~qYj)[K');
define('NONCE_KEY',        'V`+61A<n%?Vu5)o/}gW(d77PzNHG~8z>)L+Q?{1d ^-{~a+cI$hQ5/q!,z&R!8 w');
define('AUTH_SALT',        'fkfUeJ_&bTDU7`g+TPS-|Jy},4}N:OT_yd>JN%;4~iw-vr<+<e}wN~gs%!EDsIE4');
define('SECURE_AUTH_SALT', 'BC#MF]Q[JvR*UKLk=?:D^U,-pFVg~=++R`srM.]y@u%,3EcN&B-S(gB?J3 U6~7u');
define('LOGGED_IN_SALT',   '4+v+h6Oku;^cbAO6ox-,~3~yYTa|O.S-1^6pr HqmUa8zDz4Ll3i+,LV hds3+c[');
define('NONCE_SALT',       'rhp03gSrFl`h^rt#pG]}*!#zs_p!BNCx~/E(:9aabADy056@><p*;c6U-jV-!W!_');

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix  = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);
define('WP_ENV', 'development');

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');

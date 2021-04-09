<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'b1704667' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mMUMApQ@v+dsly[^d{$j`eS&]e&pa/zD}-aNtKy;ZkI~2z?a_1yX1WU{12}NJh?=' );
define( 'SECURE_AUTH_KEY',  'X*sH={{gqcQx5&Xa(9SK;1Y)]0M](^6Kt*&8?0KsC<>^2sq;,qqt4QBPTn<.HfY!' );
define( 'LOGGED_IN_KEY',    'ProU2{)e1fmlQc3AQpj+|jK`}fK}6;vQnR2ncAtnccE+h3tz<k-fv #`lOn|VSq5' );
define( 'NONCE_KEY',        '9T3zL]ibu;$<UBHg5y))E`6W/W?h>MaiLF1f$ws2G@o?BgV1@8(*Nsn$Un/,8EeP' );
define( 'AUTH_SALT',        'PnnF=5}&-!fbTJ`5vPUT3FGe77af$1&o{U_0KN#`G,]ZKgebBsV7GHa(Rr}33Bs0' );
define( 'SECURE_AUTH_SALT', '/*%MybIqP,1?XSePea=s^fW7*:!y-x%M,)K7a?A*f9*Spm#$uh.bsbsnPo%va5#Z' );
define( 'LOGGED_IN_SALT',   '#FR!:4;`4ehJQ/51ZZ2e@w7Cj68O35nv@x.Gg#}j+k$]rq|X/y)X$(G-GlDe!fzf' );
define( 'NONCE_SALT',       'dT]tuqpp|Du_O/w>m)hJYgqc[V<-} 4C#7Ch(8i9OzL@d`PayS S/M/[*y AW5l|' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');

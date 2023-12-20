-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 03:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diris`
--

CREATE TABLE `data_diris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_models`
--

CREATE TABLE `footer_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teksFooter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `warnaBg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `svg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `svg2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `svg3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link3` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_models`
--

INSERT INTO `footer_models` (`id`, `teksFooter`, `warnaBg`, `copyright`, `svg`, `created_at`, `updated_at`, `link`, `svg2`, `svg3`, `link2`, `link3`) VALUES
(1, '<span class=\"\" style=\"color:#00ff00\">Temukan</span> panduan praktis, berita terkini, dan tips berharga untuk pertanian yang lebih baik.\r\n        Mari bersama-sama menjelajahi dunia pertanian dan menggali <span class=\"\" style=\"color:#00ff00\">potensi luar biasa</span> yang ditawarkannya.!!', '#d127dd', ':v', 'yKIAaRArPtc7KLpYehNkCLWZdGiHdgtCjMCAUvKt.svg', NULL, '2023-12-20 07:05:05', 'https://fontawesome.com/icons', 'fzlNrlPnZWhrdBisHhivFtQybLRpHFkpYUUkHhsc.svg', 'PXT9x7UI3PjaXP1f2cGDqtR9ssHhjYE9giarNibc.svg', '-wk', '-wkm');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judulWeb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `logo`, `judulWeb`, `menu`, `txt`, `created_at`, `updated_at`) VALUES
(1, 'kLqnL5VL9wJmum0C4XezMqqPQpkM1O8hh4BMsJdI.ico', 'Green Farm', '#4cbf50', '#ee7214', NULL, '2023-12-20 07:03:49'),
(2, 'kosong', 'kosongg2', 'Home', '#ffffff', NULL, '2023-12-17 09:51:20'),
(3, 'kosong', 'kosong3', 'Tips', '#ffffff', NULL, '2023-12-17 09:52:58'),
(4, 'kosong', 'judulWebnya??', 'Berita', '#ffffff', NULL, '2023-12-17 09:52:58'),
(5, 'kosong', 'kosong', 'Kontak', '#ffffff', NULL, '2023-12-17 09:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_19_035733_create_farhans_table', 1),
(6, '2023_10_17_101019_add_kategori_to_posts', 2),
(7, '2023_10_17_102933_add_kategorii_to_posts_table', 3),
(8, '2023_10_19_004716_create_show_kategoris_table', 4),
(9, '2014_10_12_100000_create_password_resets_table', 5),
(10, '2023_11_07_083010_create_data_diris_table', 6),
(11, '2023_11_28_152922_create_welcomes_table', 7),
(12, '2023_12_01_144958_create_welcome2s_table', 8),
(13, '2023_12_12_151000_create_jobs_table', 9),
(14, '2023_12_13_125411_create_headers_table', 10),
(15, '2023_12_14_162314_create_footer_models_table', 11),
(16, '2023_12_15_175119_add_link_to_footer_models', 12),
(17, '2023_12_16_031545_add_svg_link_to_footer_models', 13),
(18, '2023_12_16_062017_create_pilih_kategoris_table', 14),
(19, '2023_12_17_111638_create_tes_u_pdate_deletes_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pilih_kategoris`
--

CREATE TABLE `pilih_kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pilih_kategoris`
--

INSERT INTO `pilih_kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Tanah & Pemupukan', NULL, NULL),
(2, 'Hama & Penyakit', NULL, NULL),
(3, 'Teknologi Pertanian', NULL, NULL),
(4, 'Produk Olahann', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'PnWeZk8EHZ5ce7NISRU9OjA2QpQqKrhOKCBzAHfX.jpg', 'judul', '<h1><strong>ppppp</strong></h1>', '2023-09-18 23:43:02', '2023-09-18 23:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`, `kategori`) VALUES
(14, '9O5ohsaeQ0zhAg4sN4ZA3eitTgbs64DHJEGhwUCN.jpg', 'Langkah Mudah Membuat Arang Sekam Padi', '<ol>\r\n	<li>Cari bahan tahan api seperti besi, seng, aluminium, atau logam yang memiliki bentuk silinder dan berukuran kurang lebih 20 liter. Setelah itu, buang salah satu bagian dasar silinder boleh dasar atau atap.</li>\r\n	<li>Buat lubang lingkaran dengan diameter 10 cm. Agar proses pembakaran berlangsung sempurna, maka usahakan untuk membuat lubang di bagian titik pusat silinder.</li>\r\n	<li>Buat lubang lagi dengan diameter 0,5 cm pada bagian dinding bahan silinder dengan jarak antar lubang 2 sampai 3 cm. Lubang pada dinding ini berfungsi untuk membuang panas sehingga sekam tidak langsung terbakar.</li>\r\n	<li>Cari pipa dengan diameter 10 cm dan panjang 1 cm. Masukkan pipa kedalam lubang silinder. Pipa ini sendiri berfungsi sebagai cerobong asap yang dapat mempermudah proses pembakaran.</li>\r\n	<li>Setelah masuk, rekatkan pipa bagian dalam dengan bahan silinder dengan pengelasan. Jika terlalu rumit, Anda juga bisa mengganjal cerobong asap dengan paku atau mengikatnya sehingga bisa berdiri dengan tegak..</li>\r\n</ol>', '2023-09-26 20:47:36', '2023-11-27 23:18:50', 'Tanah & Pemupukan'),
(15, 'Y7TQNiPvwoMkRJ7b7qtrUxbVsZHv7JfEcFnnHiUz.jpg', 'Inovasi Pembuatan Kelapa Menjadi Keripik Kelapa', '<ol>\r\n	<li>Buang kulit daging kelapa karena jika masih ada kulitnya maka akan membuat rasa keripik kelapa menjadi lebih pahit.</li>\r\n	<li>Ambil daging kelapa dengan alat pengerok kelapa agar mendapatkan bentuk keripik yang lebih bagus.</li>\r\n	<li>Letakkan daging kelapa di loyang menjadi satu lapis atau bisa diletakkan di atas&nbsp;<em>baking paper</em>&nbsp;agar tidak menempel.</li>\r\n	<li>Panggang menggunakan oven pada suhu 150&ordm;C selama kurang lebih 40 menit atau sampai warna daging kelapa menjadi kecoklatan. Lama pemanggangan disesuaikan dengan jenis oven karena setiap oven memiliki kemampuan panggang yang berbeda.</li>\r\n	<li>Setelah matang boleh diberi garam atau bumbu perasa agar hasinya lebih enak.</li>\r\n	<li>Keripik kelapa siap untuk dikemas dan dipasarkan</li>\r\n</ol>', '2023-09-26 20:53:55', '2023-10-20 23:24:39', 'Tanah & Pemupukan'),
(16, 'MHXZRRA82pePLbSsJvUqtDBJ9lIy96KahZM8a2kX.jpg', 'Hidroponik Sistem NFT (Nutrient FilmTechnique)', '<p>Teknik hidroponik ini telah dikembangkan sejak tahun 1960 oleh Dr. A.J Cooper di&nbsp;<em>Glasshouse Crops Little Research Institute Litlehampton</em>&nbsp;Inggris. Kemudian mulai dikenal pada tahun 1970.Teknik ini menjadi salah satu teknik budidaya hidroponik yang paling populer dan paling banyak digunakan dikalangan masyarakat.Teknik hidroponik NFT adalah teknik budidaya dengan cara menumbuhkan tanaman pada media permukaan air yang berpenopang, pengaturan sirkulasi air oksigen dan pemberian nutrisi secara optimal.</p>', '2023-09-26 20:57:25', '2023-10-20 23:20:35', 'Tanah & Pemupukan'),
(17, 'lviON5pVyWj3Ve5vAGy4lcVwLRpaXvU05CQfZxw7.jpg', 'Tips Untuk Menjaga Kesuburan Tanah.', '<p>Pencemaran pada tanah terjadi karena masuknya benda -benda asing (misalnya senyawa kimia buatan manusia) ke dalam tanah dan mengubah atmosfer/lingkungan asli tanah yang mengakibatkan penurunan kualitas tanah. Polusi dapat terjadi karena kebocoran limbah cair atau bahan kimia industri atau fasilitas komersial, penggunaan pestisida, masuknya air permukaan tercemar ke lapisan sub-permukaan, kecelakaan kendaraan yang membawa minyak, bahan kimia, atau limbah, ir limbah dari tempat pembuangan sampah dan limbah industri yang secara langsung dibuang ke tanah dengan ceroboh (pembuangan ilegal).</p>\r\n\r\n<p>Berikut adalah cara tetap agar menjaga kesuburan tanah :</p>\r\n\r\n<ul>\r\n	<li>Menggunakan Air</li>\r\n</ul>\r\n\r\n<p>Karakteristik tanah infertil adalah permukaan yang terlihat kering. Tanah kering tentu saja menunjukkan kadar air yang tidak memadai. Terutama selama musim kemarau selama iklim dan kondisi curah hujan yang sangat kecil, tanah pasti akan berubah menjadi gersang. Oleh karena itu, lakukan penyiraman secara teratur dapat meningkatkan kesuburan pada tanah.</p>\r\n\r\n<ul>\r\n	<li>Menggunakan Kapur Dolomite</li>\r\n</ul>\r\n\r\n<p>Tanah kering terbukti memiliki pH atau keasaman yang tinggi. Tingkat pH yang terlalu tinggi berbahaya bagi tanaman karena dapat meningkatkan risiko kematian akar. Agar tanah tetap subur, Anda harus tahu cara mengendalikan pH tanah. Salah satu cara termudah adalah menaburkan kapur dolomit pada tanah.</p>\r\n\r\n<ul>\r\n	<li>Menggunakan Pupuk Kompos</li>\r\n</ul>\r\n\r\n<p>Selain kekurangan air, penyebab tanah yang kurang subur juga dapat disebabkan oleh kurangnya nutrisi. Zat hara merupakan asosiasi mineral yang ditemukan di tanah dan dibutuhkan oleh tanaman untuk melakukan fotosintesis. Untuk mendukung pertumbuhan tanaman di lahan tidak subur, Anda dapat menambahkan kompos sebelum menanam tanaman. Pupuk kompos yang dicampur dengan tanah akan membuat tanah gembur, sehingga membantu proses perusakan puing -puing tanah yang membuat tanah kering.</p>\r\n\r\n<ul>\r\n	<li>Meningkatkan Porositas Tanah</li>\r\n</ul>\r\n\r\n<p>Porositas tanah adalah kemampuan tanah dalam menyerap air, yang juga berkaitan dengan tingkat kepadatan tanah. Kemampuan tanah menyerap air bergantung pada komposisinya. Tanah dengan porositas tiggi mengandung sedikit partikel besar (sand) dibandingkan dengan partikel kecil (clay). Porositas tanah yang tinggi akan menahan air dan nutrisi di dalam tanah untuk tidak terbawa air. Untuk meningkatkan porositas tanah, tambahkan partikel kecil (clay) untuk selanjutnya dibajak agar tanah tercampur.</p>\r\n\r\n<ul>\r\n	<li>Menambahkan Batuan halus</li>\r\n</ul>\r\n\r\n<p>Cara berikutnya untuk menyuburkan tanah adalah dengan menambahkan batu -batu halus&nbsp;</p>\r\n\r\n<p>Salah satu batuan halus yang direkomendasikan adalah batuan fosfat. Batuan fosfat tidak hanya dilengkapi dengan fosfor, tetapi juga kalsium, karbon, dan bahan mineral tambahan lainnya yang dapat memperkaya frabbing tanah. Namun, perlu dicatat bahwa batuan fosfat ini juga memiliki kandungan logam berat yang signifikan. Untuk menggunakan batuan fosfat secara efektif, pure batu sampai ukurannya cukup kecil, lalu tambahkan pupuk kandang.</p>\r\n\r\n<ul>\r\n	<li>Mengurangi Penggunaan pupuk berbahan kimia</li>\r\n</ul>\r\n\r\n<p>Pupuk berbahan kimia memang banyak digunakan untuk menggemburkan tanah agar lebih subur, proses nya yang cepat dan efektif membuat para petani menggunakan pupuk berbahan kimia. Akan tetapi dampak yang diberikan pada tanah akibat penggunaan pupuk dapat lebih merusak tanah dan tanaman. Jika tidak hati &ndash; hati dalam penggunaan pupuk berbahan kimia akan mengakibatkan pelambatan pertumbuhan pada tanaman.</p>\r\n\r\n<ul>\r\n	<li>Menjaga komposisi tanah agar tetap gembur</li>\r\n</ul>\r\n\r\n<p>Menjaga komposisi tanah agar tetap gembur merupakan salah satu cara yang efektif dilakukan agar menjaga tanah tetap terawat dan tanaman subur. Cara yang dapat kita lakukan agar tanah tetap gembur yaitu, mencangkul tanah secara perlahan untuk menghancurkan pori-pori tanah agar tetap dalam kondisi gembur dan tidak kering.</p>', '2023-09-26 21:00:18', '2023-12-16 22:37:23', 'Tanah & Pemupukan'),
(29, 'Eg2YYxta3o131FuB0mQbXWjad6dG9cSfNuDzz8CQ.png', 'fsffff', '<p>Pencemaran pada tanah terjadi karena masuknya benda -benda asing (misalnya senyawa kimia buatan manusia) ke dalam tanah dan mengubah atmosfer/lingkungan asli tanah yang mengakibatkan penurunan kualitas tanah. Polusi dapat terjadi karena kebocoran limbah cair atau bahan kimia industri atau fasilitas komersial, penggunaan pestisida, masuknya air permukaan tercemar ke lapisan sub-permukaan, kecelakaan kendaraan yang membawa minyak, bahan kimia, atau limbah, ir limbah dari tempat pembuangan sampah dan limbah industri yang secara langsung dibuang ke tanah dengan ceroboh (pembuangan ilegal).</p>\r\n\r\n<p>Berikut adalah cara tetap agar menjaga kesuburan tanah :</p>\r\n\r\n<ul>\r\n	<li>Menggunakan Air</li>\r\n</ul>\r\n\r\n<p>Karakteristik tanah infertil adalah permukaan yang terlihat kering. Tanah kering tentu saja menunjukkan kadar air yang tidak memadai. Terutama selama musim kemarau selama iklim dan kondisi curah hujan yang sangat kecil, tanah pasti akan berubah menjadi gersang. Oleh karena itu, lakukan penyiraman secara teratur dapat meningkatkan kesuburan pada tanah.</p>\r\n\r\n<ul>\r\n	<li>Menggunakan Kapur Dolomite</li>\r\n</ul>\r\n\r\n<p>Tanah kering terbukti memiliki pH atau keasaman yang tinggi. Tingkat pH yang terlalu tinggi berbahaya bagi tanaman karena dapat meningkatkan risiko kematian akar. Agar tanah tetap subur, Anda harus tahu cara mengendalikan pH tanah. Salah satu cara termudah adalah menaburkan kapur dolomit pada tanah.</p>\r\n\r\n<ul>\r\n	<li>Menggunakan Pupuk Kompos</li>\r\n</ul>\r\n\r\n<p>Selain kekurangan air, penyebab tanah yang kurang subur juga dapat disebabkan oleh kurangnya nutrisi. Zat hara merupakan asosiasi mineral yang ditemukan di tanah dan dibutuhkan oleh tanaman untuk melakukan fotosintesis. Untuk mendukung pertumbuhan tanaman di lahan tidak subur, Anda dapat menambahkan kompos sebelum menanam tanaman. Pupuk kompos yang dicampur dengan tanah akan membuat tanah gembur, sehingga membantu proses perusakan puing -puing tanah yang membuat tanah kering.</p>\r\n\r\n<ul>\r\n	<li>Meningkatkan Porositas Tanah</li>\r\n</ul>\r\n\r\n<p>Porositas tanah adalah kemampuan tanah dalam menyerap air, yang juga berkaitan dengan tingkat kepadatan tanah. Kemampuan tanah menyerap air bergantung pada komposisinya. Tanah dengan porositas tiggi mengandung sedikit partikel besar (sand) dibandingkan dengan partikel kecil (clay). Porositas tanah yang tinggi akan menahan air dan nutrisi di dalam tanah untuk tidak terbawa air. Untuk meningkatkan porositas tanah, tambahkan partikel kecil (clay) untuk selanjutnya dibajak agar tanah tercampur.</p>\r\n\r\n<ul>\r\n	<li>Menambahkan Batuan halus</li>\r\n</ul>\r\n\r\n<p>Cara berikutnya untuk menyuburkan tanah adalah dengan menambahkan batu -batu halus&nbsp;</p>\r\n\r\n<p>Salah satu batuan halus yang direkomendasikan adalah batuan fosfat. Batuan fosfat tidak hanya dilengkapi dengan fosfor, tetapi juga kalsium, karbon, dan bahan mineral tambahan lainnya yang dapat memperkaya frabbing tanah. Namun, perlu dicatat bahwa batuan fosfat ini juga memiliki kandungan logam berat yang signifikan. Untuk menggunakan batuan fosfat secara efektif, pure batu sampai ukurannya cukup kecil, lalu tambahkan pupuk kandang.</p>\r\n\r\n<ul>\r\n	<li>Mengurangi Penggunaan pupuk berbahan kimia</li>\r\n</ul>\r\n\r\n<p>Pupuk berbahan kimia memang banyak digunakan untuk menggemburkan tanah agar lebih subur, proses nya yang cepat dan efektif membuat para petani menggunakan pupuk berbahan kimia. Akan tetapi dampak yang diberikan pada tanah akibat penggunaan pupuk dapat lebih merusak tanah dan tanaman. Jika tidak hati &ndash; hati dalam penggunaan pupuk berbahan kimia akan mengakibatkan pelambatan pertumbuhan pada tanaman.</p>\r\n\r\n<ul>\r\n	<li>Menjaga komposisi tanah agar tetap gembur</li>\r\n</ul>\r\n\r\n<p>Menjaga komposisi tanah agar tetap gembur merupakan salah satu cara yang efektif dilakukan agar menjaga tanah tetap terawat dan tanaman subur. Cara yang dapat kita lakukan agar tanah tetap gembur yaitu, mencangkul tanah secara perlahan untuk menghancurkan pori-pori tanah agar tetap dalam kondisi gembur dan tidak kering.</p>', '2023-10-17 07:37:38', '2023-10-23 21:24:53', 'Berita'),
(30, 'KY0652EByop3YcmpCWoptLF2vGBl78N0QKZSVcpl.png', 'jjjjkk', '<p>hjhjjj</p>', '2023-10-17 08:30:34', '2023-10-17 09:18:31', 'Berita'),
(36, 'VyZ6ZACbeuPRZOamCCK3cNOOOBnAsVpHoQs9Hm30.png', 'tes create', '<p><strong>tessbb</strong></p>', '2023-12-16 22:54:27', '2023-12-16 23:17:43', 'Berita');

-- --------------------------------------------------------

--
-- Table structure for table `show_kategoris`
--

CREATE TABLE `show_kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `show_kategoris`
--

INSERT INTO `show_kategoris` (`id`, `img`, `text`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'bQ9ztMBCR5csQWIyH1XMyfT9m4WBatSI6VvcFD1S.png', '\"Di sini, kami membawa kabar terkini seputar dunia pertanian yang memikat dan <span style=\"color:orange\">menginspirasi</span>. \r\n        Temukan cerita-cerita menarik tentang <span style=\"color:orange\">inovasi terbaru</span>,\r\n        <span style=\"color:orange\">tips</span> bercocok tanam, tren terkini dalam agrikultur, serta kisah sukses para petani yang menjadi sumber <span style=\"color:orange\">inspirasi</span> \r\n        bagi industri ini. Dari teknologi pertanian hingga peristiwa terkini, mari bersama-sama menjelajahi ragam berita \r\n        yang menghidupkan <span class=\"text-primary\" style=\"\">semangat pertanian modern</span>.\"', 'Berita', NULL, '2023-12-17 08:57:46'),
(2, 'VUI98Hjl5iYlqBMJGAbGPjQtIwd5n7l7VBZJm47Q.png', '\"Halo! Di sini, kami mengajak Anda untuk menjelajahi dunia yang kaya akan pengetahuan seputar tanah, kesuburan, dan pemupukan. Temukan informasi terbaru mengenai jenis-jenis tanah, teknik pemupukan yang inovatif, serta panduan praktis untuk merawat tanah secara optimal. Mari bersama-sama mengeksplorasi pandangan baru yang akan membantu meningkatkan produktivitas pertanian melalui perawatan tanah yang berkualitas.\"', 'Tanah & Pemupukan', NULL, '2023-12-17 09:08:47'),
(3, 'YODHqkgE2ChQWM3ctj6l37qZgYX6FOrWARo7FD9M.png', '\"Selamat datang di Halaman Hama & Penyakit! Di sini, kami menyajikan wawasan yang mendalam tentang hama, penyakit tanaman, serta cara-cara efektif dalam mengelola dan mencegah serangan mereka. Temukan solusi terkini untuk menjaga tanaman Anda tetap sehat, informasi tentang jenis-jenis hama dan penyakit yang umum menyerang tanaman, serta tips praktis dalam penanggulangan. Mari bersama-sama menjaga tanaman kita dari ancaman hama dan penyakit untuk meningkatkan hasil panen yang optimal.\"', 'Hama & Penyakit', NULL, '2023-12-17 09:08:47'),
(4, 'fG2wkNCyfOspseTOvdA2D8XKsG462RyeFqArpxL1.png', '\"Selamat datang di Halaman Teknologi Pertanian! Di sini, kami mengajak Anda untuk menjelajahi revolusi teknologi yang sedang mengubah wajah pertanian modern. Temukan informasi terkini seputar inovasi-inovasi teknologi pertanian terbaru, perkembangan terkini dalam agrikultur digital, serta penerapan teknologi cerdas untuk meningkatkan efisiensi dalam berbagai aspek pertanian. Mari bersama-sama menjelajahi dunia teknologi yang memberikan solusi canggih bagi keberlanjutan pertanian masa depan.\"', 'Teknologi Pertanian', NULL, '2023-12-17 09:08:47'),
(5, 'KSnE0mew3CJtKqTfXzdZ6wQLe7vFrSh5PHiGcjyJ.png', '\"Selamat datang di Halaman Produk Olahan! Di sini, kami memperkenalkan berbagai hasil olahan dari produk pertanian yang menginspirasi. Temukan informasi seputar proses pengolahan, kreasi makanan dan minuman dari bahan pertanian, serta informasi tentang produk-produk unggulan hasil inovasi petani lokal. Mari bersama-sama menjelajahi kreativitas dalam menghasilkan produk olahan yang bermutu dan memikat bagi pasar pertanian.\"', 'Produk olahan', '2023-11-09 11:38:22', '2023-12-17 09:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `tes_u_pdate_deletes`
--

CREATE TABLE `tes_u_pdate_deletes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tes_u_pdate_deletes`
--

INSERT INTO `tes_u_pdate_deletes` (`id`, `img`, `text`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'bQ9ztMBCR5csQWIyH1XMyfT9m4WBatSI6VvcFD1S.png', '\"Di sini, kami membawa kabar terkini seputar dunia pertanian yang memikat dan <span style=\"color:orange\">menginspirasi</span>. \r\n        Temukan cerita-cerita menarik tentang <span style=\"color:orange\">inovasi terbaru</span>,\r\n        <span style=\"color:orange\">tips</span> bercocok tanam, tren terkini dalam agrikultur, serta kisah sukses para petani yang menjadi sumber <span style=\"color:orange\">inspirasi</span> \r\n        bagi industri ini. Dari teknologi pertanian hingga peristiwa terkini, mari bersama-sama menjelajahi ragam berita \r\n        yang menghidupkan <span class=\"text-primary\" style=\"\">semangat pertanian modern</span>.\"', 'Beritaaa', NULL, NULL),
(2, 'VUI98Hjl5iYlqBMJGAbGPjQtIwd5n7l7VBZJm47Q.png', '\"Halo! Di sini, kami mengajak Anda untuk menjelajahi dunia yang kaya akan pengetahuan seputar tanah, kesuburan, dan pemupukan. Temukan informasi terbaru mengenai jenis-jenis tanah, teknik pemupukan yang inovatif, serta panduan praktis untuk merawat tanah secara optimal. Mari bersama-sama mengeksplorasi pandangan baru yang akan membantu meningkatkan produktivitas pertanian melalui perawatan tanah yang berkualitas.\"', 'Tanah & Pemupukann', NULL, NULL),
(3, 'YODHqkgE2ChQWM3ctj6l37qZgYX6FOrWARo7FD9M.png', '\"Selamat datang di Halaman Hama & Penyakit! Di sini, kami menyajikan wawasan yang mendalam tentang hama, penyakit tanaman, serta cara-cara efektif dalam mengelola dan mencegah serangan mereka. Temukan solusi terkini untuk menjaga tanaman Anda tetap sehat, informasi tentang jenis-jenis hama dan penyakit yang umum menyerang tanaman, serta tips praktis dalam penanggulangan. Mari bersama-sama menjaga tanaman kita dari ancaman hama dan penyakit untuk meningkatkan hasil panen yang optimal.\"', 'Hama & Penyakit', NULL, NULL),
(4, 'fG2wkNCyfOspseTOvdA2D8XKsG462RyeFqArpxL1.png', '\"Selamat datang di Halaman Teknologi Pertanian! Di sini, kami mengajak Anda untuk menjelajahi revolusi teknologi yang sedang mengubah wajah pertanian modern. Temukan informasi terkini seputar inovasi-inovasi teknologi pertanian terbaru, perkembangan terkini dalam agrikultur digital, serta penerapan teknologi cerdas untuk meningkatkan efisiensi dalam berbagai aspek pertanian. Mari bersama-sama menjelajahi dunia teknologi yang memberikan solusi canggih bagi keberlanjutan pertanian masa depan.\"', 'Teknologi Pertanian', NULL, NULL),
(5, 'KSnE0mew3CJtKqTfXzdZ6wQLe7vFrSh5PHiGcjyJ.png', '\"Selamat datang di Halaman Produk Olahan! Di sini, kami memperkenalkan berbagai hasil olahan dari produk pertanian yang menginspirasi. Temukan informasi seputar proses pengolahan, kreasi makanan dan minuman dari bahan pertanian, serta informasi tentang produk-produk unggulan hasil inovasi petani lokal. Mari bersama-sama menjelajahi kreativitas dalam menghasilkan produk olahan yang bermutu dan memikat bagi pasar pertanian.\"', 'Produk olahan', NULL, NULL),
(6, 'zFkybhlfejvuHZ2PIgq8cpQ0Pbf9zhmMKh85MSSR.png', '\"Di sini, kami membawa kabar terkini seputar dunia pertanian yang memikat dan <span style=\"color:orange\">menginspirasi</span>.', 'tess', NULL, NULL),
(13, 'zFkybhlfejvuHZ2PIgq8cpQ0Pbf9zhmMKh85MSSR.png', 'zFkybhlfejvuHZ2PIgq8cpQ0Pbf9zhmMKh85MSSR.png', 'tes1', '2023-12-17 07:14:01', '2023-12-17 07:14:01'),
(21, 'download (3).png', 'tambahkan teks', 'tes3', '2023-12-17 08:14:05', '2023-12-17 08:14:05'),
(23, 'download (3).png', 'tambahkan teks', 'tes4', '2023-12-17 08:15:41', '2023-12-17 08:15:41'),
(24, 'download (3).png', 'tambahkan teks', 'tes5', '2023-12-17 08:17:16', '2023-12-17 08:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'farhan Musyaffa\' H', 'farhan@gmail.com', NULL, '$2y$10$zPTDd67EK44WFt.hKHRVqeL2zy0j0X5AJRjubEkaEzTrGPTcreioq', NULL, '2023-11-12 04:44:09', '2023-11-12 04:44:09'),
(5, 'fmh', 'testing@gmail.com', NULL, '$2y$10$AsKqQGH31LtxLviERpxNQeqdNAnYdYHCwOkRlODKBlHMYlX8KoM2K', NULL, '2023-11-12 05:20:16', '2023-11-12 05:20:16'),
(6, 'farhan', 'farhann@gmail.com', NULL, '$2y$10$CKC6nnOecV3dqOu35JYcJe0U90wqWwmJ2OhAqNGTLFPTSLT64eHO6', NULL, '2023-11-12 05:21:40', '2023-11-12 05:21:40'),
(7, 'ggggg', 'gggg@gmail.com', NULL, '$2y$10$cUFY6LsXGFA7hgpaE1RP...dr1PcWEgh34C2moVkby.ZO2o2tNS.u', NULL, '2023-11-12 05:24:09', '2023-11-12 05:24:09'),
(8, 'fmh', 'tes@gmail.com', NULL, '$2y$10$P/Z6q06C5GIYdMqAq52.g.rmf6denQUemWE/bOGgRijsNHjFqk6K.', NULL, '2023-11-13 19:28:29', '2023-11-13 19:28:29'),
(9, 'farhan', 'tes2@gmail.com', NULL, '$2y$10$nw/q80T6n6FodmB1Ce9vMOZu.wrNiTV5fW8ucBkA8R6h4jggIVU6u', NULL, '2023-11-13 21:26:30', '2023-11-13 21:26:30'),
(11, 'farhan1', 'farhan1@gmail.com', NULL, '$2y$10$QFXTDLECG6WsEAD95PplZul3UNTfKvAC/AQWK7xxoH8rjFjitWuMq', NULL, '2023-11-14 00:45:52', '2023-11-14 00:45:52'),
(13, 'farhanMH', 'farhanmusyaffa093@gmail.com', NULL, '$2y$10$RncFNZy8FAWO1uHRF5BcT.ZRcBrxU4SKnAgXb9T1gEQifCJjW8BbG', NULL, '2023-11-14 04:11:27', '2023-11-14 04:11:27'),
(14, 'farhanMH', 'Admin11@gmail.com', NULL, '$2y$10$EggMNTny8pS5Yu6NYYEL/.YJhyFaSqDPi7GEcPYS7V28W/5CrQgUa', NULL, '2023-12-20 07:35:37', '2023-12-20 07:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `welcome2s`
--

CREATE TABLE `welcome2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulText1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulText2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulSvg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `svg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome2s`
--

INSERT INTO `welcome2s` (`id`, `img`, `judul`, `text1`, `text2`, `text3`, `text4`, `judulText1`, `judulText2`, `judulSvg`, `svg`, `created_at`, `updated_at`) VALUES
(1, 'BY7VcFL3V7ZTV995YgfWRLWvwWNUObaAuCHHe7Jn.png', 'WELCOME', 'Pertanian adalah kegiatan pemanfaatan sumber daya hayati yang dilakukan manusia untuk', '-Pertanian adalah kegiatan pemanfaatan sumber daya hayati yang dilakukan manusia untuk', '-Pertanian mempunyai peranan yang sangat penting dalam                membangun perekonomian nasional termasuk', '-perekonomian daerah, karena                sektor pertanian berfungsi sebagai penyedia bahan pangan untuk ketahanan pangan masyarakat,                sebagai instrumen pengentasan kemiskinan, penyedia lapangan kerja, serta sumber pendapatan masyarakat.', '', '', '', '', NULL, '2023-12-14 04:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `welcomes`
--

CREATE TABLE `welcomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `svg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcomes`
--

INSERT INTO `welcomes` (`id`, `img`, `judul`, `text`, `text2`, `svg`, `created_at`, `updated_at`) VALUES
(1, 'tree.png', 'Welcomem', '-ertanian adalah kegiatan pemanfaatan sumber daya hayati yang dilakukan manusia untuk', 'bahan pangan, bahan baku industri, atau sumber energi, serta untuk mengelola lingkungan hidupnya.', '', NULL, NULL),
(2, '', '', 'pertanian mempunyai peranan yang sangat penting dalam                membangun perekonomian nasional termasuk', ' perekonomian daerah, karena                sektor pertanian berfungsi sebagai penyedia bahan pangan untuk ketahanan pangan masyarakat,                sebagai instrumen pengentasan kemiskinan, penyedia lapangan kerja, serta sumber pendapatan masyarakat. ', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diris`
--
ALTER TABLE `data_diris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_models`
--
ALTER TABLE `footer_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pilih_kategoris`
--
ALTER TABLE `pilih_kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_kategoris`
--
ALTER TABLE `show_kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tes_u_pdate_deletes`
--
ALTER TABLE `tes_u_pdate_deletes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `welcome2s`
--
ALTER TABLE `welcome2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcomes`
--
ALTER TABLE `welcomes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_diris`
--
ALTER TABLE `data_diris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_models`
--
ALTER TABLE `footer_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pilih_kategoris`
--
ALTER TABLE `pilih_kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `show_kategoris`
--
ALTER TABLE `show_kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tes_u_pdate_deletes`
--
ALTER TABLE `tes_u_pdate_deletes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `welcome2s`
--
ALTER TABLE `welcome2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `welcomes`
--
ALTER TABLE `welcomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

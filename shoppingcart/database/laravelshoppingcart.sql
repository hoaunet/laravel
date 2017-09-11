-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 11, 2017 lúc 08:35 AM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravelshoppingcart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_07_024820_create_products_table', 1),
(4, '2017_09_11_011356_create_orders_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `user_id`, `cart`, `address`, `name`, `payment_id`) VALUES
(1, '2017-09-10 18:41:00', '2017-09-10 18:41:00', 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:12000;s:4:\"item\";O:11:\"App\\Product\":26:{s:11:\"\0*\0fillable\";a:4:{i:0;s:6:\"images\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2017-09-07 06:27:01\";s:10:\"updated_at\";s:19:\"2017-09-07 06:27:01\";s:6:\"images\";s:123:\"http://www.luatsutunhan.com/thoi-trang/files/2016/10/ao-so-mi-nu-tay-phoi-ren-dinh-hat-f138-hinh-0-luatsutunhan-300x300.jpg\";s:5:\"title\";s:48:\"Áo Sơ Mi Nữ Tay Phối Ren Đính Hạt F138\";s:11:\"description\";s:389:\"+ Chất liệu: Voan\n									+ Màu sắc: Trắng\n									+ Kích thước: thích hợp cho nữ từ 43 – 53kg\n									+ Xuất xứ : Hàng nhập khẩu.\n									Mã sản phẩm: F138\n									Lưu ý: Sản phẩm thật có thể chênh lệch màu sắc khoảng 10% so với hình ảnh trên deal do sự khác nhau về độ phân giải của từng loại màn hình.\";s:5:\"price\";i:12000;}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2017-09-07 06:27:01\";s:10:\"updated_at\";s:19:\"2017-09-07 06:27:01\";s:6:\"images\";s:123:\"http://www.luatsutunhan.com/thoi-trang/files/2016/10/ao-so-mi-nu-tay-phoi-ren-dinh-hat-f138-hinh-0-luatsutunhan-300x300.jpg\";s:5:\"title\";s:48:\"Áo Sơ Mi Nữ Tay Phối Ren Đính Hạt F138\";s:11:\"description\";s:389:\"+ Chất liệu: Voan\n									+ Màu sắc: Trắng\n									+ Kích thước: thích hợp cho nữ từ 43 – 53kg\n									+ Xuất xứ : Hàng nhập khẩu.\n									Mã sản phẩm: F138\n									Lưu ý: Sản phẩm thật có thể chênh lệch màu sắc khoảng 10% so với hình ảnh trên deal do sự khác nhau về độ phân giải của từng loại màn hình.\";s:5:\"price\";i:12000;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:12000;}', 'sdf fsadas sadas', 'dfsfsd', '20170911');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `images`, `title`, `description`, `price`) VALUES
(1, '2017-09-06 23:27:01', '2017-09-06 23:27:01', 'http://www.luatsutunhan.com/thoi-trang/files/2016/10/ao-so-mi-nu-tay-phoi-ren-dinh-hat-f138-hinh-0-luatsutunhan-300x300.jpg', 'Áo Sơ Mi Nữ Tay Phối Ren Đính Hạt F138', '+ Chất liệu: Voan\n									+ Màu sắc: Trắng\n									+ Kích thước: thích hợp cho nữ từ 43 – 53kg\n									+ Xuất xứ : Hàng nhập khẩu.\n									Mã sản phẩm: F138\n									Lưu ý: Sản phẩm thật có thể chênh lệch màu sắc khoảng 10% so với hình ảnh trên deal do sự khác nhau về độ phân giải của từng loại màn hình.', 12000),
(2, '2017-09-06 23:27:01', '2017-09-06 23:27:01', 'http://www.luatsutunhan.com/thoi-trang/files/2016/10/ao-khoac-nam-da-cai-nut-f20-hinh-0-luatsutunhan.jpg', 'Áo Khoác Nam Da Cài Nút F20', '+ Áo khoác da nam cao cấp được thiết kế với kiểu dáng trẻ trung, nam tính, tạo vẻ ngoài sành điệu và cuốn hút cho phái mạnh.\n						+ Kiểu áo cổ cao, tay dài, kéo khóa tiện dùng cùng các chi tiết đính nút, phối túi đầy cá tính, phù hợp với sở thích của nhiều người.\n						+Chất liệu da cao cấp, bề mặt bóng đẹp, tạo form dáng chuẩn, mạnh mẽ.\n						+ Màu sắc : Đen,nâu đậm, nâu nhạt – nam tính, bạn có thể biến hóa với nhiều trang phục khác nhau.\n						+ Size : M, L, XL\n\n						Mã sản phẩm: F20\n						Xuất xứ: Việt Nam\n						Lưu ý: Sản phẩm thật có thể chênh lệch màu sắc khoảng 10% so với hình ảnh trên deal do sự khác nhau về độ phân giải của từng loại màn hình.', 25000),
(3, '2017-09-06 23:27:01', '2017-09-06 23:27:01', 'http://www.luatsutunhan.com/thoi-trang/files/2016/10/tui-xach-nu-khoa-cai-ngang-txt48-hinh-0-luatsutunhan.jpg', 'Túi Xách Nữ Khóa Cài Ngang TXT48', '+ Chất liệu: giả da cao cấp\n					+ Màu sắc: Đen, Đỏ và Trắng\n					+ Kích thước: ngang 19,5cm x cao 13cm x đáy 6,5cm.\n					+ Xuất xứ : Hàng nhập khẩu\n					Mã sản phẩm: TXT48\n					Xuất xứ: Việt Nam\n					Lưu ý: Sản phẩm thật có thể chênh lệch màu sắc khoảng 10% so với hình ảnh trên deal do sự khác nhau về độ phân giải của từng loại màn hình.', 100000),
(4, NULL, NULL, 'http://www.luatsutunhan.com/thoi-trang/files/2016/10/ao-so-mi-nu-tay-lo-f171-hinh-0-luatsutunhan.jpg', 'Áo sơ Mi Nữ Tay Lỡ F171', '+ Chất liệu: Châu toen\r\n+ Màu sắc: Sọc trắng đen\r\n+ Kích thước: Phù hợp cho bạn gái < 53kg(tùy chiều cao)\r\nMã sản phẩm: F171\r\nXuất xứ: Việt Nam\r\nLưu ý: Sản phẩm thật có thể chênh lệch màu sắc khoảng 10% so với hình ảnh trên deal do sự khác nhau về độ phân giải của từng loại màn hình.', 135000),
(5, NULL, NULL, 'http://www.luatsutunhan.com/thoi-trang/files/2016/10/ao-khoac-nam-du-theu-logo-f73-hinh-0-luatsutunhan.jpg', 'Áo Khoác Nam Dù Thêu Logo F73', '+ Áo Khoác Nam thiết kế với form và kiểu dáng rất trẻ trung, khóa kéo chắc chắn, dễ kéo.\r\n+ Kiểu dáng thể thao cho bạn phong cách lạ và cực chất, form áo chuẩn cho bạn nam vẻ hiện đại và cá tính.\r\n+ Thiết kế đơn giản, phong cách trẻ trung nam tính, mang đến nét sành điệu cho bạn nam khi diện ra ngoài dù thời tiết nắng nóng hay se lạnh.\r\n+ Chất liệu: Dù 2 lớp dày dặn, thoáng mát.\r\n+ Màu sắc : Đen, Xanh Rêu, Xanh Dương, Nâu\r\n+ Kích thước: Dài 71cm, Vai 45cm, Tay 62cm.\r\n+ Phù hợp với bạn dưới 65kg (tùy chiều cao).\r\nMã sản phẩm: F73\r\nXuất xứ: Việt Nam\r\nLưu ý: Sản phẩm thật có thể chênh lệch màu sắc khoảng 10% so với hình ảnh trên deal do sự khác nhau về độ phân giải của từng loại màn hình.', 165000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'teat@gmail.com', '$2y$10$8OVJLPox1H1rYHsjT2twc.WF3vwKTO1nR.f05V9gmAy/KulxfppQq', 'xQyynZetzPPUEoQhxnW1DWKoLjMVYcZUxDvctz3w9XDlKZQgKDtgFqtxqkCR', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

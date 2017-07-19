-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 08:02 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contructor`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

DROP TABLE IF EXISTS `wp_postmeta`;
CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(192, 88, 'contact_map_city', 'Hải Châu, Đà Nẵng'),
(190, 88, 'contact_tel', '0912-345-678'),
(191, 88, 'contact_email', 'tranphan2508@gmail.com'),
(189, 88, 'contact_map_address', '02 Đống Đa,'),
(23, 13, '_form', '<form>\n	<div class="form-group">\n		<label>Tên</label>\n		[text your-name class:form-control placeholder "Tên"]\n	</div>\n	<div class="form-group">\n		<label>Email</label>\n		[email your-email class:form-control placeholder "Email"]\n	</div>\n	<div class="form-group">\n		<label>Công ty</label>\n		[text your-company class:form-control placeholder "Công ty"]\n	</div>\n	<div class="form-group">\n		<label>Điện thoại</label>\n		[text your-phone class:form-control placeholder "Điện thoại"]\n	</div>\n	<div class="form-group">\n		<label>Tin nhắn</label>\n		[textarea rows:7 class:form-control placeholder "Tin nhắn"]\n	</div>\n	<button type="submit" class="btn btn-default">Gửi</button>\n</form>'),
(24, 13, '_mail', 'a:9:{s:6:"active";b:1;s:7:"subject";s:30:"Anh Kiet Phat "[your-subject]"";s:6:"sender";s:36:"[your-name] <tranphan2508@gmail.com>";s:9:"recipient";s:22:"tranphan2508@gmail.com";s:4:"body";s:178:"From: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on Anh Kiet Phat (http://localhost/wordpress)";s:18:"additional_headers";s:32:"Reply-To: tranphan2508@gmail.com";s:11:"attachments";s:0:"";s:8:"use_html";b:0;s:13:"exclude_blank";b:0;}'),
(25, 13, '_mail_2', 'a:9:{s:6:"active";b:0;s:7:"subject";s:30:"Anh Kiet Phat "[your-subject]"";s:6:"sender";s:38:"Anh Kiet Phat <tranphan2508@gmail.com>";s:9:"recipient";s:12:"[your-email]";s:4:"body";s:120:"Message Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on Anh Kiet Phat (http://localhost/wordpress)";s:18:"additional_headers";s:32:"Reply-To: tranphan2508@gmail.com";s:11:"attachments";s:0:"";s:8:"use_html";b:0;s:13:"exclude_blank";b:0;}'),
(26, 13, '_messages', 'a:23:{s:12:"mail_sent_ok";s:45:"Thank you for your message. It has been sent.";s:12:"mail_sent_ng";s:71:"There was an error trying to send your message. Please try again later.";s:16:"validation_error";s:61:"One or more fields have an error. Please check and try again.";s:4:"spam";s:71:"There was an error trying to send your message. Please try again later.";s:12:"accept_terms";s:69:"You must accept the terms and conditions before sending your message.";s:16:"invalid_required";s:22:"The field is required.";s:16:"invalid_too_long";s:22:"The field is too long.";s:17:"invalid_too_short";s:23:"The field is too short.";s:12:"invalid_date";s:29:"The date format is incorrect.";s:14:"date_too_early";s:44:"The date is before the earliest one allowed.";s:13:"date_too_late";s:41:"The date is after the latest one allowed.";s:13:"upload_failed";s:46:"There was an unknown error uploading the file.";s:24:"upload_file_type_invalid";s:49:"You are not allowed to upload files of this type.";s:21:"upload_file_too_large";s:20:"The file is too big.";s:23:"upload_failed_php_error";s:38:"There was an error uploading the file.";s:14:"invalid_number";s:29:"The number format is invalid.";s:16:"number_too_small";s:47:"The number is smaller than the minimum allowed.";s:16:"number_too_large";s:46:"The number is larger than the maximum allowed.";s:23:"quiz_answer_not_correct";s:36:"The answer to the quiz is incorrect.";s:17:"captcha_not_match";s:31:"Your entered code is incorrect.";s:13:"invalid_email";s:38:"The e-mail address entered is invalid.";s:11:"invalid_url";s:19:"The URL is invalid.";s:11:"invalid_tel";s:32:"The telephone number is invalid.";}'),
(27, 13, '_additional_settings', ''),
(28, 13, '_locale', 'en_US'),
(29, 1, '_edit_lock', '1499827804:1'),
(30, 2, '_edit_lock', '1499673788:1'),
(31, 14, '_edit_last', '1'),
(32, 14, '_edit_lock', '1499931768:1'),
(33, 2, '_wp_trash_meta_status', 'publish'),
(34, 2, '_wp_trash_meta_time', '1499674042'),
(35, 2, '_wp_desired_post_slug', 'sample-page'),
(36, 17, '_pll_strings_translations', 'a:0:{}'),
(80, 69, '_deprecated_log_meta', 'a:6:{s:4:"type";s:5:"wrong";s:10:"deprecated";s:18:"wp_enqueue_style()";s:7:"message";s:266:"Không thể đăng ký mã kịch bản và/hoặc định nghĩa phong cách hiển thị khi chương trình chưa thực thi đến các điểm nối <code>wp_enqueue_scripts</code>, <code>admin_enqueue_scripts</code>, hoặc <code>login_enqueue_scripts</code>.";s:7:"version";s:5:"3.3.0";s:7:"in_file";s:25:"wp-includes/functions.php";s:7:"on_line";i:4117;}'),
(38, 20, '_edit_last', '1'),
(39, 20, '_edit_lock', '1499675243:1'),
(40, 22, '_menu_item_type', 'post_type'),
(41, 22, '_menu_item_menu_item_parent', '0'),
(42, 22, '_menu_item_object_id', '20'),
(43, 22, '_menu_item_object', 'page'),
(44, 22, '_menu_item_target', ''),
(45, 22, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(46, 22, '_menu_item_xfn', ''),
(47, 22, '_menu_item_url', ''),
(48, 22, '_menu_item_orphaned', '1499675986'),
(49, 23, '_menu_item_type', 'post_type'),
(50, 23, '_menu_item_menu_item_parent', '0'),
(51, 23, '_menu_item_object_id', '14'),
(52, 23, '_menu_item_object', 'page'),
(53, 23, '_menu_item_target', ''),
(54, 23, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(55, 23, '_menu_item_xfn', ''),
(56, 23, '_menu_item_url', ''),
(57, 23, '_menu_item_orphaned', '1499675987'),
(58, 24, '_menu_item_type', 'post_type'),
(59, 24, '_menu_item_menu_item_parent', '0'),
(60, 24, '_menu_item_object_id', '20'),
(61, 24, '_menu_item_object', 'page'),
(62, 24, '_menu_item_target', ''),
(63, 24, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(64, 24, '_menu_item_xfn', ''),
(65, 24, '_menu_item_url', ''),
(66, 24, '_menu_item_orphaned', '1499676254'),
(168, 93, '_wp_page_template', 'default'),
(167, 93, '_edit_lock', '1499932127:1'),
(166, 93, '_edit_last', '1'),
(165, 91, '_wp_page_template', 'default'),
(164, 91, '_edit_lock', '1500276149:1'),
(163, 91, '_edit_last', '1'),
(76, 20, '_wp_trash_meta_status', 'publish'),
(77, 20, '_wp_trash_meta_time', '1499823699'),
(78, 20, '_wp_desired_post_slug', 'home-en'),
(79, 14, '_wp_page_template', 'templates/contact.php'),
(81, 69, '_deprecated_log_type', 'wrong'),
(82, 69, '_deprecated_log_deprecated', 'wp_enqueue_style()'),
(83, 69, '_deprecated_log_message', 'Không thể đăng ký mã kịch bản và/hoặc định nghĩa phong cách hiển thị khi chương trình chưa thực thi đến các điểm nối <code>wp_enqueue_scripts</code>, <code>admin_enqueue_scripts</code>, hoặc <code>login_enqueue_scripts</code>.'),
(84, 69, '_deprecated_log_version', '3.3.0'),
(85, 69, '_deprecated_log_in_file', 'wp-includes/functions.php'),
(86, 69, '_deprecated_log_on_line', '4117'),
(87, 70, '_deprecated_log_meta', 'a:6:{s:4:"type";s:5:"wrong";s:10:"deprecated";s:18:"wp_enqueue_style()";s:7:"message";s:179:"Scripts and styles should not be registered or enqueued until the <code>wp_enqueue_scripts</code>, <code>admin_enqueue_scripts</code>, or <code>login_enqueue_scripts</code> hooks.";s:7:"version";s:5:"3.3.0";s:7:"in_file";s:25:"wp-includes/functions.php";s:7:"on_line";i:4117;}'),
(88, 70, '_deprecated_log_type', 'wrong'),
(89, 70, '_deprecated_log_deprecated', 'wp_enqueue_style()'),
(90, 70, '_deprecated_log_message', 'Scripts and styles should not be registered or enqueued until the <code>wp_enqueue_scripts</code>, <code>admin_enqueue_scripts</code>, or <code>login_enqueue_scripts</code> hooks.'),
(91, 70, '_deprecated_log_version', '3.3.0'),
(92, 70, '_deprecated_log_in_file', 'wp-includes/functions.php'),
(93, 70, '_deprecated_log_on_line', '4117'),
(94, 14, '_wp_trash_meta_status', 'publish'),
(95, 14, '_wp_trash_meta_time', '1499931912'),
(96, 14, '_wp_desired_post_slug', 'home'),
(97, 71, '_edit_last', '1'),
(98, 71, '_edit_lock', '1500274561:1'),
(99, 71, '_wp_page_template', 'default'),
(100, 72, '_menu_item_type', 'post_type'),
(101, 72, '_menu_item_menu_item_parent', '0'),
(102, 72, '_menu_item_object_id', '71'),
(103, 72, '_menu_item_object', 'page'),
(104, 72, '_menu_item_target', ''),
(105, 72, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(106, 72, '_menu_item_xfn', ''),
(107, 72, '_menu_item_url', ''),
(108, 74, '_edit_last', '1'),
(109, 74, '_edit_lock', '1499932100:1'),
(110, 74, '_wp_page_template', 'default'),
(111, 75, '_menu_item_type', 'post_type'),
(112, 75, '_menu_item_menu_item_parent', '0'),
(113, 75, '_menu_item_object_id', '74'),
(114, 75, '_menu_item_object', 'page'),
(115, 75, '_menu_item_target', ''),
(116, 75, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(117, 75, '_menu_item_xfn', ''),
(118, 75, '_menu_item_url', ''),
(119, 77, '_edit_last', '1'),
(120, 77, '_wp_page_template', 'default'),
(121, 78, '_menu_item_type', 'post_type'),
(122, 78, '_menu_item_menu_item_parent', '0'),
(123, 78, '_menu_item_object_id', '77'),
(124, 78, '_menu_item_object', 'page'),
(125, 78, '_menu_item_target', ''),
(126, 78, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(127, 78, '_menu_item_xfn', ''),
(128, 78, '_menu_item_url', ''),
(129, 77, '_edit_lock', '1500274403:1'),
(130, 82, '_edit_last', '1'),
(131, 82, '_edit_lock', '1499931969:1'),
(132, 82, '_wp_page_template', 'default'),
(133, 83, '_menu_item_type', 'post_type'),
(134, 83, '_menu_item_menu_item_parent', '0'),
(135, 83, '_menu_item_object_id', '82'),
(136, 83, '_menu_item_object', 'page'),
(137, 83, '_menu_item_target', ''),
(138, 83, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(139, 83, '_menu_item_xfn', ''),
(140, 83, '_menu_item_url', ''),
(141, 85, '_edit_last', '1'),
(142, 85, '_edit_lock', '1499931982:1'),
(143, 85, '_wp_page_template', 'default'),
(144, 86, '_menu_item_type', 'post_type'),
(145, 86, '_menu_item_menu_item_parent', '0'),
(146, 86, '_menu_item_object_id', '85'),
(147, 86, '_menu_item_object', 'page'),
(148, 86, '_menu_item_target', ''),
(149, 86, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(150, 86, '_menu_item_xfn', ''),
(151, 86, '_menu_item_url', ''),
(152, 88, '_edit_last', '1'),
(153, 88, '_edit_lock', '1500278402:1'),
(154, 88, '_wp_page_template', 'templates/contact.php'),
(155, 89, '_menu_item_type', 'post_type'),
(156, 89, '_menu_item_menu_item_parent', '0'),
(157, 89, '_menu_item_object_id', '88'),
(158, 89, '_menu_item_object', 'page'),
(159, 89, '_menu_item_target', ''),
(160, 89, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(161, 89, '_menu_item_xfn', ''),
(162, 89, '_menu_item_url', ''),
(188, 97, '_wp_trash_meta_time', '1499935097'),
(187, 97, '_wp_trash_meta_status', 'publish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

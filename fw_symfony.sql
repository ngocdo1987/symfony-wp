-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2017 at 06:49 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fw_symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name|text',
  `category_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Slug|text',
  `category_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Description|textarea',
  `parent_id` int(10) UNSIGNED NOT NULL COMMENT 'Parent|select',
  `category_mt` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Meta title|text',
  `category_md` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Meta description|textarea',
  `category_mk` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Meta keyword|textarea',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_description`, `parent_id`, `category_mt`, `category_md`, `category_mk`, `created_at`, `updated_at`) VALUES
(1, 'Category 1', 'category-1', 'Desc of cat 1', 0, '', '', '', '2016-12-27 23:03:57', '2016-12-27 23:03:57'),
(2, 'Category 2', 'category-2', 'Desc cat 2', 0, '', '', '', '2016-12-27 23:06:02', '2016-12-27 23:06:02'),
(3, 'Category 3', 'category-3', 'Desc of cat 3', 1, '', '', '', '2016-12-29 15:51:46', '2016-12-29 15:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories_posts`
--

DROP TABLE IF EXISTS `categories_posts`;
CREATE TABLE `categories_posts` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Title|text',
  `page_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Slug|text',
  `page_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Image|image',
  `page_content` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Content|ckeditor',
  `page_status` tinyint(4) NOT NULL COMMENT 'Status|select',
  `page_mt` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Meta title|text',
  `page_md` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Meta description|textarea',
  `page_mk` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Meta keyword|textarea',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_slug`, `page_image`, `page_content`, `page_status`, `page_mt`, `page_md`, `page_mk`, `created_at`, `updated_at`) VALUES
(1, 'Page 1', 'page-1', '', '<p>Content page 1</p>\r\n', 1, '', '', '', NULL, NULL),
(2, 'Page 2', 'page-2', '', '<p>Content page 2</p>\r\n', 1, '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Title|text',
  `post_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Slug|text',
  `post_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Image|image',
  `post_content` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Content|ckeditor',
  `post_status` tinyint(4) NOT NULL COMMENT 'Status|true_false',
  `post_mt` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Meta title|text',
  `post_md` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Meta description|textarea',
  `post_mk` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Meta keyword|textarea',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_slug`, `post_image`, `post_content`, `post_status`, `post_mt`, `post_md`, `post_mk`, `created_at`, `updated_at`) VALUES
(1, 'Post 1', 'post-1', NULL, '<p>Content post 1</p>\r\n', 1, '', '', '', '2017-01-03 15:45:21', '2017-01-03 15:45:21'),
(2, 'Post 2', 'post-2', NULL, '<p>Content post 2</p>\r\n', 0, '', '', '', '2017-01-03 15:45:43', '2017-01-03 15:45:43'),
(3, 'Post 3', 'post-3', NULL, '<p>Content of post 3</p>\r\n', 0, 'dd', 'ee', 'gsdgsh', '2017-01-07 22:08:12', '2017-01-07 22:08:12'),
(16, 'Post 4', 'post-4', NULL, '<p>Content of post 4</p>\r\n', 1, '', '', '', '2017-01-23 16:30:14', '2017-01-23 16:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

DROP TABLE IF EXISTS `posts_tags`;
CREATE TABLE `posts_tags` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name|text',
  `tag_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Slug|text',
  `tag_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Description|textarea',
  `tag_mt` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Meta title|text',
  `tag_md` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Meta description|textarea',
  `tag_mk` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Meta keyword|textarea',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `tag_slug`, `tag_description`, `tag_mt`, `tag_md`, `tag_mk`, `created_at`, `updated_at`) VALUES
(1, 'Tag 1', 'tag-1', 'Description of tag 1', '', '', '', '2016-12-25 11:43:33', '2016-12-25 11:43:33'),
(2, 'Tag 2', 'tag-2', 'Description of tag 2', '', '', '', '2016-12-25 11:44:02', '2016-12-25 11:44:02'),
(3, 'Tag 3', 'tag-3', 'Description of tag 3', '', '', '', '2016-12-26 12:39:11', '2016-12-26 12:39:11'),
(5, 'Tag 4', 'tag-4', 'Description of tag 4', '', '', '', '2016-12-27 14:28:39', '2016-12-27 14:28:39'),
(6, 'Tag 5', 'tag-5', 'Desc 5', 'mt 5', 'md 5', 'mk 5', NULL, NULL),
(7, 'Tag 6', 'tag-6', 'Desc 6', 'mt 6', 'md 6', 'mk 6', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_slug_unique` (`category_slug`),
  ADD KEY `categories_category_name_index` (`category_name`);

--
-- Indexes for table `categories_posts`
--
ALTER TABLE `categories_posts`
  ADD UNIQUE KEY `categories_posts_category_id_post_id_unique` (`category_id`,`post_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_page_slug_unique` (`page_slug`),
  ADD KEY `pages_page_title_index` (`page_title`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_post_slug_unique` (`post_slug`),
  ADD KEY `posts_post_title_index` (`post_title`);

--
-- Indexes for table `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD UNIQUE KEY `posts_tags_post_id_tag_id_unique` (`post_id`,`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_tag_slug_unique` (`tag_slug`),
  ADD KEY `tags_tag_name_index` (`tag_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

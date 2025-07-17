/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `colors`;
CREATE TABLE `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `news_articles`;
CREATE TABLE `news_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `posted_at` datetime NOT NULL,
  `image_url` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `user_contact`;
CREATE TABLE `user_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `marketing_consent` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `picture_url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `colors` (`id`, `color`) VALUES
(1, 'yellow'),
(2, 'red'),
(3, 'blue');
INSERT INTO `news_articles` (`id`, `title`, `description`, `posted_at`, `image_url`, `user_id`, `type_id`, `color_id`) VALUES
(1, 'Netmatters Achieves King’s Award for Enterprise: Promoting Opportunity 2025!', 'Netmatters is honoured to have been presented with a King’s Award for Enterprise for Promoting Opportunity 2025!', '2025-04-29 14:30:34', 'netmatters-achieves-kings-award.webp', 1, 1, 2),
(2, 'April Notables 2025 - Celebrating Our Team', 'Today, we celebrate the brilliant accomplishments of Lucy Hathaway as she celebrates 5 years at Netmatters, entering the hall of fame as our newest \'Legend!\'. ', '2025-05-07 12:01:01', 'april-notables-2025.webp', 1, 1, 1),
(3, 'Case Study: Enhancing Security and Reducing Costs for Greg Rowe Limited', 'Greg Rowe Limited is a leading UK-based tap design and manufacturing company that serves both businesses and consumers. With a reputation for high-quality craftsmanship and innovative designs, they provide a wide range of tap solutions for residential and commercial spaces. Their products combine aesthetic appeal with functionality, catering to modern design trends and sustainable water solutions. Given their broad customer base and reliance on digital tools for sales, distribution, and internal operations, cybersecurity and IT efficiency are crucial to their business success.', '2025-04-25 09:58:02', 'case-study-enhancing-security.png', 1, 2, 3);
INSERT INTO `type` (`id`, `type`) VALUES
(1, 'News'),
(2, 'Case Study');
INSERT INTO `user_contact` (`id`, `name`, `company_name`, `email`, `phone`, `message`, `marketing_consent`) VALUES
(88, 'Steven', '', 'test@test.test', '07123456789', 'Hello, I like cookies.', 1);
INSERT INTO `users` (`id`, `name`, `picture_url`) VALUES
(1, 'Netmatters', 'netmatters-logo-small.webp');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
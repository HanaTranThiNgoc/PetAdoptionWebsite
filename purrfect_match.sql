-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2024 at 05:32 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purrfect_match`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
CREATE TABLE IF NOT EXISTS `admin_info` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(8) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

DROP TABLE IF EXISTS `adoption`;
CREATE TABLE IF NOT EXISTS `adoption` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `pet_id` int(8) NOT NULL,
  `answer1` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `answer2` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `answer3` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `answer4` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `answer5` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `answer6` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `answer7` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `answer8` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `answer9` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `user_id` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_adoption_pet` (`pet_id`) USING BTREE,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`id`, `pet_id`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `answer8`, `answer9`, `user_id`) VALUES
(135, 2, 'Chưa từng chăm sóc/nuôi chó/mèo', 'Chưa từng, tôi đang tìm kiếm thú cưng đầu tiên', 'có', 'Dưới 6 tháng', 'Một con chó/mèo tự tin, cởi mở ', 'Một con chó/mèo năng động và tôi có thể chơi với vài lần một ngày', 'ds', 'ds', 'PM website', 17),
(136, 2, 'Chưa từng chăm sóc/nuôi chó/mèo', 'Chưa từng, tôi đang tìm kiếm thú cưng đầu tiên', 'á', '6 tháng đến khoảng một năm', 'Một con chó/mèo thích sống với (những) con mèo/chó khác', 'Một con chó/mèo năng động và tôi có thể chơi với vài lần một ngày', 'sa', 'sa', 'PM website', 17),
(137, 2, 'Chưa từng chăm sóc/nuôi chó/mèo', 'Chưa từng, tôi đang tìm kiếm thú cưng đầu tiên', 'DS', 'Dưới 6 tháng', 'Một con chó/mèo tự tin, cởi mở ', 'Một con chó/mèo năng động và tôi có thể chơi với vài lần một ngày', 'DS', 'DS', 'PM website', 17),
(138, 6, 'Chưa từng chăm sóc/nuôi chó/mèo', 'Chưa từng, tôi đang tìm kiếm thú cưng đầu tiên', 'dád', 'Dưới 6 tháng', 'Một con chó/mèo tự tin, cởi mở ', 'Một con chó/mèo năng động và tôi có thể chơi với vài lần một ngày', 'dsa', 'da', 'PM website', 21);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `contact_name` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_name`, `email`, `title`, `content`) VALUES
(15, 'fd', 'ttnhngochan29@gmail.com', 'fd', 'fd'),
(16, 'Trần Thị Ngọc Hân', '123@gmail.com', 'da', 'da'),
(17, 'Trần Thị Ngọc Hân', '123@gmail.com', 'da', 'da'),
(18, 'Trần Thị Ngọc Hân', '123@gmail.com', 'sd', 'ds'),
(19, 'Trần Thị Ngọc Hân', 'sjd@gmail.com', 'fd', 'df'),
(20, 'Trần Thị Ngọc Hân', 'ttnhngochan29@gmail.com', 'sda', 'dsa'),
(21, 'Trần Thị Ngọc Hân', 'ttnhngochan29@gma', 'sda', 'dsa'),
(22, 'Trần Vũ Ân', 'vuan@gmail.com', 'hi', 'ân ngu'),
(23, 'Trần Thị Ngọc Hân', 'karma292002@gmail.com', 'đá', 'dsadasd');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

DROP TABLE IF EXISTS `contact_info`;
CREATE TABLE IF NOT EXISTS `contact_info` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL,
  `id_card` text NOT NULL,
  `phonenumber` text NOT NULL,
  `place` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `pet_id` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_contactinfo_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fav_pet`
--

DROP TABLE IF EXISTS `fav_pet`;
CREATE TABLE IF NOT EXISTS `fav_pet` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL,
  `pet_id` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fav_pet`
--

INSERT INTO `fav_pet` (`id`, `user_id`, `pet_id`) VALUES
(2, 8, 8),
(3, 14, 2),
(4, 14, 3),
(5, 17, 2),
(6, 21, 6);

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

DROP TABLE IF EXISTS `knowledge`;
CREATE TABLE IF NOT EXISTS `knowledge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `detail` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `img` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `date` date NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`id`, `title`, `detail`, `img`, `type`, `date`, `content`) VALUES
(1, 'Tại sao phải triệt sản và nuôi kín chó mèo', 'Việc triệt sản và nuôi kín chó mèo mang lại nhiều lợi ích hơn chúng ta thường nghĩ...', 'blog-trietsan-nuoikin.jpg', '1', '2023-02-28', 'Việc bận rộn và tẻ nhạt của cuộc sống khiến cho việc nuôi thú cưng trở thành sự lựa chọn tuyệt vời để mang lại niềm vui và sự phấn khởi cho mỗi ngày. Tuy nhiên, việc chăm sóc và bảo đảm cho sự an toàn của thú cưng lại là một thách thức đối với nhiều người. Đây là một câu hỏi đáng suy nghĩ mà chúng ta cần cân nhắc kỹ trước khi quyết định nuôi thú cưng trong gia đình.\r\nNuôi kín và triệt sản chó mèo là một vấn đề mà mình luôn quan tâm. Tuy nhiên, có những người cho rằng việc này không quan trọng, thú cưng cứ được sinh sản và tự do sống theo bản năng hoang dã của chúng. Nhưng thật sự, chúng ta không thể biết được thú cưng có đang hạnh phúc hay không nếu không đảm bảo được cho chúng một môi trường sống an toàn và tốt đẹp. Yêu động vật không chỉ là việc mua một bé thú cưng, mà còn là việc chăm sóc và đảm bảo cho chúng có một cuộc sống tốt nhất có thể.\r\n<span class=\"highlight\">Triệt sản đầu tiên giúp khống chế sinh sản ngoài ý muốn của các bé.</span>\r\nĐối với chó mèo, triệt sản là một hành động cần thiết và có thể mang lại nhiều lợi ích cho sức khỏe và sự phát triển của các bé. Việc triệt sản giúp giảm nguy cơ mắc các bệnh liên quan đến sinh sản. Chó mèo sau khi trải qua quá trình sinh sản sẽ thường xuyên nổi loạn và có tâm lý căng thẳng. Việc triệt sản sẽ giúp giảm bớt tình trạng này và sẽ trở nên bình tĩnh hơn đồng thời giúp tăng tuổi thọ. Sau khi triệt sản, chó mèo sẽ có hành vi thân thiện và ít xảy ra tình trạng xông giật, tấn công như khi chúng đang trong giai đoạn sinh sản.\r\n\r\n<span class=\"highlight\">Việc nuôi kín cũng ý nghĩa như triệt sản</span>\r\n\r\nKhi chó mèo được nuôi kín, các bé sẽ ít gặp phải những tác động tiêu cực từ bên ngoài, bao gồm nhiễm trùng, bệnh tật và tai nạn. Điều này giúp cho sức khỏe được bảo vệ tốt hơn.\r\nNuôi kín chó mèo có thể giúp giảm stress và cảm thấy an toàn hơn khi được nuôi trong môi trường kín đáo và yên tĩnh. Dần dần sẽ trở nên quen thuộc với môi trường sống của mình và sẽ cảm thấy yên tâm hơn khi giao tiếp với chúng ta.\r\nNgoài ra nuôi kín chó mèo cũng giúp bảo vệ môi trường xung quanh.\r\nTuy nhiên, việc nuôi kín chó mèo cũng có những hạn chế và rủi ro. Các bé có thể cảm thấy bị kìm hãm trong không gian hẹp và thiếu hoạt động, cũng như không được tiếp xúc với thế giới bên ngoài. Nếu không được quản lý cẩn thận, chó mèo có thể bị tăng cân và mắc phải các vấn đề sức khỏe liên quan đến thiếu vận động. Do đó, việc nuôi kín chó mèo cần được thực hiện đúng cách và được kiểm soát để đảm bảo tốt nhất cho sức khỏe và hạnh phúc cho các bé.\r\n'),
(2, 'Vì chó Ta xứng đáng được yêu thương', 'Chắc chắn không ít lần chúng ta đã nghe những câu dè bỉu quen thuộc như \"Nuôi con chó cỏ này làm gì\",...', 'blog-choco.jpg', '1', '2023-03-22', 'Chắc chắn không ít lần chúng ta đã nghe những câu dè bỉu quen thuộc như \"Nuôi con chó cỏ này làm gì\", \"Con chó này nếu bỏ ra đường thì cũng sống được\", hoặc những lời khẳng định khó nghe hơn như \"Nuôi chó làm gì, chúng chỉ biết ăn uống và gây phiền toái”, đặc biệt là những lời so sánh chó “tây” chó “ta”.\r\n<span class=\"highlight\">Yêu thương là không phân biệt </span>\r\nNhững quan niệm cũ mòn này đã xuất hiện từ bao giờ không biết nhưng chúng đã trở thành một phần của tiềm thức của nhiều người và ngày càng được thể hiện nhiều hơn trong khi trào lưu nuôi chó cảnh đang phát triển. Tôi không hiểu vì sao phải phân biệt giữa chó cảnh và chó giữ nhà, chó ngoại và chó thuần Việt, vì tất cả chúng đều là những sinh vật xứng đáng được yêu thương. Chúng ta nên đối xử tốt với tất cả chúng, bởi vì chúng là những đứa trẻ ngây thơ chỉ biết cống hiến bản thân cho những người yêu thương chúng, thậm chí cả cho những người đã đối xử tệ với chúng. Chó thuần Việt đã trở nên quen thuộc với mọi người, nhưng số phận của chúng vẫn chỉ được giới hạn trong việc trông nhà và làm thịt. Tuy nhiên, chúng xứng đáng được đối xử tốt hơn. Chúng thông minh, dễ nuôi, và không cần những thức ăn xa xỉ hay chăn nệm sang trọng. Chúng chỉ cần một chỗ nằm thoải mái và những cái vuốt ve âu yếm từ người thân yêu. Chúng sẵn sàng hi sinh bản thân để bảo vệ người yêu thương, nhưng rồi lại bị bỏ mặc và bị bán đi khi không còn khả năng phục vụ. Chúng xứng đáng được đối xử tốt hơn và được xem là thành viên trong gia đình, vì chúng là những sinh vật có trái tim và tình cảm vô tận.\r\n'),
(3, 'Chú chó Fido - Biểu tượng của lòng trung thành', 'Lòng trung thành vô hạn với chủ nhân đã biến Fido trở thành một nhân vật nổi tiếng trong thập niên 1940-1950...', 'blog-fido.jpg', '1', '2023-03-15', 'Lòng trung thành vô hạn với chủ nhân đã biến Fido trở thành một nhân vật nổi tiếng trong thập niên 1940-1950. Fido là một chú chó hoang trên đường phố Luco di Mugello, một thị trấn nhỏ ở Florence, Ý.\r\nNăm 1941, ông Carlo Soriani tìm thấy Fido bị thương đang nằm bên đường và quyết định đưa chú chó về nhà để chăm sóc, nuôi dưỡng. Kể từ đó, mỗi khi Soriani đi xe bus từ nhà máy về nhà, Fido luôn đứng sẵn tại trạm xe bus để chờ ông.\r\nSuốt 2 năm trời, không ngày nào là Fido không đứng chờ Soriani ở trạm xe bus, sau đó cả hai cùng đi bộ về nhà. Một ngày nọ, nhà máy nơi Soriani làm việc bị trúng bom của phe Đồng minh, khiến ông cùng nhiều công nhân khác thiệt mạng.\r\nĐêm hôm đó, khi Soriani không trở về, chú chó Fido lặng lẽ từ bến xe bus về nhà. Nhưng đến hôm sau, chú lại tiếp tục trở lại bến xe để chờ chủ. Cứ thế, trong suốt 15 năm ròng rã, ngày nào Fido cũng kiên nhẫn đứng ở bến xe chờ đợi người chủ không bao giờ trở về.\r\nSự trung thành của Fido đã khiến chú trở thành một nhân vật nổi tiếng ở Florence, và khi chú qua đời vào năm 1958, chú được chôn cất ngay cạnh mộ của ông chủ Soriani.\r\n'),
(4, 'Bệnh giảm bạch cầu ở mèo', 'Bệnh giảm bạch cầu là một tình trạng khá phổ biến mà mèo mắc phải, mèo có số lượng bạch cầu trong huyết thanh thấp hơn bình thường...', 'blog-meo.jpg', '2', '2023-03-01', 'Bệnh giảm bạch cầu là một tình trạng mà mèo có số lượng bạch cầu trong huyết thanh thấp hơn bình thường. Bạch cầu là một loại tế bào miễn dịch quan trọng giúp mèo chống lại các bệnh tật và bảo vệ cơ thể khỏi các tác nhân gây bệnh từ bên ngoài.\r\n\r\nNguyên nhân của bệnh giảm bạch cầu ở mèo có thể do nhiều yếu tố khác nhau, bao gồm di truyền, ảnh hưởng của thuốc, chế độ dinh dưỡng không đầy đủ hoặc căn bệnh nền khác. Các triệu chứng của bệnh giảm bạch cầu ở mèo có thể bao gồm mệt mỏi, giảm cân, nhiễm trùng và sưng tuyến.\r\n\r\nĐể chẩn đoán bệnh giảm bạch cầu ở mèo, các xét nghiệm huyết thanh và thăm khám lâm sàng sẽ được thực hiện. Điều trị có thể bao gồm việc sử dụng thuốc để tăng số lượng bạch cầu hoặc điều trị bệnh nền nếu có.\r\n\r\nNếu bạn nghi ngờ rằng mèo của bạn có bệnh giảm bạch cầu, hãy đưa mèo đến gặp bác sĩ thú y để được tư vấn và điều trị kịp thời.\r\n'),
(5, 'Phải làm gì nếu con chó con của bạn không ăn đủ', 'Những chú chó con được biết đến  vì tính hoạt bát vui vẻ của chúng...', 'blog-puppies.jpg', '2', '2023-03-05', 'Những chú chó con được biết đến  vì tính hoạt bát vui vẻ của chúng, từ việc lao vào một đống lá cho đến sủa vào hình ảnh phản chiếu của chúng trong gương hay cố gắng hết sức để nhảy lên chiếc ghế dài. Tất cả những nhiệm vụ tìm hiểu về thế giới đó đều cần rất nhiều năng lượng, thứ mà chú chó con của bạn có được khi được cho ăn nhiều lần trong ngày. Nếu con chó con của bạn không ăn đủ, bạn có nên lo lắng không? Câu trả lời là có thể.\r\n<span class=\"highlight\">Chó con nên ăn bao nhiêu lần một ngày?</span>\r\n\r\nGiống như trẻ sơ sinh, chó con có dạ dày nhỏ và cần ăn nhiều bữa nhỏ mỗi ngày. Khi con chó con của bạn lớn lên, bạn có thể cho ăn số lượng lớn hơn với tần suất ít hơn. Bác sĩ thú y của bạn có thể đề xuất một lịch trình, nhưng Gale nói rằng đây là những nguyên tắc chung:\r\n\r\n4 bữa một ngày: Chó con mới cai sữa ở mọi kích cỡ cần bốn bữa một ngày.\r\n\r\n3 bữa một ngày: Các giống chó nhỏ có thể chuyển sang ba bữa một ngày vào khoảng 4 tháng tuổi, trong khi các giống chó lớn hơn thực hiện chuyển đổi vào khoảng 6 tháng.\r\n\r\nNgày 2 bữa: Duy trì ngày 2 bữa bắt đầu từ 4 đến 10 tháng đối với giống nhỏ và từ 6 đến 12 tháng đối với giống lớn.\r\n<span class=\"highlight\">7 lý do tại sao con chó con của bạn không ăn</span>\r\n\r\nChó con của bạn có thể chán ăn do nhiều nguyên nhân, một số nguyên nhân bạn có thể dễ dàng khắc phục tại nhà trong khi những nguyên nhân khác cần được chăm sóc thú y.\r\n\r\n1. Kiệt sức\r\n2. Mất tập trung\r\n3. Căng thẳng\r\n4. Tiêm chủng\r\n7. Bệnh tật\r\n\r\nNếu con chó con của bạn có các triệu chứng khác hoặc đã bỏ ăn cả ngày, hãy tìm kiếm sự chăm sóc thú y. Nếu không, có một số điều bạn có thể làm ở nhà để khuyến khích chó con ăn bữa tiếp theo.\r\n'),
(6, 'Phát ban nhiệt ở chó', 'Phát ban nhiệt (hay còn gọi là ban đỏ, viêm da, hoặc hot spo, là một bệnh da phổ biến ở chó...', 'blog-phatban.jpg', '2', '2023-04-01', 'Phát ban nhiệt (hay còn gọi là ban đỏ, viêm da, hoặc hot spo, là một bệnh da phổ biến ở chó. Bệnh thường gây ra cảm giác ngứa ngáy và đau đớn cho chó, dẫn đến việc chúng liếm và cắn những vùng da bị tổn thương, từ đó khiến tình trạng trầm trọng hơn. \r\n<span class=\"highlight\">Nguyên nhân:</span>\r\nPhát ban nhiệt thường xảy ra khi da chó bị kích thích mạnh mẽ bởi vi khuẩn hoặc nấm, hoặc do các tác nhân ngoại lai như chích, cắn, trầy xước hoặc cạo. Tình trạng nóng ẩm, tiếp xúc với nước nhiễm khuẩn, cắn giữa các chó hay vết thương do sự ảnh hưởng của rận cũng có thể là nguyên nhân gây ra bệnh.\r\n\r\n<span class=\"highlight\">Triệu chứng:</span>\r\nCác triệu chứng của phát ban nhiệt thường bắt đầu bằng những vùng da trên cơ thể chó bị sưng tấy, đỏ và viêm. Chó có thể cảm thấy khó chịu và tìm cách liếm và cắn những vùng da bị tổn thương, từ đó làm tình trạng trầm trọng hơn. Một số chó có thể biểu hiện các triệu chứng khác như sốt, khó thở, và chán ăn.\r\n\r\n<span class=\"highlight\">Cách điều trị:</span>\r\nĐiều trị phát ban nhiệt ở chó bao gồm:\r\n\r\nLàm sạch và khô vùng da bị tổn thương: Tuyệt đối không được để chó liếm hoặc cắn những vùng da bị tổn thương, vì nó có thể khiến tình trạng trầm trọng hơn. Hãy làm sạch và khô vùng da bị tổn thương để giảm ngứa và sưng.\r\n\r\nSử dụng thuốc kháng sinh và thuốc kháng viêm: Những loại thuốc này được sử dụng để giảm viêm và kháng khuẩn trong vùng da bị tổn thương.\r\n\r\nSử dụng thuốc giảm ngứa: Thuốc giảm ngứa có thể giúp giảm cảm giác ngứa và đau đớn cho chó.\r\n\r\nChăm sóc thường xuyên.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `library_img`
--

DROP TABLE IF EXISTS `library_img`;
CREATE TABLE IF NOT EXISTS `library_img` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `pet_id` int(8) NOT NULL,
  `img` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_avt` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_libraryimg_pet` (`pet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library_img`
--

INSERT INTO `library_img` (`id`, `pet_id`, `img`, `img_avt`) VALUES
(1, 1, 'Lokey_1.jpg', ''),
(3, 2, 'Salsa_1.jpg', ''),
(5, 3, 'Bông_1.jpg', ''),
(7, 4, 'Bư_1.jpg', ''),
(9, 5, 'Đẹt_1.jpg', ''),
(11, 6, 'Đô_1.jpg', ''),
(13, 7, 'Lucky_1.jpg', ''),
(15, 8, 'Temple_1.jpg', ''),
(18, 9, 'Dưa_1.jpg', ''),
(19, 10, 'Mi_1.jpg', ''),
(20, 11, 'Chanh_1.jpg', ''),
(22, 12, 'Sam_1.jpg', ''),
(25, 13, 'Fiona_1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

DROP TABLE IF EXISTS `pet`;
CREATE TABLE IF NOT EXISTS `pet` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `pet_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `breed` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `sex` varchar(3) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `age` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `animal` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `vaccination` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `sterilization` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `img` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `Code` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`id`, `pet_name`, `breed`, `sex`, `age`, `address`, `animal`, `vaccination`, `sterilization`, `img`, `Code`) VALUES
(1, 'Lokey', 'Chó ta', 'Đực', 'Trưởng thành', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Chó', 'Bệnh dại', 'Rồi', 'Lokey_1.jpg', 'CT045'),
(2, 'Salsa', 'Mèo ta', 'Đực', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Mèo', 'Không rõ', 'Chưa', 'Salsa_1.jpg', 'MT220'),
(3, 'Bông', 'Mèo ta', 'Cái', 'Trưởng thành', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đứcc', 'Mèo', 'Bệnh giảm bạch cầu', 'Rồi', 'Bông_1.jpg', 'MT021'),
(4, 'Bư ', 'Chó ta', 'Đực', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Chó', 'Bệnh dại', 'Chưa', 'Bư_1.jpg', 'CT200'),
(5, 'Đẹt', 'Chó ta', 'Đực', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Chó', 'Bệnh dại', 'Chưa', 'Đẹt_1.jpg', 'CT001'),
(6, 'Đô', 'Chó ta', 'Đực', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Chó', 'Bệnh dại', 'Chưa', 'Đô_1.jpg', 'CT011'),
(7, 'Lucky', 'Chó ta', 'Cái', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Chó', 'Bệnh dại', 'Rồi ', 'Lucky_1.jpg', 'CT012'),
(8, 'Temple', 'Mèo tây', 'Cái', 'Trưởng thành', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Mèo', 'Bệnh giảm bạch cầu', 'Chưa', 'Temple_1.jpg', 'MT033'),
(9, 'Dưa', 'Mèo ta', 'Đực', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Mèo', 'Không rõ', 'Chưa', 'Dưa_1.jpg', 'MT031'),
(10, 'Mi', 'Mèo ta', 'Cái', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Mèo', 'Không rõ', 'Chưa', 'Mi_1.jpg', 'MT066'),
(11, 'Chanh', 'Mèo ta', 'Cái', 'Trẻ ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Mèo', 'Phòng dại', 'Chưa', 'Chanh_1.jpg', 'MT027'),
(12, 'Sam', 'Mèo ta', 'Cái', 'Trưởng thành', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Mèo', 'Không rõ', 'Rồi', 'Sam_1.jpg', 'MT062'),
(13, 'Fiona', 'Chó ta', 'Đực', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Chó', 'Không rõ', 'Chưa', 'Fiona_1.jpg', 'CT007'),
(14, 'Be', 'Mèo lai', 'Đực', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Mèo', 'Không rõ', 'Chưa', 'Be.jpg', 'ML001'),
(15, 'Bem', 'Chó ta', 'Đực', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Chó', 'Không rõ', 'Chưa', 'Bem.jpg', 'CT310'),
(16, 'Ben', 'Chó ta', 'Đực', 'Trưởng thành', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Mèo', 'Không rõ', 'Rồi', 'Ben.jpg', 'MT030'),
(17, 'Bí', 'Chó ta', 'Đực', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Chó', 'Không rõ', 'Chưa', 'Bí.jpg', 'CT602'),
(18, 'Bon', 'Chó ta', 'Đực', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Chó', 'Không rõ', 'Chưa', 'Bon.jpg', 'CT107'),
(19, 'Lu', 'Chó ta', 'Đực', 'Trưởng thành', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Chó', 'Không rõ', 'Chưa', 'Lu.jpg', 'CT055'),
(20, 'Mướp', 'Mèo ta', 'Cái', 'Trưởng thành', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Mèo', 'Bệnh giảm bạch cầu', 'Rồi', 'Mướp.jpg', 'MT201'),
(21, 'Mẹt', 'Chó ta', 'Cái', 'Trưởng thành', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Chó', 'Không rõ', 'Rồi', 'Mẹt.jpg', 'CT091'),
(22, 'Bu', 'Mèo ta', 'Đực', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Mèo', 'Không rõ', 'Rồi', 'Bu.jpg', 'MT081'),
(23, 'Cải', 'Chó ta', 'Cái', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Chó', 'Không rõ', 'Chưa', 'Cải.jpg', 'CT009'),
(24, 'Đơ', 'Mèo ta', 'Đực', 'Trẻ', 'PURRFECT MATCH, đường Kha Vạn Cân, tp Thủ Đức', 'Mèo', 'Không rõ', 'Chưa', 'Đơ.jpg', 'MT112');

-- --------------------------------------------------------

--
-- Table structure for table `rescue`
--

DROP TABLE IF EXISTS `rescue`;
CREATE TABLE IF NOT EXISTS `rescue` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `petname` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `code` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `r_date` date NOT NULL,
  `r_before` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `r_after` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `content_title` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rescue`
--

INSERT INTO `rescue` (`id`, `petname`, `code`, `r_date`, `r_before`, `r_after`, `img`, `content_title`) VALUES
(1, 'Dện', '#CODE22B050', '2023-03-01', 'Báo tin nhặt được Dện ở đường 17 vào khoảng 10h tối. Dện bị bỏ rơi, có nhiều vết thương trên cơ thể, chân bị bầm tím và mắt trái bị bỏng. Được đưa đến Trung tâm cứu hộ động vật.\r\nDện bị nhiễm trùng ở nhiều vết thương và cần phải điều trị bằng kháng sinh.\r\nChân bị bầm tím cần được xử lý và bó bột để hồi phục.\r\nMắt trái cần được điều trị để tránh bị nhiễm trùng.', 'Con đã hồi phục hoàn toàn, sức khỏe của cậu ấy được kiểm tra định kỳ để đảm bảo tình trạng sức khỏe tốt. Anh đã được nhận nuôi bởi một gia đình rất yêu thương và hiện tại đang sống trong một môi trường an toàn và hạnh phúc.', 'cuuho-den.jpg', 'Được đưa đến Trung tâm cứu hộ động vật với nhiều vết thương trên cơ thể, chân bị bầm tím và mắt trái bị bỏng...'),
(2, 'Tấm', '#CODE23H100', '2022-11-01', 'Báo tin nhặt được Tấm ở gần đường 16 vào khoảng 11h sáng. Tấm bị bỏ rơi trên đường, báo tin nhận thấy Tấm có vấn đề về sức khỏe và không thể di chuyển, đồng thời chỗ báo tin không nuôi động vật được nên nhờ đến trạm cứu trợ.\r\nTấm bị gãy xương chân.\r\nNgoài ra, Tấm còn bị viêm phổi và sốt cao.', 'Tấm được cứu sống và hiện đã hồi phục hoàn toàn. Sau khi điều trị bệnh viêm phổi và phẫu thuật cột sống. Tuy nhiên, Tấm vẫn cần phương tiện để di chuyển bình thường, cần được quan sát và chăm sóc kỹ càng để đảm bảo sức khỏe và hạnh phúc của mình. Tấm hiện đang tìm kiếm một mái ấm mới để được nhận nuôi.\r\n', 'cuuho-tam.jpg', 'Báo tin nhặt được Tấm ở gần đường 16 vào khoảng 11h sáng. Tấm bị bỏ rơi trên đường,  nhận thấy Tấm có vấn đề...'),
(3, 'Cam', '#CODE23N040\r\n', '2023-01-09', 'Báo tin nhặt được Cam ở đường Lê Văn Việt vào khoảng 10h tối. Bị tấn công bởi một con chó dữ, báo tin thấy Cam bị thương nặng và không thể di chuyển, đồng thời chỗ báo tin không nuôi động vật được nên nhờ đến Hội cứu trợ.\r\nCam bị cắn đứt dây thần kinh ở chân trái.\r\nNgoài ra, Cam bị chấn thương sọ não và sưng não\r\n\r\n', 'Cam đã trải qua phẫu thuật và được điều trị tại bệnh viện thú y. Minh đã phục hồi và đang sống khỏe mạnh tại một tổ chức bảo vệ động vật. Minh vẫn còn một chút sợ hãi sau khi bị tấn công, nhưng vẫn rất tình cảm và thân thiện với người chăm sóc.', 'cuuho-cam.jpg', 'Bị tấn công bởi một con chó dữ, người báo tin thấy Cam bị thương nặng và không thể di chuyển,...'),
(4, 'Soăn', '#CODE21N080', '2022-12-04', 'Báo tin nhặt được Soăn ở đường Chương Dương vào khoảng 7h sáng. Soăn bị bỏ rơi trong một túi nylon, không có thức ăn, không có nước uống và không có không khí để thở. Được đưa đến Trung tâm cứu hộ động vật.\r\nSoăn bị rối loạn chức năng tuyến giáp, đòi hỏi phải kiểm tra và điều trị định kỳ.\r\nTình trạng da bị tổn thương và bị nấm rất nặng. ', 'Soăn đã hồi phục hoàn toàn, đang sống trong một gia đình nuôi thật hạnh phúc. Soăn yêu thích đi bộ và chơi đùa, và sức khỏe của con được kiểm tra định kỳ để đảm bảo tình trạng sức khỏe tốt.', 'cuuho-soan.jpg', 'Soăn bị bỏ rơi trong một túi nylon, không có thức ăn, không có nước uống và không có không khí để thở...');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_name`, `email`, `password`, `address`) VALUES
(17, 'haha', '3@gmail.com', '1', 'haha'),
(18, 'ha', '1234@gmail.com', '1', 'gdgd'),
(19, 'tranthingochan@gmail.com', 'ds@gmail.com', '1', 'd'),
(20, 'tranthingochan@gmail.com', '1235@gmail.com', '1', 'ds'),
(21, 'dsa', 'dung@gmail.com', '123456', 'da');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoption`
--
ALTER TABLE `adoption`
  ADD CONSTRAINT `FK_pet_adoption` FOREIGN KEY (`pet_id`) REFERENCES `pet` (`id`),
  ADD CONSTRAINT `adoption_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`);

--
-- Constraints for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD CONSTRAINT `FK_contactinfo_user` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`);

--
-- Constraints for table `library_img`
--
ALTER TABLE `library_img`
  ADD CONSTRAINT `FK_libraryimg_pet` FOREIGN KEY (`pet_id`) REFERENCES `pet` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

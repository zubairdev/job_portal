-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 07:35 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_phone` bigint(13) NOT NULL,
  `c_web` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `c_fb` varchar(255) NOT NULL,
  `c_twitter` varchar(255) NOT NULL,
  `c_linkedin` varchar(255) NOT NULL,
  `c_gplus` varchar(255) NOT NULL,
  `c_description` text NOT NULL,
  `c_business` text NOT NULL,
  `c_wwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `user_id`, `c_name`, `c_address`, `c_email`, `c_phone`, `c_web`, `photo`, `c_fb`, `c_twitter`, `c_linkedin`, `c_gplus`, `c_description`, `c_business`, `c_wwd`) VALUES
(1, 11, 'Al-Imran Printers', '514, Graden Heights 8 - Abik Block, New Garden Town Lahore, Pakistan', 'info@alimranprinters.com', 4235866423, 'http://www.alimranprinters.com/', 'logo2.png', 'https://www.facebook.com/Al-imran-Printers-1037881832979993/', 'https://twitter.com/ImranPrinters', '', '', '', '																<p>AL-IMRAN Printers is one of the leading companies in the printing industry at Corporate level. The company and your businessâ€”put the two together and you will be conquering the business sectors. AL-IMRAN Printers is a reaction to the difficulties and the challenges that are faced in the advanced innovations and technology. We have successful and splendid experience of 35 years in the printing world. We offer a wide arrangement of coordinated teamwork that adheres with its integrity and excellence of our printing technologies. AL-IMRAN Printers provide all kind of printing services to the business sectors around the world. We mostly deal Business to Business collaborations. AL-IMRAN Printers is a success story of honesty, commitment and dedication to provide best standards and delivering our products and projects to our clients on time. We have a remarkable list of long-term clients which proves credibility and devotion to our work. We had to face challenges in the initial years in dealing with the International Clients and Brands. But our Mission and Vision made it convenient for us to handle those Mega Projects by mitigating our problems. Today, we have achieved a status of Brand and Quality in the Printing Sector. Our Research & Development Department makes sure that each and every information is available for our National and International Clients. Honesty, dedication and commitment has made us successful in the printing industry.</p>\r\n														', '																<p>AIP publishes quality Prospectuses, Annual Reports and Corporative Business Profiles. Our team sticks to the creativity and uniqueness for all your printing needs.</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://www.alimranprinters.com/laminating-services/\">Laminating Services</a></li>\r\n	<li><a href=\"http://www.alimranprinters.com/screen-printing-services/\">Screen Printing</a></li>\r\n	<li><a href=\"http://www.alimranprinters.com/security-printing-services/\">Security Printing</a></li>\r\n	<li><a href=\"http://www.alimranprinters.com/offset-printing-services/\">Offset Printing</a></li>\r\n	<li><a href=\"http://www.alimranprinters.com/business-dards-designs-maker/\">Business Cards Designs</a></li>\r\n	<li><a href=\"http://www.alimranprinters.com/online-company-logo-designs/\">Logo Designs</a></li>\r\n</ul>\r\n														'),
(2, 16, 'Al-Imran Digital', 'Office #514 Garden Heights, 8-Aibak Block New Garden Town Lahore Pakistan', '', 3111229889, 'http://alimrandigital.com', 'logo3.png', 'https://www.facebook.com/Al-Imran-Digital-408479702880633/', 'https://twitter.com/alimrandigitals', 'https://www.linkedin.com/authwall?trk=gf&trkInfo=AQExzHnLdi87TgAAAWG3A0-YajTMmRdpV-J7PyYv8n65M_icEQNhkaaD-oEyZS-oPCGUpuQliKbLaitYn9lvuQoO3HpgSCxhgn7RJkVLFq2SxPDLBQOquUsxK-mZh5neVqbmP7Y=&originalReferer=http://alimrandigital.com/contact.php&sessionRedirect', '', '', 'Al-Imran Digital completely understands that success in the digital economy demands more than just creativity. It also requires exactitude and congruity to make a difference among others. Al-Imran Digital has drawn its experience by working with a large number of clients from multiple industries across Pakistan. We believe that technique merged with creativity is a blueprint for success in Digital Business. Our continuous R&D has made us accomplish in an unparalleled technique to deliver the results which can thrive your business. \r\n\r\nAl-Imran Digital makes your brand position well-defined, preventing the audience from being confused in the marketplace. We help your business become undiluted as its delusion has a direct impact on the discernment of your business. Al-Imran Digital makes sure to develop a thorough understanding of your business, its inception and direction in future. Our working mechanism consists of 5 major aspects which are Discover, Define, Design, Deploy and Debrief.', 'Development Services\r\nDesigning Services\r\nDigital Services\r\nBranding Services');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `j_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `j_title` varchar(255) NOT NULL,
  `j_type` varchar(255) NOT NULL,
  `j_category` varchar(255) NOT NULL,
  `j_minexp` int(11) NOT NULL,
  `j_maxexp` int(11) NOT NULL,
  `j_minsalary` bigint(13) NOT NULL,
  `j_maxsalary` bigint(13) NOT NULL,
  `j_location` varchar(255) NOT NULL,
  `j_skills` varchar(255) NOT NULL,
  `j_desp` text NOT NULL,
  `j_resp` text NOT NULL,
  `j_req` text NOT NULL,
  `j_feature` int(11) NOT NULL,
  `j_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`j_id`, `company_id`, `j_title`, `j_type`, `j_category`, `j_minexp`, `j_maxexp`, `j_minsalary`, `j_maxsalary`, `j_location`, `j_skills`, `j_desp`, `j_resp`, `j_req`, `j_feature`, `j_date`) VALUES
(8, 1, 'Graphic Designerrrr', 'Full Time', 'Designer', 0, 1, 10000, 15000, 'Lahore', 'Photoshop, Coral Draw', '<ul>\r\n	<li>Prepares work to be accomplished by gathering information and materials.</li>\r\n	<li>Plans concept by studying information and materials.</li>\r\n	<li>Illustrates concept by designing rough layout of art and copy regarding arrangement, size, type size and style, and related aesthetic concepts.</li>\r\n	<li>Obtains approval of concept by submitting rough layout for approval.</li>\r\n	<li>Prepares finished copy and art by operating typesetting, printing, and similar equipment; purchasing from vendors.</li>\r\n	<li>Prepares final layout by marking and pasting up finished copy and art.</li>\r\n	<li>Ensures operation of equipment by completing preventive maintenance requirements; following manufacturer&#39;s instructions; troubleshooting malfunctions; calling for repairs; maintaining equipment inventories; evaluating new equipment.</li>\r\n	<li>Completes projects by coordinating with outside agencies, art services, printers, etc.</li>\r\n	<li>Maintains technical knowledge by attending design workshops; reviewing professional publications; participating in professional societies.</li>\r\n	<li>Contributes to team effort by accomplishing related results as needed.</li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Graphic designers</strong>&nbsp;create visual concepts</li>\r\n	<li>by hand or using computer software,</li>\r\n	<li>to communicate ideas that inspire,</li>\r\n	<li>inform&nbsp;or captivate consumers.</li>\r\n	<li>They develop the overall layout and production design for advertisements, brochures, magazines, and corporate reports.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Prepares work to be accomplished by gathering information and materials.</li>\r\n	<li>Plans concept by studying information and materials.</li>\r\n	<li>Illustrates concept by designing rough layout of art and copy regarding arrangement, size, type size and style, and related aesthetic concepts.</li>\r\n	<li>Obtains approval of concept by submitting rough layout for approval.</li>\r\n	<li>Prepares finished copy and art by operating typesetting, printing, and similar equipment; purchasing from vendors.</li>\r\n	<li>Prepares final layout by marking and pasting up finished copy and art.</li>\r\n	<li>Ensures operation of equipment by completing preventive maintenance requirements; following manufacturer&#39;s instructions; troubleshooting malfunctions; calling for repairs; maintaining equipment inventories; evaluating new equipment.</li>\r\n	<li>Completes projects by coordinating with outside agencies, art services, printers, etc.</li>\r\n	<li>Maintains technical knowledge by attending design workshops; reviewing professional publications; participating in professional societies.</li>\r\n	<li>Contributes to team effort by accomplishing related results as needed.</li>\r\n</ul>\r\n', 0, '0000-00-00'),
(9, 1, 'Social Media Marketing', 'Full Time', 'Social Media', 0, 1, 10000, 15000, 'Lahore', 'Strategy planning, Tactics and execution, Community management.', '<ul>\r\n	<li>Essential&nbsp;<strong>Duties</strong>&nbsp;of the&nbsp;<strong>Social Media</strong>&nbsp;Manager.</li>\r\n	<li>Manage&nbsp;<strong>social media marketing</strong>campaigns and day-to-day activities including: Develop relevant content topics to reach the company&#39;s target customers.</li>\r\n	<li>Create, curate, and manage all published content (images, video and written).</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Manage&nbsp;<strong>social media marketing</strong>&nbsp;campaigns and day-to-day activities including: Develop relevant content topics to reach the company&#39;s target customers.</li>\r\n	<li>Create, curate, and manage all published content (images, video and written).</li>\r\n	<li>Monitor, listen and respond to users in a &ldquo;<strong>Social</strong>&rdquo; way while cultivating leads and sales.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Essential&nbsp;<strong>Duties</strong>&nbsp;of the&nbsp;<strong>Social Media</strong>&nbsp;Manager.</li>\r\n	<li>Manage&nbsp;<strong>social media marketing</strong>campaigns and day-to-day activities including: Develop relevant content topics to reach the company&#39;s target customers.</li>\r\n	<li>Create, curate, and manage all published content (images, video and written).</li>\r\n</ul>\r\n', 0, '0000-00-00'),
(10, 1, 'Senior Graphic Designer', 'Full Time', 'Designer', 1, 3, 20000, 40000, 'Lahore', 'Photoshop, Coral Draw, InDesign, illustator', '<ul>\r\n	<li>Prepares work to be accomplished by gathering information and materials.</li>\r\n	<li>Plans concept by studying information and materials.</li>\r\n	<li>Illustrates concept by designing rough layout of art and copy regarding arrangement, size, type size and style, and related aesthetic concepts.</li>\r\n	<li>Obtains approval of concept by submitting rough layout for approval.</li>\r\n	<li>Prepares finished copy and art by operating typesetting, printing, and similar equipment; purchasing from vendors.</li>\r\n	<li>Prepares final layout by marking and pasting up finished copy and art.</li>\r\n	<li>Ensures operation of equipment by completing preventive maintenance requirements; following manufacturer&#39;s instructions; troubleshooting malfunctions; calling for repairs; maintaining equipment inventories; evaluating new equipment.</li>\r\n	<li>Completes projects by coordinating with outside agencies, art services, printers, etc.</li>\r\n	<li>Maintains technical knowledge by attending design workshops; reviewing professional publications; participating in professional societies.</li>\r\n	<li>Contributes to team effort by accomplishing related results as needed.</li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Graphic</strong>&nbsp;designers create visual concepts, by hand or using computer software, to communicate ideas that inspire, inform, or captivate consumers.</li>\r\n	<li>They develop the overall layout and production&nbsp;<strong>design</strong>&nbsp;for advertisements, brochures, magazines, and corporate reports.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Prepares work to be accomplished by gathering information and materials.</li>\r\n	<li>Plans concept by studying information and materials.</li>\r\n	<li>Illustrates concept by designing rough layout of art and copy regarding arrangement, size, type size and style, and related aesthetic concepts.</li>\r\n	<li>Obtains approval of concept by submitting rough layout for approval.</li>\r\n	<li>Prepares finished copy and art by operating typesetting, printing, and similar equipment; purchasing from vendors.</li>\r\n	<li>Prepares final layout by marking and pasting up finished copy and art.</li>\r\n	<li>Ensures operation of equipment by completing preventive maintenance requirements; following manufacturer&#39;s instructions; troubleshooting malfunctions; calling for repairs; maintaining equipment inventories; evaluating new equipment.</li>\r\n	<li>Completes projects by coordinating with outside agencies, art services, printers, etc.</li>\r\n	<li>Maintains technical knowledge by attending design workshops; reviewing professional publications; participating in professional societies.</li>\r\n	<li>Contributes to team effort by accomplishing related results as needed.</li>\r\n</ul>\r\n', 0, '0000-00-00'),
(11, 2, 'Web Developer', 'Full Time', 'Web Developer', 0, 1, 10000, 15000, 'Attock', 'php, Html , Css, Wordpress', '<ul>\r\n	<li>Writing well designed, testable, efficient code by using best software development practices</li>\r\n	<li>Creating website layout/user interfaces by using standard HTML/CSS practices</li>\r\n	<li>Integrating data from various back-end services and databases</li>\r\n</ul>\r\n', '<ul>\r\n	<li>The role is responsible for designing, coding and modifying websites, from layout to function and according to a client&#39;s specifications.</li>\r\n	<li>Strive to create visually appealing sites that feature user-friendly design and clear navigation.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Writing well designed, testable, efficient code by using best software development practices</li>\r\n	<li>Creating website layout/user interfaces by using standard HTML/CSS practices</li>\r\n	<li>Integrating data from various back-end services and databases</li>\r\n</ul>\r\n', 0, '0000-00-00'),
(12, 2, 'Senior Web Developer', 'Full Time', 'Web Developer', 1, 3, 40000, 80000, 'Lahore', 'Laravel, Php OPP base, HTML, Css', '<p>Web developers work closely with project managers and designers to ensure the final product adheres to the predetermined budget, scope, and design. While a Bachelor&rsquo;s Degree in computer science is not required for many positions, numerous years of hands-on experience coding both websites and web applications is strongly desired.<br />\r\n<br />\r\nAlong with strong technical skills, front-end web developers must have strong written and oral communication skills, a solid grasp of graphic design, and exceptional time management capabilities.</p>\r\n', '<ul>\r\n	<li>Write well designed, testable, efficient code by using best software development practices</li>\r\n	<li>Create website layout/user interface by using standard HTML/CSS practices</li>\r\n	<li>Integrate data from various back-end services and databases</li>\r\n	<li>Gather and refine specifications and requirements based on technical needs</li>\r\n	<li>Create and maintain software documentation</li>\r\n	<li>Be responsibile for maintaining, expanding, and scaling our site</li>\r\n	<li>Stay plugged into emerging technologies/industry trends and apply them into operations and activities</li>\r\n	<li>Cooperate with web designers to match visual design intent</li>\r\n</ul>\r\n', '<p>Web developers work closely with project managers and designers to ensure the final product adheres to the predetermined budget, scope, and design. While a Bachelor&rsquo;s Degree in computer science is not required for many positions, numerous years of hands-on experience coding both websites and web applications is strongly desired.<br />\r\n<br />\r\nAlong with strong technical skills, front-end web developers must have strong written and oral communication skills, a solid grasp of graphic design, and exceptional time management capabilities.</p>\r\n', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `r_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `r_fname` varchar(255) NOT NULL,
  `r_lname` varchar(255) NOT NULL,
  `r_title` varchar(255) NOT NULL,
  `r_email` varchar(255) NOT NULL,
  `r_phn` bigint(13) NOT NULL,
  `r_dob` date NOT NULL,
  `r_addr` varchar(255) NOT NULL,
  `r_photo` varchar(255) NOT NULL,
  `r_skills` varchar(255) NOT NULL,
  `r_job_title` varchar(255) NOT NULL,
  `r_job_type` varchar(255) NOT NULL,
  `r_postion` varchar(255) NOT NULL,
  `r_yearExp` bigint(13) NOT NULL,
  `r_jobcat` varchar(255) NOT NULL,
  `r_exptsalry` bigint(13) NOT NULL,
  `r_despt` varchar(255) NOT NULL,
  `r_edu1` varchar(255) NOT NULL,
  `r_splztn` varchar(255) NOT NULL,
  `r_inst1` varchar(255) NOT NULL,
  `r_year1` bigint(13) NOT NULL,
  `r_grade` varchar(10) NOT NULL,
  `r_mark1` bigint(13) NOT NULL,
  `r_inst2` varchar(255) NOT NULL,
  `r_edu2` varchar(255) NOT NULL,
  `r_mark2` bigint(13) NOT NULL,
  `r_year2` bigint(13) NOT NULL,
  `r_inst3` varchar(255) NOT NULL,
  `r_edu3` varchar(255) NOT NULL,
  `r_mark3` bigint(13) NOT NULL,
  `r_year3` bigint(13) NOT NULL,
  `r_check` enum('insert','empty') NOT NULL DEFAULT 'insert'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`r_id`, `u_id`, `r_fname`, `r_lname`, `r_title`, `r_email`, `r_phn`, `r_dob`, `r_addr`, `r_photo`, `r_skills`, `r_job_title`, `r_job_type`, `r_postion`, `r_yearExp`, `r_jobcat`, `r_exptsalry`, `r_despt`, `r_edu1`, `r_splztn`, `r_inst1`, `r_year1`, `r_grade`, `r_mark1`, `r_inst2`, `r_edu2`, `r_mark2`, `r_year2`, `r_inst3`, `r_edu3`, `r_mark3`, `r_year3`, `r_check`) VALUES
(1, 2, 'Zubair', 'Rehman', 'Sr. Developer', 'zubair@gmail.com', 3379898954, '1995-06-12', 'chck 52 dubai chwnk usa', 'candidate-2.png', 'Php, Mysqli, Laravel, Opp Php', 'Developer', 'Full time', 'Sr.', 5, 'Manager', 40000, '<p>i am very passionate and punctular .</p>\r\n', 'Bachelor\'s of Computer ', 'Web Developement', 'hajveri university', 2017, 'A+', 977, 'Rangeela College', 'BISELHR', 850, 2013, 'Rasheed sicencea acadmy', 'Office boy', 323, 2011, 'insert'),
(2, 1, 'Junaid', 'Raza', 'Jr.', 'junaid@gmail.com', 3349562345, '1995-05-02', '52 GB, luxemburg Jaranwala', 'candidate-6.png', 'Php, Mysqli, Laravel, Opp Php', 'Developer', 'Full Time', 'Sr.', 5, 'Manager', 45000, '<p>I am an experienced joiner with well developed skills and experience in groundwork, concrete finishing and steel fixing and have worked in the construction industry since 1982. I am also a skilled labourer who has supported many different trades over t', 'Bachelor\'s of Computer ', 'Laravel Developer', 'The University Of Lahore', 2018, 'B+', 894, 'Punjab College', 'BISEFSD', 945, 2013, 'AIMS College', 'Window/Hardware Specialist', 450, 2011, 'insert'),
(3, 12, 'Rana', 'Raheel', 'Sr. Developer', 'rana.raheel@gmail.com', 33479595959, '1993-01-14', 'Q block modal town lahore', '1234.jpg', 'php, Codignator, Laravel, Mysql', '', '', '', 0, '', 0, '<p>My manager and team take me as responsible, helpful, hardworking and dedicated. They appreciate my zeal to keep learning as also accepting my faults and improving upon them.</p>\r\n\r\n<p>I&#39;m company Loyal.</p>\r\n', 'Master In Information Technologies', 'Web Developement', 'Superior University Lahore', 2015, 'B+', 89, 'Modal Town College', 'BISE LHR', 968, 2011, 'AL-Imran Concept', 'Web Deveopement', 250, 2009, 'insert');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_username` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_status` int(1) NOT NULL,
  `u_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_username`, `u_pass`, `u_email`, `u_status`, `u_active`) VALUES
(1, 'Junaid Raza', 'jraza', '$2y$10$/AsXOR4n5oM5VbVbJVBzs.etuQ2fV32VaV8V5iAwXbz/9tHznwwtS', 'junaid@gmail.com', 2, 1),
(2, 'Zubair', 'Zubi', '$2y$10$PuwiBkRojn565dotc9uIc.oHX1968MVD7ILqYuIcF9H/BJYr7blk6', 'zubair@gmail.com', 2, 1),
(11, 'Al-Imran Printers', 'Al-Imran', '$2y$10$gbqC4JPru9Uf8XEMjoMf1ed4N2A5s1OLbw91HcnCi7aKyanQjGTYS', 'info@alimranprinters.com', 3, 1),
(12, 'Rana Raheel', 'RanaRaheel', '$2y$10$mUNzwaZoqdT6jiuL.5d3wuCPJww4AW6Y0m38sWSaGPxySPgfBovOK', 'rana.raheel@gmail.com', 2, 1),
(16, 'Al- Imran Digital', '', '$2y$10$oSTOvgVi659yeeDgWSPaOObOKlb815LvSqb2KmseHAF1i90edP4Jm', 'info@alimrandigital.com', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

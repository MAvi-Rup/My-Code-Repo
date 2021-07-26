-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 12:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(6, 'admin', 'admin', 'admin@gmail.com', '', '2020-09-30 05:38:07'),
(8, 'mridul', 'mridul', 'mridulroy23@gmail.com', 'QX5ZMN', '2020-09-30 05:38:33'),
(9, 'testName', 'testpassword', 'test@gmail.com', 'QPGIOV', '2020-09-30 07:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(1, 'QX5ZMN'),
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(11, 48, 'Sub Sandwich', 'The way a sandwich should be', '200.00', '5ad7582e2ec9c.jpg'),
(12, 48, 'Baked Mediterranean Seabass', 'Delicious white, flaky fish baked with rosemary, bay leaves and lemon in olive oil. Branzino is the perfect fish to bake, grill or fry', '300.00', '5ad7590d9702b.jpg'),
(13, 49, 'Mixed Chowmein', 'Kids can choose their pasta shape, type of sauce, favorite veggies (like broccoli or mushrooms)', '150.00', '5ad7597aa0479.jpg'),
(14, 50, 'Red Robins Chick on a Stick', 'Plain grilled chicken breast? Blah.', '34.99', '5ad759e1546fc.jpg'),
(15, 51, 'Lyfe Kitchens Tofu Taco', 'This chain, known for a wide selection of vegetarian and vegan choices', '11.99', '5ad75a1869e93.jpg'),
(16, 52, 'Houlihans Mini Cheeseburger', 'Creekstone Farms, where no antibiotics or growth hormones are used', '22.55', '5ad75a5dbb329.jpg'),
(17, 53, 'jklmno', 'great taste great whatever', '17.99', '5ad79fcf59e66.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(62, 32, 'in process', 'hi', '2018-04-18 17:35:52'),
(63, 32, 'closed', 'cc', '2018-04-18 17:36:46'),
(64, 32, 'in process', 'fff', '2018-04-18 18:01:37'),
(65, 32, 'closed', 'its delv', '2018-04-18 18:08:55'),
(66, 34, 'in process', 'on a way', '2018-04-18 18:56:32'),
(67, 35, 'closed', 'ok', '2018-04-18 18:59:08'),
(68, 37, 'in process', 'on the way!', '2018-04-18 19:50:06'),
(69, 37, 'rejected', 'if admin cancel for any reason this box is for remark only for buter perposes', '2018-04-18 19:51:19'),
(70, 37, 'closed', 'delivered success', '2018-04-18 19:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(48, 5, 'Cozy Sizzler', 'CozySizzler@gmail.com', '+8801755557926', 'CozySizzler.com', '7am', '4pm', 'mon-tue', ' Plot# CEN 4G, Road# 104, 1212. Dhaka, Bangladesh 1212', '5ad74ce37c383.jpg', '2020-09-29 18:27:54'),
(49, 5, 'Hot Oven Bangladesh', 'Hot Oven Bangladesh@gmail.com', '+8801533371450', 'hotovenbangladesh.com', '6am', '5pm', 'mon-fri', 'House#11,Road#24/2,(Madina Nagor),Avenue#5,Block#C,Mirpur#11 Dhaka, 1216', '5ad74de005016.jpg', '2020-09-29 18:29:26'),
(50, 6, 'bbq Bangladesh', 'bbqbangladesh@gmail.com', '+8801729273227', 'bbqbangladesh.com', '6am', '6pm', 'mon-sat', '3rd Floor, 67, GH Heights, Shatmoshjid Road Opp Bangladesh Medical, Dhaka 1209', '5ad74e5310ae4.jpg', '2020-09-29 18:31:00'),
(51, 7, 'Hirajheel Hotel', 'hirajheelhotel@gmail.com', '+8801917710633', 'hirajheelhotel.com', '8am', '4pm', 'mon-thu', 'BCIC Sadan, 22, Dhaka 1000', '5ad74ebf1d103.jpg', '2020-09-29 18:32:10'),
(52, 8, 'Fish & Co. Bangladesh', 'fishandcobangladesh.com', '+8801777794181', 'fishandcobangladesh.com', '6am', '7pm', 'mon-fri', '22 Crystal Palace, Dhaka 1212', '5ad756f1429e3.jpg', '2020-09-29 18:35:50'),
(53, 9, 'Nirob Hotel', 'nirobhotel.com', '+8801867860002', 'nirobhotel.com', '7am', '7pm', 'mon-sat', 'H.No 114 Near Old Central Jail, Dhaka 1211', '5ad79e7d01c5a.jpg', '2020-09-29 18:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(5, 'grill', '2018-04-14 18:45:28'),
(6, 'pizza', '2018-04-14 18:44:56'),
(7, 'pasta', '2018-04-14 18:45:13'),
(8, 'thaifood', '2018-04-14 18:32:56'),
(9, 'fish', '2018-04-14 18:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(33, 'Mridul', 'Mridul', 'Roy', 'mridulroy23@gmail.com', '01849977179', 'b64afb7193d549276b08180af74792f1', '19 no. Wyre Street, Wari, Dhaka', 1, '2020-09-29 17:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NO≈™ÜÆqﬁë-`Ô	»ÜL“ﬁ¿˘ù  x¡™      ÿOnb       Ä Ä   Ä   Ä   Ä    (S,®`   L`   (S|ê`¥   <L`   DRc   ƒ· 
      Qd:iyX	   __awaiter   QcJ!gê   vscode_1QcJÍE#   MESSAGESc§ˇ Çˇ Çˇ ˛ˇˇˇI`˛ˇˇˇDa   6  	 (SëaÅ   Û  (‰f      πó@≈Ô@ +‡   ìd	       ˆì @     $ìg       Ûº @÷£ @πö @ *†I	 @9 pQz¬s§Üd   c:\Users\DELL\.vscode\extensions\equinusocio.vsc-material-theme-icons-2.0.10\out\src\lib\messages.jsa        D`   D`»  D`    <`   %	  %	 Å%	 ÑD%(S5a      QcÆÇú   exports ìa      ùQe:*_$   changelogMessagea∞  S  I	 	 ë	d      Iê 	       D%(Síìa      	 qìa      î QfÚÉ{K   installationMessage as  s  Iïñd        Iê        D`   DQe¬‹+   messages.js.map ]d  	   @        …mQd Z÷ç
   __esModule  §a      ·GQcVi*È   vscode  ía
      Qd6yFY	   CHANGELOG   ía      u8Ql¢	÷:*   Material Theme Icons was updated! Version   QdŒÜç6   INSTALLATIONía
      îxQ|^xXaj   Thank you for using Material Theme Icons! Install also the Material Theme for a more immersive experience.  QcÆË˝k   options ía
      ŸUeñ:jâ   S u r e !   =ÿL‹Qc≤◊c˝   cancel  ñejÆ‚   N o p e   =ÿ"ﬁ  	 A	 	 Å	 K`    8KlZ   , »	87‰<;
§	 	 ê	 ∞		dú	p
§	   y0   0         Ö ˙%ô( òÇ &¯(¯&˘&ˆ~)&ı'˜X˘¯&¯^¯	~Ç	.
Ç.´	 òd      P ì &,  	 ë	d  	  @@       K`    Kb    Ù4 e            Ç   &˙´   $Rc   à`          Ib˛ˇˇˇ    :  îa       ïd                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
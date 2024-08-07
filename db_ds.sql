-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 06:22 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ds`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `Admin_Id` int(11) NOT NULL,
  `Admin_name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact_No` bigint(11) NOT NULL,
  `Profile_pic` longtext NOT NULL,
  `Login_id` varchar(11) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `Created_Date` date NOT NULL,
  `Birth_Date` date NOT NULL,
  `Gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`Admin_Id`, `Admin_name`, `Email`, `Contact_No`, `Profile_pic`, `Login_id`, `Password`, `Created_Date`, `Birth_Date`, `Gender`) VALUES
(1, 'jinal ', 'jinaljariwala6868@gmail.com', 8866523403, 'images.jpg', 'jinal@123', 'jj@123', '2022-11-09', '2022-04-23', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bankinfo`
--

CREATE TABLE `tbl_bankinfo` (
  `bank_info_id` int(11) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `flat_holder_id` int(11) DEFAULT NULL,
  `rent_holder_id` int(11) DEFAULT NULL,
  `ac_no` bigint(50) NOT NULL,
  `IFSC_code` bigint(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact_no` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookingcharges`
--

CREATE TABLE `tbl_bookingcharges` (
  `charges_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `duration` int(11) NOT NULL DEFAULT 3,
  `amount` int(11) NOT NULL,
  `generated_date` date NOT NULL,
  `final_calculation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chequeinfo`
--

CREATE TABLE `tbl_chequeinfo` (
  `cheque_info_id` int(11) NOT NULL,
  `main_history_id` int(11) NOT NULL,
  `bank_info_id` int(11) NOT NULL,
  `cheque_no` int(11) NOT NULL,
  `passing_date` date NOT NULL,
  `maintenance` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_circular`
--

CREATE TABLE `tbl_circular` (
  `circular_id` int(11) NOT NULL,
  `circular_title` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `date` date NOT NULL,
  `Society_ID` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `pdf` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_circular`
--

INSERT INTO `tbl_circular` (`circular_id`, `circular_title`, `description`, `date`, `Society_ID`, `status`, `pdf`) VALUES
(1, 'Celebration Of independence', 'Festival Celibration Event At ', '2021-10-10', 1, 1, '2021-07-03 (1).png'),
(2, 'gandhi jayanti', 'celebration of gandhi jyanti', '2022-10-02', 1, 0, '2021_MCQS_SY_ENGLISH IN USE sem4.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clubbooking`
--

CREATE TABLE `tbl_clubbooking` (
  `booking_id` int(1) NOT NULL,
  `price` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `flat/rent_holder id` int(11) NOT NULL,
  `from_time` datetime NOT NULL,
  `to_time` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaininfo`
--

CREATE TABLE `tbl_complaininfo` (
  `complain_id` int(11) NOT NULL,
  `complaintype_id` int(11) NOT NULL,
  `complain_code` bigint(50) NOT NULL,
  `complain_title` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `photo` longtext DEFAULT NULL,
  `flat_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaininfo`
--

INSERT INTO `tbl_complaininfo` (`complain_id`, `complaintype_id`, `complain_code`, `complain_title`, `description`, `date`, `photo`, `flat_id`, `status`) VALUES
(2, 4, 1111, 'service issue', 'hi', '2022-09-22', '', 1, 1),
(3, 2, 0, 'null', 'null', '2022-09-23', '5_6271507186875105964.MOV', 1, 1),
(14, 2, 1985, 'null', 'null', '2022-04-12', 'austin-chan-8NHL3OI5eWc-unsplash.jpg', 1, 1),
(15, 2, 1580, 'null', 'null', '2022-04-12', 'austin-chan-8NHL3OI5eWc-unsplash.jpg', 1, 1),
(16, 2, 9020, 'null', 'null', '2022-04-12', 'austin-chan-8NHL3OI5eWc-unsplash.jpg', 1, 1),
(17, 1, 8251, 'null', 'hello', '2002-04-12', 'ben-o-bro-wpU4veNGnHg-unsplash.jpg', 1, 1),
(18, 1, 9016, 'null', 'hi', '2012-07-06', '2492241.jpg', 1, 1),
(19, 1, 6977, 'Monthly Maintenance ', 'hi', '2002-02-12', '2492241.jpg', 1, 1),
(20, 4, 6198, 'Monthly Maintenance ', 'nulll', '2022-09-23', 'andre-benz-cXU6tNxhub0-unsplash.jpg', 1, 1),
(21, 3, 3345, 'Monthly Maintenance ', 'nulll', '0000-00-00', '', 1, 1),
(22, 1, 5292, 'Monthly Maintenance ', 'hello', '2022-09-01', 'andre-benz-cXU6tNxhub0-unsplash.jpg', 1, 1),
(23, 4, 5428, 'security issues', 'i want full security like cctv', '2022-11-05', 'asp-net-mcq.pdf', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complainstatus`
--

CREATE TABLE `tbl_complainstatus` (
  `complainstatus_id` int(11) NOT NULL,
  `complain_id` int(11) NOT NULL,
  `status_des` varchar(50) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complainstatus`
--

INSERT INTO `tbl_complainstatus` (`complainstatus_id`, `complain_id`, `status_des`, `status`) VALUES
(1, 2, 'work Completed ', 0),
(2, 16, NULL, 1),
(3, 17, NULL, 1),
(4, 18, NULL, 1),
(5, 19, NULL, 1),
(6, 20, NULL, 1),
(7, 21, NULL, 1),
(8, 22, NULL, 1),
(9, 23, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaintype`
--

CREATE TABLE `tbl_complaintype` (
  `complaintype_id` int(11) NOT NULL,
  `complaintype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaintype`
--

INSERT INTO `tbl_complaintype` (`complaintype_id`, `complaintype`) VALUES
(1, 'Billing Issues'),
(2, 'Deposit Issues'),
(3, 'Disconnection Issues'),
(4, 'Service Issues'),
(5, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contracthistory`
--

CREATE TABLE `tbl_contracthistory` (
  `contracthistory_id` int(11) NOT NULL,
  `contract_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `photo(bill)` longtext NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contractinfo`
--

CREATE TABLE `tbl_contractinfo` (
  `contract_id` int(11) NOT NULL,
  `contract_code` int(11) NOT NULL,
  `contract_name` varchar(30) NOT NULL,
  `contract_type_id` int(11) NOT NULL,
  `contract_company` varchar(30) NOT NULL,
  `contract_des` varchar(60) DEFAULT NULL,
  `person_name` varchar(30) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `photo` longtext NOT NULL,
  `proof` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contracttype`
--

CREATE TABLE `tbl_contracttype` (
  `contracttype_id` int(11) NOT NULL,
  `contracttype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(30) NOT NULL,
  `event_des` longtext DEFAULT NULL,
  `start_date` date NOT NULL,
  `no_of_days` tinyint(4) NOT NULL DEFAULT 1,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense`
--

CREATE TABLE `tbl_expense` (
  `Expenses_Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Expenses_Title` varchar(30) NOT NULL,
  `Description` varchar(30) DEFAULT NULL,
  `Amount` int(11) NOT NULL,
  `Photo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_expense`
--

INSERT INTO `tbl_expense` (`Expenses_Id`, `Date`, `Expenses_Title`, `Description`, `Amount`, `Photo`) VALUES
(1, '2022-09-23', 'Common electricity charges', NULL, 12000, 'null.pdf'),
(2, '2022-09-08', 'Water charges', NULL, 5000, 'null.pdf'),
(3, '2022-09-10', 'Lift maintenance', NULL, 30000, 'null.pdf'),
(4, '2022-09-07', 'Security charges', NULL, 720000, 'null.pdf'),
(5, '2022-09-16', 'General repair and maintenance', NULL, 100000, 'null.pdf'),
(6, '2022-09-22', ' Printing and stationery', NULL, 1000, 'no.pdf'),
(7, '2022-09-07', 'Audit fees', '', 2000, 'no.pdf'),
(8, '2022-09-15', 'Accounting charges', NULL, 10000, 'no.pdf'),
(9, '2022-09-09', 'Housing federation subscriptio', NULL, 500, 'no.pdf'),
(10, '2022-09-15', 'Education cess', NULL, 120, 'no.pdf'),
(11, '2022-09-15', 'Insurance', NULL, 7500, 'no.pdf'),
(12, '2022-09-22', 'Salaries and wages', NULL, 80000, 'no.pdf'),
(13, '2022-09-14', 'Miscellaneous expenses', NULL, 5000, 'no.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expensesoctety`
--

CREATE TABLE `tbl_expensesoctety` (
  `expenses_id` int(11) NOT NULL,
  `society_id` int(11) NOT NULL,
  `amount_type` varchar(30) DEFAULT NULL,
  `amount_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_expensesoctety`
--

INSERT INTO `tbl_expensesoctety` (`expenses_id`, `society_id`, `amount_type`, `amount_status`) VALUES
(1, 1, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expensetype`
--

CREATE TABLE `tbl_expensetype` (
  `Expenses_Id` int(11) NOT NULL,
  `Expenses_Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facility`
--

CREATE TABLE `tbl_facility` (
  `Facility_Id` int(11) NOT NULL,
  `Faclity_name` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `starting_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `Society_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_facility`
--

INSERT INTO `tbl_facility` (`Facility_Id`, `Faclity_name`, `status`, `starting_date`, `expiry_date`, `Society_ID`) VALUES
(1, 'gym', '0', '2022-09-01', '2022-09-30', 1),
(2, 'cctv camera ', '0', '2022-04-23', '2024-04-23', 1),
(3, 'lift', '0', '2022-10-19', '2032-10-19', 1),
(4, 'Solar heater', '1', '2022-11-01', '2025-11-15', 6),
(5, 'Swimming pool', '0', '2022-11-30', '2023-11-30', 1),
(6, 'Joggers track', '0', '2022-12-31', '2024-12-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_finehistory`
--

CREATE TABLE `tbl_finehistory` (
  `fine_history_id` int(11) NOT NULL,
  `flat_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fineinfo`
--

CREATE TABLE `tbl_fineinfo` (
  `fine_info_id` int(11) NOT NULL,
  `fine_title` varchar(30) NOT NULL,
  `description` varchar(30) DEFAULT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flat`
--

CREATE TABLE `tbl_flat` (
  `Flat_Id` int(11) NOT NULL,
  `Flat_Number` varchar(30) NOT NULL,
  `Wing_Id` int(11) NOT NULL,
  `Flat_Status` tinyint(4) NOT NULL DEFAULT 0,
  `Owner_status` tinyint(4) NOT NULL DEFAULT 0,
  `Status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_flat`
--

INSERT INTO `tbl_flat` (`Flat_Id`, `Flat_Number`, `Wing_Id`, `Flat_Status`, `Owner_status`, `Status`) VALUES
(1, 'a1-101', 1, 1, 1, 1),
(2, 'a1-102', 1, 1, 1, 1),
(3, 'sa-101', 3, 1, 1, 1),
(4, 's3-101', 6, 0, 1, 1),
(7, 'a3-101', 5, 0, 0, 0),
(8, 'a3-102', 5, 0, 0, 0),
(9, 'a3-103', 5, 0, 0, 0),
(10, 'a3-104', 5, 0, 0, 0),
(11, 'a3-201', 5, 0, 0, 0),
(12, 'a3-202', 5, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flatholder`
--

CREATE TABLE `tbl_flatholder` (
  `flatholder_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `contact_no` bigint(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `flat_id` int(11) DEFAULT NULL,
  `doj` date NOT NULL,
  `roletype_id` int(11) DEFAULT NULL,
  `Profile_pic` longtext NOT NULL,
  `proof` longtext NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_flatholder`
--

INSERT INTO `tbl_flatholder` (`flatholder_id`, `name`, `user_name`, `contact_no`, `email`, `password`, `flat_id`, `doj`, `roletype_id`, `Profile_pic`, `proof`, `status`) VALUES
(1, 'jinal ', 'jinal@123', 8866523403, 'jinaljariwala6868@gmail.com', 'jj@123', 1, '2022-04-12', 2, 'wp1.jpg', 'mypic.jpg', -1),
(2, 'Digvijay', 'dj123', 7621913857, 'jerryshikari1916@gmail.com', 'dj123', 1, '2021-04-04', 1, 'ganesh-images-hd-download.jpg', 'First-God-Ganesh-Ji-Maharaj-hd-Wallpaper.jpg', -1),
(3, 'raju', 'raju@123', 9087654321, 'raju@gmail.com', 'raju123', 8, '2022-11-04', 4, 'db1.png', 'banner_imgx.png', -1),
(4, 'vaihu', 'vj@123', 9087654321, 'vaishu@gmail.com', 'vj@123', 3, '2022-11-04', 4, 'db1.png', 'banner_imgx.png', -1),
(5, 'Nirav ', 'nirav@123', 9087654321, 'nirav@gmail.com', 'nirav@123', 3, '2022-11-04', 4, 'db1.png', 'banner_imgx.png', -1),
(6, 'resham', 'resham@123', 7621913857, 'resham@gmail.com', 'resham@123', 7, '2021-04-04', 4, 'frozen-2-01-920x518.jpg', 'istockphoto-672350552-170667a.jpg', -1),
(7, 'jenil', 'jenil@123', 7621913857, 'jenil@gmail.com', 'jenil@123', 9, '2021-04-04', 3, 'frozen-2-01-920x518.jpg', 'istockphoto-672350552-170667a.jpg', -1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flatmember`
--

CREATE TABLE `tbl_flatmember` (
  `flat_member_id` int(11) NOT NULL,
  `flat_id` int(11) DEFAULT 1,
  `member_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_no` bigint(11) NOT NULL,
  `Profile_pic` longtext DEFAULT NULL,
  `proof` longtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_flatmember`
--

INSERT INTO `tbl_flatmember` (`flat_member_id`, `flat_id`, `member_name`, `email`, `contact_no`, `Profile_pic`, `proof`, `status`) VALUES
(1, 1, 'Jinal', 'jinaljariwala6868@gmail.com', 8866523403, NULL, NULL, 0),
(2, 2, 'vaishnavi', 'vaishu2003@gmail.com', 9087654321, NULL, NULL, 0),
(3, 1, 'jariwala jenish', 'jinaljariwala6868@gmail.com', 8866523403, 'wp1.jpg', 'mypic.jpg', 0),
(4, 1, 'jariwala sharad', 'jinaljariwala6868@gmail.com', 8866523403, 'wp1.jpg', 'mypic.jpg', 0),
(5, 1, 'jariwala dimple', 'dimpaljariwala@gmail.com', 9638337973, 'mypic.jpg', 'C:xampp	mpphp30F.tmp', 0),
(6, 7, 'shikari divya ben', 'dimpaljariwala@gmail.com', 9638337973, 'mypic.jpg', 'C:xampp	mpphp807F.tmp', 0),
(7, 4, 'resham mistry', 'vaishu2003@gmail.com', 8907654321, 'ganesh-images-hd-download.jpg', 'IMG_20220901_233555_539.jpg', 0),
(8, 7, 'shikari Digvijay', 'jerryshikari1916@gmail.com', 7621913857, 'ganesh-images-hd-download.jpg', 'First-God-Ganesh-Ji-Maharaj-hd-Wallpaper.jpg', 0),
(9, 3, 'test', 'test@gmail.com', 9876543210, 'cr.jpg', 'C:xampp	mpphpACD9.tmp', 0),
(10, 2, 'jariwala pinal', 'jinaljariwala6868@gmail.com', 8866523403, 'banner_imgx.png', 'banner_imgx.png', 0),
(11, 7, 'shikari rameshbhai', 'jinaljariwala6868@gmail.com', 8866523403, 'banner_imgx.png', 'banner_imgx.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flattype`
--

CREATE TABLE `tbl_flattype` (
  `type_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_flattype`
--

INSERT INTO `tbl_flattype` (`type_id`, `type`) VALUES
(1, 'Studio Apartment'),
(2, '2 bhk Apartment'),
(3, ' 3  bhk Apartment'),
(4, '4 bhk Apartment'),
(5, 'Duplex Apartments'),
(6, 'Row Houses'),
(7, 'Penthouse Apartments'),
(8, 'Villa Apartments');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_function`
--

CREATE TABLE `tbl_function` (
  `function_id` int(11) NOT NULL,
  `functiontype_id` int(11) NOT NULL,
  `function_title` varchar(30) NOT NULL,
  `function_des` varchar(100) NOT NULL,
  `dunction_date` date NOT NULL,
  `start_time` datetime NOT NULL,
  `flat_holder_id` int(11) NOT NULL,
  `rent_holder_id` int(11) NOT NULL,
  `generate_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_functiontype`
--

CREATE TABLE `tbl_functiontype` (
  `functiontype_id` int(11) NOT NULL,
  `function` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guestinfo`
--

CREATE TABLE `tbl_guestinfo` (
  `guest_id` int(11) NOT NULL,
  `functiontype_id` int(11) NOT NULL,
  `guest_code` int(11) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `noofperson` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_idprooftype`
--

CREATE TABLE `tbl_idprooftype` (
  `idprooftype_id` int(11) NOT NULL,
  `idprooftype` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_idprooftype`
--

INSERT INTO `tbl_idprooftype` (`idprooftype_id`, `idprooftype`) VALUES
(1, 'Adhar card'),
(2, 'Pan card'),
(3, 'Voting Cars'),
(4, 'license ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_amount`
--

CREATE TABLE `tbl_main_amount` (
  `main_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `flat_user` varchar(30) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `g_date` date NOT NULL,
  `Society_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_main_amount`
--

INSERT INTO `tbl_main_amount` (`main_id`, `amount`, `type_id`, `flat_user`, `from_date`, `to_date`, `g_date`, `Society_ID`) VALUES
(2, 1500, 2, 'jinal', '2022-09-01', '2022-09-30', '2022-09-03', 1),
(3, 1800, 3, 'jinal', '2022-09-01', '2022-09-30', '2022-09-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_history`
--

CREATE TABLE `tbl_main_history` (
  `main_hid` int(11) NOT NULL,
  `payment_type` tinyint(4) NOT NULL,
  `payment_date` date NOT NULL,
  `flat_id` int(11) NOT NULL,
  `no_of_main` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meeting`
--

CREATE TABLE `tbl_meeting` (
  `meeting_id` int(11) NOT NULL,
  `meeting_date` date NOT NULL,
  `meeting_title` varchar(30) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `Society_ID` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_meeting`
--

INSERT INTO `tbl_meeting` (`meeting_id`, `meeting_date`, `meeting_title`, `Description`, `start_time`, `end_time`, `Society_ID`, `status`) VALUES
(1, '2022-09-12', 'meeting for future reference ', 'null', '20:00:00', '21:00:00', 1, 0),
(2, '2022-08-12', 'Celebration Of independence', 'Festival Celibration Event At ', '00:00:00', '00:00:00', 1, 0),
(3, '2022-08-31', 'for ganesh utsav', 'hello', '19:00:00', '20:00:00', 1, 0),
(4, '2022-11-05', 'study discussion', 'nothing', '13:00:00', '14:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `Flat_Id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `pdf` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`notice_id`, `title`, `description`, `date`, `Flat_Id`, `status`, `pdf`) VALUES
(1, 'maintenance pending', 'no', '2022-09-11', 1, 0, 'no.pdf'),
(4, 'birthday', 'celebration of birthday of digu', '2023-04-23', 2, 1, 'ds123.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_onlinepayment_info`
--

CREATE TABLE `tbl_onlinepayment_info` (
  `info_id` int(11) NOT NULL,
  `transaction_id` varchar(30) NOT NULL,
  `flat_holder_id` int(11) NOT NULL,
  `rent_holder_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parkingoccupy`
--

CREATE TABLE `tbl_parkingoccupy` (
  `parking_occupy_id` int(11) NOT NULL,
  `allocation_no` varchar(30) NOT NULL,
  `vehical_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rentholder`
--

CREATE TABLE `tbl_rentholder` (
  `rentholder_id` int(11) NOT NULL,
  `flat_id` int(11) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `Login_Id` varchar(30) NOT NULL,
  `mobile_no` bigint(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Profile_pic` longtext NOT NULL,
  `proof` longtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rentholder`
--

INSERT INTO `tbl_rentholder` (`rentholder_id`, `flat_id`, `name`, `Login_Id`, `mobile_no`, `email`, `password`, `Profile_pic`, `proof`, `status`) VALUES
(1, 2, 'jinal jariwala', 'jj123', 8866523403, 'jinaljariwala6868@gmail.com', 'jj123', 'banner_imgx.png', 'banner_imgx.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roletype`
--

CREATE TABLE `tbl_roletype` (
  `roletype_id` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roletype`
--

INSERT INTO `tbl_roletype` (`roletype_id`, `role`) VALUES
(1, 'manager'),
(2, 'secrty'),
(3, 'commity member'),
(4, 'society member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

CREATE TABLE `tbl_salary` (
  `salary_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `salary_amt` int(11) NOT NULL,
  `generate_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salaryhistory`
--

CREATE TABLE `tbl_salaryhistory` (
  `stafftype_id` int(11) NOT NULL,
  `staff_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society`
--

CREATE TABLE `tbl_society` (
  `Society_ID` int(11) NOT NULL,
  `Name_of_Society` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Reg_date` date NOT NULL,
  `Logo` longtext NOT NULL,
  `Logical_address` varchar(100) NOT NULL,
  `Google_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_society`
--

INSERT INTO `tbl_society` (`Society_ID`, `Name_of_Society`, `Address`, `Reg_date`, `Logo`, `Logical_address`, `Google_link`) VALUES
(1, 'ambika park', 'dindoli', '2022-04-12', 'wp1.jpg', 'ambika park,near regent plaza ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1341482205066!2d72.87781426422593!3d21.14705903910667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0501759360f5b%3A0x9c27769981f19f0d!2sAmbika%20Park%20Society%2C%20Dindoli%2C%20Surat%2C%20Gujarat%20394305!5e0!3m2!1sen!2sin!4v1662906457284!5m2!1sen!2sin\" '),
(2, 'Gokuldham Society', 'powdergali,goregav,Mumbai ', '2022-07-01', 'no.jpg', 'powdergali,goregav,Mumbai ', '<https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1341482205066!2d72.87781426422598!3d21.14705903910667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0501759360f5b%3A0x9c27769981f19f0d!2sAmbika%20Park%20Society%2C%20Dindoli%2C%20Surat%2C%20Gujarat%20394305!5e0!3m2!1sen!2sin!4v1662833452967!5m2!1m12>'),
(3, 'pavandham', 'vesu surat', '2022-09-15', 'no.jpg', 'opposite govardhan haveli,vesu', '<https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1341482205066!2d72.87781426422598!3d21.14705903910667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0501759360f5b%3A0x9c27769981f19f0d!2sAmbika%20Park%20Society%2C%20Dindoli%2C%20Surat%2C%20Gujarat%20394305!5e0!3m2!1sen!2sin!4v1662833452967!5m2!1m12>'),
(4, 'Vrindavan Society', 'goregav,Mumbai ', '2022-07-01', 'no.jpg', 'goregav,Mumbai ', '<https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1341482205066!2d72.87781426422598!3d21.14705903910667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0501759360f5b%3A0x9c27769981f19f0d!2sAmbika%20Park%20Society%2C%20Dindoli%2C%20Surat%2C%20Gujarat%20394305!5e0!3m2!1sen!2sin!4v1662833452967!5m2!1m12>'),
(5, 'Nandanvan Society', 'olpad surat', '2022-09-15', 'no.jpg', 'opposite iskon temple,ol[ad,surat', '<https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1341482205066!2d72.87781426422598!3d21.14705903910667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0501759360f5b%3A0x9c27769981f19f0d!2sAmbika%20Park%20Society%2C%20Dindoli%2C%20Surat%2C%20Gujarat%20394305!5e0!3m2!1sen!2sin!4v1662833452967!5m2!1m12>'),
(6, 'sentosa enclave', 'dindoli', '2018-03-03', 'banner_imgx.png', 'regent plaza dindoli', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.8284627726753!2d72.87282831422611!3d21.159223788689093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04fdfe2ffb0b1%3A0x2f5a2ccfa531bc17!2sSentosa%20Enclave%2C%20Royal%20Star%20Town%20ship%2C%20Dindoli%2C%20Surat%2C%20Gujarat%20394210!5e0!3m2!1sen!2sin!4v1667456499403!5m2!1sen!2sin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(11) NOT NULL,
  `staff_code` int(11) NOT NULL,
  `stafftype_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact_no` bigint(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` longtext NOT NULL,
  `idprooftype_id` int(11) NOT NULL,
  `idproof_no` bigint(50) NOT NULL,
  `idproof_photo` longtext NOT NULL,
  `joining_date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `remark` varchar(30) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `staff_code`, `stafftype_id`, `name`, `address`, `contact_no`, `email`, `photo`, `idprooftype_id`, `idproof_no`, `idproof_photo`, `joining_date`, `gender`, `remark`, `status`) VALUES
(1, 101, 2, 'magan kaka', 'lalget', 9988776655, 'test@gmail.com', 'images.jpg', 1, 789065432412, '2021-06-24.png', '2022-02-10', 'male', 'no', 1),
(2, 102, 1, 'chagan kaka', 'zampa bajar', 9087654321, 'jinaljariwala6868@gmail.com', 'no.jpg', 3, 9087654327890, 'np.jpg', '2022-09-01', 'Male', 'no', 1),
(3, 103, 7, 'kanta tai', 'Borivali ', 9087654321, 'vaishu2003@gmail.com', 'no.jpg', 1, 908765434679, 'no.jpg', '2022-09-01', 'female', 'no', 1),
(4, 105, 2, 'digu', 'dindoli', 7621913857, 'shikari@gmail.com', 'wp1.jpg', 1, 253394911714, 'banner_imgx.png', '2021-04-04', 'male', 'hello im dish washer ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staffwing_wise`
--

CREATE TABLE `tbl_staffwing_wise` (
  `staff_id` int(11) NOT NULL,
  `Society_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staftype`
--

CREATE TABLE `tbl_staftype` (
  `staftype_id` int(11) NOT NULL,
  `staf_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staftype`
--

INSERT INTO `tbl_staftype` (`staftype_id`, `staf_type`) VALUES
(1, 'watchman'),
(2, 'cleaner'),
(3, 'Gardener'),
(4, 'pool cleaner'),
(5, 'vehical cleaner'),
(6, 'washer '),
(7, 'maid'),
(8, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehical`
--

CREATE TABLE `tbl_vehical` (
  `vehical_id` int(11) NOT NULL,
  `vehical_company` varchar(30) NOT NULL,
  `vahical_type` tinyint(4) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `flat_holder_id` int(11) NOT NULL,
  `rent_holder_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitorhistory`
--

CREATE TABLE `tbl_visitorhistory` (
  `visitorhistory_id` int(11) NOT NULL,
  `visitor_code` int(11) NOT NULL,
  `date_nd_time` datetime NOT NULL,
  `exit_time` datetime DEFAULT NULL,
  `reason` varchar(30) NOT NULL,
  `flat_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visitorhistory`
--

INSERT INTO `tbl_visitorhistory` (`visitorhistory_id`, `visitor_code`, `date_nd_time`, `exit_time`, `reason`, `flat_id`, `date`) VALUES
(1, 104, '2022-09-11 20:16:59', NULL, 'for meeting', 1, ''),
(2, 105, '2022-09-11 20:21:02', NULL, 'for meeting', 1, ''),
(3, 106, '2022-09-11 20:22:37', NULL, 'for meeting', 1, ''),
(4, 107, '2022-09-11 20:25:24', '2022-09-11 20:36:43', 'for meeting', 1, ''),
(5, 108, '2022-09-11 20:26:53', NULL, 'for meeting', 1, ''),
(6, 109, '2022-09-11 20:28:54', NULL, 'for meeting', 1, ''),
(7, 110, '2022-09-11 20:30:06', '2022-09-11 20:37:06', 'for meeting', 1, ''),
(8, 111, '2022-09-11 20:31:17', NULL, 'for meeting', 1, ''),
(9, 123, '2022-10-31 11:48:55', NULL, 'emergancy', 2, '2022-10-31'),
(10, 11111, '2022-10-31 12:15:47', '2022-10-31 12:23:22', 'for meeting', 1, '2022-10-31'),
(11, 11, '2022-11-05 13:07:30', '2022-11-13 10:51:52', 'study', 1, '2022-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitorinfo`
--

CREATE TABLE `tbl_visitorinfo` (
  `visitor_id` int(11) NOT NULL,
  `visitor_name` varchar(30) NOT NULL,
  `mobile_no` bigint(11) NOT NULL,
  `visitor_code` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visitorinfo`
--

INSERT INTO `tbl_visitorinfo` (`visitor_id`, `visitor_name`, `mobile_no`, `visitor_code`, `status`) VALUES
(1, 'jinal', 2147483647, 101, NULL),
(4, 'jinal', 2147483647, 102, NULL),
(6, 'jinal', 8866523403, 103, NULL),
(7, 'jinal', 8866523403, 104, NULL),
(8, 'jinal', 8866523403, 105, NULL),
(9, 'jinal', 8866523403, 106, NULL),
(11, 'jinal', 8866523403, 107, 1),
(12, 'jinal', 8866523403, 108, NULL),
(13, 'jinal', 8866523403, 109, NULL),
(14, 'jinal', 8866523403, 110, 1),
(15, 'jinal', 8866523403, 111, -1),
(16, 'dr. kapadia', 8866523403, 123, NULL),
(18, 'jinal', 8866523403, 11111, 1),
(20, 'divya', 7621913857, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wing`
--

CREATE TABLE `tbl_wing` (
  `Wing_Id` int(11) NOT NULL,
  `Wing_name` varchar(30) NOT NULL,
  `No_Of_Floors` int(11) NOT NULL,
  `No_Of_Flats` int(11) NOT NULL,
  `Society_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wing`
--

INSERT INTO `tbl_wing` (`Wing_Id`, `Wing_name`, `No_Of_Floors`, `No_Of_Flats`, `Society_Id`) VALUES
(1, 'A1', 7, 10, 1),
(2, 'A2', 7, 10, 1),
(3, 's1', 8, 4, 6),
(4, 's2', 8, 4, 6),
(5, 'A3', 10, 4, 1),
(6, 'S3', 8, 4, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`Admin_Id`),
  ADD UNIQUE KEY `Contact_No` (`Contact_No`),
  ADD UNIQUE KEY `Login_id` (`Login_id`);

--
-- Indexes for table `tbl_bankinfo`
--
ALTER TABLE `tbl_bankinfo`
  ADD PRIMARY KEY (`bank_info_id`),
  ADD KEY `flat_holder_id` (`flat_holder_id`),
  ADD KEY `rent_holder_id` (`rent_holder_id`);

--
-- Indexes for table `tbl_bookingcharges`
--
ALTER TABLE `tbl_bookingcharges`
  ADD PRIMARY KEY (`charges_id`);

--
-- Indexes for table `tbl_chequeinfo`
--
ALTER TABLE `tbl_chequeinfo`
  ADD PRIMARY KEY (`cheque_info_id`),
  ADD KEY `main_history_id` (`main_history_id`),
  ADD KEY `bank_info_id` (`bank_info_id`);

--
-- Indexes for table `tbl_circular`
--
ALTER TABLE `tbl_circular`
  ADD PRIMARY KEY (`circular_id`),
  ADD KEY `wing_id` (`Society_ID`);

--
-- Indexes for table `tbl_clubbooking`
--
ALTER TABLE `tbl_clubbooking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_complaininfo`
--
ALTER TABLE `tbl_complaininfo`
  ADD PRIMARY KEY (`complain_id`),
  ADD UNIQUE KEY `complain_code` (`complain_code`) USING BTREE,
  ADD KEY `complaintype_id` (`complaintype_id`),
  ADD KEY `flat_id` (`flat_id`);

--
-- Indexes for table `tbl_complainstatus`
--
ALTER TABLE `tbl_complainstatus`
  ADD PRIMARY KEY (`complainstatus_id`),
  ADD KEY `complain_id` (`complain_id`);

--
-- Indexes for table `tbl_complaintype`
--
ALTER TABLE `tbl_complaintype`
  ADD PRIMARY KEY (`complaintype_id`);

--
-- Indexes for table `tbl_contracthistory`
--
ALTER TABLE `tbl_contracthistory`
  ADD PRIMARY KEY (`contracthistory_id`),
  ADD KEY `contract_id` (`contract_id`);

--
-- Indexes for table `tbl_contractinfo`
--
ALTER TABLE `tbl_contractinfo`
  ADD PRIMARY KEY (`contract_id`),
  ADD UNIQUE KEY `contract_code` (`contract_code`),
  ADD KEY `contract_type_id` (`contract_type_id`);

--
-- Indexes for table `tbl_contracttype`
--
ALTER TABLE `tbl_contracttype`
  ADD PRIMARY KEY (`contracttype_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_expense`
--
ALTER TABLE `tbl_expense`
  ADD PRIMARY KEY (`Expenses_Id`);

--
-- Indexes for table `tbl_expensesoctety`
--
ALTER TABLE `tbl_expensesoctety`
  ADD KEY `society_id` (`society_id`),
  ADD KEY `expenses_id` (`expenses_id`);

--
-- Indexes for table `tbl_expensetype`
--
ALTER TABLE `tbl_expensetype`
  ADD PRIMARY KEY (`Expenses_Id`);

--
-- Indexes for table `tbl_facility`
--
ALTER TABLE `tbl_facility`
  ADD PRIMARY KEY (`Facility_Id`),
  ADD KEY `Society_ID` (`Society_ID`);

--
-- Indexes for table `tbl_finehistory`
--
ALTER TABLE `tbl_finehistory`
  ADD PRIMARY KEY (`fine_history_id`),
  ADD KEY `flat_id` (`flat_id`);

--
-- Indexes for table `tbl_fineinfo`
--
ALTER TABLE `tbl_fineinfo`
  ADD PRIMARY KEY (`fine_info_id`);

--
-- Indexes for table `tbl_flat`
--
ALTER TABLE `tbl_flat`
  ADD PRIMARY KEY (`Flat_Id`),
  ADD KEY `Wing_Id` (`Wing_Id`);

--
-- Indexes for table `tbl_flatholder`
--
ALTER TABLE `tbl_flatholder`
  ADD PRIMARY KEY (`flatholder_id`),
  ADD KEY `flat_id` (`flat_id`),
  ADD KEY `roletype_id` (`roletype_id`);

--
-- Indexes for table `tbl_flatmember`
--
ALTER TABLE `tbl_flatmember`
  ADD PRIMARY KEY (`flat_member_id`),
  ADD KEY `flat_id` (`flat_id`);

--
-- Indexes for table `tbl_flattype`
--
ALTER TABLE `tbl_flattype`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_function`
--
ALTER TABLE `tbl_function`
  ADD PRIMARY KEY (`function_id`),
  ADD KEY `flat_holder_id` (`flat_holder_id`),
  ADD KEY `rent_holder_id` (`rent_holder_id`),
  ADD KEY `functiontype_id` (`functiontype_id`);

--
-- Indexes for table `tbl_functiontype`
--
ALTER TABLE `tbl_functiontype`
  ADD PRIMARY KEY (`functiontype_id`);

--
-- Indexes for table `tbl_guestinfo`
--
ALTER TABLE `tbl_guestinfo`
  ADD PRIMARY KEY (`guest_id`),
  ADD UNIQUE KEY `guest_code` (`guest_code`),
  ADD KEY `functiontype_id` (`functiontype_id`);

--
-- Indexes for table `tbl_idprooftype`
--
ALTER TABLE `tbl_idprooftype`
  ADD PRIMARY KEY (`idprooftype_id`);

--
-- Indexes for table `tbl_main_amount`
--
ALTER TABLE `tbl_main_amount`
  ADD PRIMARY KEY (`main_id`),
  ADD KEY `flat_id` (`Society_ID`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `tbl_main_history`
--
ALTER TABLE `tbl_main_history`
  ADD PRIMARY KEY (`main_hid`),
  ADD KEY `flat_id` (`flat_id`);

--
-- Indexes for table `tbl_meeting`
--
ALTER TABLE `tbl_meeting`
  ADD PRIMARY KEY (`meeting_id`),
  ADD KEY `Society_ID` (`Society_ID`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`notice_id`),
  ADD KEY `Flat_Id` (`Flat_Id`);

--
-- Indexes for table `tbl_onlinepayment_info`
--
ALTER TABLE `tbl_onlinepayment_info`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `flat_holder_id` (`flat_holder_id`),
  ADD KEY `rent_holder_id` (`rent_holder_id`);

--
-- Indexes for table `tbl_parkingoccupy`
--
ALTER TABLE `tbl_parkingoccupy`
  ADD PRIMARY KEY (`parking_occupy_id`),
  ADD KEY `vehical_id` (`vehical_id`);

--
-- Indexes for table `tbl_rentholder`
--
ALTER TABLE `tbl_rentholder`
  ADD PRIMARY KEY (`rentholder_id`),
  ADD KEY `flat_id` (`flat_id`);

--
-- Indexes for table `tbl_roletype`
--
ALTER TABLE `tbl_roletype`
  ADD PRIMARY KEY (`roletype_id`);

--
-- Indexes for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  ADD PRIMARY KEY (`salary_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `tbl_salaryhistory`
--
ALTER TABLE `tbl_salaryhistory`
  ADD KEY `stafftype_id` (`stafftype_id`);

--
-- Indexes for table `tbl_society`
--
ALTER TABLE `tbl_society`
  ADD PRIMARY KEY (`Society_ID`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `stafftype_id` (`stafftype_id`),
  ADD KEY `idprooftype_id` (`idprooftype_id`);

--
-- Indexes for table `tbl_staffwing_wise`
--
ALTER TABLE `tbl_staffwing_wise`
  ADD KEY `flat_id` (`Society_ID`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `tbl_staftype`
--
ALTER TABLE `tbl_staftype`
  ADD PRIMARY KEY (`staftype_id`);

--
-- Indexes for table `tbl_vehical`
--
ALTER TABLE `tbl_vehical`
  ADD PRIMARY KEY (`vehical_id`),
  ADD KEY `flat_holder_id` (`flat_holder_id`),
  ADD KEY `rent_holder_id` (`rent_holder_id`);

--
-- Indexes for table `tbl_visitorhistory`
--
ALTER TABLE `tbl_visitorhistory`
  ADD PRIMARY KEY (`visitorhistory_id`),
  ADD KEY `flat_id` (`flat_id`);

--
-- Indexes for table `tbl_visitorinfo`
--
ALTER TABLE `tbl_visitorinfo`
  ADD PRIMARY KEY (`visitor_id`),
  ADD UNIQUE KEY `visitor_code` (`visitor_code`);

--
-- Indexes for table `tbl_wing`
--
ALTER TABLE `tbl_wing`
  ADD PRIMARY KEY (`Wing_Id`),
  ADD KEY `Society_Id` (`Society_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_bankinfo`
--
ALTER TABLE `tbl_bankinfo`
  MODIFY `bank_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_bookingcharges`
--
ALTER TABLE `tbl_bookingcharges`
  MODIFY `charges_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_chequeinfo`
--
ALTER TABLE `tbl_chequeinfo`
  MODIFY `cheque_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_circular`
--
ALTER TABLE `tbl_circular`
  MODIFY `circular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_clubbooking`
--
ALTER TABLE `tbl_clubbooking`
  MODIFY `booking_id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_complaininfo`
--
ALTER TABLE `tbl_complaininfo`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_complainstatus`
--
ALTER TABLE `tbl_complainstatus`
  MODIFY `complainstatus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_complaintype`
--
ALTER TABLE `tbl_complaintype`
  MODIFY `complaintype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_contracthistory`
--
ALTER TABLE `tbl_contracthistory`
  MODIFY `contracthistory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contractinfo`
--
ALTER TABLE `tbl_contractinfo`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contracttype`
--
ALTER TABLE `tbl_contracttype`
  MODIFY `contracttype_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_expense`
--
ALTER TABLE `tbl_expense`
  MODIFY `Expenses_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_expensetype`
--
ALTER TABLE `tbl_expensetype`
  MODIFY `Expenses_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_facility`
--
ALTER TABLE `tbl_facility`
  MODIFY `Facility_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_finehistory`
--
ALTER TABLE `tbl_finehistory`
  MODIFY `fine_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fineinfo`
--
ALTER TABLE `tbl_fineinfo`
  MODIFY `fine_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_flat`
--
ALTER TABLE `tbl_flat`
  MODIFY `Flat_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_flatholder`
--
ALTER TABLE `tbl_flatholder`
  MODIFY `flatholder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_flatmember`
--
ALTER TABLE `tbl_flatmember`
  MODIFY `flat_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_flattype`
--
ALTER TABLE `tbl_flattype`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_function`
--
ALTER TABLE `tbl_function`
  MODIFY `function_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_functiontype`
--
ALTER TABLE `tbl_functiontype`
  MODIFY `functiontype_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_guestinfo`
--
ALTER TABLE `tbl_guestinfo`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_idprooftype`
--
ALTER TABLE `tbl_idprooftype`
  MODIFY `idprooftype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_main_amount`
--
ALTER TABLE `tbl_main_amount`
  MODIFY `main_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_main_history`
--
ALTER TABLE `tbl_main_history`
  MODIFY `main_hid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_meeting`
--
ALTER TABLE `tbl_meeting`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_onlinepayment_info`
--
ALTER TABLE `tbl_onlinepayment_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_parkingoccupy`
--
ALTER TABLE `tbl_parkingoccupy`
  MODIFY `parking_occupy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rentholder`
--
ALTER TABLE `tbl_rentholder`
  MODIFY `rentholder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_roletype`
--
ALTER TABLE `tbl_roletype`
  MODIFY `roletype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_society`
--
ALTER TABLE `tbl_society`
  MODIFY `Society_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_staftype`
--
ALTER TABLE `tbl_staftype`
  MODIFY `staftype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_vehical`
--
ALTER TABLE `tbl_vehical`
  MODIFY `vehical_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_visitorhistory`
--
ALTER TABLE `tbl_visitorhistory`
  MODIFY `visitorhistory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_visitorinfo`
--
ALTER TABLE `tbl_visitorinfo`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_wing`
--
ALTER TABLE `tbl_wing`
  MODIFY `Wing_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bankinfo`
--
ALTER TABLE `tbl_bankinfo`
  ADD CONSTRAINT `tbl_bankinfo_ibfk_1` FOREIGN KEY (`flat_holder_id`) REFERENCES `tbl_flatholder` (`flatholder_id`),
  ADD CONSTRAINT `tbl_bankinfo_ibfk_2` FOREIGN KEY (`rent_holder_id`) REFERENCES `tbl_rentholder` (`rentholder_id`);

--
-- Constraints for table `tbl_chequeinfo`
--
ALTER TABLE `tbl_chequeinfo`
  ADD CONSTRAINT `tbl_chequeinfo_ibfk_1` FOREIGN KEY (`main_history_id`) REFERENCES `tbl_main_history` (`main_hid`),
  ADD CONSTRAINT `tbl_chequeinfo_ibfk_2` FOREIGN KEY (`bank_info_id`) REFERENCES `tbl_bankinfo` (`bank_info_id`);

--
-- Constraints for table `tbl_circular`
--
ALTER TABLE `tbl_circular`
  ADD CONSTRAINT `tbl_circular_ibfk_1` FOREIGN KEY (`Society_ID`) REFERENCES `tbl_society` (`Society_ID`);

--
-- Constraints for table `tbl_complaininfo`
--
ALTER TABLE `tbl_complaininfo`
  ADD CONSTRAINT `tbl_complaininfo_ibfk_1` FOREIGN KEY (`complaintype_id`) REFERENCES `tbl_complaintype` (`complaintype_id`),
  ADD CONSTRAINT `tbl_complaininfo_ibfk_2` FOREIGN KEY (`flat_id`) REFERENCES `tbl_flat` (`Flat_Id`);

--
-- Constraints for table `tbl_complainstatus`
--
ALTER TABLE `tbl_complainstatus`
  ADD CONSTRAINT `tbl_complainstatus_ibfk_1` FOREIGN KEY (`complain_id`) REFERENCES `tbl_complaininfo` (`complain_id`);

--
-- Constraints for table `tbl_contracthistory`
--
ALTER TABLE `tbl_contracthistory`
  ADD CONSTRAINT `tbl_contracthistory_ibfk_1` FOREIGN KEY (`contract_id`) REFERENCES `tbl_contractinfo` (`contract_id`);

--
-- Constraints for table `tbl_contractinfo`
--
ALTER TABLE `tbl_contractinfo`
  ADD CONSTRAINT `tbl_contractinfo_ibfk_1` FOREIGN KEY (`contract_type_id`) REFERENCES `tbl_contracttype` (`contracttype_id`);

--
-- Constraints for table `tbl_expensesoctety`
--
ALTER TABLE `tbl_expensesoctety`
  ADD CONSTRAINT `tbl_expensesoctety_ibfk_1` FOREIGN KEY (`society_id`) REFERENCES `tbl_society` (`Society_ID`),
  ADD CONSTRAINT `tbl_expensesoctety_ibfk_2` FOREIGN KEY (`expenses_id`) REFERENCES `tbl_expense` (`Expenses_Id`);

--
-- Constraints for table `tbl_facility`
--
ALTER TABLE `tbl_facility`
  ADD CONSTRAINT `tbl_facility_ibfk_1` FOREIGN KEY (`Society_ID`) REFERENCES `tbl_society` (`Society_ID`);

--
-- Constraints for table `tbl_finehistory`
--
ALTER TABLE `tbl_finehistory`
  ADD CONSTRAINT `tbl_finehistory_ibfk_1` FOREIGN KEY (`flat_id`) REFERENCES `tbl_flat` (`Flat_Id`);

--
-- Constraints for table `tbl_flat`
--
ALTER TABLE `tbl_flat`
  ADD CONSTRAINT `tbl_flat_ibfk_1` FOREIGN KEY (`Wing_Id`) REFERENCES `tbl_wing` (`Wing_Id`);

--
-- Constraints for table `tbl_flatholder`
--
ALTER TABLE `tbl_flatholder`
  ADD CONSTRAINT `tbl_flatholder_ibfk_1` FOREIGN KEY (`flat_id`) REFERENCES `tbl_flat` (`Flat_Id`),
  ADD CONSTRAINT `tbl_flatholder_ibfk_2` FOREIGN KEY (`roletype_id`) REFERENCES `tbl_roletype` (`roletype_id`);

--
-- Constraints for table `tbl_flatmember`
--
ALTER TABLE `tbl_flatmember`
  ADD CONSTRAINT `tbl_flatmember_ibfk_1` FOREIGN KEY (`flat_id`) REFERENCES `tbl_flat` (`Flat_Id`);

--
-- Constraints for table `tbl_function`
--
ALTER TABLE `tbl_function`
  ADD CONSTRAINT `tbl_function_ibfk_1` FOREIGN KEY (`flat_holder_id`) REFERENCES `tbl_flatholder` (`flatholder_id`),
  ADD CONSTRAINT `tbl_function_ibfk_2` FOREIGN KEY (`rent_holder_id`) REFERENCES `tbl_rentholder` (`rentholder_id`),
  ADD CONSTRAINT `tbl_function_ibfk_3` FOREIGN KEY (`functiontype_id`) REFERENCES `tbl_functiontype` (`functiontype_id`);

--
-- Constraints for table `tbl_guestinfo`
--
ALTER TABLE `tbl_guestinfo`
  ADD CONSTRAINT `tbl_guestinfo_ibfk_1` FOREIGN KEY (`functiontype_id`) REFERENCES `tbl_functiontype` (`functiontype_id`);

--
-- Constraints for table `tbl_main_amount`
--
ALTER TABLE `tbl_main_amount`
  ADD CONSTRAINT `tbl_main_amount_ibfk_1` FOREIGN KEY (`Society_ID`) REFERENCES `tbl_society` (`Society_ID`),
  ADD CONSTRAINT `tbl_main_amount_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `tbl_flattype` (`type_id`);

--
-- Constraints for table `tbl_main_history`
--
ALTER TABLE `tbl_main_history`
  ADD CONSTRAINT `tbl_main_history_ibfk_1` FOREIGN KEY (`flat_id`) REFERENCES `tbl_flat` (`Flat_Id`);

--
-- Constraints for table `tbl_meeting`
--
ALTER TABLE `tbl_meeting`
  ADD CONSTRAINT `tbl_meeting_ibfk_1` FOREIGN KEY (`Society_ID`) REFERENCES `tbl_society` (`Society_ID`);

--
-- Constraints for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD CONSTRAINT `tbl_notice_ibfk_1` FOREIGN KEY (`Flat_Id`) REFERENCES `tbl_flat` (`Flat_Id`);

--
-- Constraints for table `tbl_onlinepayment_info`
--
ALTER TABLE `tbl_onlinepayment_info`
  ADD CONSTRAINT `tbl_onlinepayment_info_ibfk_1` FOREIGN KEY (`flat_holder_id`) REFERENCES `tbl_flatholder` (`flatholder_id`),
  ADD CONSTRAINT `tbl_onlinepayment_info_ibfk_2` FOREIGN KEY (`rent_holder_id`) REFERENCES `tbl_rentholder` (`rentholder_id`);

--
-- Constraints for table `tbl_parkingoccupy`
--
ALTER TABLE `tbl_parkingoccupy`
  ADD CONSTRAINT `tbl_parkingoccupy_ibfk_1` FOREIGN KEY (`vehical_id`) REFERENCES `tbl_vehical` (`vehical_id`);

--
-- Constraints for table `tbl_rentholder`
--
ALTER TABLE `tbl_rentholder`
  ADD CONSTRAINT `tbl_rentholder_ibfk_1` FOREIGN KEY (`flat_id`) REFERENCES `tbl_flat` (`Flat_Id`);

--
-- Constraints for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  ADD CONSTRAINT `tbl_salary_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `tbl_staff` (`staff_id`);

--
-- Constraints for table `tbl_salaryhistory`
--
ALTER TABLE `tbl_salaryhistory`
  ADD CONSTRAINT `tbl_salaryhistory_ibfk_1` FOREIGN KEY (`stafftype_id`) REFERENCES `tbl_staftype` (`staftype_id`);

--
-- Constraints for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD CONSTRAINT `tbl_staff_ibfk_1` FOREIGN KEY (`stafftype_id`) REFERENCES `tbl_staftype` (`staftype_id`),
  ADD CONSTRAINT `tbl_staff_ibfk_2` FOREIGN KEY (`idprooftype_id`) REFERENCES `tbl_idprooftype` (`idprooftype_id`);

--
-- Constraints for table `tbl_staffwing_wise`
--
ALTER TABLE `tbl_staffwing_wise`
  ADD CONSTRAINT `tbl_staffwing_wise_ibfk_1` FOREIGN KEY (`Society_ID`) REFERENCES `tbl_society` (`Society_ID`),
  ADD CONSTRAINT `tbl_staffwing_wise_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `tbl_staff` (`staff_id`);

--
-- Constraints for table `tbl_vehical`
--
ALTER TABLE `tbl_vehical`
  ADD CONSTRAINT `tbl_vehical_ibfk_1` FOREIGN KEY (`flat_holder_id`) REFERENCES `tbl_flatholder` (`flatholder_id`),
  ADD CONSTRAINT `tbl_vehical_ibfk_2` FOREIGN KEY (`rent_holder_id`) REFERENCES `tbl_rentholder` (`rentholder_id`);

--
-- Constraints for table `tbl_visitorhistory`
--
ALTER TABLE `tbl_visitorhistory`
  ADD CONSTRAINT `tbl_visitorhistory_ibfk_2` FOREIGN KEY (`flat_id`) REFERENCES `tbl_flat` (`Flat_Id`);

--
-- Constraints for table `tbl_wing`
--
ALTER TABLE `tbl_wing`
  ADD CONSTRAINT `tbl_wing_ibfk_1` FOREIGN KEY (`Society_Id`) REFERENCES `tbl_society` (`Society_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

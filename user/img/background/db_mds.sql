-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 03:48 PM
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
  `Gender` varchar(6) NOT NULL,
  `Society_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`Admin_Id`, `Admin_name`, `Email`, `Contact_No`, `Profile_pic`, `Login_id`, `Password`, `Created_Date`, `Birth_Date`, `Gender`, `Society_id`) VALUES
(1, 'Mr. Jariwala', 'jinaljariwala6868@gmail.com', 8907654321, 'no.jpg', 'jj@123', 'jinal@2343', '2022-07-01', '2022-07-01', 'male', 1),
(22, 'jinal', 'jinaljariwala6868@gmail.com', 8866523403, 'no.jpg', 'var@234', 'jinal@123', '2022-08-11', '2022-08-09', 'Female', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bankinfo`
--

CREATE TABLE `tbl_bankinfo` (
  `bank_info_id` int(11) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `flat_holder_id` int(11) NOT NULL,
  `rent_holder_id` int(11) NOT NULL,
  `ac_no` int(50) NOT NULL,
  `IFSC_code` int(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact_no` int(11) NOT NULL
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
  `description` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `wing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `complain_code` int(11) NOT NULL,
  `complain_title` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `photo` longtext NOT NULL,
  `flat_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complainstatus`
--

CREATE TABLE `tbl_complainstatus` (
  `complainstatus_id` int(11) NOT NULL,
  `complain_id` int(11) NOT NULL,
  `status_des` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaintype`
--

CREATE TABLE `tbl_complaintype` (
  `complaintype_id` int(11) NOT NULL,
  `complaintype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expensesoctety`
--

CREATE TABLE `tbl_expensesoctety` (
  `expenses_id` int(11) NOT NULL,
  `wing_id` int(11) NOT NULL,
  `society_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Flat_Status` tinyint(4) NOT NULL,
  `Owner_status` tinyint(4) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_flat`
--

INSERT INTO `tbl_flat` (`Flat_Id`, `Flat_Number`, `Wing_Id`, `Flat_Status`, `Owner_status`, `Status`) VALUES
(1, 'A-101', 1, 1, 1, 1);

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
  `flat_id` int(11) NOT NULL,
  `doj` date NOT NULL,
  `roletype_id` int(11) DEFAULT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_flatholder`
--

INSERT INTO `tbl_flatholder` (`flatholder_id`, `name`, `user_name`, `contact_no`, `email`, `password`, `flat_id`, `doj`, `roletype_id`, `image`) VALUES
(6, 'jinal jariwala', 'jj@123', 8866523403, 'jinaljariwala6868@gmail.com', 'jj@123', 1, '2022-09-02', 1, 'pointer.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flatmember`
--

CREATE TABLE `tbl_flatmember` (
  `flat_member_id` int(11) NOT NULL,
  `flat_id` int(11) NOT NULL,
  `member_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_amount`
--

CREATE TABLE `tbl_main_amount` (
  `main_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `flat_type` varchar(30) NOT NULL,
  `flat_user` varchar(30) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `g_date` date NOT NULL,
  `flat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `tbl_otp`
--

CREATE TABLE `tbl_otp` (
  `opt_id` int(11) NOT NULL,
  `created_otp` int(11) NOT NULL,
  `exp_otp` int(11) NOT NULL,
  `admin_mail` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_otp`
--

INSERT INTO `tbl_otp` (`opt_id`, `created_otp`, `exp_otp`, `admin_mail`, `created_date`) VALUES
(1, 4762, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 00:00:00'),
(2, 1053, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 00:00:00'),
(3, 9698, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 00:00:00'),
(4, 6382, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 00:00:00'),
(5, 6169, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 00:00:00'),
(6, 4071, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 00:00:00'),
(7, 4632, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 19:38:34'),
(8, 5586, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 19:43:20'),
(9, 1372, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 19:43:34'),
(10, 8212, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 19:45:00'),
(11, 8406, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 19:45:49'),
(12, 9252, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 19:47:37'),
(13, 6874, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 19:51:46'),
(14, 1715, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 19:59:41'),
(15, 7395, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 20:02:12'),
(16, 1743, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 20:02:47'),
(17, 5593, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 20:07:30'),
(18, 4090, 1, 'jinaljariwala6868@gmail.com', '2022-07-26 20:10:16'),
(19, 4116, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 20:14:02'),
(20, 2380, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 20:15:50'),
(21, 7767, 0, 'jinaljariwala6868@gmail.com', '2022-07-26 20:22:38'),
(22, 2542, 0, 'jinaljariwala6868@gmail.com', '2022-07-27 05:31:03'),
(23, 2274, 0, 'jinaljariwala6868@gmail.com', '2022-07-27 15:15:57'),
(24, 2040, 0, 'jinaljariwala6868@gmail.com', '2022-07-27 15:27:42'),
(25, 6559, 0, 'jinaljariwala6868@gmail.com', '2022-07-27 15:29:55'),
(26, 3842, 0, 'jinaljariwala6868@gmail.com', '2022-07-27 15:31:33'),
(27, 4491, 0, 'jinaljariwala6868@gmail.com', '2022-07-27 15:37:12'),
(28, 1290, 0, 'jinaljariwala6868@gmail.com', '2022-07-27 15:39:31'),
(29, 5765, 0, 'jinaljariwala6868@gmail.com', '2022-07-27 15:42:46'),
(30, 9135, 1, 'jinaljariwala6868@gmail.com', '2022-07-27 15:44:30'),
(31, 3684, 0, 'jinaljariwala6868@gmail.com', '2022-07-29 16:09:06'),
(32, 4340, 0, 'jinaljariwala6868@gmail.com', '2022-07-29 16:14:54'),
(33, 4417, 0, 'jinaljariwala6868@gmail.com', '2022-08-01 16:31:25'),
(34, 6119, 0, 'jinaljariwala6868@gmail.com', '2022-08-02 15:10:49'),
(35, 1951, 0, 'jinaljariwala6868@gmail.com', '2022-08-02 15:33:41'),
(36, 8833, 0, 'jinaljariwala6868@gmail.com', '2022-08-02 15:34:30'),
(37, 5365, 0, 'jinaljariwala6868@gmail.com', '2022-08-02 15:36:13'),
(38, 2479, 0, 'jinaljariwala6868@gmail.com', '2022-08-03 14:45:01'),
(39, 4650, 0, 'jinaljariwala6868@gmail.com', '2022-08-03 14:45:06'),
(40, 2050, 0, 'jinaljariwala6868@gmail.com', '2022-08-03 14:46:59');

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
  `flat_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'manager');

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
  `Logical_address` varchar(30) NOT NULL,
  `Google_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_society`
--

INSERT INTO `tbl_society` (`Society_ID`, `Name_of_Society`, `Address`, `Reg_date`, `Logo`, `Logical_address`, `Google_link`) VALUES
(1, 'Gokuldham Society', 'powdergali,goregav,Mumbai ', '2022-07-01', 'no.jpg', 'powdergali,goregav,Mumbai ', 'no_link'),
(2, 'vrindavan Society', 'vesu,surat', '2022-08-02', '', 'vesu,surat', 'null');

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
  `contact_no` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staffwing_wise`
--

CREATE TABLE `tbl_staffwing_wise` (
  `staff_id` int(11) NOT NULL,
  `flat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staftype`
--

CREATE TABLE `tbl_staftype` (
  `staftype_id` int(11) NOT NULL,
  `staf_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `visitor_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `entry_time` datetime NOT NULL,
  `exit_time` datetime NOT NULL,
  `reason` varchar(30) NOT NULL,
  `flat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitorinfo`
--

CREATE TABLE `tbl_visitorinfo` (
  `visitor_id` int(11) NOT NULL,
  `visitor_name` varchar(30) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `visitor_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'A', 7, 6, 1),
(2, 'B', 7, 6, 1),
(3, 'p1', 7, 10, 2),
(4, 'p2', 7, 10, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`Admin_Id`),
  ADD UNIQUE KEY `Contact_No` (`Contact_No`),
  ADD UNIQUE KEY `Login_id` (`Login_id`),
  ADD KEY `Society_id` (`Society_id`);

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
  ADD KEY `wing_id` (`wing_id`);

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
  ADD KEY `wing_id` (`wing_id`);

--
-- Indexes for table `tbl_expensetype`
--
ALTER TABLE `tbl_expensetype`
  ADD PRIMARY KEY (`Expenses_Id`);

--
-- Indexes for table `tbl_facility`
--
ALTER TABLE `tbl_facility`
  ADD PRIMARY KEY (`Facility_Id`);

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
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `flat_id` (`flat_id`),
  ADD KEY `roletype_id` (`roletype_id`);

--
-- Indexes for table `tbl_flatmember`
--
ALTER TABLE `tbl_flatmember`
  ADD PRIMARY KEY (`flat_member_id`),
  ADD KEY `flat_id` (`flat_id`);

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
  ADD KEY `flat_id` (`flat_id`);

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
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `tbl_onlinepayment_info`
--
ALTER TABLE `tbl_onlinepayment_info`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `flat_holder_id` (`flat_holder_id`),
  ADD KEY `rent_holder_id` (`rent_holder_id`);

--
-- Indexes for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD PRIMARY KEY (`opt_id`);

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
  ADD KEY `flat_id` (`flat_id`),
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
  ADD KEY `visitor_id` (`visitor_id`),
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
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `circular_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_clubbooking`
--
ALTER TABLE `tbl_clubbooking`
  MODIFY `booking_id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_complaininfo`
--
ALTER TABLE `tbl_complaininfo`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_complainstatus`
--
ALTER TABLE `tbl_complainstatus`
  MODIFY `complainstatus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_complaintype`
--
ALTER TABLE `tbl_complaintype`
  MODIFY `complaintype_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `Expenses_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_expensetype`
--
ALTER TABLE `tbl_expensetype`
  MODIFY `Expenses_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_facility`
--
ALTER TABLE `tbl_facility`
  MODIFY `Facility_Id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `Flat_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_flatholder`
--
ALTER TABLE `tbl_flatholder`
  MODIFY `flatholder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_flatmember`
--
ALTER TABLE `tbl_flatmember`
  MODIFY `flat_member_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idprooftype_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_main_amount`
--
ALTER TABLE `tbl_main_amount`
  MODIFY `main_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_main_history`
--
ALTER TABLE `tbl_main_history`
  MODIFY `main_hid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_meeting`
--
ALTER TABLE `tbl_meeting`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_onlinepayment_info`
--
ALTER TABLE `tbl_onlinepayment_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  MODIFY `opt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_parkingoccupy`
--
ALTER TABLE `tbl_parkingoccupy`
  MODIFY `parking_occupy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rentholder`
--
ALTER TABLE `tbl_rentholder`
  MODIFY `rentholder_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roletype`
--
ALTER TABLE `tbl_roletype`
  MODIFY `roletype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_society`
--
ALTER TABLE `tbl_society`
  MODIFY `Society_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_staftype`
--
ALTER TABLE `tbl_staftype`
  MODIFY `staftype_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_vehical`
--
ALTER TABLE `tbl_vehical`
  MODIFY `vehical_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_visitorhistory`
--
ALTER TABLE `tbl_visitorhistory`
  MODIFY `visitorhistory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_visitorinfo`
--
ALTER TABLE `tbl_visitorinfo`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_wing`
--
ALTER TABLE `tbl_wing`
  MODIFY `Wing_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD CONSTRAINT `tbl_admin_ibfk_1` FOREIGN KEY (`Society_id`) REFERENCES `tbl_society` (`Society_ID`);

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
  ADD CONSTRAINT `tbl_circular_ibfk_1` FOREIGN KEY (`wing_id`) REFERENCES `tbl_wing` (`Wing_Id`);

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
  ADD CONSTRAINT `tbl_expensesoctety_ibfk_2` FOREIGN KEY (`wing_id`) REFERENCES `tbl_wing` (`Wing_Id`);

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
  ADD CONSTRAINT `tbl_main_amount_ibfk_1` FOREIGN KEY (`flat_id`) REFERENCES `tbl_flat` (`Flat_Id`);

--
-- Constraints for table `tbl_main_history`
--
ALTER TABLE `tbl_main_history`
  ADD CONSTRAINT `tbl_main_history_ibfk_1` FOREIGN KEY (`flat_id`) REFERENCES `tbl_flat` (`Flat_Id`);

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
  ADD CONSTRAINT `tbl_staffwing_wise_ibfk_1` FOREIGN KEY (`flat_id`) REFERENCES `tbl_flat` (`Flat_Id`),
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
  ADD CONSTRAINT `tbl_visitorhistory_ibfk_1` FOREIGN KEY (`visitor_id`) REFERENCES `tbl_visitorinfo` (`visitor_id`),
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

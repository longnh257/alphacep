-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 01:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphacep_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit_report`
--

CREATE TABLE `audit_report` (
  `audit_report_id` bigint(20) NOT NULL,
  `company_id` bigint(20) DEFAULT NULL,
  `company_office_id` bigint(20) DEFAULT NULL,
  `audit_date` date DEFAULT NULL,
  `last_audit_date` date DEFAULT NULL,
  `next_audit_date` date DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document_attribute`
--

CREATE TABLE `document_attribute` (
  `document_attribute_id` bigint(20) NOT NULL,
  `document_template_id` bigint(20) DEFAULT NULL,
  `seq_no` int(11) DEFAULT NULL,
  `attribute_name` varchar(100) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document_template`
--

CREATE TABLE `document_template` (
  `document_template_id` bigint(20) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `type` varchar(2) DEFAULT NULL,
  `target_doc` varchar(2) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_12_09_102138_create_s_function_table', 1),
(3, '2023_12_09_102256_create_s_function_category_table', 1),
(4, '2023_12_09_103348_create_s_code_table', 1),
(5, '2023_12_09_103948_create_m_user_table', 1),
(6, '2023_12_09_104148_create_m_customer_table', 1),
(7, '2023_12_09_105542_create_m_customer_office', 1),
(8, '2023_12_09_110217_create_m_customer_staff', 1),
(9, '2023_12_09_110503_create_m_sending_agency_table', 1),
(10, '2023_12_09_110625_create_m_training_facility_table', 1),
(11, '2023_12_09_110754_create_m_trainee_table', 1),
(12, '2023_12_09_111250_create_m_trainee_relative_table', 1),
(13, '2023_12_09_111512_create_m_company_table', 1),
(14, '2023_12_09_111940_create_m_company_office', 1),
(15, '2023_12_09_112139_create_m_company_staff', 1),
(16, '2023_12_09_112325_create_m_stay_facility', 1),
(17, '2023_12_09_112359_create_m_nationality', 1),
(18, '2023_12_09_112427_create_m_native_language', 1),
(19, '2023_12_09_112508_create_m_working_hour', 1),
(20, '2023_12_09_112646_create_m_flowgroup', 1),
(21, '2023_12_09_112834_create_m_workflow', 1),
(22, '2023_12_09_113002_create_m_work', 1),
(23, '2023_12_09_113059_create_project', 1),
(24, '2023_12_09_113136_create_project_work', 1),
(25, '2023_12_09_113221_create_project_work_task', 1),
(26, '2023_12_09_113345_create_project_work_task_file', 1),
(27, '2023_12_09_113415_create_project_trainee', 1),
(28, '2023_12_09_113453_create_project_trainee_contract', 1),
(29, '2023_12_09_114701_create_project_document', 1),
(30, '2023_12_09_114802_create_project_document_attribute', 1),
(31, '2023_12_09_114908_create_document_template', 1),
(32, '2023_12_09_114957_create_document_attribute', 1),
(33, '2023_12_09_115043_create_audit_report', 1),
(34, '2023_12_09_115118_create_visit_guidance_record', 1),
(35, '2023_12_09_115224_create_visit_guidance_record_detail', 1),
(36, '2023_12_09_104148_create_m_customer1_table', 2),
(37, '2023_12_09_104148_create_m_customer2_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `m_company`
--

CREATE TABLE `m_company` (
  `company_id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `name_kana` varchar(100) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `fax` varchar(12) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_company_office`
--

CREATE TABLE `m_company_office` (
  `company_office_id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `name_kana` varchar(100) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `fax` varchar(12) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `office_area` varchar(10) DEFAULT NULL,
  `office_number` varchar(30) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `practitioner_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_company_staff`
--

CREATE TABLE `m_company_staff` (
  `company_staff_id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `name_kana` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` varchar(12) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `company_office_id` varchar(100) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `certificate` text DEFAULT NULL,
  `mail` varchar(256) DEFAULT NULL,
  `certificate_submit` varchar(1) DEFAULT NULL,
  `assignment_date` date DEFAULT NULL,
  `work_condition` varchar(1) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_customer`
--

CREATE TABLE `m_customer` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `name_kana` varchar(100) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `fax` varchar(12) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `corporate_number` varchar(20) DEFAULT NULL,
  `office_area` varchar(10) DEFAULT NULL,
  `supervion_business_type` varchar(200) DEFAULT NULL,
  `supervion_license_number` varchar(20) DEFAULT NULL,
  `permission_date` date DEFAULT NULL,
  `planning_period_from_date` date DEFAULT NULL,
  `planning_period_from_to` date DEFAULT NULL,
  `permission_valid_from_date` date DEFAULT NULL,
  `permission_valid_to_date` date DEFAULT NULL,
  `jobs_comment` varchar(1000) DEFAULT NULL,
  `external_audit` varchar(1) DEFAULT NULL,
  `external_audit_person` varchar(50) DEFAULT NULL,
  `external_officer` varchar(50) DEFAULT NULL,
  `corporate_type` varchar(2) DEFAULT NULL,
  `overview` varchar(1000) DEFAULT NULL,
  `identifying_code` varchar(100) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_customer`
--

INSERT INTO `m_customer` (`customer_id`, `name`, `name_kana`, `tel`, `fax`, `postcode`, `address1`, `address2`, `corporate_number`, `office_area`, `supervion_business_type`, `supervion_license_number`, `permission_date`, `planning_period_from_date`, `planning_period_from_to`, `permission_valid_from_date`, `permission_valid_to_date`, `jobs_comment`, `external_audit`, `external_audit_person`, `external_officer`, `corporate_type`, `overview`, `identifying_code`, `note`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(2, 'Darryl George', 'Darryl George', '1233123412', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-12-12 02:23:52', 1, '2023-12-12 02:23:52'),
(3, 'customer 2 edit', 'customer 2 edit', '1234321112', '1234', '1234', '601 South Rockford Avenue, Rockford, IL 61108', '321 3271 6321', '32132', '1', '321', '321321321321', '2023-12-13', '2023-12-12', NULL, '2023-12-12', '2023-12-12', '32132132', '1', '1', '1', '1', '1', '1', '321321321', 1, '2023-12-12 03:02:48', 1, '2023-12-12 02:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `m_customer_office`
--

CREATE TABLE `m_customer_office` (
  `customer_office_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `name_kana` varchar(100) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `fax` varchar(12) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `corporate_number` varchar(20) DEFAULT NULL,
  `office_area` varchar(10) DEFAULT NULL,
  `office_number` varchar(30) DEFAULT NULL,
  `employment_insurance_office_number` varchar(30) DEFAULT NULL,
  `supervion_license_number` varchar(20) DEFAULT NULL,
  `permission_date` date DEFAULT NULL,
  `planning_period_from_date` date DEFAULT NULL,
  `planning_period_from_to` date DEFAULT NULL,
  `new_buid_date` date DEFAULT NULL,
  `abolition_date` date DEFAULT NULL,
  `jobs_comment` text DEFAULT NULL,
  `work_intern_area` varchar(2) DEFAULT NULL,
  `intern_prefecture` varchar(100) DEFAULT NULL,
  `audit_execution_frequency` smallint(6) DEFAULT NULL,
  `identifying_code` varchar(100) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_customer_office`
--

INSERT INTO `m_customer_office` (`customer_office_id`, `name`, `name_kana`, `tel`, `fax`, `postcode`, `address1`, `address2`, `corporate_number`, `office_area`, `office_number`, `employment_insurance_office_number`, `supervion_license_number`, `permission_date`, `planning_period_from_date`, `planning_period_from_to`, `new_buid_date`, `abolition_date`, `jobs_comment`, `work_intern_area`, `intern_prefecture`, `audit_execution_frequency`, `identifying_code`, `note`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(1, 'Office 1', 'Office 1', '1234123412', '1234', '61108', '601 South Rockford Avenue, Rockford, IL 61108', '1', '1', '1', '1', '1', '1', '2023-12-12', '2023-12-12', '2023-12-11', '2023-12-12', '2023-12-12', '1', '1', '1', 1, '1', '1', NULL, 1, '2023-12-12 03:46:10', 1, '2023-12-12 03:46:10'),
(2, 'office2', 'office2', '1234123412', '1', '61108', '601 South Rockford Avenue, Rockford, IL 61108', '321 3271 6321', '2', '7', '3', '8', '4', '2023-12-12', '2023-12-13', '2023-12-15', '2023-12-14', '2023-12-23', '321', '9', '5', 10, '6', '123', 2, 1, '2023-12-12 05:26:16', 1, '2023-12-12 04:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `m_customer_staff`
--

CREATE TABLE `m_customer_staff` (
  `customer_staff_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `name_kana` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` varchar(12) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `customer_office_id` varchar(100) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `certificate` varchar(500) DEFAULT NULL,
  `mail` varchar(256) DEFAULT NULL,
  `certificate_submit` varchar(1) DEFAULT NULL,
  `assignment_date` date DEFAULT NULL,
  `role` varchar(2) DEFAULT NULL,
  `work_condition` varchar(1) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_customer_staff`
--

INSERT INTO `m_customer_staff` (`customer_staff_id`, `name`, `name_kana`, `birthday`, `sex`, `position`, `nationality`, `customer_office_id`, `tel`, `postcode`, `address1`, `address2`, `certificate`, `mail`, `certificate_submit`, `assignment_date`, `role`, `work_condition`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(1, 'staff12', 'staff12', '2024-12-22', 'M', '2', '2', '2', '1234123411', '123213', '601 South Rockford Avenue, Rockford, IL 61108', '321 3271 6321', '2', 'staff12@email.com', '1', '2023-12-14', '0', '1', NULL, 1, '2023-12-12 05:14:23', 1, '2023-12-12 04:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `m_flowgroup`
--

CREATE TABLE `m_flowgroup` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `function_id` int(11) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_nationality`
--

CREATE TABLE `m_nationality` (
  `nationality_id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_native_language`
--

CREATE TABLE `m_native_language` (
  `native_language_id` bigint(20) NOT NULL,
  `native_language` varchar(100) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_sending_agency`
--

CREATE TABLE `m_sending_agency` (
  `sending_agency_id` bigint(20) NOT NULL,
  `representative_name` varchar(50) DEFAULT NULL,
  `representative_name_kana` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `fax` varchar(12) DEFAULT NULL,
  `mail` varchar(256) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_stay_facility`
--

CREATE TABLE `m_stay_facility` (
  `stay_facility_id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `stay_facility_form_div` varchar(2) DEFAULT NULL,
  `stay_facility_form_detail` varchar(50) DEFAULT NULL,
  `contributor_div` varchar(2) DEFAULT NULL,
  `contributor_name` varchar(50) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `total_area` varchar(5) DEFAULT NULL,
  `trainee_number` varchar(5) DEFAULT NULL,
  `house_density` varchar(5) DEFAULT NULL,
  `trainee_charge_detail` varchar(200) DEFAULT NULL,
  `other_note` varchar(200) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_trainee`
--

CREATE TABLE `m_trainee` (
  `trainee_id` bigint(20) NOT NULL,
  `alphabet_name` varchar(50) DEFAULT NULL,
  `kanji_name` varchar(30) DEFAULT NULL,
  `kana_name` varchar(30) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `marital_div` varchar(1) DEFAULT NULL,
  `nationality_id` int(11) DEFAULT NULL,
  `native_language_id` int(11) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `mobile_tel` varchar(12) DEFAULT NULL,
  `birth_place` varchar(30) DEFAULT NULL,
  `home_country_address` varchar(100) DEFAULT NULL,
  `enrollment_status_div` varchar(2) DEFAULT NULL,
  `difficulty_notification_div` varchar(1) DEFAULT NULL,
  `difficulty_notification_date` date DEFAULT NULL,
  `disappeared_status_div` varchar(1) DEFAULT NULL,
  `disappeared_date` date DEFAULT NULL,
  `resumption_status_div` varchar(1) DEFAULT NULL,
  `resumption_date` date DEFAULT NULL,
  `trainee_type` varchar(2) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `train_history` text DEFAULT NULL,
  `move_date` date DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `complete_date` date DEFAULT NULL,
  `sending_agency_id` int(11) DEFAULT NULL,
  `apply_immigration_name` varchar(50) DEFAULT NULL,
  `update_immigration_name` varchar(50) DEFAULT NULL,
  `passport_no` varchar(10) DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `schedule_landing_port` varchar(100) DEFAULT NULL,
  `stay_period` varchar(10) DEFAULT NULL,
  `visa_application_place` varchar(100) DEFAULT NULL,
  `entry_exit_history_div` varchar(1) DEFAULT NULL,
  `entry_exit_times` smallint(6) DEFAULT NULL,
  `entry_exit_div` varchar(1) DEFAULT NULL,
  `entry_exit_from_date` date DEFAULT NULL,
  `entry_exit_to_date` date DEFAULT NULL,
  `residence_status` varchar(30) DEFAULT NULL,
  `residence_period` varchar(10) DEFAULT NULL,
  `residence_card_number` varchar(12) DEFAULT NULL,
  `stay_expiration_date` date DEFAULT NULL,
  `applicant_agent` varchar(50) DEFAULT NULL,
  `relationship_with_trainee` varchar(30) DEFAULT NULL,
  `applicant_tel` varchar(12) DEFAULT NULL,
  `applicant_postcode` varchar(10) DEFAULT NULL,
  `applicant_address1` varchar(100) DEFAULT NULL,
  `applicant_address2` varchar(100) DEFAULT NULL,
  `change_permission_apply_reason` varchar(100) DEFAULT NULL,
  `update_permission_apply_reason` varchar(100) NOT NULL,
  `notice_mail` varchar(256) DEFAULT NULL,
  `relatives_in_japan` varchar(1) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_trainee_relative`
--

CREATE TABLE `m_trainee_relative` (
  `relative_id` bigint(20) NOT NULL,
  `relationship` varchar(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `live_together` varchar(1) DEFAULT NULL,
  `work_school_place` varchar(50) DEFAULT NULL,
  `mobile_tel` varchar(12) DEFAULT NULL,
  `residence_card_number` varchar(30) DEFAULT NULL,
  `trainee_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_training_facility`
--

CREATE TABLE `m_training_facility` (
  `training_facility_id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `food_expense_payment` varchar(1) DEFAULT NULL,
  `food_expense_payment_detail` varchar(100) DEFAULT NULL,
  `food_expense_trainee_charge` varchar(1) DEFAULT NULL,
  `food_expense_trainee_charge_detail` varchar(100) DEFAULT NULL,
  `food_expense_comment` varchar(200) DEFAULT NULL,
  `house_cost_payment` varchar(255) DEFAULT NULL,
  `house_cost_payment_detail` varchar(100) DEFAULT NULL,
  `house_cost_trainee_charge` varchar(1) DEFAULT NULL,
  `house_cost_trainee_charge_detail` varchar(100) DEFAULT NULL,
  `training_place_form` varchar(2) DEFAULT NULL,
  `training_place_form_detail` varchar(100) DEFAULT NULL,
  `training_place_name` varchar(50) DEFAULT NULL,
  `training_place_tel` varchar(12) DEFAULT NULL,
  `training_place_postcode` varchar(12) DEFAULT NULL,
  `training_place_address1` varchar(100) DEFAULT NULL,
  `training_place_address2` varchar(200) DEFAULT NULL,
  `training_place_area` varchar(5) DEFAULT NULL,
  `training_place_person` varchar(5) DEFAULT NULL,
  `training_place_room_area` varchar(5) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `group_id` int(11) NOT NULL,
  `is_active` smallint(6) DEFAULT 1 COMMENT '0: Deactive | 1: Active',
  `phone` varchar(191) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `device_token` longtext DEFAULT NULL,
  `mac_address` longtext DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verified` int(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `password_expiration` timestamp NULL DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id`, `name`, `email`, `email_verified_at`, `password`, `group_id`, `is_active`, `phone`, `address`, `device_token`, `mac_address`, `remember_token`, `created_at`, `updated_at`, `verified`, `deleted_at`, `password_expiration`, `customer_id`, `created_by_id`, `updated_by_id`) VALUES
(1, 'Super Admin', 'admin@gmail.com', NULL, '$2y$10$iU8vkYTqg9rlZzzqykVKK.6IlnmkhxqQRnF5vomFiMl8n0OgA4aLW', 1, 1, '1017245567', 'Mary Moore, 1313 E Main St, Portage MI 49024-2001.', NULL, NULL, NULL, '2023-10-10 11:29:18', '2023-11-16 03:59:36', 2, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_work`
--

CREATE TABLE `m_work` (
  `work_id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `workflow_id` int(11) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_workflow`
--

CREATE TABLE `m_workflow` (
  `flow_id` bigint(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `flowgroup_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_working_hour`
--

CREATE TABLE `m_working_hour` (
  `working_hour_id` bigint(20) NOT NULL,
  `working_hour_from` varchar(10) DEFAULT NULL,
  `working_hour_to` varchar(10) DEFAULT NULL,
  `rest_time_from` varchar(10) DEFAULT NULL,
  `rest_time_to` varchar(10) DEFAULT NULL,
  `rest_time_from_2` varchar(10) DEFAULT NULL,
  `rest_time_to_2` varchar(10) DEFAULT NULL,
  `rest_time_from_3` varchar(10) DEFAULT NULL,
  `rest_time_to_3` varchar(10) DEFAULT NULL,
  `rest_hour` int(11) DEFAULT NULL,
  `work_overtime` varchar(1) DEFAULT NULL,
  `holiday_plan` varchar(30) DEFAULT NULL,
  `working_hour_comment` varchar(350) DEFAULT NULL,
  `working_condition` int(11) DEFAULT NULL,
  `yearly_give` int(11) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` bigint(20) NOT NULL,
  `company_id` bigint(20) DEFAULT NULL,
  `sending_agency_id` bigint(20) DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  `trainee_number` int(11) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_document`
--

CREATE TABLE `project_document` (
  `project_document_id` bigint(20) NOT NULL,
  `project_trainee_id` bigint(20) DEFAULT NULL,
  `document_id` bigint(20) DEFAULT NULL,
  `document_name` varchar(256) DEFAULT NULL,
  `document_type` varchar(2) DEFAULT NULL,
  `target_doc` varchar(2) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_document_attribute`
--

CREATE TABLE `project_document_attribute` (
  `project_document_attribute_id` bigint(20) NOT NULL,
  `document_id` bigint(20) DEFAULT NULL,
  `seq_no` int(11) DEFAULT NULL,
  `attribute_name` varchar(100) DEFAULT NULL,
  `attribute_value` varchar(100) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_trainee`
--

CREATE TABLE `project_trainee` (
  `project_trainee_id` bigint(20) NOT NULL,
  `project_id` bigint(20) DEFAULT NULL,
  `trainee_id` bigint(20) DEFAULT NULL,
  `stay_facility_id` bigint(20) DEFAULT NULL,
  `training_facility_id` bigint(20) DEFAULT NULL,
  `sending_agency_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_trainee_contract`
--

CREATE TABLE `project_trainee_contract` (
  `contract_id` bigint(20) NOT NULL,
  `project_trainee_id` bigint(20) DEFAULT NULL,
  `training_office_id` bigint(20) DEFAULT NULL,
  `practitioner_group_id` bigint(20) DEFAULT NULL,
  `work_place_name` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `transition_occupation_id1` int(11) DEFAULT NULL,
  `transition_occupation_id2` int(11) DEFAULT NULL,
  `transition_occupation_id3` int(11) DEFAULT NULL,
  `other_transition_occupation` varchar(100) DEFAULT NULL,
  `schedule_entry_date_div` varchar(1) DEFAULT NULL,
  `schedule_entry_date` date DEFAULT NULL,
  `entry_date_div` varchar(1) DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  `no3_entry_date_div` varchar(1) DEFAULT NULL,
  `no3_entry_date` date DEFAULT NULL,
  `schedule_return_date_div` varchar(1) DEFAULT NULL,
  `schedule_return_from_date` date DEFAULT NULL,
  `schedule_return_to_date` date DEFAULT NULL,
  `pre_entry_training` varchar(255) DEFAULT NULL,
  `post_entry_training_div` varchar(1) DEFAULT NULL,
  `post_entry_training_from_date` date DEFAULT NULL,
  `post_entry_training_from_to` date DEFAULT NULL,
  `training_no1_certification_date_div` varchar(1) DEFAULT NULL,
  `training_no1_certification_date` date DEFAULT NULL,
  `training_no1_certification_number` varchar(20) DEFAULT NULL,
  `training_no1_practition_date_div` varchar(255) DEFAULT NULL,
  `training_no1_practition_from_date` date DEFAULT NULL,
  `training_no1_practition_to_date` date DEFAULT NULL,
  `training_no1_note` text DEFAULT NULL,
  `training_no2_certification_date_div` varchar(1) DEFAULT NULL,
  `training_no2_certification_date` date DEFAULT NULL,
  `training_no2_certification_number` varchar(20) DEFAULT NULL,
  `training_no2_practition_date_div` varchar(255) DEFAULT NULL,
  `training_no2_practition_from_date` date DEFAULT NULL,
  `training_no2_practition_to_date` date DEFAULT NULL,
  `training_no2_note` text DEFAULT NULL,
  `training_no3_certification_date_div` varchar(1) DEFAULT NULL,
  `training_no3_certification_date` date DEFAULT NULL,
  `training_no3_certification_number` varchar(20) DEFAULT NULL,
  `training_no3_practition_date_div` varchar(255) DEFAULT NULL,
  `training_no3_practition_from_date` date DEFAULT NULL,
  `training_no3_practition_to_date` date DEFAULT NULL,
  `training_no3_note` text DEFAULT NULL,
  `fixed_term_employment_contract` varchar(255) DEFAULT NULL,
  `employment_contract_from_date` date DEFAULT NULL,
  `employment_contract_from_to` date DEFAULT NULL,
  `work_hours_div` date DEFAULT NULL,
  `work_days_1_year` smallint(6) DEFAULT NULL,
  `work_days_2_year` smallint(6) DEFAULT NULL,
  `work_days_3_year` smallint(6) DEFAULT NULL,
  `work_days_4_year` smallint(6) DEFAULT NULL,
  `work_days_5_year` smallint(6) DEFAULT NULL,
  `holiday_days` smallint(6) DEFAULT NULL,
  `work_hours_per_day` varchar(20) DEFAULT NULL,
  `work_hours_per_week` varchar(20) DEFAULT NULL,
  `work_hours_per_week_decimal_notation` varchar(5) DEFAULT NULL,
  `work_hours_per_month` varchar(20) DEFAULT NULL,
  `work_hours_per_month_decimal_notation` varchar(5) DEFAULT NULL,
  `work_hours_per_year` varchar(20) DEFAULT NULL,
  `work_hours_per_year_decimal_notation` varchar(5) DEFAULT NULL,
  `post_entry_training_hours` smallint(6) DEFAULT NULL,
  `training_no1_hours` double(8,2) DEFAULT NULL,
  `training_no2_hours` double(8,2) DEFAULT NULL,
  `training_no3_hours` double(8,2) DEFAULT NULL,
  `training_span_period` varchar(255) DEFAULT NULL,
  `training_no1_basic_salary_for_month` decimal(10,0) DEFAULT NULL,
  `training_no1_basic_salary_for_day` decimal(10,0) DEFAULT NULL,
  `training_no1_basic_salary_for_hour` decimal(10,0) DEFAULT NULL,
  `training_no2_basic_salary_for_month` decimal(10,0) DEFAULT NULL,
  `training_no2_basic_salary_for_day` decimal(10,0) DEFAULT NULL,
  `training_no2_basic_salary_for_hour` decimal(10,0) DEFAULT NULL,
  `training_no3_basic_salary_for_month` decimal(10,0) DEFAULT NULL,
  `training_no3_basic_salary_for_day` decimal(10,0) DEFAULT NULL,
  `training_no3_basic_salary_for_hour` decimal(10,0) DEFAULT NULL,
  `comuting_allowance` decimal(10,0) DEFAULT NULL,
  `approx_amount` decimal(10,0) DEFAULT NULL,
  `food_expense_div` varchar(255) DEFAULT NULL,
  `food_expense_amount` decimal(10,0) DEFAULT NULL,
  `house_expense_amount` decimal(10,0) DEFAULT NULL,
  `accommodation_type` varchar(2) DEFAULT NULL,
  `light_heat_fee_div` varchar(255) DEFAULT NULL,
  `light_heat_fee` decimal(10,0) DEFAULT NULL,
  `other_amount` decimal(10,0) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_work`
--

CREATE TABLE `project_work` (
  `project_work_id` bigint(20) NOT NULL,
  `project_id` bigint(20) DEFAULT NULL,
  `work_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_work_task`
--

CREATE TABLE `project_work_task` (
  `task_id` bigint(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `project_work_id` bigint(20) DEFAULT NULL,
  `seq_no` int(11) DEFAULT NULL,
  `person_id` int(11) DEFAULT NULL,
  `complete_limit_date` date DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `complete_date` date DEFAULT NULL,
  `complete_user_id` int(11) DEFAULT NULL,
  `complete_user_name` varchar(30) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_work_task_file`
--

CREATE TABLE `project_work_task_file` (
  `task_file_id` bigint(20) NOT NULL,
  `file_name` varchar(256) DEFAULT NULL,
  `file_size` bigint(20) DEFAULT NULL,
  `seq_no` int(11) DEFAULT NULL,
  `file_data` blob DEFAULT NULL,
  `project_work_task_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_code`
--

CREATE TABLE `s_code` (
  `code_id` varchar(20) NOT NULL,
  `code_type` varchar(4) DEFAULT NULL,
  `code_value` varchar(100) DEFAULT NULL,
  `code_text` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_function`
--

CREATE TABLE `s_function` (
  `function_id` varchar(3) NOT NULL,
  `function_name` varchar(20) DEFAULT NULL,
  `category_id` varchar(2) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_function_category`
--

CREATE TABLE `s_function_category` (
  `category_id` varchar(2) NOT NULL,
  `category_name` varchar(20) DEFAULT NULL,
  `parent_category_id` varchar(2) DEFAULT NULL,
  `category_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visit_guidance_record`
--

CREATE TABLE `visit_guidance_record` (
  `visit_record_id` bigint(20) NOT NULL,
  `company_id` bigint(20) DEFAULT NULL,
  `company_office_id` bigint(20) DEFAULT NULL,
  `visit_staff_id` bigint(20) DEFAULT NULL,
  `trainee_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visit_guidance_record_detail`
--

CREATE TABLE `visit_guidance_record_detail` (
  `detail_id` bigint(20) NOT NULL,
  `visit_record_id` bigint(20) DEFAULT NULL,
  `seq_no` int(11) DEFAULT NULL,
  `visit_date` date DEFAULT NULL,
  `visit_time` varchar(10) DEFAULT NULL,
  `reflect_div` varchar(1) DEFAULT NULL,
  `training_progress` varchar(1) DEFAULT NULL,
  `training_level` varchar(1) DEFAULT NULL,
  `time_allowcation` varchar(1) DEFAULT NULL,
  `training_attitube` varchar(1) DEFAULT NULL,
  `training_willingness` varchar(1) DEFAULT NULL,
  `japanese_understanding` varchar(1) DEFAULT NULL,
  `life_attitude` varchar(1) DEFAULT NULL,
  `discipline_violation` varchar(1) DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_report`
--
ALTER TABLE `audit_report`
  ADD PRIMARY KEY (`audit_report_id`);

--
-- Indexes for table `document_attribute`
--
ALTER TABLE `document_attribute`
  ADD PRIMARY KEY (`document_attribute_id`);

--
-- Indexes for table `document_template`
--
ALTER TABLE `document_template`
  ADD PRIMARY KEY (`document_template_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_company`
--
ALTER TABLE `m_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `m_company_office`
--
ALTER TABLE `m_company_office`
  ADD PRIMARY KEY (`company_office_id`);

--
-- Indexes for table `m_company_staff`
--
ALTER TABLE `m_company_staff`
  ADD PRIMARY KEY (`company_staff_id`);

--
-- Indexes for table `m_customer`
--
ALTER TABLE `m_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `m_customer_office`
--
ALTER TABLE `m_customer_office`
  ADD PRIMARY KEY (`customer_office_id`);

--
-- Indexes for table `m_customer_staff`
--
ALTER TABLE `m_customer_staff`
  ADD PRIMARY KEY (`customer_staff_id`);

--
-- Indexes for table `m_flowgroup`
--
ALTER TABLE `m_flowgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_nationality`
--
ALTER TABLE `m_nationality`
  ADD PRIMARY KEY (`nationality_id`);

--
-- Indexes for table `m_native_language`
--
ALTER TABLE `m_native_language`
  ADD PRIMARY KEY (`native_language_id`);

--
-- Indexes for table `m_sending_agency`
--
ALTER TABLE `m_sending_agency`
  ADD PRIMARY KEY (`sending_agency_id`);

--
-- Indexes for table `m_stay_facility`
--
ALTER TABLE `m_stay_facility`
  ADD PRIMARY KEY (`stay_facility_id`);

--
-- Indexes for table `m_trainee`
--
ALTER TABLE `m_trainee`
  ADD PRIMARY KEY (`trainee_id`);

--
-- Indexes for table `m_trainee_relative`
--
ALTER TABLE `m_trainee_relative`
  ADD PRIMARY KEY (`relative_id`);

--
-- Indexes for table `m_training_facility`
--
ALTER TABLE `m_training_facility`
  ADD PRIMARY KEY (`training_facility_id`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `m_work`
--
ALTER TABLE `m_work`
  ADD PRIMARY KEY (`work_id`);

--
-- Indexes for table `m_workflow`
--
ALTER TABLE `m_workflow`
  ADD PRIMARY KEY (`flow_id`);

--
-- Indexes for table `m_working_hour`
--
ALTER TABLE `m_working_hour`
  ADD PRIMARY KEY (`working_hour_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_document`
--
ALTER TABLE `project_document`
  ADD PRIMARY KEY (`project_document_id`);

--
-- Indexes for table `project_document_attribute`
--
ALTER TABLE `project_document_attribute`
  ADD PRIMARY KEY (`project_document_attribute_id`);

--
-- Indexes for table `project_trainee`
--
ALTER TABLE `project_trainee`
  ADD PRIMARY KEY (`project_trainee_id`);

--
-- Indexes for table `project_trainee_contract`
--
ALTER TABLE `project_trainee_contract`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indexes for table `project_work`
--
ALTER TABLE `project_work`
  ADD PRIMARY KEY (`project_work_id`);

--
-- Indexes for table `project_work_task`
--
ALTER TABLE `project_work_task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `project_work_task_file`
--
ALTER TABLE `project_work_task_file`
  ADD PRIMARY KEY (`task_file_id`);

--
-- Indexes for table `s_code`
--
ALTER TABLE `s_code`
  ADD PRIMARY KEY (`code_id`);

--
-- Indexes for table `s_function`
--
ALTER TABLE `s_function`
  ADD PRIMARY KEY (`function_id`);

--
-- Indexes for table `s_function_category`
--
ALTER TABLE `s_function_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `visit_guidance_record`
--
ALTER TABLE `visit_guidance_record`
  ADD PRIMARY KEY (`visit_record_id`);

--
-- Indexes for table `visit_guidance_record_detail`
--
ALTER TABLE `visit_guidance_record_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `m_customer`
--
ALTER TABLE `m_customer`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_customer_office`
--
ALTER TABLE `m_customer_office`
  MODIFY `customer_office_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_customer_staff`
--
ALTER TABLE `m_customer_staff`
  MODIFY `customer_staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

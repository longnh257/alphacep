-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2023 lúc 11:43 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `alphacep_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `audit_report`
--

CREATE TABLE `audit_report` (
  `audit_report_id` bigint(20) UNSIGNED NOT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `audit_report`
--

INSERT INTO `audit_report` (`audit_report_id`, `company_id`, `company_office_id`, `audit_date`, `last_audit_date`, `next_audit_date`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(1, 1, 1, '2023-12-30', '2023-12-30', '2023-12-21', 1, 1, '2023-12-24 12:13:42', 1, '2023-12-24 12:24:21', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `document_attribute`
--

CREATE TABLE `document_attribute` (
  `document_attribute_id` bigint(20) UNSIGNED NOT NULL,
  `document_template_id` bigint(20) DEFAULT NULL,
  `seq_no` int(11) DEFAULT NULL,
  `attribute_name` varchar(254) DEFAULT NULL,
  `attribute_value` varchar(254) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `document_attribute`
--

INSERT INTO `document_attribute` (`document_attribute_id`, `document_template_id`, `seq_no`, `attribute_name`, `attribute_value`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(5, 2, 2, '1', '2', 6, 50, '2023-12-26 22:44:54', NULL, '2023-12-26 22:44:54', NULL),
(6, 2, 2, '3', '4', 6, 50, '2023-12-26 22:44:54', NULL, '2023-12-26 22:44:54', NULL),
(7, 2, 2, 'doc 1', 'doc 1', 6, 50, '2023-12-26 22:44:54', NULL, '2023-12-26 22:44:54', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `document_template`
--

CREATE TABLE `document_template` (
  `document_template_id` bigint(20) UNSIGNED NOT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `document_template`
--

INSERT INTO `document_template` (`document_template_id`, `name`, `type`, `target_doc`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(2, 'doc 1', '03', '03', 6, 50, '2023-12-26 22:44:54', NULL, '2023-12-26 22:44:54', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
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
-- Cấu trúc bảng cho bảng `m_company`
--

CREATE TABLE `m_company` (
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `name_kana` varchar(100) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `fax` varchar(12) DEFAULT NULL,
  `address1` varchar(254) DEFAULT NULL,
  `address2` varchar(254) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `m_company`
--

INSERT INTO `m_company` (`company_id`, `name`, `name_kana`, `tel`, `fax`, `address1`, `address2`, `postcode`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(2, 'company1', 'company1', '1231231231', 'company1', 'add1', 'add2', 'company1', 1, 1, '2023-12-25 20:42:25', 1, '2023-12-29 14:44:26'),
(4, 'comp2', 'comp2', '1231231231', NULL, NULL, NULL, NULL, 1, 1, '2023-12-27 12:50:57', NULL, '2023-12-27 12:50:57'),
(5, 'comp3', 'comp3', '1231231231', '2123', 'add3', 'add3', 'post', 1, 1, '2023-12-29 14:44:58', NULL, '2023-12-29 14:44:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_company_office`
--

CREATE TABLE `m_company_office` (
  `company_office_id` bigint(20) UNSIGNED NOT NULL,
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
  `company_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `m_company_office`
--

INSERT INTO `m_company_office` (`company_office_id`, `name`, `name_kana`, `tel`, `fax`, `postcode`, `address1`, `address2`, `office_area`, `office_number`, `note`, `practitioner_id`, `company_id`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(2, 'office1', 'office1', '1231231231', 'office1', 'office1', 'office1', 'office1', 'office1', 'office1', 'office1', NULL, 2, 1, 1, '2023-12-25 20:46:39', 1, '2023-12-25 20:46:39'),
(3, 'office2', 'office2', '1231231231', 'office1', 'office1', 'office1', 'office1', 'office1', 'office1', 'office1', NULL, 2, 1, 1, '2023-12-25 20:49:39', 1, '2023-12-25 20:49:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_company_staff`
--

CREATE TABLE `m_company_staff` (
  `company_staff_id` bigint(20) UNSIGNED NOT NULL,
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
  `company_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `m_company_staff`
--

INSERT INTO `m_company_staff` (`company_staff_id`, `name`, `name_kana`, `birthday`, `sex`, `position`, `nationality`, `company_office_id`, `tel`, `postcode`, `address1`, `address2`, `certificate`, `mail`, `certificate_submit`, `assignment_date`, `work_condition`, `company_id`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(1, 'st1', 'st1', NULL, 'M', NULL, NULL, '3', '1231231231', NULL, NULL, NULL, NULL, NULL, '1', NULL, '1', 2, 1, 1, '2023-12-27 13:03:01', 1, '2023-12-27 13:03:01', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_customer`
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
  `external_audit` varchar(254) DEFAULT NULL,
  `external_audit_person` varchar(50) DEFAULT NULL,
  `external_officer` varchar(50) DEFAULT NULL,
  `corporate_type` varchar(254) DEFAULT NULL,
  `overview` varchar(1000) DEFAULT NULL,
  `identifying_code` varchar(100) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `m_customer`
--

INSERT INTO `m_customer` (`customer_id`, `name`, `name_kana`, `tel`, `fax`, `postcode`, `address1`, `address2`, `corporate_number`, `office_area`, `supervion_business_type`, `supervion_license_number`, `permission_date`, `planning_period_from_date`, `planning_period_from_to`, `permission_valid_from_date`, `permission_valid_to_date`, `jobs_comment`, `external_audit`, `external_audit_person`, `external_officer`, `corporate_type`, `overview`, `identifying_code`, `note`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(1, 'customer 1', 'customer 1', '1231231231', '1231231231', '99502', 'add 1', 'add 2', '321', '123', '123', '123', '2023-12-12', '2023-12-14', NULL, '2023-12-13', '2023-12-21', '123', '12123', '123', '123', '123', '123', '123', '123', 1, '2023-12-17 10:31:55', 1, '2023-12-17 10:31:55'),
(6, 'user1@gmail.com', 'user1@gmail.com', '1231231231', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-12-26 22:19:22', 1, '2023-12-26 22:19:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_customer_office`
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
-- Đang đổ dữ liệu cho bảng `m_customer_office`
--

INSERT INTO `m_customer_office` (`customer_office_id`, `name`, `name_kana`, `tel`, `fax`, `postcode`, `address1`, `address2`, `corporate_number`, `office_area`, `office_number`, `employment_insurance_office_number`, `supervion_license_number`, `permission_date`, `planning_period_from_date`, `planning_period_from_to`, `new_buid_date`, `abolition_date`, `jobs_comment`, `work_intern_area`, `intern_prefecture`, `audit_execution_frequency`, `identifying_code`, `note`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(1, '2313', '321', '1234123412', '321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, 1, 1, '2023-12-24 11:26:33', 1, '2023-12-24 11:26:33'),
(2, 'user1@gmail.com', 'user1@gmail.com', '1231231231', '21321321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, 1, 1, '2023-12-27 12:49:37', 1, '2023-12-27 12:49:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_customer_staff`
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
-- Đang đổ dữ liệu cho bảng `m_customer_staff`
--

INSERT INTO `m_customer_staff` (`customer_staff_id`, `name`, `name_kana`, `birthday`, `sex`, `position`, `nationality`, `customer_office_id`, `tel`, `postcode`, `address1`, `address2`, `certificate`, `mail`, `certificate_submit`, `assignment_date`, `role`, `work_condition`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(1, 'staff1', 'staff1', NULL, 'M', NULL, NULL, '1', '1231231231', NULL, NULL, NULL, NULL, 'staff1@gmail.com', '1', NULL, '1', '1', 1, 1, '2023-12-24 14:37:58', 1, '2023-12-24 14:37:58'),
(2, 'staff2', 'staff2', NULL, 'M', NULL, NULL, '1', '1231231231', NULL, NULL, NULL, NULL, 'staff2@gmail.com', '1', NULL, '1', '1', 1, 1, '2023-12-24 14:38:18', 1, '2023-12-24 14:38:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_flowgroup`
--

CREATE TABLE `m_flowgroup` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
-- Cấu trúc bảng cho bảng `m_nationality`
--

CREATE TABLE `m_nationality` (
  `nationality_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `m_nationality`
--

INSERT INTO `m_nationality` (`nationality_id`, `name`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(2, 'United States', 1, '2023-12-17 12:24:40', 1, '2023-12-17 12:24:40', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_native_language`
--

CREATE TABLE `m_native_language` (
  `native_language_id` bigint(20) UNSIGNED NOT NULL,
  `native_language` varchar(100) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_sending_agency`
--

CREATE TABLE `m_sending_agency` (
  `sending_agency_id` bigint(20) UNSIGNED NOT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `m_sending_agency`
--

INSERT INTO `m_sending_agency` (`sending_agency_id`, `representative_name`, `representative_name_kana`, `postcode`, `address1`, `address2`, `tel`, `fax`, `mail`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(2, 'agency 1', 'agency 1', 'office 1', '321', 'agency 1', '1231231231', '21321321', 'agency@gmail.com', 1, 1, '2023-12-20 18:04:02', 1, '2023-12-20 18:04:02'),
(3, 'agency  2', 'agency2', 'office 1', '321', 'agency 1', '1231231231', '21321321', 'agency2@gmail.com', 1, 1, '2023-12-20 18:04:13', 1, '2023-12-20 18:04:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_stay_facility`
--

CREATE TABLE `m_stay_facility` (
  `stay_facility_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(254) DEFAULT NULL,
  `stay_facility_form_div` varchar(254) DEFAULT NULL,
  `stay_facility_form_detail` varchar(254) DEFAULT NULL,
  `contributor_div` varchar(254) DEFAULT NULL,
  `contributor_name` varchar(254) DEFAULT NULL,
  `tel` varchar(254) DEFAULT NULL,
  `postcode` varchar(254) DEFAULT NULL,
  `address1` varchar(254) DEFAULT NULL,
  `address2` varchar(254) DEFAULT NULL,
  `total_area` varchar(254) DEFAULT NULL,
  `trainee_number` varchar(254) DEFAULT NULL,
  `house_density` varchar(254) DEFAULT NULL,
  `trainee_charge_detail` varchar(254) DEFAULT NULL,
  `other_note` varchar(254) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `m_stay_facility`
--

INSERT INTO `m_stay_facility` (`stay_facility_id`, `name`, `stay_facility_form_div`, `stay_facility_form_detail`, `contributor_div`, `contributor_name`, `tel`, `postcode`, `address1`, `address2`, `total_area`, `trainee_number`, `house_density`, `trainee_charge_detail`, `other_note`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(1, 'stay 12', '02', 'stay 12', '01', 'stay 12', '1231231231', 'stay 12', 'stay 1', 'stay 12', 'stay 1', 'stay 12', 'stay 1', 'stay 12', 'stay 1', 1, 1, '2023-12-29 13:50:07', 1, '2023-12-29 13:55:46', 1),
(2, 'stay2', '02', 'stay2', '02', 'stay2', 'stay2', 'stay2stay2', 'stay2', 'stay2', 'stay2', 'stay2', 'stay2', 'stay2', 'stay2', 1, 1, '2023-12-29 13:51:55', NULL, '2023-12-29 13:51:55', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_trainee`
--

CREATE TABLE `m_trainee` (
  `trainee_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(254) DEFAULT NULL,
  `name_kanji` varchar(254) DEFAULT NULL,
  `name_kana` varchar(254) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `marital_div` varchar(1) DEFAULT NULL,
  `nationality_id` bigint(20) DEFAULT NULL,
  `native_language_id` bigint(20) DEFAULT NULL,
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
  `update_permission_apply_reason` varchar(100) DEFAULT NULL,
  `notice_mail` varchar(256) DEFAULT NULL,
  `relatives_in_japan` varchar(1) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `m_trainee`
--

INSERT INTO `m_trainee` (`trainee_id`, `name`, `name_kanji`, `name_kana`, `birthday`, `sex`, `marital_div`, `nationality_id`, `native_language_id`, `occupation`, `mobile_tel`, `birth_place`, `home_country_address`, `enrollment_status_div`, `difficulty_notification_div`, `difficulty_notification_date`, `disappeared_status_div`, `disappeared_date`, `resumption_status_div`, `resumption_date`, `trainee_type`, `status`, `train_history`, `move_date`, `start_date`, `complete_date`, `sending_agency_id`, `apply_immigration_name`, `update_immigration_name`, `passport_no`, `expiration_date`, `schedule_landing_port`, `stay_period`, `visa_application_place`, `entry_exit_history_div`, `entry_exit_times`, `entry_exit_div`, `entry_exit_from_date`, `entry_exit_to_date`, `residence_status`, `residence_period`, `residence_card_number`, `stay_expiration_date`, `applicant_agent`, `relationship_with_trainee`, `applicant_tel`, `applicant_postcode`, `applicant_address1`, `applicant_address2`, `change_permission_apply_reason`, `update_permission_apply_reason`, `notice_mail`, `relatives_in_japan`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(1, 'TRAINEE name 2', 'TRAINEE name  2 kanji', 'TRAINEE name 2 kana', NULL, '2', '1', 1, 1, '2', '1234123413', '2', '2', '02', '0', '2023-03-17', '0', '2023-01-17', '0', '2023-01-17', '01', '02', '2', '2023-01-17', '2024-12-17', '2024-12-17', 2, '2', '2', '2', '2024-12-17', '2', '2', '2', '0', 2, '0', '2023-12-19', '2023-02-01', '2', '2', '2', '2023-02-01', '2', '2', '12', '12', '12', '12', '2', '2', 'dsa@gmail.com', '0', 1, 1, '2023-12-17 23:02:06', 1, '2023-12-17 22:55:33'),
(2, 'trainee1', 'trainee1 kanji', 'trainee1 kana', NULL, '1', '0', 1, 1, NULL, '1234123413', NULL, NULL, '01', '1', NULL, '1', NULL, '1', NULL, '01', '01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2023-12-20 19:21:26', 1, '2023-12-20 19:21:26'),
(3, 'trainee3', 'trainee3 kanji', 'trainee3 kana', NULL, '1', '0', 1, 1, NULL, '1234123413', NULL, NULL, '01', '1', NULL, '1', NULL, '1', NULL, '01', '01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2023-12-20 19:23:46', 1, '2023-12-20 19:23:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_trainee_relative`
--

CREATE TABLE `m_trainee_relative` (
  `relative_id` bigint(20) UNSIGNED NOT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `m_trainee_relative`
--

INSERT INTO `m_trainee_relative` (`relative_id`, `relationship`, `name`, `birthday`, `nationality`, `live_together`, `work_school_place`, `mobile_tel`, `residence_card_number`, `trainee_id`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(1, 'f', '123', NULL, '1', '1', '2321', '321', '321', 2, 1, 1, '2023-12-27 10:18:04', NULL, '2023-12-27 10:18:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_training_facility`
--

CREATE TABLE `m_training_facility` (
  `training_facility_id` bigint(20) UNSIGNED NOT NULL,
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
  `training_place_area` varchar(254) DEFAULT NULL,
  `training_place_person` varchar(254) DEFAULT NULL,
  `training_place_room_area` varchar(254) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `m_training_facility`
--

INSERT INTO `m_training_facility` (`training_facility_id`, `name`, `tel`, `postcode`, `address1`, `address2`, `food_expense_payment`, `food_expense_payment_detail`, `food_expense_trainee_charge`, `food_expense_trainee_charge_detail`, `food_expense_comment`, `house_cost_payment`, `house_cost_payment_detail`, `house_cost_trainee_charge`, `house_cost_trainee_charge_detail`, `training_place_form`, `training_place_form_detail`, `training_place_name`, `training_place_tel`, `training_place_postcode`, `training_place_address1`, `training_place_address2`, `training_place_area`, `training_place_person`, `training_place_room_area`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(1, 'test12', 'test13', 'test14', 'test15', 'test16', '0', 'test17', '0', 'test12', 'test13', '0', 'test14', '0', 'test15', '99', 'test12', 'test14', 'test13', 'test15', 'test16', 'test18', 'test17', 'test19', 'test111', 1, 1, '2023-12-20 16:48:06', 1, '2023-12-20 16:58:08'),
(2, 'facility1', 'facility1', 'facility1', 'facility1', 'facility1', '1', 'facility1', '1', 'facility1', 'facility1', '1', 'facility1', '1', 'facility1', '01', NULL, 'facility1', 'facility1', 'facility1', 'facility1', 'facility1', 'facility1', 'facility1', 'facility1', 1, 1, '2023-12-20 18:05:05', 1, '2023-12-20 18:05:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_user`
--

CREATE TABLE `m_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT 2,
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
-- Đang đổ dữ liệu cho bảng `m_user`
--

INSERT INTO `m_user` (`id`, `name`, `email`, `email_verified_at`, `password`, `group_id`, `is_active`, `phone`, `address`, `device_token`, `mac_address`, `remember_token`, `created_at`, `updated_at`, `verified`, `deleted_at`, `password_expiration`, `customer_id`, `created_by_id`, `updated_by_id`) VALUES
(1, 'Super Admin', 'admin@gmail.com', NULL, '$2y$10$iU8vkYTqg9rlZzzqykVKK.6IlnmkhxqQRnF5vomFiMl8n0OgA4aLW', 1, 1, '1017245567', 'Mary Moore, 1313 E Main St, Portage MI 49024-2001.', NULL, NULL, NULL, '2023-10-10 11:29:18', '2023-11-16 03:59:36', 2, NULL, NULL, 1, NULL, NULL),
(50, 'user1@gmail.com', 'user1@gmail.com', NULL, '$2y$12$3uyQYxtppdIncH26VmmwRuuCWQ2vx66qYvl0GLVIInC51j0NtGC4G', 2, 1, '1234123412', NULL, NULL, NULL, NULL, '2023-12-26 22:19:23', '2023-12-26 22:19:23', 1, NULL, NULL, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_work`
--

CREATE TABLE `m_work` (
  `work_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `workflow_id` int(11) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `m_work`
--

INSERT INTO `m_work` (`work_id`, `name`, `workflow_id`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(1, 'work1', 1, 1, 1, '2023-12-20 15:00:38', 1, '2023-12-29 15:15:43', 1),
(2, 'work2', 2, 1, 1, '2023-12-22 19:41:19', 1, '2023-12-29 15:15:56', 1),
(3, '1', 4, 6, 50, '2023-12-27 17:38:28', NULL, '2023-12-27 17:38:28', NULL),
(4, 'work3', 1, 1, 1, '2023-12-29 14:11:25', 1, '2023-12-29 15:15:59', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_workflow`
--

CREATE TABLE `m_workflow` (
  `flow_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `flowgroup_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `m_workflow`
--

INSERT INTO `m_workflow` (`flow_id`, `name`, `flowgroup_id`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(1, '受入前事前説明', 1, 1, NULL, '2023-12-20 14:26:37', NULL, '2023-12-20 14:26:37', NULL),
(2, '求人', 1, 1, NULL, '2023-12-20 14:58:23', 1, '2023-12-20 14:59:40', NULL),
(4, '21', 1, 6, 50, '2023-12-27 17:37:59', NULL, '2023-12-27 17:37:59', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `m_working_hour`
--

CREATE TABLE `m_working_hour` (
  `working_hour_id` bigint(20) UNSIGNED NOT NULL,
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
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `project`
--

CREATE TABLE `project` (
  `project_id` bigint(20) UNSIGNED NOT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `project`
--

INSERT INTO `project` (`project_id`, `company_id`, `sending_agency_id`, `entry_date`, `trainee_number`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(1, NULL, NULL, '2023-12-20', 15, 1, NULL, '2023-12-20 13:15:31', NULL, '2023-12-20 13:15:31', NULL),
(4, NULL, NULL, '2023-12-04', 1321, 1, 1, '2023-12-27 11:58:55', NULL, '2023-12-27 11:58:55', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project_document`
--

CREATE TABLE `project_document` (
  `project_document_id` bigint(20) UNSIGNED NOT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `project_document`
--

INSERT INTO `project_document` (`project_document_id`, `project_trainee_id`, `document_id`, `document_name`, `document_type`, `target_doc`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(3, 3, NULL, 'doc1', '01', '01', 1, 1, '2023-12-26 18:24:22', NULL, '2023-12-26 18:24:22', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project_document_attribute`
--

CREATE TABLE `project_document_attribute` (
  `project_document_attribute_id` bigint(20) UNSIGNED NOT NULL,
  `document_id` bigint(20) DEFAULT NULL,
  `project_document_id` bigint(20) UNSIGNED DEFAULT NULL,
  `seq_no` int(11) DEFAULT NULL,
  `attribute_name` varchar(254) DEFAULT NULL,
  `attribute_value` varchar(254) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `project_document_attribute`
--

INSERT INTO `project_document_attribute` (`project_document_attribute_id`, `document_id`, `project_document_id`, `seq_no`, `attribute_name`, `attribute_value`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(20, NULL, 3, 3, '123', '123', 1, 1, '2023-12-26 20:42:21', NULL, '2023-12-26 20:42:21', NULL),
(21, NULL, 3, 3, '123', '123', 1, 1, '2023-12-26 20:42:21', NULL, '2023-12-26 20:42:21', NULL),
(22, NULL, 3, 3, '4', '4', 1, 1, '2023-12-26 20:42:21', NULL, '2023-12-26 20:42:21', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project_trainee`
--

CREATE TABLE `project_trainee` (
  `project_trainee_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) NOT NULL,
  `trainee_id` bigint(20) NOT NULL,
  `stay_facility_id` bigint(20) DEFAULT NULL,
  `training_facility_id` bigint(20) DEFAULT NULL,
  `sending_agency_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `project_trainee`
--

INSERT INTO `project_trainee` (`project_trainee_id`, `project_id`, `trainee_id`, `stay_facility_id`, `training_facility_id`, `sending_agency_id`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`) VALUES
(3, 1, 1, NULL, 1, 2, NULL, NULL, '2023-12-20 19:27:13', NULL, '2023-12-20 19:27:13'),
(4, 1, 3, NULL, 1, 2, NULL, NULL, '2023-12-20 19:27:33', NULL, '2023-12-20 19:27:33'),
(5, 1, 3, NULL, 2, 3, 1, 1, '2023-12-26 23:34:34', NULL, '2023-12-26 23:34:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project_trainee_contract`
--

CREATE TABLE `project_trainee_contract` (
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `project_trainee_id` bigint(20) DEFAULT NULL,
  `training_facility_id` bigint(20) DEFAULT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `project_trainee_contract`
--

INSERT INTO `project_trainee_contract` (`contract_id`, `project_trainee_id`, `training_facility_id`, `practitioner_group_id`, `work_place_name`, `postcode`, `address1`, `address2`, `transition_occupation_id1`, `transition_occupation_id2`, `transition_occupation_id3`, `other_transition_occupation`, `schedule_entry_date_div`, `schedule_entry_date`, `entry_date_div`, `entry_date`, `no3_entry_date_div`, `no3_entry_date`, `schedule_return_date_div`, `schedule_return_from_date`, `schedule_return_to_date`, `pre_entry_training`, `post_entry_training_div`, `post_entry_training_from_date`, `post_entry_training_from_to`, `training_no1_certification_date_div`, `training_no1_certification_date`, `training_no1_certification_number`, `training_no1_practition_date_div`, `training_no1_practition_from_date`, `training_no1_practition_to_date`, `training_no1_note`, `training_no2_certification_date_div`, `training_no2_certification_date`, `training_no2_certification_number`, `training_no2_practition_date_div`, `training_no2_practition_from_date`, `training_no2_practition_to_date`, `training_no2_note`, `training_no3_certification_date_div`, `training_no3_certification_date`, `training_no3_certification_number`, `training_no3_practition_date_div`, `training_no3_practition_from_date`, `training_no3_practition_to_date`, `training_no3_note`, `fixed_term_employment_contract`, `employment_contract_from_date`, `employment_contract_from_to`, `work_hours_div`, `work_days_1_year`, `work_days_2_year`, `work_days_3_year`, `work_days_4_year`, `work_days_5_year`, `holiday_days`, `work_hours_per_day`, `work_hours_per_week`, `work_hours_per_week_decimal_notation`, `work_hours_per_month`, `work_hours_per_month_decimal_notation`, `work_hours_per_year`, `work_hours_per_year_decimal_notation`, `post_entry_training_hours`, `training_no1_hours`, `training_no2_hours`, `training_no3_hours`, `training_span_period`, `training_no1_basic_salary_for_month`, `training_no1_basic_salary_for_day`, `training_no1_basic_salary_for_hour`, `training_no2_basic_salary_for_month`, `training_no2_basic_salary_for_day`, `training_no2_basic_salary_for_hour`, `training_no3_basic_salary_for_month`, `training_no3_basic_salary_for_day`, `training_no3_basic_salary_for_hour`, `comuting_allowance`, `approx_amount`, `food_expense_div`, `food_expense_amount`, `house_expense_amount`, `accommodation_type`, `light_heat_fee_div`, `light_heat_fee`, `other_amount`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(1, 3, 1, 1, '1', '1', '1', '1', 1, 1, 1, '1', '1', '2023-12-21', '1', '2023-12-22', '1', '2023-12-27', '1', '2023-12-21', '2023-12-21', '1', '1', '2023-12-21', NULL, '1', '2023-12-21', '1', '1', '2023-12-21', '2023-12-21', '1', '1', '2023-12-21', '1', '1', '2023-12-21', '2023-12-21', '1', '1', '2023-12-21', '1', '1', '2024-11-11', '2023-12-21', '1', '1', '2023-12-21', '2023-12-20', '2023-12-21', 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', 1, 1.00, 1.00, 1.00, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, '1', 1, 1, '01', '1', 1, 1, 1, 1, '2023-12-21 18:55:54', 1, '2023-12-22 14:40:36', NULL),
(2, 4, 2, 1, '1', '1', '1', '1', 1, 1, 1, '1', '0', '2023-12-21', '0', '2023-12-22', '0', '2023-12-27', '1', '2023-12-21', '2023-12-21', '1', '1', '2023-12-21', NULL, '0', '2023-12-21', '1', '0', '2023-12-21', '2023-12-21', '1', '0', '2023-12-21', '1', '0', '2023-12-21', '2023-12-21', '1', '0', '2023-12-21', '1', '0', '2024-11-11', '2023-12-21', '1', '0', '2023-12-21', '2023-12-20', '2023-12-21', 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', 1, 1.00, 1.00, 1.00, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, '0', 1, 1, '02', '0', 1, 1, 1, 1, '2023-12-21 18:57:46', 1, '2023-12-21 18:57:46', NULL),
(3, 5, 2, 1, '1', '1', '1', '1', 1, NULL, NULL, NULL, '1', NULL, '1', NULL, '1', NULL, '1', NULL, NULL, '1', '1', NULL, NULL, '1', NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '01', '1', NULL, NULL, 1, 1, '2023-12-26 23:34:50', 1, '2023-12-26 23:34:50', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project_work`
--

CREATE TABLE `project_work` (
  `project_work_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) DEFAULT NULL,
  `work_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `project_work`
--

INSERT INTO `project_work` (`project_work_id`, `project_id`, `work_id`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(5, 1, 1, 1, 1, '2023-12-23 13:30:21', NULL, '2023-12-23 13:30:21', NULL),
(6, 1, 2, 1, 1, '2023-12-27 11:46:36', NULL, '2023-12-27 11:46:36', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project_work_task`
--

CREATE TABLE `project_work_task` (
  `task_id` bigint(20) UNSIGNED NOT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `project_work_task`
--

INSERT INTO `project_work_task` (`task_id`, `title`, `project_work_id`, `seq_no`, `person_id`, `complete_limit_date`, `content`, `status`, `complete_date`, `complete_user_id`, `complete_user_name`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(1, 'work task title2', 5, 12, 12, '2023-12-27', 'work task title2', '0', '2023-12-14', 12, '1dsa2', 1, 1, '2023-12-23 14:18:06', 1, '2023-12-23 14:47:08', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project_work_task_file`
--

CREATE TABLE `project_work_task_file` (
  `task_file_id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(256) DEFAULT NULL,
  `file_size` bigint(20) DEFAULT NULL,
  `seq_no` int(11) DEFAULT NULL,
  `file_data` longtext DEFAULT NULL,
  `project_work_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `updated_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `s_code`
--

CREATE TABLE `s_code` (
  `code_id` bigint(20) UNSIGNED NOT NULL,
  `code_type` varchar(4) DEFAULT NULL,
  `code_value` varchar(100) DEFAULT NULL,
  `code_text` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `s_function`
--

CREATE TABLE `s_function` (
  `function_id` bigint(20) UNSIGNED NOT NULL,
  `function_name` varchar(20) DEFAULT NULL,
  `category_id` varchar(2) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `s_function`
--

INSERT INTO `s_function` (`function_id`, `function_name`, `category_id`, `url`) VALUES
(1, 'b', '1', 'b'),
(2, 'ac a', '1', 'ac-a'),
(3, 'cde', '3', 'cde');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `s_function_category`
--

CREATE TABLE `s_function_category` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(20) DEFAULT NULL,
  `parent_category_id` varchar(2) DEFAULT NULL,
  `category_level` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `s_function_category`
--

INSERT INTO `s_function_category` (`category_id`, `category_name`, `parent_category_id`, `category_level`) VALUES
(1, '案件一覧', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `visit_guidance_record`
--

CREATE TABLE `visit_guidance_record` (
  `visit_record_id` bigint(20) UNSIGNED NOT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `visit_guidance_record`
--

INSERT INTO `visit_guidance_record` (`visit_record_id`, `company_id`, `company_office_id`, `visit_staff_id`, `trainee_id`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(1, 2, 1, 1, 1, 1, 1, '2023-12-24 14:38:39', NULL, '2023-12-24 14:38:39', NULL),
(2, 2, 3, 1, 2, 1, 1, '2023-12-24 14:40:14', 1, '2023-12-29 14:54:47', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `visit_guidance_record_detail`
--

CREATE TABLE `visit_guidance_record_detail` (
  `detail_id` bigint(20) UNSIGNED NOT NULL,
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
-- Đang đổ dữ liệu cho bảng `visit_guidance_record_detail`
--

INSERT INTO `visit_guidance_record_detail` (`detail_id`, `visit_record_id`, `seq_no`, `visit_date`, `visit_time`, `reflect_div`, `training_progress`, `training_level`, `time_allowcation`, `training_attitube`, `training_willingness`, `japanese_understanding`, `life_attitude`, `discipline_violation`, `note`, `customer_id`, `created_by_id`, `created_on`, `updated_by_id`, `updated_on`, `updated_count`) VALUES
(2, 2, 1, NULL, 'comp2', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, 1, 1, '2023-12-27 12:51:34', NULL, '2023-12-27 12:51:34', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `audit_report`
--
ALTER TABLE `audit_report`
  ADD PRIMARY KEY (`audit_report_id`);

--
-- Chỉ mục cho bảng `document_attribute`
--
ALTER TABLE `document_attribute`
  ADD PRIMARY KEY (`document_attribute_id`);

--
-- Chỉ mục cho bảng `document_template`
--
ALTER TABLE `document_template`
  ADD PRIMARY KEY (`document_template_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `m_company`
--
ALTER TABLE `m_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Chỉ mục cho bảng `m_company_office`
--
ALTER TABLE `m_company_office`
  ADD PRIMARY KEY (`company_office_id`);

--
-- Chỉ mục cho bảng `m_company_staff`
--
ALTER TABLE `m_company_staff`
  ADD PRIMARY KEY (`company_staff_id`);

--
-- Chỉ mục cho bảng `m_customer`
--
ALTER TABLE `m_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `m_customer_office`
--
ALTER TABLE `m_customer_office`
  ADD PRIMARY KEY (`customer_office_id`);

--
-- Chỉ mục cho bảng `m_customer_staff`
--
ALTER TABLE `m_customer_staff`
  ADD PRIMARY KEY (`customer_staff_id`);

--
-- Chỉ mục cho bảng `m_flowgroup`
--
ALTER TABLE `m_flowgroup`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `m_nationality`
--
ALTER TABLE `m_nationality`
  ADD PRIMARY KEY (`nationality_id`);

--
-- Chỉ mục cho bảng `m_native_language`
--
ALTER TABLE `m_native_language`
  ADD PRIMARY KEY (`native_language_id`);

--
-- Chỉ mục cho bảng `m_sending_agency`
--
ALTER TABLE `m_sending_agency`
  ADD PRIMARY KEY (`sending_agency_id`);

--
-- Chỉ mục cho bảng `m_stay_facility`
--
ALTER TABLE `m_stay_facility`
  ADD PRIMARY KEY (`stay_facility_id`);

--
-- Chỉ mục cho bảng `m_trainee`
--
ALTER TABLE `m_trainee`
  ADD PRIMARY KEY (`trainee_id`);

--
-- Chỉ mục cho bảng `m_trainee_relative`
--
ALTER TABLE `m_trainee_relative`
  ADD PRIMARY KEY (`relative_id`);

--
-- Chỉ mục cho bảng `m_training_facility`
--
ALTER TABLE `m_training_facility`
  ADD PRIMARY KEY (`training_facility_id`);

--
-- Chỉ mục cho bảng `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `m_work`
--
ALTER TABLE `m_work`
  ADD PRIMARY KEY (`work_id`);

--
-- Chỉ mục cho bảng `m_workflow`
--
ALTER TABLE `m_workflow`
  ADD PRIMARY KEY (`flow_id`);

--
-- Chỉ mục cho bảng `m_working_hour`
--
ALTER TABLE `m_working_hour`
  ADD PRIMARY KEY (`working_hour_id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Chỉ mục cho bảng `project_document`
--
ALTER TABLE `project_document`
  ADD PRIMARY KEY (`project_document_id`);

--
-- Chỉ mục cho bảng `project_document_attribute`
--
ALTER TABLE `project_document_attribute`
  ADD PRIMARY KEY (`project_document_attribute_id`);

--
-- Chỉ mục cho bảng `project_trainee`
--
ALTER TABLE `project_trainee`
  ADD PRIMARY KEY (`project_trainee_id`);

--
-- Chỉ mục cho bảng `project_trainee_contract`
--
ALTER TABLE `project_trainee_contract`
  ADD PRIMARY KEY (`contract_id`);

--
-- Chỉ mục cho bảng `project_work`
--
ALTER TABLE `project_work`
  ADD PRIMARY KEY (`project_work_id`);

--
-- Chỉ mục cho bảng `project_work_task`
--
ALTER TABLE `project_work_task`
  ADD PRIMARY KEY (`task_id`);

--
-- Chỉ mục cho bảng `project_work_task_file`
--
ALTER TABLE `project_work_task_file`
  ADD PRIMARY KEY (`task_file_id`);

--
-- Chỉ mục cho bảng `s_code`
--
ALTER TABLE `s_code`
  ADD PRIMARY KEY (`code_id`);

--
-- Chỉ mục cho bảng `s_function`
--
ALTER TABLE `s_function`
  ADD PRIMARY KEY (`function_id`);

--
-- Chỉ mục cho bảng `s_function_category`
--
ALTER TABLE `s_function_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `visit_guidance_record`
--
ALTER TABLE `visit_guidance_record`
  ADD PRIMARY KEY (`visit_record_id`);

--
-- Chỉ mục cho bảng `visit_guidance_record_detail`
--
ALTER TABLE `visit_guidance_record_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `audit_report`
--
ALTER TABLE `audit_report`
  MODIFY `audit_report_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `document_attribute`
--
ALTER TABLE `document_attribute`
  MODIFY `document_attribute_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `document_template`
--
ALTER TABLE `document_template`
  MODIFY `document_template_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `m_company`
--
ALTER TABLE `m_company`
  MODIFY `company_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `m_company_office`
--
ALTER TABLE `m_company_office`
  MODIFY `company_office_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `m_company_staff`
--
ALTER TABLE `m_company_staff`
  MODIFY `company_staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `m_customer`
--
ALTER TABLE `m_customer`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `m_customer_office`
--
ALTER TABLE `m_customer_office`
  MODIFY `customer_office_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `m_customer_staff`
--
ALTER TABLE `m_customer_staff`
  MODIFY `customer_staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `m_flowgroup`
--
ALTER TABLE `m_flowgroup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `m_nationality`
--
ALTER TABLE `m_nationality`
  MODIFY `nationality_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `m_native_language`
--
ALTER TABLE `m_native_language`
  MODIFY `native_language_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `m_sending_agency`
--
ALTER TABLE `m_sending_agency`
  MODIFY `sending_agency_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `m_stay_facility`
--
ALTER TABLE `m_stay_facility`
  MODIFY `stay_facility_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `m_trainee`
--
ALTER TABLE `m_trainee`
  MODIFY `trainee_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `m_trainee_relative`
--
ALTER TABLE `m_trainee_relative`
  MODIFY `relative_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `m_training_facility`
--
ALTER TABLE `m_training_facility`
  MODIFY `training_facility_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `m_work`
--
ALTER TABLE `m_work`
  MODIFY `work_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `m_workflow`
--
ALTER TABLE `m_workflow`
  MODIFY `flow_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `m_working_hour`
--
ALTER TABLE `m_working_hour`
  MODIFY `working_hour_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `project`
--
ALTER TABLE `project`
  MODIFY `project_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `project_document`
--
ALTER TABLE `project_document`
  MODIFY `project_document_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `project_document_attribute`
--
ALTER TABLE `project_document_attribute`
  MODIFY `project_document_attribute_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `project_trainee`
--
ALTER TABLE `project_trainee`
  MODIFY `project_trainee_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `project_trainee_contract`
--
ALTER TABLE `project_trainee_contract`
  MODIFY `contract_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `project_work`
--
ALTER TABLE `project_work`
  MODIFY `project_work_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `project_work_task`
--
ALTER TABLE `project_work_task`
  MODIFY `task_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `project_work_task_file`
--
ALTER TABLE `project_work_task_file`
  MODIFY `task_file_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `s_code`
--
ALTER TABLE `s_code`
  MODIFY `code_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `s_function`
--
ALTER TABLE `s_function`
  MODIFY `function_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `s_function_category`
--
ALTER TABLE `s_function_category`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `visit_guidance_record`
--
ALTER TABLE `visit_guidance_record`
  MODIFY `visit_record_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `visit_guidance_record_detail`
--
ALTER TABLE `visit_guidance_record_detail`
  MODIFY `detail_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

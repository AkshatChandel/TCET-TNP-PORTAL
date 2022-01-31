-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 08:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcet tnp`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_master`
--

CREATE TABLE `academic_master` (
  `Academic_Id` bigint(20) NOT NULL,
  `Academic_Name` varchar(20) NOT NULL,
  `Academic_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch_master`
--

CREATE TABLE `branch_master` (
  `Branch_Id` bigint(20) NOT NULL,
  `Branch_Name` varchar(100) NOT NULL,
  `Branch_Code` varchar(50) DEFAULT NULL,
  `Branch_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_branch`
--

CREATE TABLE `company_branch` (
  `Company_Branch_Id` bigint(20) NOT NULL,
  `Company_Id` bigint(20) NOT NULL,
  `Branch_Id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_criteria`
--

CREATE TABLE `company_criteria` (
  `Company_Criteria_Id` bigint(20) NOT NULL,
  `Company_Id` bigint(20) NOT NULL,
  `Criteria` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_master`
--

CREATE TABLE `company_master` (
  `Company_Id` bigint(20) NOT NULL,
  `Company_Name` varchar(100) NOT NULL,
  `Company_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_round`
--

CREATE TABLE `company_round` (
  `Company_Round_Id` bigint(20) NOT NULL,
  `Company_Id` bigint(20) NOT NULL,
  `Round_Name` varchar(100) NOT NULL,
  `Round_DateTime` datetime NOT NULL,
  `Round_Duration` int(11) NOT NULL,
  `Round_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_round_student_selected`
--

CREATE TABLE `company_round_student_selected` (
  `Company_Round_Student_Selected_Id` bigint(20) NOT NULL,
  `Compnay_Round_Id` bigint(20) NOT NULL,
  `Student_Class_Id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_students_hired`
--

CREATE TABLE `company_students_hired` (
  `Placement_Company_Id` bigint(20) NOT NULL,
  `Student_Class_Id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_student_registration`
--

CREATE TABLE `company_student_registration` (
  `Company_Student_Registration_Id` bigint(20) NOT NULL,
  `Student_Class_Id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `designation_master`
--

CREATE TABLE `designation_master` (
  `Designation_Id` bigint(20) NOT NULL,
  `Designation_Name` varchar(100) NOT NULL,
  `Designation_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message_draft`
--

CREATE TABLE `message_draft` (
  `Message_Draft_Id` bigint(20) NOT NULL,
  `Message_Content` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message_sent`
--

CREATE TABLE `message_sent` (
  `Message_Sent_Id` bigint(20) NOT NULL,
  `Message_Draft_Id` bigint(20) NOT NULL,
  `Send_To` varchar(10) NOT NULL,
  `Person_Id` bigint(20) NOT NULL,
  `Message_Sent_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_master`
--

CREATE TABLE `quiz_master` (
  `Quiz_Id` bigint(20) NOT NULL,
  `Quiz_Name` varchar(100) NOT NULL,
  `Quiz_Code` varchar(50) DEFAULT NULL,
  `Quiz_Time` int(11) DEFAULT NULL,
  `Quiz_Duration` int(11) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Quiz_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `Quiz_Question_Id` bigint(20) NOT NULL,
  `Quiz_Id` bigint(20) NOT NULL,
  `Quiz_Question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question_option`
--

CREATE TABLE `quiz_question_option` (
  `Quiz_Question_Option_Id` bigint(20) NOT NULL,
  `Quiz_Question_Id` bigint(20) NOT NULL,
  `Quiz_Option` varchar(500) NOT NULL,
  `Is_Correct_Answer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_branch`
--

CREATE TABLE `staff_branch` (
  `Staff_Branch_Id` bigint(20) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Branch_Id` bigint(20) NOT NULL,
  `Designation_Id` bigint(20) NOT NULL,
  `Staff_Branch_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `Staff_Login_Id` bigint(20) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Staff_Username` varchar(100) NOT NULL,
  `Staff_Password` varchar(100) NOT NULL,
  `Is_Admin` varchar(20) NOT NULL,
  `Staff_Login_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_master`
--

CREATE TABLE `staff_master` (
  `Staff_Id` bigint(20) NOT NULL,
  `Staff_College_Id` varchar(20) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Middle_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Address` varchar(500) NOT NULL,  
  `Staff_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_academics`
--

CREATE TABLE `student_academics` (
  `Student_Academics_Id` bigint(20) NOT NULL,
  `Student_Class_Id` bigint(20) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Exam_Code` varchar(100) DEFAULT NULL,
  `SGPA` float NOT NULL,
  `Backlog` varchar(5) NOT NULL,
  `Backlog_Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
  `Student_Class_Id` bigint(20) NOT NULL,
  `Student_Id` bigint(20) NOT NULL,
  `Academic_Id` bigint(20) NOT NULL,
  `Branch_Id` bigint(20) NOT NULL,
  `Semester` tinyint(4) NOT NULL,
  `Roll_No` smallint(6) NOT NULL,
  `Student_Class_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `Student_Login_Id` bigint(20) NOT NULL,
  `Student_Id` bigint(20) NOT NULL,
  `Student_Username` varchar(100) NOT NULL,
  `Student_Password` varchar(100) NOT NULL,
  `Student_Login_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE `student_master` (
  `Student_Id` bigint(20) NOT NULL,
  `Student_College_Id` varchar(20) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Middle_Name` varchar(100) DEFAULT NULL,
  `Last_Name` varchar(100) DEFAULT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Class_10_Percentage` float NOT NULL,
  `From_Class12_Or_Diploma` varchar(10) NOT NULL,
  `Class_12_Percentage` float NOT NULL,
  `Diploma_Percentage` float NOT NULL,
  `JEE_Marks` smallint(6) NOT NULL,
  `JEE_Out_Of` smallint(6) NOT NULL,
  `CET_Marks` smallint(6) NOT NULL,
  `CET_Out_Of` smallint(6) NOT NULL,
  `Student_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_quiz`
--

CREATE TABLE `student_quiz` (
  `Student_Quiz_Id` bigint(20) NOT NULL,
  `Student_Class_Id` bigint(20) NOT NULL,
  `Quiz_Id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_quiz_answer`
--

CREATE TABLE `student_quiz_answer` (
  `Student_Quiz_Answer_Id` bigint(20) NOT NULL,
  `Student_Quiz_Id` bigint(20) NOT NULL,
  `Quiz_Question_Id` bigint(20) NOT NULL,
  `Quiz_Question_Option_Id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `training_lecture`
--

CREATE TABLE `training_lecture` (
  `Training_Lecture_Id` bigint(20) NOT NULL,
  `Lecture_Name` varchar(100) NOT NULL,
  `Lecture_Code` varchar(50) DEFAULT NULL,
  `Lecture_DateTime` datetime NOT NULL,
  `Lecture_Link` varchar(1000) NOT NULL,
  `Lecture_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `training_lecture_attendance`
--

CREATE TABLE `training_lecture_attendance` (
  `Training_Lecture_Attendance_Id` bigint(20) NOT NULL,
  `Training_Lecture_Id` bigint(20) NOT NULL,
  `Student_Class_Id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `training_lecture_branch`
--

CREATE TABLE `training_lecture_branch` (
  `Training_Lecture_Branch_Id` bigint(20) NOT NULL,
  `Training_Lecture_Id` bigint(20) NOT NULL,
  `Branch_Id` bigint(20) NOT NULL,
  `Semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_master`
--
ALTER TABLE `academic_master`
  ADD PRIMARY KEY (`Academic_Id`);

--
-- Indexes for table `branch_master`
--
ALTER TABLE `branch_master`
  ADD PRIMARY KEY (`Branch_Id`);

--
-- Indexes for table `company_branch`
--
ALTER TABLE `company_branch`
  ADD PRIMARY KEY (`Company_Branch_Id`);

--
-- Indexes for table `company_criteria`
--
ALTER TABLE `company_criteria`
  ADD PRIMARY KEY (`Company_Criteria_Id`);

--
-- Indexes for table `company_master`
--
ALTER TABLE `company_master`
  ADD PRIMARY KEY (`Company_Id`);

--
-- Indexes for table `company_round`
--
ALTER TABLE `company_round`
  ADD PRIMARY KEY (`Company_Round_Id`);

--
-- Indexes for table `company_round_student_selected`
--
ALTER TABLE `company_round_student_selected`
  ADD PRIMARY KEY (`Company_Round_Student_Selected_Id`);

--
-- Indexes for table `company_students_hired`
--
ALTER TABLE `company_students_hired`
  ADD PRIMARY KEY (`Placement_Company_Id`);

--
-- Indexes for table `company_student_registration`
--
ALTER TABLE `company_student_registration`
  ADD PRIMARY KEY (`Company_Student_Registration_Id`);

--
-- Indexes for table `designation_master`
--
ALTER TABLE `designation_master`
  ADD PRIMARY KEY (`Designation_Id`);

--
-- Indexes for table `message_draft`
--
ALTER TABLE `message_draft`
  ADD PRIMARY KEY (`Message_Draft_Id`);

--
-- Indexes for table `message_sent`
--
ALTER TABLE `message_sent`
  ADD PRIMARY KEY (`Message_Sent_Id`);

--
-- Indexes for table `quiz_master`
--
ALTER TABLE `quiz_master`
  ADD PRIMARY KEY (`Quiz_Id`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`Quiz_Question_Id`);

--
-- Indexes for table `quiz_question_option`
--
ALTER TABLE `quiz_question_option`
  ADD PRIMARY KEY (`Quiz_Question_Option_Id`);

--
-- Indexes for table `staff_branch`
--
ALTER TABLE `staff_branch`
  ADD PRIMARY KEY (`Staff_Branch_Id`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`Staff_Login_Id`);

--
-- Indexes for table `staff_master`
--
ALTER TABLE `staff_master`
  ADD PRIMARY KEY (`Staff_Id`);

--
-- Indexes for table `student_academics`
--
ALTER TABLE `student_academics`
  ADD PRIMARY KEY (`Student_Academics_Id`);

--
-- Indexes for table `student_class`
--
ALTER TABLE `student_class`
  ADD PRIMARY KEY (`Student_Class_Id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`Student_Login_Id`);

--
-- Indexes for table `student_master`
--
ALTER TABLE `student_master`
  ADD PRIMARY KEY (`Student_Id`);

--
-- Indexes for table `student_quiz`
--
ALTER TABLE `student_quiz`
  ADD PRIMARY KEY (`Student_Quiz_Id`);

--
-- Indexes for table `student_quiz_answer`
--
ALTER TABLE `student_quiz_answer`
  ADD PRIMARY KEY (`Student_Quiz_Answer_Id`);

--
-- Indexes for table `training_lecture`
--
ALTER TABLE `training_lecture`
  ADD PRIMARY KEY (`Training_Lecture_Id`);

--
-- Indexes for table `training_lecture_attendance`
--
ALTER TABLE `training_lecture_attendance`
  ADD PRIMARY KEY (`Training_Lecture_Attendance_Id`);

--
-- Indexes for table `training_lecture_branch`
--
ALTER TABLE `training_lecture_branch`
  ADD PRIMARY KEY (`Training_Lecture_Branch_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_master`
--
ALTER TABLE `academic_master`
  MODIFY `Academic_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch_master`
--
ALTER TABLE `branch_master`
  MODIFY `Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_branch`
--
ALTER TABLE `company_branch`
  MODIFY `Company_Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_criteria`
--
ALTER TABLE `company_criteria`
  MODIFY `Company_Criteria_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_master`
--
ALTER TABLE `company_master`
  MODIFY `Company_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_round`
--
ALTER TABLE `company_round`
  MODIFY `Company_Round_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_round_student_selected`
--
ALTER TABLE `company_round_student_selected`
  MODIFY `Company_Round_Student_Selected_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_students_hired`
--
ALTER TABLE `company_students_hired`
  MODIFY `Placement_Company_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_student_registration`
--
ALTER TABLE `company_student_registration`
  MODIFY `Company_Student_Registration_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designation_master`
--
ALTER TABLE `designation_master`
  MODIFY `Designation_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_draft`
--
ALTER TABLE `message_draft`
  MODIFY `Message_Draft_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_sent`
--
ALTER TABLE `message_sent`
  MODIFY `Message_Sent_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_master`
--
ALTER TABLE `quiz_master`
  MODIFY `Quiz_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `Quiz_Question_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_question_option`
--
ALTER TABLE `quiz_question_option`
  MODIFY `Quiz_Question_Option_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_branch`
--
ALTER TABLE `staff_branch`
  MODIFY `Staff_Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `Staff_Login_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_master`
--
ALTER TABLE `staff_master`
  MODIFY `Staff_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_academics`
--
ALTER TABLE `student_academics`
  MODIFY `Student_Academics_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_class`
--
ALTER TABLE `student_class`
  MODIFY `Student_Class_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `Student_Login_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_master`
--
ALTER TABLE `student_master`
  MODIFY `Student_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_quiz`
--
ALTER TABLE `student_quiz`
  MODIFY `Student_Quiz_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_quiz_answer`
--
ALTER TABLE `student_quiz_answer`
  MODIFY `Student_Quiz_Answer_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_lecture`
--
ALTER TABLE `training_lecture`
  MODIFY `Training_Lecture_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_lecture_attendance`
--
ALTER TABLE `training_lecture_attendance`
  MODIFY `Training_Lecture_Attendance_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_lecture_branch`
--
ALTER TABLE `training_lecture_branch`
  MODIFY `Training_Lecture_Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

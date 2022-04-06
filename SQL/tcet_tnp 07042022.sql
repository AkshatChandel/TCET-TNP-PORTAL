-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 12:53 AM
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
-- Table structure for table `academic_session_master`
--

CREATE TABLE `academic_session_master` (
  `Academic_Session_Id` bigint(20) NOT NULL,
  `Academic_Session_Name` varchar(20) NOT NULL,
  `Academic_Session_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_session_master`
--

INSERT INTO `academic_session_master` (`Academic_Session_Id`, `Academic_Session_Name`, `Academic_Session_Status`) VALUES
(1, '2018-2019', 'Active'),
(2, '2019-2020', 'De-Active');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `Announcement_Id` bigint(20) NOT NULL,
  `Announcement_Head` varchar(100) NOT NULL,
  `Announcement_Content` varchar(2000) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Announcement_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`Announcement_Id`, `Announcement_Head`, `Announcement_Content`, `Staff_Id`, `Announcement_Status`) VALUES
(1, 'Death Note', 'Death Note (stylized in all caps) is a Japanese manga series written by Tsugumi Ohba and illustrated by Takeshi Obata. The story follows Light Yagami, a teen genius who discovers a mysterious notebook: the \"Death Note\", which belonged to the Shinigami Ryuk, and grants the user the supernatural ability to kill anyone whose name is written in its pages. The series centers around Light\'s subsequent attempts to use the Death Note to carry out a worldwide massacre of individuals whom he deems immoral and to create a crime-free society, using the alias of a god-like vigilante named \"Kira\", and the subsequent efforts of an elite Japanese police task force, led by enigmatic detective L, to apprehend him.', 1, 'Active'),
(2, 'F.R.I.E.N.D.S', 'Friends is an American television sitcom created by David Crane and Marta Kauffman, which aired on NBC from September 22, 1994, to May 6, 2004, lasting ten seasons.[1] With an ensemble cast starring Jennifer Aniston, Courteney Cox, Lisa Kudrow, Matt LeBlanc, Matthew Perry and David Schwimmer, the show revolves around six friends in their 20s and 30s who live in Manhattan, New York City.', 1, 'Active'),
(3, 'Game of Thrones', 'Game of Thrones is an American fantasy drama television series created by David Benioff and D. B. Weiss for HBO. It is an adaptation of A Song of Ice and Fire, a series of fantasy novels by George R. R. Martin, the first of which is A Game of Thrones. The show was shot in the United Kingdom, Canada, Croatia, Iceland, Malta, Morocco, and Spain. It premiered on HBO in the United States on April 17, 2011, and concluded on May 19, 2019, with 73 episodes broadcast over eight seasons.', 1, 'Active'),
(4, 'Silicon Valley', 'Silicon Valley is an American comedy television series created by Mike Judge, John Altschuler and Dave Krinsky. It premiered on HBO on April 6, 2014, running six seasons for a total of 53 episodes.[1] The series finale aired on December 8, 2019.[2][3][4] The series, a parody of Silicon Valley culture, focuses on Richard Hendricks (Thomas Middleditch), a programmer who founds a startup company called Pied Piper, and chronicles his struggles trying to maintain his company while facing competition from larger entities.', 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_branch`
--

CREATE TABLE `announcement_branch` (
  `Announcement_Branch_Id` bigint(20) NOT NULL,
  `Announcement_Id` bigint(20) NOT NULL,
  `Branch_Id` bigint(20) NOT NULL,
  `Announcement_Branch_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_branch`
--

INSERT INTO `announcement_branch` (`Announcement_Branch_Id`, `Announcement_Id`, `Branch_Id`, `Announcement_Branch_Status`) VALUES
(1, 1, 1, 'Active'),
(2, 1, 2, 'Active'),
(3, 2, 1, 'Active'),
(4, 2, 2, 'Active'),
(5, 2, 3, 'Active'),
(6, 2, 4, 'Active'),
(7, 3, 1, 'Active'),
(8, 3, 2, 'Active'),
(9, 3, 3, 'Active'),
(10, 3, 4, 'Active'),
(11, 4, 1, 'Active'),
(12, 4, 2, 'Active'),
(13, 4, 3, 'Active'),
(14, 4, 4, 'Active');

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

--
-- Dumping data for table `branch_master`
--

INSERT INTO `branch_master` (`Branch_Id`, `Branch_Name`, `Branch_Code`, `Branch_Status`) VALUES
(1, 'Computer Engineering', '1', 'Active'),
(2, 'Information Technology', '2', 'Active'),
(3, 'Electronics & Telecommunications', '3', 'Active'),
(4, 'Mechanical Engineering', '4', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `company_branch`
--

CREATE TABLE `company_branch` (
  `Company_Branch_Id` bigint(20) NOT NULL,
  `Company_Id` bigint(20) NOT NULL,
  `Branch_Id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_branch`
--

INSERT INTO `company_branch` (`Company_Branch_Id`, `Company_Id`, `Branch_Id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 2, 3),
(6, 2, 4),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3),
(10, 3, 4),
(11, 4, 4),
(12, 5, 1),
(13, 5, 2),
(14, 6, 1),
(15, 6, 2),
(16, 6, 3),
(17, 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `company_criteria`
--

CREATE TABLE `company_criteria` (
  `Company_Criteria_Id` bigint(20) NOT NULL,
  `Company_Id` bigint(20) NOT NULL,
  `Company_Criteria` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_criteria`
--

INSERT INTO `company_criteria` (`Company_Criteria_Id`, `Company_Id`, `Company_Criteria`) VALUES
(1, 1, 'Class 10 Percentage - 75%'),
(2, 1, 'Class 12 Percentage - 60%'),
(3, 1, 'CGPA - 7'),
(4, 2, 'CGPA - 7.5'),
(5, 2, 'No Active Backlog'),
(6, 3, '12th Percentage - 60%'),
(7, 3, 'No Backlog'),
(8, 4, 'Minimum CGPA - 7.5'),
(9, 4, 'No Active Backlogs'),
(10, 5, 'CGPA - 6'),
(11, 6, 'Class 10 Percentage - 80%'),
(12, 6, 'Class 12 Percentage - 70%'),
(13, 6, 'Degree Percentage - 65%'),
(14, 6, 'No Active Backlogs'),
(15, 6, 'No more than 4 Dead KT');

-- --------------------------------------------------------

--
-- Table structure for table `company_master`
--

CREATE TABLE `company_master` (
  `Company_Id` bigint(20) NOT NULL,
  `Company_Name` varchar(100) NOT NULL,
  `Academic_Session_Id` bigint(20) NOT NULL,
  `Company_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_master`
--

INSERT INTO `company_master` (`Company_Id`, `Company_Name`, `Academic_Session_Id`, `Company_Status`) VALUES
(1, 'Infosys', 1, 'Active'),
(2, 'Congnizant', 1, 'Active'),
(3, 'Tata Consultancy Services', 1, 'Active'),
(4, 'Mechanical Company', 1, 'Active'),
(5, 'Tata Motors', 1, 'Active'),
(6, 'LTI', 1, 'Active');

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

--
-- Dumping data for table `company_round`
--

INSERT INTO `company_round` (`Company_Round_Id`, `Company_Id`, `Round_Name`, `Round_DateTime`, `Round_Duration`, `Round_Status`) VALUES
(1, 1, 'Aptitude Test', '2022-04-06 12:00:00', 60, 'To be held'),
(2, 1, 'Coding Round 1', '2022-04-07 12:00:00', 90, 'To be held'),
(3, 1, 'Coding Round 2', '2022-04-08 14:00:00', 90, 'To be held'),
(4, 1, 'Technical Interview', '2022-04-10 15:00:00', 120, 'To be held'),
(5, 1, 'HR Interview', '2022-04-11 15:00:00', 120, 'To be held'),
(6, 2, 'Aptitude Test', '2022-04-10 11:00:00', 60, 'To be held'),
(7, 2, 'Coding Round', '2022-04-12 13:00:00', 60, 'To be held'),
(8, 2, 'Interview', '2022-04-15 15:00:00', 60, 'To be held'),
(9, 3, 'TCS NTQ', '2022-04-20 09:00:00', 180, 'To be held'),
(10, 3, 'Technical Interview', '2022-04-25 15:00:00', 60, 'To be held'),
(11, 3, 'HR Interview', '2022-04-25 15:00:00', 60, 'To be held'),
(12, 4, 'Interview', '2022-04-30 13:00:00', 120, 'To be held'),
(13, 5, 'Aptitude Test', '2022-04-24 10:30:00', 60, 'To be held'),
(14, 5, 'Interview', '2022-04-26 10:30:00', 60, 'To be held'),
(15, 6, 'Aptitude Test', '2022-04-26 12:00:00', 60, 'To be held'),
(16, 6, 'Coding Round 1', '2022-04-26 14:00:00', 60, 'To be held'),
(17, 6, 'Coding Round 2', '2022-04-26 16:00:00', 60, 'To be held'),
(18, 6, 'Coding Round 3', '2022-04-26 18:00:00', 60, 'To be held'),
(19, 6, 'Technical Interview 1', '2022-04-30 13:00:00', 60, 'To be held'),
(20, 6, 'Technical Interview 2', '2022-05-02 09:00:00', 60, 'To be held'),
(21, 6, 'HR Interview', '2022-05-03 09:00:00', 60, 'To be held');

-- --------------------------------------------------------

--
-- Table structure for table `company_round_student_selected`
--

CREATE TABLE `company_round_student_selected` (
  `Company_Round_Student_Selected_Id` bigint(20) NOT NULL,
  `Company_Round_Id` bigint(20) NOT NULL,
  `Student_Class_Id` bigint(20) NOT NULL,
  `Company_Round_Student_Selected_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_student_hired`
--

CREATE TABLE `company_student_hired` (
  `Company_Student_Hired_Id` bigint(20) NOT NULL,
  `Company_Id` bigint(20) NOT NULL,
  `Student_Class_Id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_student_registration`
--

CREATE TABLE `company_student_registration` (
  `Company_Student_Registration_Id` bigint(20) NOT NULL,
  `Company_Id` bigint(20) NOT NULL,
  `Student_Class_Id` bigint(20) NOT NULL,
  `Company_Student_Registration_Status` varchar(20) NOT NULL
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

--
-- Dumping data for table `designation_master`
--

INSERT INTO `designation_master` (`Designation_Id`, `Designation_Name`, `Designation_Status`) VALUES
(1, 'Professor', 'Active'),
(2, 'Assistant Professor', 'Active'),
(3, 'Head of Department', 'Active'),
(4, 'Lab Assistant', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `message_draft`
--

CREATE TABLE `message_draft` (
  `Message_Draft_Id` bigint(20) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Message_Draft_Head` varchar(100) NOT NULL,
  `Message_Content` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_draft`
--

INSERT INTO `message_draft` (`Message_Draft_Id`, `Staff_Id`, `Message_Draft_Head`, `Message_Content`) VALUES
(1, 1, 'Hiring Announcement for Cognizant', '---------fdfdfd'),
(2, 1, 'Hiring for Infosys', 'Content');

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

--
-- Dumping data for table `message_sent`
--

INSERT INTO `message_sent` (`Message_Sent_Id`, `Message_Draft_Id`, `Send_To`, `Person_Id`, `Message_Sent_Status`) VALUES
(1, 1, 'Student', 1, 'Sent'),
(2, 1, 'Student', 4, 'Sent'),
(3, 1, 'Student', 5, 'Sent'),
(4, 1, 'Student', 7, 'Sent'),
(5, 1, 'Student', 9, 'Sent'),
(6, 2, 'Student', 1, 'Sent'),
(7, 2, 'Student', 3, 'Sent'),
(8, 2, 'Student', 4, 'Sent');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_master`
--

CREATE TABLE `quiz_master` (
  `Quiz_Id` bigint(20) NOT NULL,
  `Quiz_Name` varchar(100) NOT NULL,
  `Quiz_Code` varchar(50) DEFAULT NULL,
  `Quiz_Time` datetime DEFAULT NULL,
  `Quiz_Duration` int(11) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Quiz_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_master`
--

INSERT INTO `quiz_master` (`Quiz_Id`, `Quiz_Name`, `Quiz_Code`, `Quiz_Time`, `Quiz_Duration`, `Staff_Id`, `Quiz_Status`) VALUES
(1, 'Quiz 1', '1', '2022-02-10 14:00:00', 20, 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `Quiz_Question_Id` bigint(20) NOT NULL,
  `Quiz_Id` bigint(20) NOT NULL,
  `Quiz_Question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`Quiz_Question_Id`, `Quiz_Id`, `Quiz_Question`) VALUES
(1, 1, 'Question 1'),
(2, 1, 'Question 2');

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

--
-- Dumping data for table `quiz_question_option`
--

INSERT INTO `quiz_question_option` (`Quiz_Question_Option_Id`, `Quiz_Question_Id`, `Quiz_Option`, `Is_Correct_Answer`) VALUES
(1, 1, 'Question 1 Option 1', 'No'),
(2, 1, 'Question 1 Option 2', 'Yes'),
(3, 1, 'Question 1 Option 3', 'No'),
(4, 1, 'Question 1 Option 4', 'No'),
(5, 2, 'Question 2 Option 1', 'No'),
(6, 2, 'Question 2 Option 2', 'No'),
(7, 2, 'Question 2 Option 3', 'Yes'),
(8, 2, 'Question 2 Option 4', 'No');

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

--
-- Dumping data for table `staff_branch`
--

INSERT INTO `staff_branch` (`Staff_Branch_Id`, `Staff_Id`, `Branch_Id`, `Designation_Id`, `Staff_Branch_Status`) VALUES
(1, 1, 2, 2, 'Active');

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

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`Staff_Login_Id`, `Staff_Id`, `Staff_Username`, `Staff_Password`, `Is_Admin`, `Staff_Login_Status`) VALUES
(1, 1, 'T182084101', 'T182084101', 'Yes', 'Active');

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

--
-- Dumping data for table `staff_master`
--

INSERT INTO `staff_master` (`Staff_Id`, `Staff_College_Id`, `First_Name`, `Middle_Name`, `Last_Name`, `Date_Of_Birth`, `Gender`, `Contact_No`, `Email_Id`, `Address`, `Staff_Status`) VALUES
(1, '1032180101', 'Akshat ', 'Raj', 'Chandel', '2000-01-02', 'Male', '9769264884', 'jobaliayash@gmail.com', 'Mira Road', 'Active');

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
  `Academic_Session_Id` bigint(20) NOT NULL,
  `Branch_Id` bigint(20) NOT NULL,
  `Semester` tinyint(4) NOT NULL,
  `Roll_No` smallint(6) NOT NULL,
  `Student_Class_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`Student_Class_Id`, `Student_Id`, `Academic_Session_Id`, `Branch_Id`, `Semester`, `Roll_No`, `Student_Class_Status`) VALUES
(1, 1, 1, 2, 3, 30, 'Active'),
(2, 2, 1, 2, 8, 9, 'Active'),
(3, 3, 1, 2, 8, 3, 'Active'),
(4, 4, 1, 2, 8, 40, 'Active'),
(5, 5, 1, 2, 8, 18, 'Active'),
(6, 6, 1, 2, 8, 10, 'Active'),
(7, 7, 1, 2, 8, 6, 'Active'),
(8, 8, 1, 2, 8, 11, 'Active'),
(9, 9, 1, 2, 8, 37, 'Active'),
(10, 10, 1, 2, 8, 22, 'Active'),
(11, 11, 1, 1, 8, 22, 'Active'),
(12, 12, 1, 1, 8, 39, 'Active'),
(13, 13, 1, 1, 8, 44, 'Active'),
(14, 14, 1, 1, 8, 59, 'Active'),
(15, 15, 1, 1, 8, 50, 'Active'),
(16, 16, 1, 1, 8, 47, 'Active'),
(17, 17, 1, 1, 8, 58, 'Active'),
(18, 18, 1, 1, 8, 27, 'Active'),
(19, 19, 1, 1, 8, 50, 'Active'),
(20, 20, 1, 1, 8, 42, 'Active'),
(21, 21, 1, 3, 8, 36, 'Active'),
(22, 22, 1, 3, 8, 41, 'Active'),
(23, 23, 1, 3, 8, 21, 'Active'),
(24, 24, 1, 3, 8, 52, 'Active'),
(25, 25, 1, 3, 8, 59, 'Active'),
(26, 26, 1, 3, 8, 2, 'Active'),
(27, 27, 1, 3, 8, 23, 'Active'),
(28, 28, 1, 3, 8, 34, 'Active'),
(29, 29, 1, 3, 8, 16, 'Active'),
(30, 30, 1, 3, 8, 15, 'Active');

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

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`Student_Login_Id`, `Student_Id`, `Student_Username`, `Student_Password`, `Student_Login_Status`) VALUES
(1, 1, 'S182084101', 'S182084101', 'Active'),
(2, 2, 'S1032180101', 'S1032180101', 'Active'),
(3, 3, 'S18-ITA03-22', 'S18-ITA03-22', 'Active'),
(4, 4, 'S18-ITA40-22', 'S18-ITA40-22', 'Active'),
(5, 5, 'S18-ITA18-22', 'S18-ITA18-22', 'Active'),
(6, 6, 'S18-ITA10-22', 'S18-ITA10-22', 'Active'),
(7, 7, 'S18-ITA06-22', 'S18-ITA06-22', 'Active'),
(8, 8, 'S18-ITA11-22', 'S18-ITA11-22', 'Active'),
(9, 9, 'S18-ITA37-22', 'S18-ITA37-22', 'Active'),
(10, 10, 'S18-ITA22-22', 'S18-ITA22-22', 'Active'),
(11, 11, 'S18-CMPN21-22', 'S18-CMPN21-22', 'Active'),
(12, 12, 'S18-CPMN39-22', 'S18-CPMN39-22', 'Active'),
(13, 13, 'S18-CMPN44-22', 'S18-CMPN44-22', 'Active'),
(14, 14, 'S18-CPMN-22', 'S18-CPMN-22', 'Active'),
(15, 15, 'S18-CMPN50-22', 'S18-CMPN50-22', 'Active'),
(16, 16, 'S18-CPMN47-22', 'S18-CPMN47-22', 'Active'),
(17, 17, 'S18-CPMN58-22', 'S18-CPMN58-22', 'Active'),
(18, 18, 'S18-CMPN27-22', 'S18-CMPN27-22', 'Active'),
(19, 19, 'S18-CMPN50-22', 'S18-CMPN50-22', 'Active'),
(20, 20, 'S18-CMPN42-22', 'S18-CMPN42-22', 'Active'),
(21, 21, 'S18-ENTC36-22', 'S18-ENTC36-22', 'Active'),
(22, 22, 'S18-ENTC41-22', 'S18-ENTC41-22', 'Active'),
(23, 23, 'S18-ENTC21-22', 'S18-ENTC21-22', 'Active'),
(24, 24, 'S18-ENTC52-22', 'S18-ENTC52-22', 'Active'),
(25, 25, 'S18-ENTC59-22', 'S18-ENTC59-22', 'Active'),
(26, 26, 'S18-ENTC02-22', 'S18-ENTC02-22', 'Active'),
(27, 27, 'S18-ENTC23-22', 'S18-ENTC23-22', 'Active'),
(28, 28, 'S18-ENTC34-22', 'S18-ENTC34-22', 'Active'),
(29, 29, 'S18-ENTC16-22', 'S18-ENTC16-22', 'Active'),
(30, 30, 'S18-ENTC15-22', 'S18-ENTC15-22', 'Active');

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

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`Student_Id`, `Student_College_Id`, `First_Name`, `Middle_Name`, `Last_Name`, `Date_Of_Birth`, `Gender`, `Contact_No`, `Email_Id`, `Address`, `Class_10_Percentage`, `From_Class12_Or_Diploma`, `Class_12_Percentage`, `Diploma_Percentage`, `JEE_Marks`, `JEE_Out_Of`, `CET_Marks`, `CET_Out_Of`, `Student_Status`) VALUES
(1, '182084101', 'Yash', 'Hitesh', 'Jobalia', '2000-01-02', 'Male', '9769264884', 'jobaliayash@gmail.com', 'Mira Road', 87.4, 'Class 12', 66, 0, 35, 360, 101, 200, 'Active'),
(2, '18-ITA09-22', 'Akshat', 'Rajendra', 'Chandel', '2000-08-28', 'Male', '8828054292', 'akshatchandel92@gmail.com', 'Mira Road, Mumbai', 87, 'Class 12', 70, 0, 66, 360, 105, 200, 'Active'),
(3, '18-ITA03-22', 'Darshil', 'Sunil', 'Ajudia', '2000-10-23', 'Male', '9819598625', 'darshil1999@gmail.com', 'Borivali,Mumbai', 90, 'Class 12', 80, 0, 80, 360, 125, 200, 'Active'),
(4, '18-ITA40-22', 'Hinal', 'Prahlad', 'Kuvadiya', '2001-01-10', 'Female', '9833299664', 'hinalkuvadiya@gmail.com', 'Andheri, Mumbai.', 87, 'Class 12', 60, 0, 70, 360, 100, 200, 'Active'),
(5, '18-ITA18-22', 'Parth', 'Jigar', 'Desai', '2000-07-08', 'Male', '8691890490', 'parthdesai18@gmail.com', 'Kandivali,Mumbai', 87, 'Class 12', 70, 0, 60, 360, 90, 200, 'Active'),
(6, '18-ITA10-22', 'Ritika', 'Rohitkumar', 'Chaube', '2000-02-08', 'Female', '3849282982033', 'ritikachaube@gmail.com', 'Borivali, Mumbai.', 90, 'Class 12', 76, 0, 70, 360, 95, 200, 'Active'),
(7, '18-ITA06-22', 'Pratik', 'Prakash', 'Bhatt', '2000-04-30', 'Male', '283273273', 'pratikbhatt@gmail.com', 'Powai,Mumbai', 80, 'Class 12', 78, 0, 60, 360, 100, 200, 'Active'),
(8, '18-ITA11-22', 'Neeraj', 'Omprakash', 'Chauhan', '2000-02-27', 'Male', '46565656565', 'neerajchauhan@gmail.com', 'Kandivali,Mumbai', 90, 'Class 12', 70, 0, 90, 360, 99, 200, 'Active'),
(9, '18-ITA37-22', 'Heeth', 'Pradeep', 'Jain', '2000-01-23', 'Male', '292929292929', 'heethjain21@gmail.com', 'Jogeshwari,Mumbai', 90, 'Class 12', 80, 0, 80, 360, 100, 200, 'Active'),
(10, '18-ITA22-22', 'Shubham', 'Sandeep', 'Gadia', '2000-11-08', 'Male', '292929292929', 'shubhamgadia@gmail.com', 'Kandivali,Mumbai', 80, 'Class 12', 80, 0, 58, 360, 100, 200, 'Active'),
(11, '18-CMPN21-22', 'Mohit', 'Rakesh', 'Gupta', '2000-07-06', 'Male', '6766767676766', 'mohitgupta@gmail.com', 'Kandivali,Mumbai', 90, 'Class 12', 70, 0, 70, 360, 100, 200, 'Active'),
(12, '18-CPMN39-22', 'Priyansh', 'Mahaveer', 'Jain', '2000-06-06', 'Male', '5757575765', 'priyansh@gmail.com', 'Kandivali,Mumbai', 80, 'Class 12', 90, 0, 90, 360, 100, 200, 'Active'),
(13, '18-CMPN44-22', 'Aniket', 'Ajay', 'Jha', '2000-08-16', 'Male', '575757557', 'aniketjha@gmail.com', 'Bhayander,Thane', 79, 'Class 12', 90, 0, 150, 360, 140, 200, 'Active'),
(14, '18-CPMN-22', 'Prateek', 'Sunil', 'Angadi', '2000-05-01', 'Male', '6848293925', 'prateekangadi@gmail.com', 'Malad,Mumbai', 80, 'Class 12', 70, 0, 70, 360, 100, 200, 'Active'),
(15, '18-CMPN50-22', 'Manu', 'Madhusudan', 'Khadenwal', '2000-05-17', 'Male', '534w3', 'manusudan@gmail.com', 'Nagpur, Far away', 70, 'Class 12', 70, 0, 70, 360, 90, 200, 'Active'),
(16, '18-CPMN47-22', 'Khushi', 'Samir', 'Joshi', '2001-03-15', 'Female', '86393282343', 'khushijoshi@gmail.com', 'Malad,Mumbai', 90, 'Class 12', 90, 0, 90, 360, 100, 200, 'Active'),
(17, '18-CPMN58-22', 'Pranali', 'Sham', 'Darekar', '2020-05-28', 'Male', '6572374299', 'pranalidarekar@gmail.com', 'Kandivali, Mumbai', 70, 'Class 12', 70, 0, 70, 360, 100, 200, 'Active'),
(18, '18-CMPN27-22', 'Hridyansh', 'Anil', 'Gupta', '2000-07-14', 'Male', '68483822222', 'hridyanshgupta@gmail.com', 'Malad,Mumbai', 80, 'Class 12', 70, 0, 80, 360, 100, 200, 'Active'),
(19, '18-CMPN50-22', 'Jyoti', 'Ashok', 'Khare', '2000-04-27', 'Female', '5737556729', 'jyotikhare@gmail.com', 'Vasai,Thane', 80, 'Class 12', 80, 0, 80, 360, 100, 200, 'Active'),
(20, '18-CMPN42-22', 'Pritesh', 'Mahendra', 'Jain', '2000-10-21', 'Male', '292727272', 'priteshjain@gmail.com', 'Borivali,Mumbai', 79, 'Class 12', 79, 0, 80, 360, 100, 200, 'Active'),
(21, '18-ENTC36-22', 'Rohan', 'Balakrishna', 'Kuckian', '2000-09-19', 'Male', '82828282822', 'rohank@gmail.com', 'Borivali,Mumbai', 90, 'Class 12', 90, 0, 80, 360, 150, 200, 'Active'),
(22, '18-ENTC41-22', 'Jainam', 'Rajesh', 'Jagani', '2000-03-30', 'Male', '5292222393', 'jainam@gmail.com', 'Kandivali,Mumbai', 90, 'Class 12', 80, 0, 80, 360, 105, 200, 'Active'),
(23, '18-ENTC21-22', 'Yashi', 'Raj', 'Chaturvedi', '2000-02-27', 'Female', '62741515', 'yashi@gmail.com', 'Kandivali,Mumbai', 80, 'Class 12', 80, 0, 80, 360, 102, 200, 'Active'),
(24, '18-ENTC52-22', 'Aditya', 'Kumar', 'Singh', '2000-03-25', 'Male', '78281757283', 'aditya@gmail.com', 'Mira Road,Mumbai', 82, 'Class 12', 87, 0, 90, 360, 100, 200, 'Active'),
(25, '18-ENTC59-22', 'Varun', 'Shantilal', 'Mewada', '2000-08-23', 'Male', '6814738572', 'varun@gmail.com', 'Malad,Mumbai', 80, 'Class 12', 80, 0, 70, 360, 103, 200, 'Active'),
(26, '18-ENTC02-22', 'Vanshita', 'Krishna', 'Agrawal', '2000-11-30', 'Female', '3232393292', 'vanshita@gmail.com', 'Borivali,Mumbai', 87, 'Class 12', 70, 0, 70, 360, 100, 200, 'Active'),
(27, '18-ENTC23-22', 'Nilesh', 'Ram', 'Gond', '2000-04-05', 'Male', '56322856319', 'nilesh@gmail.com', 'Kandivali,Mumbai', 90, 'Class 12', 80, 0, 80, 360, 100, 200, 'Active'),
(28, '18-ENTC34-22', 'Vivek', 'Sahil', 'Gupta', '2000-10-01', 'Male', '29182342442', 'vivek@gmail.com', 'Borivali,Mumbai', 80, 'Class 12', 80, 0, 80, 360, 100, 200, 'Active'),
(29, '18-ENTC16-22', 'Sayantani', 'Das', 'Gupta', '2000-04-28', 'Female', '766363633', 'sayantani@gmail.com', 'Kandivali,Mumbai', 80, 'Class 12', 80, 0, 80, 360, 100, 200, 'Active'),
(30, '18-ENTC15-22', 'Rohit', 'Samir', 'Gupta', '2000-03-11', 'Male', '536754763', 'rohit@gmail.com', 'Borivali,Mumbai', 90, 'Class 12', 70, 0, 80, 360, 100, 200, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student_quiz`
--

CREATE TABLE `student_quiz` (
  `Student_Quiz_Id` bigint(20) NOT NULL,
  `Student_Class_Id` bigint(20) NOT NULL,
  `Quiz_Id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_quiz`
--

INSERT INTO `student_quiz` (`Student_Quiz_Id`, `Student_Class_Id`, `Quiz_Id`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 2, 1);

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

--
-- Dumping data for table `student_quiz_answer`
--

INSERT INTO `student_quiz_answer` (`Student_Quiz_Answer_Id`, `Student_Quiz_Id`, `Quiz_Question_Id`, `Quiz_Question_Option_Id`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 7),
(3, 2, 1, 4),
(4, 2, 2, 7),
(5, 3, 1, 2),
(6, 3, 2, 7);

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
-- Indexes for table `academic_session_master`
--
ALTER TABLE `academic_session_master`
  ADD PRIMARY KEY (`Academic_Session_Id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`Announcement_Id`);

--
-- Indexes for table `announcement_branch`
--
ALTER TABLE `announcement_branch`
  ADD PRIMARY KEY (`Announcement_Branch_Id`);

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
-- Indexes for table `company_student_hired`
--
ALTER TABLE `company_student_hired`
  ADD PRIMARY KEY (`Company_Student_Hired_Id`);

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
-- AUTO_INCREMENT for table `academic_session_master`
--
ALTER TABLE `academic_session_master`
  MODIFY `Academic_Session_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `Announcement_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `announcement_branch`
--
ALTER TABLE `announcement_branch`
  MODIFY `Announcement_Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `branch_master`
--
ALTER TABLE `branch_master`
  MODIFY `Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_branch`
--
ALTER TABLE `company_branch`
  MODIFY `Company_Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `company_criteria`
--
ALTER TABLE `company_criteria`
  MODIFY `Company_Criteria_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `company_master`
--
ALTER TABLE `company_master`
  MODIFY `Company_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_round`
--
ALTER TABLE `company_round`
  MODIFY `Company_Round_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `company_round_student_selected`
--
ALTER TABLE `company_round_student_selected`
  MODIFY `Company_Round_Student_Selected_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_student_hired`
--
ALTER TABLE `company_student_hired`
  MODIFY `Company_Student_Hired_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_student_registration`
--
ALTER TABLE `company_student_registration`
  MODIFY `Company_Student_Registration_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designation_master`
--
ALTER TABLE `designation_master`
  MODIFY `Designation_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message_draft`
--
ALTER TABLE `message_draft`
  MODIFY `Message_Draft_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message_sent`
--
ALTER TABLE `message_sent`
  MODIFY `Message_Sent_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quiz_master`
--
ALTER TABLE `quiz_master`
  MODIFY `Quiz_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `Quiz_Question_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz_question_option`
--
ALTER TABLE `quiz_question_option`
  MODIFY `Quiz_Question_Option_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff_branch`
--
ALTER TABLE `staff_branch`
  MODIFY `Staff_Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `Staff_Login_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_master`
--
ALTER TABLE `staff_master`
  MODIFY `Staff_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_academics`
--
ALTER TABLE `student_academics`
  MODIFY `Student_Academics_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_class`
--
ALTER TABLE `student_class`
  MODIFY `Student_Class_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `Student_Login_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `student_master`
--
ALTER TABLE `student_master`
  MODIFY `Student_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `student_quiz`
--
ALTER TABLE `student_quiz`
  MODIFY `Student_Quiz_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_quiz_answer`
--
ALTER TABLE `student_quiz_answer`
  MODIFY `Student_Quiz_Answer_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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

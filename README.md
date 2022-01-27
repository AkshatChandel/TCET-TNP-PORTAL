# TCET-TNP-PORTAL

<!-- Semester
Semester 1 - 1
Semester 2 - 2
Semester 3 - 3
Semester 4 - 4
Semester 5 - 5
Semester 6 - 6
Semester 7 - 7
Semester 8 - 8 -->

# DATABASE STRUCTURE

DATABASE NAME: TCET TnP

=> Academic_Master
Academic_Id
Academic_Name
Academic_Status

=> Branch_Master
Branch_Id
Branch_Name
Branch_Code
Branch_Status (Active / De-Active)

=> Student_Master
Student_Id
Student_College_Id
First_Name
Middle_Name
Last_Name
Date_Of_Birth
Gender
Contact_No
Email_Id
Address
Class_10_Percentage
From_Class12_Or_Diploma (Class 12 / Diploma)
Class_12_Percentage
Diploma_Percentage
JEE_Marks
JEE_Out_Of
CET_Marks
CET_Out_Of
Student_Resume
Student_Status (Active / De-Active)

=> Student_Login #F
Student_Login_Id
Student_Id
Student_Username
Student_Password
Student_Login_Status (Active / De-Active)

=> Student_Class
Student_Class_Id
Student_Id
Academic_Id
Branch_Id
Semester
Roll_No
Student_Class_Status (Active / Passed / Drop)

=> Student_Academics #F
Student_Academics_Id
Student_Class_Id
Semester
Exam_Code
SGPA
Backlog (Yes / No)
Backlog_Count

=> Designation_Master
Designation_Id
Designation_Name
Designation_Status (Active / De-Active)

=> Staff_Master F
Staff_Id
First_Name
Middle_Name
Last_Name
Date_Of_Birth
Gender
Contact_No
Email_Id
Address
Is_Admin (Yes / No)
Staff_Status (Active / De-Active)

=> Staff_Login #F
Staff_Login_Id
Staff_Id
Staff_Username
Staff_Password
Staff_Login_Status (Active / De-Active)

=> Staff_Designation
Staff_Designation_Id
Staff_Id
Designation_Id
Staff_Designation_Status (Active / De-Active)

=> Quiz_Master #F
Quiz_Id
Quiz_Name
Quiz_Code
Quiz_Time
Staff_Id
Quiz_Status

=> Quiz_Question
Quiz_Question_Id
Quiz_Id
Quiz_Question

=> Quiz_Question_Option
Quiz_Question_Option_Id
Quiz_Question_Id
Quiz_Option
Is_Correct_Answer

=> Student_Quiz
Student_Quiz_Id
Student_Class_Id
Quiz_Id

=> Student_Quiz_Answer
Student_Quiz_Answer_Id
Student_Quiz_Id
Quiz_Question_Id
Quiz_Question_Option_Id

=> Training_Lecture
Training_Lecture_Id
Lecture_Name
Lecture_Code
Lecture_Status

=> Training_Lecture_Semester
Training_Lecture_Id
Semester

Example: Suppose A training lecture is only available for Semester 3 and Semester 4 students. Then, there will be 2 entries in the "Training_Lecture_Semester table.

=> Training_Lecture_Attendance
Training_Lecture_Attendance_Id
Training_Lecture_Id
Student_Class_Id

=> Message_Draft
Message_Draft_Id
Message_Content

=> Message_Sent
Message_Sent_Id
Message_Draft_Id
Send_To (Student / Staff)
Person_Id (Student_Id / Staff_Id)
Message_Sent_Status (Sent / Not Sent)

=> Placement_Company
Placement_Company_Id
Company_Name
Minimum_Class_10_Percentage
Minimum_Class_12_Percentage
Minimum_Diploma_Percentage
Minimum_CGPA
Placement_Company_Status

=> Company_Branch
Company_Branch_Id
Company_Id
Branch_Id

Example: If a company is only hiring students of Computer Engineering, IT and EXTC, then there will be three entries in the above table.

=> Company_Criteria
Company_Criteria_Id
Company_Id
Criteria

=> Company_Round
Company_Round_Id
Company_Id
Round_Name
Round_Status

=> Company_Student_Registration
Company_Student_Registration_Id
Student_Class_Id

=> Company_Round_Student_Selected
Company_Round_Student_Selected_Id
Compnay_Round_Id
Student_Class_Id

=> Company_Students_Hired
Placement_Company_Id
Student_Class_Id

INSERT INTO `student` (`email`, `password`, `national_student_id`, `numberInClass`, `is_publisher`, `is_responsable`, `photo_path`, `first_name`, `last_name`, `phone_number`, `contact_email`)
VALUES 
('st-Ahmed@ofppt.com', 'password1', 'MA12345', 1, 0, 0, '/path/to/photo1.jpg', 'Ahmed', 'Khalid', '+212600000001', 'contact1@ofppt.com'),
('st-Mohamed@ofppt.com', 'password2', 'MA12346', 2, 0, 0, '/path/to/photo2.jpg', 'Mohamed', 'Ali', '+212600000002', 'contact2@ofppt.com'),
('st-Youssef@ofppt.com', 'password3', 'MA12347', 3, 0, 0, '/path/to/photo3.jpg', 'Youssef', 'Mohamed', '+212600000003', 'contact3@ofppt.com'),
('st-Nadia@ofppt.com', 'password4', 'MA12348', 4, 0, 0, '/path/to/photo4.jpg', 'Nadia', 'Saleh', '+212600000004', 'contact4@ofppt.com'),
('st-Sara@ofppt.com', 'password5', 'MA12349', 5, 0, 0, '/path/to/photo5.jpg', 'Sara', 'Ahmed', '+212600000005', 'contact5@ofppt.com'),
('st-Fatima@ofppt.com', 'password6', 'MA12350', 6, 0, 0, '/path/to/photo6.jpg', 'Fatima', 'Hassan', '+212600000006', 'contact6@ofppt.com'),
('st-Aya@ofppt.com', 'password7', 'MA12351', 7, 0, 0, '/path/to/photo7.jpg', 'Aya', 'Hamed', '+212600000007', 'contact7@ofppt.com'),
('st-Adam@ofppt.com', 'password8', 'MA12352', 8, 0, 0, '/path/to/photo8.jpg', 'Adam', 'Ibrahim', '+212600000008', 'contact8@ofppt.com'),
('st-Ali@ofppt.com', 'password9', 'MA12353', 9, 0, 0, '/path/to/photo9.jpg', 'Ali', 'Moussa', '+212600000009', 'contact9@ofppt.com'),
('st-Hana@ofppt.com', 'password10', 'MA12354', 10, 0, 0, '/path/to/photo10.jpg', 'Hana', 'Abdullah', '+212600000010', 'contact10@ofppt.com'),
('st-Abdullah@ofppt.com', 'password11', 'MA12355', 11, 0, 0, '/path/to/photo11.jpg', 'Abdullah', 'Omar', '+212600000011', 'contact11@ofppt.com');

select * from student;

INSERT INTO `ista_website_db`.`teacher` (`fname`, `lname`, `photo_path`, `phone_number`, `contact_email`, `email`, `password`)
VALUES 
('Ahmed', 'Hassan', 'teachers/ahmed.jpg', '0601020304', 'ahmed.hassan@example.com', 'te-ahmed.hassan@ofppt.com', 'password1'),
('Mohammed', 'Ali', 'teachers/mohammed.jpg', '0601020305', 'mohammed.ali@example.com', 'te-mohammed.ali@ofppt.com', 'password2'),
('Hassan', 'Abdullah', 'teachers/hassan.jpg', '0601020306', 'hassan.abdullah@example.com', 'te-hassan.abdullah@ofppt.com', 'password3'),
('Aisha', 'Ahmed', 'teachers/aisha.jpg', '0601020307', 'aisha.ahmed@example.com', 'te-aisha.ahmed@ofppt.com', 'password4'),
('Youssef', 'Saleh', 'teachers/youssef.jpg', '0601020308', 'youssef.saleh@example.com', 'te-youssef.saleh@ofppt.com', 'password5'),
('Nadia', 'Omar', 'teachers/nadia.jpg', '0601020309', 'nadia.omar@example.com', 'te-nadia.omar@ofppt.com', 'password6'),
('Sara', 'Abdul', 'teachers/sara.jpg', '0601020310', 'sara.abdul@example.com', 'te-sara.abdul@ofppt.com', 'password7'),
('Fatima', 'Ibrahim', 'teachers/fatima.jpg', '0601020311', 'fatima.ibrahim@example.com', 'te-fatima.ibrahim@ofppt.com', 'password8'),
('Omar', 'Hassan', 'teachers/omar.jpg', '0601020312', 'omar.hassan@example.com', 'te-omar.hassan@ofppt.com', 'password9'),
('Ali', 'Mohammed', 'teachers/ali.jpg', '0601020313', 'ali.mohammed@example.com', 'te-ali.mohammed@ofppt.com', 'password10'),
('Mariam', 'Abdullah', 'teachers/mariam.jpg', '0601020314', 'mariam.abdullah@example.com', 'te-mariam.abdullah@ofppt.com', 'password11'),
('Zainab', 'Ahmed', 'teachers/zainab.jpg', '0601020315', 'zainab.ahmed@example.com', 'te-zainab.ahmed@ofppt.com', 'password12'),
('Salim', 'Saleh', 'teachers/salim.jpg', '0601020316', 'salim.saleh@example.com', 'te-salim.saleh@ofppt.com', 'password13'),
('Amina', 'Omar', 'teachers/amina.jpg', '0601020317', 'amina.omar@example.com', 'te-amina.omar@ofppt.com', 'password14');

select * from teacher;

INSERT INTO `ista_website_db`.`administration` (`email`, `password`, `first_name`, `last_name`) VALUES
('ad-ahmad@ofppt.com', 'password1', 'Ahmad', 'Mohammed'),
('ad-fatima@ofppt.com', 'password2', 'Fatima', 'Ali'),
('ad-youssef@ofppt.com', 'password3', 'Youssef', 'Hussein'),
('ad-khaled@ofppt.com', 'password4', 'Khaled', 'Khalil'),
('ad-nour@ofppt.com', 'password5', 'Nour', 'Salah'),
('ad-mohammed@ofppt.com', 'password6', 'Mohammed', 'Omar'),
('ad-lina@ofppt.com', 'password7', 'Lina', 'Abdulrahman'),
('ad-asmaa@ofppt.com', 'password8', 'Asmaa', 'Salem'),
('ad-sara@ofppt.com', 'password9', 'Sara', 'Abdullah'),
('ad-ali@ofppt.com', 'password10', 'Ali', 'Hassan'),
('ad-reem@ofppt.com', 'password11', 'Reem', 'Saleh'),
('ad-zeinab@ofppt.com', 'password12', 'Zeinab', 'Khalid'),
('ad-said@ofppt.com', 'password13', 'Said', 'Rashid'),
('ad-hassan@ofppt.com', 'password14', 'Hassan', 'Saeed');

select * from administration;

INSERT INTO `ista_website_db`.`super_user` (`email`, `password`, `super_user_privelage`, `super_user_legacy`)
VALUES
    ('sp-ahmed.ali@ofppt.com', 'password1', 'admin', 'ghost'),
    ('sp-fatima.khaldi@ofppt.com', 'password2', 'editor', 'sparta'),
    ('sp-omar.benabdeljalil@ofppt.com', 'password3', 'user', 'L');

select * from super_user;

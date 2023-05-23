INSERT INTO `class` (`emploi`, `class_year`, `name`, `is_current`)
VALUES
    ('{"monday": {"8:00-10:00": "Math", "10:00-12:00": "Science"}, "tuesday": {"8:00-10:00": "French", "10:00-12:00": "English"}}', '2022-09-01', 'Class A', 1),
    ('{"monday": {"8:00-10:00": "Art", "10:00-12:00": "Science"}, "tuesday": {"8:00-10:00": "Math", "10:00-12:00": "History"}}', '2022-09-01', 'Class B', 1),
    ('{"monday": {"8:00-10:00": "English", "10:00-12:00": "Science"}, "tuesday": {"8:00-10:00": "French", "10:00-12:00": "Math"}}', '2022-09-01', 'Class C', 1),
    ('{"monday": {"8:00-10:00": "History", "10:00-12:00": "Science"}, "tuesday": {"8:00-10:00": "Math", "10:00-12:00": "Art"}}', '2022-09-01', 'Class D', 1),
    ('{"monday": {"8:00-10:00": "Science", "10:00-12:00": "Math"}, "tuesday": {"8:00-10:00": "French", "10:00-12:00": "English"}}', '2022-09-01', 'Class E', 1);
select * from student;


INSERT INTO `student` (`email`, `password`, `national_student_id`, `numberInClass`, `is_publisher`, `is_responsable`, `photo_path`, `first_name`, `last_name`, `phone_number`, `contact_email`, `class`) 
VALUES 
('st-ahmedrashid@ofppt.com', 'p@ssw0rd1', 'a123456', 1, 0, 1, '/photos/ahmed_rashid.jpg', 'Ahmed', 'Rashid', '+971501234567', 'ahmed.rashid@ofppt.com', 1),
('st-alimohammed@ofppt.com', 'p@ssw0rd2', 'b234567', 2, 0, 0, '/photos/ali_mohammed.jpg', 'Ali', 'Mohammed', '+971501234568', 'ali.mohammed@ofppt.com', 1),
('st-fatimahassan@ofppt.com', 'p@ssw0rd3', 't345678', 3, 1, 0, '/photos/fatima_hassan.jpg', 'Fatima', 'Hassan', '+971501234569', 'fatima.hassan@ofppt.com', 2),
('st-hassanahmed@ofppt.com', 'p@ssw0rd4', 'th456789', 4, 0, 0, '/photos/hassan_ahmed.jpg', 'Hassan', 'Ahmed', '+971501234570', 'hassan.ahmed@ofppt.com', 2),
('st-abdelrahmanmohammed@ofppt.com', 'p@ssw0rd5', 'j567890', 5, 1, 0, '/photos/abdelrahman_mohammed.jpg', 'Abdelrahman', 'Mohammed', '+971501234571', 'abdelrahman.mohammed@ofppt.com', 3),
('st-fatmahamza@ofppt.com', 'p@ssw0rd6', 'h678901', 6, 0, 0, '/photos/fatma_hamza.jpg', 'Fatma', 'Hamza', '+971501234572', 'fatma.hamza@ofppt.com', 3),
('st-younesahmed@ofppt.com', 'p@ssw0rd7', 'k789012', 7, 0, 1, '/photos/younes_ahmed.jpg', 'Younes', 'Ahmed', '+971501234573', 'younes.ahmed@ofppt.com', 4),
('st-khadijabouazza@ofppt.com', 'p@ssw0rd8', 'l890123', 8, 0, 0, '/photos/khadija_bouazza.jpg', 'Khadija', 'Bouazza', '+971501234574', 'khadija.bouazza@ofppt.com', 4),
('st-mouhamedabdelaziz@ofppt.com', 'p@ssw0rd9', 'm901234', 9, 1, 0, '/photos/mouhamed_abdelaziz.jpg', 'Mouhamed', 'Abdelaziz', '+971501234575', 'mouhamed.abdelaziz@ofppt.com', 5);


INSERT INTO `ista_website_db`.`teacher` (`first_name`, `last_name`, `photo_path`, `phone_number`, `contact_email`, `email`, `password`)
VALUES
('Karim', 'Benkoussa', '/teachers/karim_benkoussa.jpg', '0678908765', 'karim.benkoussa@ofppt.com', 'te-kbenkoussa@ofppt.com', 'Tg37#dQf'),
('Fatima', 'El Azzouzi', '/teachers/fatima_elazzouzi.jpg', '0623456789', 'fatima.elazzouzi@ofppt.com', 'te-felazzouzi@ofppt.com', 'Yb98&kTc'),
('Mohammed', 'El Ghaouti', '/teachers/mohammed_elghaouti.jpg', '0665432178', 'mohammed.elghaouti@ofppt.com', 'te-melghaouti@ofppt.com', 'Sr91*qZp'),
('Nadia', 'El Majdoub', '/teachers/nadia_elmajdoub.jpg', '0654321789', 'nadia.elmajdoub@ofppt.com', 'te-nelmajdoub@ofppt.com', 'Vc63$wFx'),
('Hicham', 'El Yazami', '/teachers/hicham_elyazami.jpg', '0687654321', 'hicham.elyazami@ofppt.com', 'te-helyazami@ofppt.com', 'Gp52!zBs'),
('Sanae', 'Zarrouk', '/teachers/sanae_zarrouk.jpg', '0612345678', 'sanae.zarrouk@ofppt.com', 'te-szarrouk@ofppt.com', 'Wt26%uHd'),
('Omar', 'Boussaid', '/teachers/omar_boussaid.jpg', '0678912345', 'omar.boussaid@ofppt.com', 'te-oboussaid@ofppt.com', 'Fk81#rNm'),
('Amina', 'El Haddadi', '/teachers/amina_elhaddadi.jpg', '0656789012', 'amina.elhaddadi@ofppt.com', 'te-aehaddadi@ofppt.com', 'Jn59@qYh');

select * from teacher;

INSERT INTO `administration` (`email`, `password`, `first_name`, `last_name`, `contact_email`)
VALUES
('ad-mohamed@ofppt.com', 'gjt4D6JvUhtX', 'Mohamed', 'Ali', 'mohamed.ali@gmail.com'),
('ad-nabil@ofppt.com', 'uV7v5DEhNmWb', 'Nabil', 'Bouchra', NULL),
('ad-zahra@ofppt.com', 'Cj7hNvX8WmS6', 'Zahra', 'Hassani', 'zahra.hassani@yahoo.com'),
('ad-sarah@ofppt.com', 'rJg2fPnLwKt8', 'Sarah', 'El Hamidi', 'sarah.elhamidi@gmail.com'),
('ad-fatima@ofppt.com', 'sLz5vG8xNhT6', 'Fatima', 'Chakir', 'fatima.chakir@yahoo.com'),
('ad-aymane@ofppt.com', 'tBz6rR3sPvN8', 'Aymane', 'Bouzidi', NULL),
('ad-mariam@ofppt.com', 'pHf5jC7wGtL9', 'Mariam', 'Bennani', 'mariam.bennani@hotmail.com'),
('ad-hassan@ofppt.com', 'nMq4kF9bKjE2', 'Hassan', 'Ibrahim', 'hassan.ibrahim@gmail.com'),
('ad-youssef@ofppt.com', 'sTn6zX8yRvG5', 'Youssef', 'Khalil', 'youssef.khalil@yahoo.com'),
('ad-imane@ofppt.com', 'qJf4wS5pLhV8', 'Imane', 'Sahraoui', 'imane.sahraoui@gmail.com');

select * from administration;


INSERT INTO `ista_website_db`.`super_user` (`email`, `password`, `super_user_privelage`, `super_user_legacy`)
VALUES
  ('sp-user1@ofppt.com', 'pass123', 'admin', 'ghost'),
  ('sp-user2@ofppt.com', 'pass123', 'admin', 'shadow'),
  ('sp-user3@ofppt.com', 'pass123', 'editor', 'L');


select * from super_user;




INSERT INTO `subject` (`subject_id`, `subject_name`, `class_id`, `teacher_id`)
VALUES
(1, 'Introduction to Programming', 1, 1),
(2, 'Web Development', 1, 2),
(3, 'Object-Oriented Programming', 1, 1),
(4, 'Databases', 2, 2),
(5, 'Operating Systems', 2, 1),
(6, 'Algorithms', 3, 3),
(7, 'Data Structures', 3, 3),
(8, 'Programming Languages', 3, 1),
(9, 'Artificial Intelligence', 3, 2),
(10, 'Computer Networks', 3, 2);



INSERT INTO `note` (`subject_id`, `student_id`, `controle_1`, `controle_2`, `controle_3`, `EFM`) VALUES
(1, 11, 18, 12, 16, 14),
(2, 11, 19, 12, 16, 14),
(1, 12, 17.5, 12, 16, 14),
(2, 12, 18.5, 12, 16, 14),
(3, 12, 17, 12, 16, 14),
(3, 13, 19.5, 12, 16, 14),
(4, 13, 18.5, 12, 16, 14),
(4, 14, 18, 12, 16, 14),
(5, 14, 19, 12, 16, 14),
(5, 15, 19.5, 12, 16, 14);
INSERT INTO `class` (`emploi`, `class_year`, `name`, `is_current`)
VALUES
    ('{"monday": {"8:00-10:00": "Math", "10:00-12:00": "Science"}, "tuesday": {"8:00-10:00": "French", "10:00-12:00": "English"}}', '2022-09-01', 'dev101', 1),
    ('{"monday": {"8:00-10:00": "Art", "10:00-12:00": "Science"}, "tuesday": {"8:00-10:00": "Math", "10:00-12:00": "History"}}', '2022-09-01', 'dev102', 1),
    ('{"monday": {"8:00-10:00": "Science", "10:00-12:00": "Math"}, "tuesday": {"8:00-10:00": "French", "10:00-12:00": "English"}}', '2022-09-01', 'dev103', 1);


INSERT INTO `student` (`email`, `password`, `national_student_id`, `numberInClass`, `is_publisher`, `is_responsable`, `photo_path`, `first_name`, `last_name`, `phone_number`, `contact_email`, `class`, `birth_date`) 
VALUES 
-- DEV 101
('st-abderrahmaneatmane@ofppt.com', 'p@ssw0rd1', '2004050500138', 1, 0, 0, '/photos/atmaerne.jpg', 'Abderrahmane', 'Atmane', '+212612345678', 'abderrahmane.atmane@ofppt.com', 1, '2004-05-05'),
('st-ayoubmokhtari@ofppt.com', 'p@ssw0rd2', '2003081500278', 2, 0, 0, '/photos/modkhwhstari.jpg', 'Ayoub', 'Mokhtari', '+212612345679', 'ayoub.mokhtari@ofppt.com', 1, '2003-08-15'),
('st-monssefbelkadi@ofppt.com', 'p@ssw0rd3', '2003102600212', 3, 0, 0, '/photos/befflkadi.jpg', 'Monssef', 'Belkadi', '+212612345670', 'monssef.belkadi@ofppt.com', 1, '2003-10-26'),
('st-souadbenhari@ofppt.com', 'p@ssw0rd4', '2001082000547', 4, 0, 0, '/photos/ben_hagdgrri.jpg', 'Souad', 'Ben Harri', '+212612345671', 'souad.benharri@ofppt.com', 1, '2001-08-20'),
('st-wissalbentayaa@ofppt.com', 'p@ssw0rd5', '2004072500172', 5, 0, 0, '/photos/bendfgtayaa.jpg', 'Wissal', 'Bentayaa', '+212612345672', 'wissal.bentayaa@ofppt.com', 1, '2004-07-25'),
('st-marouabourhida@ofppt.com', 'p@ssw0rd6', '2003041100218', 6, 0, 0, '/photos/bouhrhida.jpg', 'Maroua', 'Bourhida', '+212612345673', 'maroua.bourhida@ofppt.com', 1, '2003-04-11'),
('st-roufaidaboussehaba@ofppt.com', 'p@ssw0rd7', '2003040500076', 7, 0, 0, '/photos/bfhoussehaba.jpg', 'Roufaida', 'Boussehaba', '+212612345674', 'roufaida.boussehaba@ofppt.com', 1, '2003-04-05'),
('st-mohammeddahi@ofppt.com', 'p@ssw0rd8', '2003051400003', 8, 0, 0, '/photos/dahfhi.jpg', 'Mohammed', 'Dahi', '+212612345675', 'mohammed.dahi@ofppt.com', 1, '2003-05-14'),
('st-azzeddinederkaoui@ofppt.com', 'p@ssw0rd9', '1996082700151', 9, 0, 0, '/photos/derkffdaoui.jpg', 'Azzeddine', 'Derkaoui', '+212612345676', 'azzeddine.derkaoui@ofppt.com', 1, '1996-08-27'),
('st-mohammedelbarrag@ofppt.com', 'p@ssw0rd1', '2004102300112', 10, 0, 0, '/photos/el_barjjrgsrag.jpg', 'Mohammed', 'El Barrag', '+212612345677', 'mohammed.elbarrag@ofppt.com', 1, '2004-10-23'),
('st-jihaneelguermat@ofppt.com', 'p@ssw0rd2', '2004082700153', 11, 0, 0, '/photos/el_gueerremat.jpg', 'Jihane', 'El Guermat', '+212612345678', 'jihane.elguermat@ofppt.com', 1, '2004-08-27'),
('st-dohaelhouari@ofppt.com', 'p@ssw0rd3', '2004103000149', 12, 0, 0, '/photos/el_hoerguari.jpg', 'Doha', 'El Houari', '+212612345679', 'doha.elhouari@ofppt.com', 1, '2004-10-30'),
('st-ahmedelmir@ofppt.com', 'p@ssw0rd4', '2003091200224', 13, 0, 0, '/photos/el_mihser.jpg', 'Ahmed', 'El Mir', '+212612345670', 'ahmed.elmir@ofppt.com', 1, '2003-09-12'),
('st-adamelghamry@ofppt.com', 'p@ssw0rd5', '2004091400129', 14, 0, 0, '/photos/elgrehamry.jpg', 'Adam', 'Elghamry', '+212612345671', 'adam.elghamry@ofppt.com', 1, '2004-09-14'),
('st-manalfoukalla@ofppt.com', 'p@ssw0rd6', '1999090200474', 15, 0, 0, '/photos/fohssegukalla.jpg', 'Manal', 'Foukalla', '+212612345672', 'manal.foukalla@ofppt.com', 1, '1999-09-02'),
('st-saidgharrous@ofppt.com', 'p@ssw0rd7', '2004121600103', 16, 0, 0, '/photos/ghardergsshrous.jpg', 'Said', 'Gharrous', '+212612345673', 'said.gharrous@ofppt.com', 1, '2004-12-16'),
('st-mohammedhakkou@ofppt.com', 'p@ssw0rd8', '2004112200120', 17, 0, 0, '/photos/haeghtkkou.jpg', 'Mohammed', 'Hakkou', '+212612345674', 'mohammed.hakkou@ofppt.com', 1, '2004-11-22'),
('st-iliasjabri@ofppt.com', 'p@ssw0rd9', '2001040200431', 18, 0, 0, '/photos/jabsvri.jpg', 'Ilias', 'Jabri', '+212612345675', 'ilias.jabri@ofppt.com', 1, '2001-04-02'),
('st-hajarKhafifi@ofppt.com', 'p@ssw0rd1', '2001052400328', 19, 1, 1, '/photos/khsehafifi.jpg', 'Hajar', 'Khafifi', '+212612345676', 'hajar.khafifi@ofppt.com', 1, '2001-05-24'),
('st-samirarazzouga@ofppt.com', 'p@ssw0rd2', '2003082200143', 20, 0, 0, '/photos/rawrzzouga.jpg', 'Samira', 'Razzouga', '+212612345677', 'samira.razzouga@ofppt.com', 1, '2003-08-22'),
('st-mohyddinesahir@ofppt.com', 'p@ssw0rd3', '2003102700162', 21, 0, 0, '/photos/sahgdir.jpg', 'Mohyddine', 'Sahir', '+212612345678', 'mohyddine.sahir@ofppt.com', 1, '2003-10-27'),
('st-mohammedsnoussi@ofppt.com', 'p@ssw0rd4', '2000111000609', 22, 0, 0, '/photos/snoushssi.jpg', 'Mohammed', 'Snoussi', '+212612345679', 'mohammed.snoussi@ofppt.com', 1, '2000-11-10'),
('st-mohammedamineyacoubi@ofppt.com', 'p@ssw0rd5', '2003102500150', 23, 1, 1, '/photos/yacousdgbi.jpg', 'Mohammed Amine', 'Yacoubi', '+212612345670', 'mohammedamine.yacoubi@ofppt.com', 1, '2003-10-25'),
('st-mohammedzahafi@ofppt.com', 'p@ssw0rd6', '2003040300278', 24, 0, 0, '/photos/zahafdfgi.jpg', 'Mohammed', 'Zahafi', '+212612345671', 'mohammed.zahafi@ofppt.com', 1, '2003-04-03'),

-- DEV 102
('st-nourelhoudaaissaoui@ofppt.com', 'p@ssw0rd1', '2004010500256', 1, 0, 0, '/photos/aissaweoui.jpg', 'Nour-El Houda', 'Aissaoui', '+212612345672', 'nour.elhouda.aissaoui@ofppt.com', 2, '2004-01-05'),
('st-mohammedaittardo@ofppt.com', 'p@ssw0rd2', '2003060800232', 2, 0, 0, '/photos/aittashgrdo.jpg', 'Mohammed', 'Aittardo', '+212612345673', 'mohammed.aittardo@ofppt.com', 2, '2003-06-08'),
('st-zinebatmane@ofppt.com', 'p@ssw0rd3', '2000080900475', 3, 1, 0, '/photos/atmandgfe.jpg', 'Zineb', 'Atmane', '+212612345674', 'zineb.atmane@ofppt.com', 2, '2000-08-09'),
('st-mohammedbakhale@ofppt.com', 'p@ssw0rd4', '2004061600154', 4, 0, 0, '/photos/bakhjsale.jpg', 'Mohammed', 'Bakhale', '+212612345675', 'mohammed.bakhale@ofppt.com', 2, '2004-06-16'),
('st-ayoubbentahri@ofppt.com', 'p@ssw0rd5', '2001112200456', 5, 1, 0, '/photos/bentgdahri.jpg', 'Ayoub', 'Bentahri', '+212612345676', 'ayoub.bentahri@ofppt.com', 2, '2001-11-22'),
('st-ayoubberrached@ofppt.com', 'p@ssw0rd6', '2003091800222', 6, 0, 0, '/photos/bercxvrached.jpg', 'Ayoub', 'Berrached', '+212612345677', 'ayoub.berrached@ofppt.com', 2, '2003-09-18'),
('st-meryambotmi@ofppt.com', 'p@ssw0rd7', '2003021000379', 7, 1, 0, '/photos/botgsmi.jpg', 'Meryam', 'Botmi', '+212612345678', 'meryam.botmi@ofppt.com', 2, '2003-02-10'),
('st-ilyaschaif@ofppt.com', 'p@ssw0rd8', '2003122700194', 8, 0, 0, '/photos/chadgif.jpg', 'Ilyas', 'Chaif', '+212612345679', 'ilyas.chaif@ofppt.com', 2, '2003-12-27'),
('st-kaoutarchekroun@ofppt.com', 'p@ssw0rd9', '2005012100067', 9, 1, 0, '/photos/chedghkroun.jpg', 'Kaoutar', 'Chekroun', '+212612345670', 'kaoutar.chekroun@ofppt.com', 2, '2005-01-21'),
('st-chaymaechellal@ofppt.com', 'p@ssw0rd10', '2004051900092', 10, 0, 0, '/photos/cherrllal.jpg', 'Chaymae', 'Chellal', '+212612345671', 'chaymae.chellal@ofppt.com', 2, '2004-05-19'),
('st-bouchraelbatha@ofppt.com', 'p@ssw0rd11', '2004050600140', 11, 1, 0, '/photos/elwwbatha.jpg', 'Bouchra', 'El Batha', '+212612345672', 'bouchra.elbatha@ofppt.com', 2, '2004-05-06'),
('st-yassineelrhazzali@ofppt.com', 'p@ssw0rd12', '2003080900125', 12, 0, 0, '/photos/elrsghazzali.jpg', 'Yassine', 'El Rhazzali', '+212612345673', 'yassine.elrhazzali@ofppt.com', 2, '2003-08-09'),
('st-assiaessounani@ofppt.com', 'p@ssw0rd13', '2003060700159', 13, 1, 0, '/photos/essounansgi.jpg', 'Assia', 'Essounani', '+212612345674', 'assia.essounani@ofppt.com', 2, '2003-06-07'),
('st-mohammedkasmi@ofppt.com', 'p@ssw0rd14', '2003051300231', 14, 0, 0, '/photos/kdfgasmi.jpg', 'Mohammed', 'Kasmi', '+212612345675', 'mohammed.kasmi@ofppt.com', 2, '2003-05-13'),
('st-mohammedkhartoch@ofppt.com', 'p@ssw0rd15', '2004012700221', 15, 1, 0, '/photos/khadgrtoch.jpg', 'Mohammed', 'Khartoch', '+212612345676', 'mohammed.khartoch@ofppt.com', 2, '2004-01-27'),
('st-kaoutarmaitat@ofppt.com', 'p@ssw0rd16', '2002102200281', 16, 0, 0, '/photos/maitadgt.jpg', 'Kaoutar', 'Maitat', '+212612345677', 'kaoutar.maitat@ofppt.com', 2, '2002-10-22'),
('st-khadijamerimi@ofppt.com', 'p@ssw0rd17', '2003072600272', 17, 1, 0, '/photos/medgfrimi.jpg', 'Khadija', 'Merimi', '+212612345678', 'khadija.merimi@ofppt.com', 2, '2003-07-26'),
('st-houdamerzouki@ofppt.com', 'p@ssw0rd18', '2004092600144', 18, 0, 0, '/photos/merzoukdfhi.jpg', 'Houda', 'Merzouki', '+212612345679', 'houda.merzouki@ofppt.com', 2, '2004-09-26'),
('st-marouamessoud@ofppt.com', 'p@ssw0rd19', '2004080300165', 19, 1, 0, '/photos/mesjjsoud.jpg', 'Maroua', 'Messoud', '+212612345670', 'maroua.messoud@ofppt.com', 2, '2004-08-03'),
('st-ibtissammkidech@ofppt.com', 'p@ssw0rd20', '2003102500265', 20, 0, 0, '/photos/mkizdech.jpg', 'Ibtissam', 'Mkidech', '+212612345671', 'ibtissam.mkidech@ofppt.com', 2, '2003-10-25'),
('st-youssefmouhajra@ofppt.com', 'p@ssw0rd21', '2001080700305', 21, 1, 0, '/photos/mouhjtajra.jpg', 'Youssef', 'Mouhajra', '+212612345672', 'youssef.mouhajra@ofppt.com', 2, '2001-08-07'),
('st-mohammedsbai@ofppt.com', 'p@ssw0rd22', '2000010200540', 22, 0, 0, '/photos/sbdai.jpg', 'Mohammed', 'Sbai', '+212612345673', 'mohammed.sbai@ofppt.com', 2, '2000-01-02'),
('st-rababtalbi@ofppt.com', 'p@ssw0rd23', '2003012700297', 23, 1, 0, '/photos/talabi.jpg', 'Rabab', 'Talbi', '+212612345674', 'rabab.talbi@ofppt.com', 2, '2003-01-27'),
('st-oussamazekalmi@ofppt.com', 'p@ssw0rd24', '2003033000250', 24, 0, 0, '/photos/zekjjalmi.jpg', 'Oussama', 'Zekalmi', '+212612345675', 'oussama.zekalmi@ofppt.com', 2, '2003-03-30'),

-- DEV 103
('st-achrafabdeslami@ofppt.com', 'p@ssw0rd25', '2003052600256', 1, 0, 0, '/photos/abddgeslami.jpg', 'Achraf', 'Abdeslami', '+212612345670', 'achraf.abdeslami@ofppt.com', 3, '2003-05-26'),
('st-ikramalahyene@ofppt.com', 'p@ssw0rd26', '2000101000328', 2, 1, 0, '/photos/alahyxxene.jpg', 'Ikram', 'Alahyene', '+212612345671', 'ikram.alahyene@ofppt.com', 3, '2000-10-10'),
('st-oussamaallay@ofppt.com', 'p@ssw0rd27', '2004033100121', 3, 0, 0, '/photos/allway.jpg', 'Oussama', 'Allay', '+212612345672', 'oussama.allay@ofppt.com', 3, '2004-03-31'),
('st-amineaziz@ofppt.com', 'p@ssw0rd28', '2003102700158', 4, 1, 0, '/photos/azijiz.jpg', 'Amine', 'Aziz', '+212612345673', 'amine.aziz@ofppt.com', 3, '2003-10-27'),
('st-ayyoubbahine@ofppt.com', 'p@ssw0rd29', '2003042500255', 5, 0, 0, '/photos/bahidfgne.jpg', 'Ayyoub', 'Bahine', '+212612345674', 'ayyoub.bahine@ofppt.com', 3, '2003-04-25'),
('st-youssefbenamar@ofppt.com', 'p@ssw0rd30', '2001021600442', 6, 1, 0, '/photos/bedgnamar.jpg', 'Youssef', 'Benamar', '+212612345675', 'youssef.benamar@ofppt.com', 3, '2001-02-16'),
('st-atikabenrabeh@ofppt.com', 'p@ssw0rd31', '2003012000393', 7, 0, 0, '/photos/benrfdbabeh.jpg', 'Atika', 'Benrabeh', '+212612345676', 'atika.benrabeh@ofppt.com', 3, '2003-01-20'),
('st-marouanbourchid@ofppt.com', 'p@ssw0rd32', '1993010101198', 8, 1, 0, '/photos/boudxrchid.jpg', 'Marouan', 'Bourchid', '+212612345677', 'marouan.bourchid@ofppt.com', 3, '1993-01-01'),
('st-hamzachannouf@ofppt.com', 'p@ssw0rd33', '2003053100129', 9, 0, 0, '/photos/chansdnouf.jpg', 'Hamza', 'Channouf', '+212612345678', 'hamza.channouf@ofppt.com', 3, '2003-05-31'),
('st-adnaneelmir@ofppt.com', 'p@ssw0rd34', '2003070100313', 10, 1, 0, '/photos/eljjmir.jpg', 'Adnane', 'El Mir', '+212612345679', 'adnane.elmir@ofppt.com', 3, '2003-07-01'),
('st-oualidelkamel@ofppt.com', 'p@ssw0rd35', '2000010104516', 11, 0, 0, '/photos/elksdamel.jpg', 'Oualid', 'El-Kamel', '+212612345680', 'oualid.elkamel@ofppt.com', 3, '2000-01-01'),
('st-abdelhafidelmaghraoui@ofppt.com', 'p@ssw0rd36', '2002031300016', 12, 1, 0, '/photos/elmaghcraoui.jpg', 'Abdelhafid', 'Elmaghraoui', '+212612345681', 'abdelhafid.elmaghraoui@ofppt.com', 3, '2002-03-13'),
('st-saraezziani@ofppt.com', 'p@ssw0rd37', '2002111700332', 13, 0, 0, '/photos/ezziaqni.jpg', 'Sara', 'Ezziani', '+212612345682', 'sara.ezziani@ofppt.com', 3, '2002-11-17'),
('st-abderrahmanehajji@ofppt.com', 'p@ssw0rd38', '2000100900493', 14, 1, 0, '/photos/hajjki.jpg', 'Abderrahmane', 'Hajji', '+212612345683', 'abderrahmane.hajji@ofppt.com', 3, '2000-10-09'),
('st-moradhamdaoui@ofppt.com', 'p@ssw0rd39', '2001022600385', 15, 0, 0, '/photos/hamdaodgui.jpg', 'Morad', 'Hamdaoui', '+212612345684', 'morad.hamdaoui@ofppt.com', 3, '2001-02-26'),
('st-sihamhamza@ofppt.com', 'p@ssw0rd40', '2003072700016', 16, 1, 0, '/photos/hamssza.jpg', 'Siham', 'Hamza', '+212612345685', 'siham.hamza@ofppt.com', 3, '2003-07-27'),
('st-abirjerrar@ofppt.com', 'p@ssw0rd41', '2003010700274', 17, 0, 0, '/photos/jervfrar.jpg', 'Abir', 'Jerrar', '+212612345686', 'abir.jerrar@ofppt.com', 3, '2003-01-07'),
('st-aminakasmi@ofppt.com', 'p@ssw0rd42', '2002090100296', 18, 1, 0, '/photos/kasmhi.jpg', 'Amina', 'Kasmi', '+212612345687', 'amina.kasmi@ofppt.com', 3, '2002-09-01'),
('st-mohammedelmahmoudi@ofppt.com', 'p@ssw0rd43', '2000072500483', 19, 0, 0, '/photos/elmaahmoudi.jpg', 'Mohammed', 'El-Mahmoudi', '+212612345688', 'mohammed.elmahmoudi@ofppt.com', 3, '2000-07-25'),
('st-mohammedmoussaoui@ofppt.com', 'p@ssw0rd44', '2002011000491', 20, 1, 0, '/photos/mousjsaoui.jpg', 'Mohammed', 'Moussaoui', '+212612345689', 'mohammed.moussaoui@ofppt.com', 3, '2002-01-10'),
('st-saratahzima@ofppt.com', 'p@ssw0rd45', '2004013100095', 21, 0, 0, '/photos/tahzigma.jpg', 'Sara', 'Tahzima', '+212612345690', 'sara.tahzima@ofppt.com', 3, '2004-01-31'),
('st-hamzazafre@ofppt.com', 'p@ssw0rd46', '2004050800154', 22, 1, 0, '/photos/zafare.jpg', 'Hamza', 'Zafre', '+212612345691', 'hamza.zafre@ofppt.com', 3, '2004-05-08'),
('st-marouaneziani@ofppt.com', 'p@ssw0rd47', '2000011400394', 23, 0, 0, '/photos/kziani.jpg', 'Marouane', 'Ziani', '+212612345692', 'marouane.ziani@ofppt.com', 3, '2000-01-14');

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



INSERT INTO `ista_website_db`.`super_user` (`email`, `password`, `super_user_privelage`, `super_user_legacy`)
VALUES
  ('sp-user1@ofppt.com', 'pass123', 'admin', 'ghost'),
  ('sp-user2@ofppt.com', 'pass123', 'admin', 'shadow'),
  ('sp-user3@ofppt.com', 'pass123', 'editor', 'L');


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



-- adding default student's notes to the database dynamically initialized to 0, 0, 0, 0.

insert into note select subject.subject_id, student.student_id, 0, 0, 0, 0 from student join subject on student.class = subject.class_id;

INSERT INTO `ista_website_db`.`article` (`publisher_id`, `title`, `body`, `date_time`, `keywords`, `resources`, `user_type`)
VALUES
(1, 'Article 1', 'Body of Article 1', '2023-05-01 10:00:00', 'keyword1, keyword2', 5, 'administration'),
(2, 'Article 2', 'Body of Article 2', '2023-05-05 11:00:00', 'keyword3, keyword4', 3, 'administration'),
(3, 'Article 3', 'Body of Article 3', '2023-05-10 12:00:00', 'keyword1, keyword5', 2, 'administration'),
(1, 'Article 4', 'Body of Article 4', '2023-05-15 13:00:00', 'keyword6, keyword7', NULL, 'administration'),
(2, 'Article 5', 'Body of Article 5', '2023-05-20 14:00:00', 'keyword8, keyword9', 1, 'administration'),
(3, 'Article 6', 'Body of Article 6', '2023-05-25 15:00:00', 'keyword10, keyword2', NULL, 'administration'),
(1, 'Article 7', 'Body of Article 7', '2023-05-30 16:00:00', 'keyword3, keyword11', 4, 'administration'),
(2, 'Article 8', 'Body of Article 8', '2023-06-05 17:00:00', 'keyword12, keyword4', 2, 'teacher'),
(3, 'Article 9', 'Body of Article 9', '2023-06-07 18:00:00', 'keyword1, keyword5', 3, 'administration'),
(1, 'Article 10', 'Body of Article 10', '2023-06-07 19:00:00', 'keyword6, keyword13', NULL, 'teacher');
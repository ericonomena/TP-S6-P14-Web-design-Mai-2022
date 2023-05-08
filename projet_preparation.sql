




CREATE TABLE Type(
	id SERIAL PRIMARY KEY,
	type varchar(50),
	description TEXT,
	slug varchar(50)
);

CREATE TABLE Contenu(
	id SERIAL PRIMARY KEY,
	introduction TEXT,
	titre varchar(80),
	explication TEXT,
	conclusion TEXT,
	image TEXT,
	slug varchar(50),
	idType int REFERENCES Type(id),
	article TEXT,
	date DATE DEFAULT CURRENT_DATE
);

CREATE TABLE MotCle(
	id SERIAL PRIMARY KEY,
	idContenu int REFERENCES Contenu(id),
	motCle varchar(50)
);

CREATE SEQUENCE photo;
CREATE SEQUENCE id START WITH 6;

-- Insertion dans la table "Type"
INSERT INTO Type (type, description,slug)
VALUES
('Education With AI', 'Dernieres nouvelles sur l IA.','education-with-ai'),
('Precise Data Analysis & Prediction', 'Decouvrez les dernieres avancees technologiques en IA.','precise-data-analysis-prediction'),
('Real-Time Big Data Analysis', 'Decouvrez comment l IA est utilisee dans differents domaines.','real-time-big-data-analysis'),
('Chatbots & Virtual Assistants', 'Decouvrez comment l IA est utilisee dans differents domaines.','chatbots-virtual-assistants');

-- Contenu 1
INSERT INTO Contenu (introduction, titre, explication, conclusion, image, slug, idType, article)
VALUES
('Decouvrez les dernieres avancees en matiere d IA dans le domaine de la sante.', 'L IA en medecine : les nouvelles perspectives', 'L intelligence artificielle est de plus en plus utilisee en medecine pour aider à diagnostiquer les maladies et ameliorer les traitements. Dans cet article, nous allons explorer certaines des applications les plus recentes de l IA en medecine.', 'En conclusion, l IA est en train de revolutionner le domaine de la sante, mais il est important de l utiliser de maniere ethique et responsable.', 'image1.jpg', 'ia-en-medecine-les-nouvelles-perspectives', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis justo sed lectus congue consequat. Duis nec turpis sit amet augue pharetra ullamcorper. Suspendisse potenti. ');

-- Contenu 2
INSERT INTO Contenu (introduction, titre, explication, conclusion, image, slug, idType, article)
VALUES
('Decouvrez comment l IA peut aider à prevenir les catastrophes naturelles.', 'L IA au service de la prevention des catastrophes', 'Les catastrophes naturelles peuvent avoir des consequences devastatrices, mais l IA peut aider à les prevenir ou à en minimiser les effets. Dans cet article, nous allons explorer certaines des facons dont l IA peut être utilisee pour proteger les populations et les infrastructures.', 'En conclusion, l IA est un outil precieux dans la prevention des catastrophes naturelles, mais il est important de travailler en collaboration avec les experts du domaine.', 'image2.jpg', 'ia-au-service-de-la-prevention-des-catastrophes', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis justo sed lectus congue consequat. Duis nec turpis sit amet augue pharetra ullamcorper. Suspendisse potenti. ');

-- Contenu 3
INSERT INTO Contenu (introduction, titre, explication, conclusion, image, slug, idType, article)
VALUES
('Decouvrez comment l IA est en train de changer le monde du travail.', 'L impact de l IA sur le monde du travail', 'L IA est en train de transformer le monde du travail en automatisant de nombreuses tâches et en creant de nouveaux emplois. Dans cet article, nous allons explorer certaines des facons dont l IA est en train de changer le monde du travail.', 'En conclusion, l IA est un outil puissant pour ameliorer l efficacite et la productivite dans de nombreux secteurs, mais il est important de s adapter aux changements et de se former aux competences necessaires pour les emplois du futur.', 'image3.jpg', 'impact-de-l-ia-sur-le-monde-du-travail', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis justo sed lectus congue consequat. Duis nec turpis sit amet augue pharetra ullamcorper. Suspendisse potenti. ');

INSERT INTO Contenu (introduction, titre, explication, conclusion, image, slug, idType, article) 
VALUES 
('La reconnaissance vocale est une technologie en pleine evolution, permettant aux machines de comprendre et interpreter la parole humaine. Dans cet article, nous allons explorer les avancees recentes dans ce domaine.', 'La reconnaissance vocale : les dernières avancees', 'Les chercheurs ont recemment developpe des modèles de reconnaissance vocale bases sur l IA qui sont plus precis que jamais auparavant. Ils utilisent des reseaux de neurones profonds pour apprendre à reconnaître les subtilites de la parole humaine.', 'La reconnaissance vocale est de plus en plus utilisee dans les applications de l IA, telles que les assistants personnels et les voitures autonomes. Les progrès dans ce domaine ouvrent de nouvelles perspectives pour les technologies de communication et de comprehension humaines.', 'reconnaissance_vocale.jpg', 'reconnaissance-vocale-dernieres-avancees', 1, 'La reconnaissance vocale est une technologie prometteuse qui offre de nombreuses possibilites pour l avenir.');


select image, slug, idType from contenu;



drop table if exists users cascade;
CREATE TABLE users(
    idusers SERIAL  PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(50),
    dtn date,
    password VARCHAR(50)
);


insert into users values (DEFAULT,'erico','nomena','erico@gmail.com','2023-12-03','root'); 



-- Insertion dans la table "MotCle"
INSERT INTO MotCle (idContenu, motCle)
VALUES
(1, 'IA'),
(1, 'Avantages'),
(1, 'Inconvenients'),
(2, 'Cybersecurite'),
(2, 'Prevention'),
(2, 'Preparation'),
(3, 'Site web'),
(3, 'Planification'),
(3, 'Details');
INSERT INTO MotCle (idContenu, motCle) VALUES (4, 'reconnaissance vocale');
INSERT INTO MotCle (idContenu, motCle) VALUES (4, 'IA');
INSERT INTO MotCle (idContenu, motCle) VALUES (4, 'réseaux de neurones');


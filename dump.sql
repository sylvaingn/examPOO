create database if not exists vtc;

use vtc;

create table if not exists conducteur(

id_conducteur 	INT PRIMARY KEY  auto_increment,
prenom 			VARCHAR(45),
nom 			VARCHAR(75)
)engine = innodb;


create table if not exists vehicule(

id_vehicule 				INT PRIMARY KEY  auto_increment,
marque 						VARCHAR(45),
modele 						VARCHAR(75),
couleur 					VARCHAR(75),
immatriculation 			VARCHAR(75)
)engine = innodb;


CREATE TABLE if not exists association_vehicule_conducteur (

id_association 	INT auto_increment,
id_vehicule		INT,
id_conducteur 	INT,
    PRIMARY KEY (id_association),
    FOREIGN KEY (id_conducteur) REFERENCES conducteur(id_conducteur),
    FOREIGN KEY (id_vehicule) REFERENCES vehicule(id_vehicule)
)engine = innodb;


INSERT INTO `vtc`.`vehicule` (`id_vehicule`, `marque`, `modele`, `couleur`, `immatriculation`) VALUES ('501', 'Peugeot', '807', 'noir', 'AB-355-CA');
INSERT INTO `vtc`.`vehicule` (`marque`, `modele`, `couleur`, `immatriculation`) VALUES ('Citroen', 'C8', 'bleu', 'CE-122-AE');
INSERT INTO `vtc`.`vehicule` (`marque`, `modele`, `couleur`, `immatriculation`) VALUES ('Mercedes', 'Cls', 'vert', 'FG-953-HI');
INSERT INTO `vtc`.`vehicule` (`marque`, `modele`, `couleur`, `immatriculation`) VALUES ('Volkswagen', 'Touran', 'noir', 'SO-322-NV');
INSERT INTO `vtc`.`vehicule` (`marque`, `modele`, `couleur`, `immatriculation`) VALUES ('Skoda', 'Octavia', 'gris', 'PB-631-TK');
INSERT INTO `vtc`.`vehicule` (`marque`, `modele`, `couleur`, `immatriculation`) VALUES ('Volkswagen', 'Passat', 'gris', 'XN-973-MM');


INSERT INTO `vtc`.`conducteur` (`prenom`, `nom`) VALUES ('Julien', 'Avigny');
INSERT INTO `vtc`.`conducteur` (`prenom`, `nom`) VALUES ('Morgane', 'Alamia');
INSERT INTO `vtc`.`conducteur` (`prenom`, `nom`) VALUES ('Philippe', 'Pandre');
INSERT INTO `vtc`.`conducteur` (`prenom`, `nom`) VALUES ('Amelie', 'Blondelle');
INSERT INTO `vtc`.`conducteur` (`prenom`, `nom`) VALUES ('Alex', 'Richy');


INSERT INTO `vtc`.`association_vehicule_conducteur` (`id_association`, `id_vehicule`, `id_conducteur`) VALUES ('1', '501', '1');
INSERT INTO `vtc`.`association_vehicule_conducteur` (`id_vehicule`, `id_conducteur`) VALUES ('502', '2');
INSERT INTO `vtc`.`association_vehicule_conducteur` (`id_vehicule`, `id_conducteur`) VALUES ('503', '3');
INSERT INTO `vtc`.`association_vehicule_conducteur` (`id_vehicule`, `id_conducteur`) VALUES ('504', '4');
INSERT INTO `vtc`.`association_vehicule_conducteur` (`id_vehicule`, `id_conducteur`) VALUES ('501', '3');

DROP TABLE IF EXISTS Photo;
DROP TABLE IF EXISTS Article;
DROP TABLE IF EXISTS Admin;

Create table Photo (
   idPhoto VARCHAR(3),
   nomPhoto VARCHAR(20),
   descPhoto VARCHAR(50),
   adrPhoto VARCHAR(20) NOT NULL,
   PRIMARY KEY (idPhoto)
)Engin=InnoDB;

Create table Article (
   idArticle VARCHAR(3),
   titreArticle VARCHAR(20) NOT NULL,
   dateArticle DATE,
   PRIMARY KEY (idArticle)
)Engin=InnoDB;

Create table Admin (
   logAdmin VARCHAR(3),
   mdpAdmin VARCHAR(20),
   PRIMARY KEY (idCours)
)Engin=InnoDB;

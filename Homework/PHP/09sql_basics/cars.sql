CREATE TABLE Brands (
	brand_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	
) DEFAULT COLLATE utf8_unicode_ci ;

CREATE TABLE Regions (
	region_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	country VARCHAR(100) NOT NULL,
	
	
) DEFAULT COLLATE utf8_unicode_ci;

CREATE TABLE Cars (
	car_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	colour VARCHAR(100) NOT NULL,
	year_ INT NOT NULL,
	brand_id INT NOT NULL,
	region_id INT NOT NULL,
	FOREIGN KEY (region_id) 
        REFERENCES Regions(region_id)
        ON DELETE CASCADE
	
	FOREIGN KEY (brand_id) 
        REFERENCES Brands(brand_id)
        ON DELETE CASCADE
	
) DEFAULT COLLATE utf8_unicode_ci ;

INSERT INTO `Brands` VALUES ('1','Audi');
INSERT INTO `Brands` VALUES ('2','BMW');
INSERT INTO `Brands` VALUES ('3','VolksWagen');

INSERT INTO `Regions` VALUES ('1','Sofia','Bulgaria');
INSERT INTO `Regions` VALUES ('2','Plovdiv','Bulgaria');
INSERT INTO `Regions` VALUES ('3','London','UK');

INSERT INTO `Cars` VALUES ('1','blue','2012','2','1');
INSERT INTO `Cars` VALUES ('2','green','2006','3','2');
INSERT INTO `Cars` VALUES ('3','red','2013','1','3');



UPDATE
	Cars
SET 
	brand_id ='3',
	year_=2002
WHERE
	colour = 'blue';
	
UPDATE
	Cars
SET 
	region_id ='3',
	colour='pink'
WHERE
	colour = 'blue';
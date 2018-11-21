# Limbo Tables

# Author: Maria Molloy, Victoria Spychalski, Daniel Simpson



DROP DATABASE IF EXISTS site_db;

CREATE DATABASE site_db;
USE site_db;

/*ADMIN TABLE*/
DROP TABLE IF EXISTS admin_t;

CREATE TABLE admin_t
(

    AdminID INT PRIMARY KEY AUTO_INCREMENT,

    FirstName TEXT NOT NULL,

    LastName TEXT NOT NULL,

    AdminEmail TEXT NOT NULL

);

/*creating the admins*/
INSERT INTO admin_t (FirstName, LastName, AdminEmail)
VALUES ('Victoria', 'Spychalski', 'victoria.spychalski1@marist.edu'),

       ('Daniel', 'Simpson', 'daniel.simpson1@marist.edu'),

       ('Maria', 'Molloy', 'maria.molloy1@marist.edu');



/*all found items will go here*/
DROP TABLE IF EXISTS foundItems_t;
CREATE TABLE foundItems_t
(
    ItemID INT PRIMARY KEY AUTO_INCREMENT,

    ItemName TEXT NOT NULL,

    ConditionFound TEXT NOT NULL,

    DateFound DATE NOT NULL,

    BuilidngFound TEXT NOT NULL,

    FOREIGN KEY(FinderID)REFERENCES finder_t(FinderID)
);

INSERT INTO foundItems_t(ItemName, ConditionFound, DateFound, BuildingFound)
VALUES ('Sunglasses', 'Fair', '2018-10-28', 'Leo Hall'),

       ('Blue Backpack', 'Worn', '2018-11-02', 'Dyson'),

       ('MacBook Pro', 'Good', '2018-11-05', 'Hancock');

/*items can be moved to found items when found*/
DROP TABLE IF EXISTS lostItems_t;
CREATE TABLE lostItems_t
(
    ItemID INT PRIMARY KEY AUTO_INCREMENT,

    ItemName TEXT NOT NULL,

    DateLost DATE NOT NULL,

    BuildingLost TEXT NOT NULL,

    FOREIGN KEY(OwnerID)  REFERENCES owner_t(OwnerID)
) ;

INSERT INTO foundItems_t(ItemName, DateLost, BuildingLost)
VALUES ('Marist WaterBottle', '2018-10-21', 'Hancock'),

       ('Apple Watch', '2018-10-29', 'McCann'),

       ('Blue Backpack', '2018-11-01', 'Dyson');


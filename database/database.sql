DROP DATABASE IF EXISTS urbannest;

-- Create the database
CREATE DATABASE urbannest;

-- Use the database
USE urbannest;

-- Create the admin table
CREATE TABLE Admin (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `UserName` VARCHAR(255) NOT NULL,
    `Password` VARCHAR(255) NOT NULL,
    `Email` VARCHAR(255) NOT NULL UNIQUE,
    `Phone` VARCHAR(15)
);

-- Create the client table
CREATE TABLE Client (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `UserName` VARCHAR(255) NOT NULL,
    `Email` VARCHAR(255) NOT NULL UNIQUE,
    `Password` VARCHAR(255)
);

-- Create the state table
CREATE TABLE State (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `Name` VARCHAR(255) NOT NULL
);

-- Create the city table
CREATE TABLE City (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `StateId` INT,
    `Name` VARCHAR(255) NOT NULL,
    FOREIGN KEY (`StateId`) REFERENCES State(`Id`)
);

-- Create the property type table
CREATE TABLE PropertyType (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `Name` VARCHAR(255) NOT NULL
);

-- Create the property details table
CREATE TABLE PropertyDetails (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,    
    `TypeId` INT NOT NULL,
    `CityId` INT NOT NULL,
    `StateId` INT NOT NULL,
    `PropertyName` VARCHAR(255) NOT NULL,
    `Address` TEXT,
    `Sqft` VARCHAR(255) NOT NULL,
    `Description` TEXT,
    `Price` INT,
    `ImageFileName` VARCHAR(255) NOT NULL,
    FOREIGN KEY (`TypeId`) REFERENCES `PropertyType`(`Id`),
    FOREIGN KEY (`CityId`) REFERENCES `City`(`Id`),
    FOREIGN KEY (`StateId`) REFERENCES `State`(`Id`)
);

-- Create the wishlist table
CREATE TABLE Wishlist (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `ClientId` INT NOT NULL,
    `PropertyId` INT NOT NULL,
    FOREIGN KEY (`ClientId`) REFERENCES `Client`(`Id`),
    FOREIGN KEY (`PropertyId`) REFERENCES `PropertyDetails`(`Id`)
);

-- Create the cart table
CREATE TABLE Cart (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `PropertyId` INT NOT NULL,
    `ClientId` INT NOT NULL,
    FOREIGN KEY (`PropertyId`) REFERENCES `PropertyDetails`(`Id`),
    FOREIGN KEY (`ClientId`) REFERENCES `Client`(`Id`)
);

-- Create the order table
CREATE TABLE `Order` (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `CartId` INT,
    `TotalAmount` INT,
    `Status` VARCHAR(255),  
    FOREIGN KEY (`CartId`) REFERENCES `Cart`(`Id`)
);

-- Create the checkout table
CREATE TABLE Checkout (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `CartId` INT NOT NULL,
    `FirstName` VARCHAR(255) NOT NULL,
    `LastName` VARCHAR(255) NOT NULL,
    `Address` VARCHAR(255) NOT NULL,
    `City` VARCHAR(255) NOT NULL,
    `State` VARCHAR(255) NOT NULL,
    `PinCode` VARCHAR(10) NOT NULL,
    `Phone` VARCHAR(15) NOT NULL,
    `Email` VARCHAR(255) NOT NULL,
    `TotalPrice` INT NOT NULL,
    FOREIGN KEY (`CartId`) REFERENCES `Cart`(`Id`)
);

-- Create the payment table
CREATE TABLE Payment (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `OrderId` INT,
    `Date` DATE,
    `Amount` INT,
    `Status` VARCHAR(255),
    FOREIGN KEY (`OrderId`) REFERENCES `Order`(`Id`)
);

-- Create the feedback table
CREATE TABLE Feedback (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `Name` VARCHAR(50) NOT NULL,
    `Message` TEXT
);

-- Seed admin user
INSERT INTO Admin (Username, Password, Email, Phone)
VALUES ('admin', 'admin', 'admin@gmail.com', '987654321');

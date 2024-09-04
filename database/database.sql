DROP DATABASE IF EXISTS urbannest;

-- Create the database
CREATE DATABASE urbannest;

-- Use the database
USE urbannest;

-- Create the role table
CREATE TABLE Role (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `Name` VARCHAR(255) NOT NULL
);

-- Create the user table
CREATE TABLE `User` (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `Username` VARCHAR(255) NOT NULL,
    `Password` VARCHAR(255) NOT NULL,
    `Email` VARCHAR(255) NOT NULL
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

-- Create the typeproperty table
CREATE TABLE TypeProperty (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `Name` VARCHAR(255) NOT NULL
);

-- Create the propertydetails table
CREATE TABLE PropertyDetails (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `TypeId` INT,
    `CityId` INT,
    `PropertyName` VARCHAR(255) NOT NULL,
    `Address` TEXT,
    `Sqft` VARCHAR(255) NOT NULL,
    `Description` TEXT,
    `Price` INT,
    `ImageFileName` VARCHAR(255) NOT NULL,
    FOREIGN KEY (`TypeId`) REFERENCES TypeProperty(`Id`),
    FOREIGN KEY (`CityId`) REFERENCES City(`Id`)
);

-- Create the appointment table
CREATE TABLE Appointment (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `UserId` INT,
    `PropertyId` INT,
    `Date` DATE,
    `Phone` VARCHAR(15) NOT NULL,
    `Email` VARCHAR(255) NOT NULL,
    FOREIGN KEY (`UserId`) REFERENCES `User`(`Id`),
    FOREIGN KEY (`PropertyId`) REFERENCES PropertyDetails(`Id`)
);

-- Create the order table
CREATE TABLE `Order` (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `UserId` INT,
    `PropertyId` INT,
    `Date` DATE,
    `TotalAmount` INT,
    `Status` VARCHAR(255),
    FOREIGN KEY (`UserId`) REFERENCES `User`(`Id`),
    FOREIGN KEY (`PropertyId`) REFERENCES PropertyDetails(`Id`)
);

-- Create the payment table
CREATE TABLE Payment (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `OrderId` INT,
    `Date` DATE,
    `Amount` INT,
    `Method` VARCHAR(255),
    `Status` VARCHAR(255),
    FOREIGN KEY (`OrderId`) REFERENCES `Order`(`Id`)
);

-- Create the feedback table
CREATE TABLE Feedback (
    `Id` INT AUTO_INCREMENT PRIMARY KEY,
    `UserId` INT,
    `PropertyId` INT,
    `Rating` INT,
    `Comments` TEXT,
    `Date` DATE,
    FOREIGN KEY (`UserId`) REFERENCES `User`(`Id`),
    FOREIGN KEY (`PropertyId`) REFERENCES PropertyDetails(`Id`)
);

INSERT INTO User (
    Username,
    Password,
    Email
)
VALUES
    (
        'admin',
        'admin',
        'admin@gmail.com'
    );

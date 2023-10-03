CREATE DATABASE assignment1;

USE assignment1;

CREATE TABLE `employee` (
 `FullName` varchar(50) NOT NULL,
 `ID` int(8) NOT NULL,
 `Department` varchar(50) NOT NULL,
 `Position` varchar(50) NOT NULL,
 `WorkHour` int(3) NOT NULL,
 PRIMARY KEY (`ID`)
) 

# Author: Caleb Givens

# Please create your database with the name `group6` to make sure the php files work

# User information tables
CREATE TABLE `user`(`id` INT PRIMARY KEY AUTO_INCREMENT, `username` VARCHAR(25), `password` VARCHAR(100), `fname` VARCHAR(30), `lname` VARCHAR(30), `email` VARCHAR(30), `points` INT);
CREATE TABLE `address`(`id` INT PRIMARY KEY AUTO_INCREMENT, `number` INT, `street` VARCHAR(50), `city` VARCHAR(50), `state` VARCHAR(2), `zip` INT, `user_assoc` INT NOT NULL, CONSTRAINT `fk_user_address_assoc` FOREIGN KEY(`user_assoc`) REFERENCES `user`(`id`));
CREATE TABLE `payment`(`id` INT PRIMARY KEY AUTO_INCREMENT, `ccnumber` VARCHAR(100), `user_assoc` INT NOT NULL, CONSTRAINT `fk_user_payment_assoc` FOREIGN KEY(`user_assoc`) REFERENCES `user`(`id`));

# Restaurant information tables
CREATE TABLE `restaurant`(`id` INT PRIMARY KEY AUTO_INCREMENT, `name` VARCHAR(50));
CREATE TABLE `item`(`id` INT PRIMARY KEY AUTO_INCREMENT, `name` VARCHAR(30), `price` DECIMAL(65, 2), `restaurant_assoc` INT NOT NULL, CONSTRAINT `fk_restaurant_item_assoc` FOREIGN KEY(`restaurant_assoc`) REFERENCES `restaurant`(`id`));

# We can expand upon this later on, but this should be a decent starting point for our database.
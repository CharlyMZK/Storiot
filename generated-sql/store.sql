
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `firstName` VARCHAR(255) NOT NULL,
    `lastName` VARCHAR(255) NOT NULL,
    `gender` VARCHAR(1) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255),
    `city` VARCHAR(255),
    `zipCode` VARCHAR(5),
    `phone` VARCHAR(10),
    `confirmed` TINYINT(1) DEFAULT 0,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- creditcard
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `creditcard`;

CREATE TABLE `creditcard`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `reference` VARCHAR(255),
    `csv` VARCHAR(3),
    `expireMonth` INTEGER(2),
    `expireYear` INTEGER(2),
    `holder` VARCHAR(255),
    `userId` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `creditcard_fi_f4311f` (`userId`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- contact
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(255) NOT NULL,
    `category` VARCHAR(255) NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `message` VARCHAR(10000) NOT NULL,
    `sendDate` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- order
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `reference` VARCHAR(255) NOT NULL,
    `sendDate` DATETIME,
    `userId` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `order_fi_f4311f` (`userId`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- review
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `review`;

CREATE TABLE `review`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `stars` FLOAT(10),
    `comment` VARCHAR(255) NOT NULL,
    `userId` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `review_fi_f4311f` (`userId`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cart
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `userId` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `cart_fi_f4311f` (`userId`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- item
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `price` FLOAT(10),
    `size` FLOAT(10),
    `weight` FLOAT(10),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;

DROP TABLE IF EXISTS `#__ffw01roster_events`;

CREATE TABLE `#__ffw01roster_events`
    (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
    )
    ENGINE InnoDB
    DEFAULT CHARSET utf8mb4
    DEFAULT COLLATE utf8mb4_unicode_ci;

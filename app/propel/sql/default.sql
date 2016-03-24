
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- page
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `page`;

CREATE TABLE `page`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `slug` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- message
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    `email` VARCHAR(255),
    `message` TEXT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- article
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `category_id` INTEGER,
    `views` INTEGER,
    `slug` VARCHAR(255),
    `image` VARCHAR(255),
    `url` VARCHAR(255),
    `status` TINYINT(1) DEFAULT 1,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `article_fi_904832` (`category_id`),
    CONSTRAINT `article_fk_904832`
        FOREIGN KEY (`category_id`)
        REFERENCES `category` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- category
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `slug` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `category_slug` (`slug`(255))
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tag
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tag`;

CREATE TABLE `tag`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255),
    `slug` VARCHAR(255),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- article_tag
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `article_tag`;

CREATE TABLE `article_tag`
(
    `article_id` INTEGER NOT NULL,
    `tag_id` INTEGER NOT NULL,
    PRIMARY KEY (`article_id`,`tag_id`),
    INDEX `article_tag_fi_022a95` (`tag_id`),
    CONSTRAINT `article_tag_fk_3610e9`
        FOREIGN KEY (`article_id`)
        REFERENCES `article` (`id`),
    CONSTRAINT `article_tag_fk_022a95`
        FOREIGN KEY (`tag_id`)
        REFERENCES `tag` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- page_i18n
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `page_i18n`;

CREATE TABLE `page_i18n`
(
    `id` INTEGER NOT NULL,
    `locale` VARCHAR(5) DEFAULT 'en_US' NOT NULL,
    `title` VARCHAR(255),
    `content` TEXT,
    `description` TEXT,
    PRIMARY KEY (`id`,`locale`),
    CONSTRAINT `page_i18n_fk_bc427d`
        FOREIGN KEY (`id`)
        REFERENCES `page` (`id`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- article_i18n
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `article_i18n`;

CREATE TABLE `article_i18n`
(
    `id` INTEGER NOT NULL,
    `locale` VARCHAR(5) DEFAULT 'en_US' NOT NULL,
    `title` VARCHAR(255),
    `content` TEXT,
    `description` TEXT,
    PRIMARY KEY (`id`,`locale`),
    CONSTRAINT `article_i18n_fk_8562d1`
        FOREIGN KEY (`id`)
        REFERENCES `article` (`id`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- category_i18n
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `category_i18n`;

CREATE TABLE `category_i18n`
(
    `id` INTEGER NOT NULL,
    `locale` VARCHAR(5) DEFAULT 'en_US' NOT NULL,
    `title` VARCHAR(255),
    PRIMARY KEY (`id`,`locale`),
    CONSTRAINT `category_i18n_fk_50f2f6`
        FOREIGN KEY (`id`)
        REFERENCES `category` (`id`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;

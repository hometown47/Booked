SET foreign_key_checks = 0;

--
-- Table structure for table `membership_id`
-- Pete Jone 3rd March 2015
-- This is a user defined table that we will use to get the next available membership id
--

DROP TABLE IF EXISTS `membership_id`;
CREATE TABLE `membership_id` (
 `id` INT unsigned NOT NULL auto_increment,
 'sys_insert_tstmp' TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8;


--CREATE TRIGGER membership_id_insert_timestamp INSERT ON membership_id
--FOR EACH ROW
--UPDATE membership_id SET sys_insert_tstmp = CURRENT_TIMESTAMP WHERE membershp_id = NEW.id;
--
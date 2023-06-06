DELIMITER //
CREATE or REPLACE TRIGGER au_reassign_ticket
AFTER UPDATE ON technicians
FOR EACH ROW
BEGIN
IF NEW.available = 0 THEN
UPDATE tickets SET tech_id=0 WHERE tech_id=NEW.id;
elseif NEW.available = 1 THEN
UPDATE tickets SET tech_id=NEW.id WHERE tech_id=0;
END IF;
END;//

CREATE TRIGGER ad_delete_man_from_prod
after delete on manu
FOR EACH ROW
BEGIN
delete from prod where mid = old.mid;
END//

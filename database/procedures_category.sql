USE ZAFIRO_PRUEBA_BD;

DELIMITER //
CREATE PROCEDURE SP_GET_ALL_CATEGORY (
	IN _order varchar(255))
    
	BEGIN
    	if (_order = 'DESC' or _order = 'desc') THEN
            SELECT c.id, c.name, c.slug, c.created_at, c.updated_at, c.status FROM category c
            ORDER BY name DESC;
        ELSE
        	SELECT c.id, c.name, c.slug, c.created_at, c.updated_at, c.status FROM category c
			ORDER BY name ASC;
        END IF;
	END
//


DELIMITER //
CREATE PROCEDURE SP_INSERT_CATEGORY (
	IN _name varchar(255))
    
	BEGIN
    	SELECT COUNT(*) INTO @contador FROM CATEGORY WHERE name = _name;
        
    	if @contador = 0 THEN
            INSERT INTO CATEGORY (id, name, slug, created_at, updated_at, status) VALUES (NULL, _name, lcase(_name), NOW(), NULL, 1);
        ELSE
        	INSERT INTO CATEGORY (id, name, slug, created_at, updated_at, status) VALUES (NULL, _name, CONCAT(lcase(_name), '-', @contador), NOW(), NULL, 1);
        END IF;
	END
//
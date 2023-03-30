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
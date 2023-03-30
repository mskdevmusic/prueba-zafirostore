USE ZAFIRO_PRUEBA_BD;

DELIMITER //
CREATE PROCEDURE SP_INSERT_PRODUCTS (
	IN _name VARCHAR(255),
	IN _category INT(255),
	OUT _message VARCHAR(255))
    
	BEGIN
    	SELECT COUNT(*) INTO @contadorCategory FROM CATEGORY WHERE id = _category;
        SELECT COUNT(*) INTO @contadorProducts FROM PRODUCTS WHERE name = _name;
        
    	if @contadorCategory = 0 THEN
            SET _message = 'No existe el id categoria';
        ELSE
        	IF @contadorProducts = 0 THEN
            	INSERT INTO PRODUCTS (id, name, slug, created_at, updated_at, status, category_id) VALUES (NULL, _name, lcase(_name), NOW(), NULL, 1, _category);
                SET _message = 'Registro exitoso';
            ELSE
            	INSERT INTO PRODUCTS (id, name, slug, created_at, updated_at, status, category_id) VALUES (NULL, _name, CONCAT(lcase(_name), '-', @contadorProducts), NOW(), NULL, 1, _category);
                SET _message = 'Registro exitoso';
            END IF;
        END IF;
	END
//

DELIMITER //
CREATE PROCEDURE SP_GET_CATEGORY_VS_PRODUCTS ()
	BEGIN
    	SELECT c.id, c.name, c.slug, c.created_at, c.updated_at, c.status, (SELECT COUNT(*) FROM products WHERE category_id = c.id) 'total_products_category' FROM category c;
	END
//
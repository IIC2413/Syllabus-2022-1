CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
mover_pokemon()

-- declaramos lo que retorna, en este caso un booleano
RETURNS void AS $$

-- declaramos las variables a utilizar
DECLARE

tupla RECORD;

-- RECORD es un tipo (en realidad placeholder) que permite almacenar filas
-- más información sobre variables en https://www.postgresql.org/docs/9.1/plpgsql-declarations.html

-- definimos nuestra función
BEGIN

    FOR tupla IN (SELECT * FROM pokemon)

    LOOP
        IF tupla.attack > 100 THEN
            INSERT INTO poke1 values(tupla.id, tupla.name, tupla.type, tupla.total, tupla.hp, tupla.attack, tupla.defense, tupla.sp_attack, tupla.sp_defense, tupla.speed, True);
        ELSE
            INSERT INTO poke1 values(tupla.id, tupla.name, tupla.type, tupla.total, tupla.hp, tupla.attack, tupla.defense, tupla.sp_attack, tupla.sp_defense, tupla.speed, tupla.legendary);
        END IF;
    END LOOP;


-- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql

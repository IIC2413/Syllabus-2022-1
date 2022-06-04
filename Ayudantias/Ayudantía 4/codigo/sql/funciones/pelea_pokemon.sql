CREATE OR REPLACE FUNCTION new_pokemon_showdown
  (p1_id integer, p2_id integer, OUT w_name varchar, OUT attacks integer)
  -- Arriba se espesificó que se entrega w_name como OUTput
  -- Esto permite retornar output en formato de tabla
  LANGUAGE plpgsql AS $$
DECLARE
  pokemon1 RECORD;
  pokemon2 RECORD;
  pokemon1_current_hp integer;
  pokemon2_current_hp integer;
  current_turn integer;
BEGIN
  -- Se buscan los 2 pokemones
  SELECT * INTO pokemon1 FROM poke1 WHERE id = p1_id LIMIT 1;
  SELECT * INTO pokemon2 FROM poke1 WHERE id = p2_id LIMIT 1;

  -- Vemos si existen lo pokemones
  IF pokemon1 IS NULL OR pokemon2 IS NULL THEN
    RAISE EXCEPTION 'No existen lo poquemones buscados para la pelea';
  END IF;

  -- Se guarda la vida actual de cada pokemon
  pokemon1_current_hp := pokemon1.hp;
  pokemon2_current_hp := pokemon2.hp;

  -- Sistema de turnos
  current_turn := 0;

  -- https://www.postgresql.org/docs/current/plpgsql-control-structures.html#PLPGSQL-CONTROL-STRUCTURES-LOOPS
  WHILE pokemon1_current_hp > 0 AND pokemon2_current_hp > 0 LOOP
    -- https://www.postgresql.org/docs/current/functions-math.html
    -- https://www.postgresql.org/docs/current/functions-conditional.html#FUNCTIONS-GREATEST-LEAST
    IF current_turn % 2 = 0 THEN
      -- Ataca pokemon 1
      pokemon2_current_hp := pokemon2_current_hp - GREATEST(0, TRUNC(
        pokemon1.attack - pokemon2.defense * 0.6
      ));
    ELSE
      -- Ataca pokemon 2
      pokemon1_current_hp := pokemon1_current_hp - GREATEST(0, TRUNC(
        pokemon2.attack - pokemon1.defense * 0.6
      ));
    END IF;
    current_turn := current_turn + 1;
  END LOOP;

  -- Una vez terminada la pelea, se ve el ganador
  attacks := current_turn;
  IF pokemon1_current_hp > 0 THEN
    w_name := pokemon1.name;
    -- Se crea el registro
    INSERT INTO pokemon_showdowns (
      winner_id, winner_hp, looser_id, looser_hp, number_of_atacks
    ) VALUES (
      pokemon1.id, pokemon1_current_hp, pokemon2.id, pokemon2_current_hp, attacks
    );
  ELSE
    w_name := pokemon2.name;
    -- Se crea el registro
    INSERT INTO pokemon_showdowns (
      winner_id, winner_hp, looser_id, looser_hp, number_of_atacks
    ) VALUES (
      pokemon2.id, pokemon2_current_hp, pokemon1.id, pokemon1_current_hp, attacks
    );
  END IF;
END $$

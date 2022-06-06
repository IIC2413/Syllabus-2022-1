-- Este es el esquema que utiliza el proyecto de ejemplo
-- No lo incluyas en tu proyecto!

CREATE TABLE IF NOT EXISTS poke1 (
    id         serial PRIMARY KEY,
    name       varchar(100) NOT NULL,
    type       varchar(15),
    total      integer,
    hp         integer,
    attack     integer,
    defense    integer,
    sp_attack  integer,
    sp_defense integer,
    speed      integer,
    legendary  boolean DEFAULT FALSE
);

CREATE TABLE IF NOT EXISTS pokemon (
    id         serial PRIMARY KEY,
    name       varchar(100) NOT NULL,
    type       varchar(15),
    total      integer,
    hp         integer,
    attack     integer,
    defense    integer,
    sp_attack  integer,
    sp_defense integer,
    speed      integer,
    legendary  boolean DEFAULT FALSE
);

CREATE TABLE IF NOT EXISTS pokemon_showdowns (
    id         serial PRIMARY KEY,
    winner_id  integer REFERENCES poke1(id),
    winner_hp  integer,
    looser_id  integer REFERENCES poke1(id),
    looser_hp  integer,
    number_of_atacks integer,
    created_at timestamp DEFAULT CURRENT_TIMESTAMP
)

CREATE TABLE user_table (
   user_id        serial           PRIMARY KEY,
   first_name     varchar(255)     NOT NULL,
   last_name      varchar(255)     NOT NULL,
   user_password  varchar(255)     NOT NULL,
   user_email     varchar(255)     UNIQUE NOT NULL
);
CREATE TABLE game (
   game_id         serial          PRIMARY KEY,
   game_name       varchar(255)    NOT NULL
);
CREATE TABLE plays (
   play_id         serial          PRIMARY KEY,
   user_id         int             NOT NULL REFERENCES user_table(user_id),
   game_id         int             NOT NULL REFERENCES game(game_id),
   players_text    text            NOT NULL,
   score_text      text            NOT NULL,
   notes_text      text            NOT NULL,
   date_played     DATE            NOT NULL
);

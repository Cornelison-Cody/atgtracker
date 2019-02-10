CREATE TABLE game (
   game_id         serial          PRIMARY KEY,
   game_name       text            NOT NULL
);
CREATE TABLE user_table (
   firebase_uid    text            PRIMARY KEY,
   display_name    text            NOT NULL
);
CREATE TABLE games_owned (
   games_owned_id  serial          PRIMARY KEY,
   game_id         int             NOT NULL REFERENCES game(game_id),
   firebase_uid    text            NOT NULL REFERENCES user_table(firebase_uid)
);
CREATE TABLE plays (
   play_id         serial          PRIMARY KEY,
   game_id         int             NOT NULL REFERENCES game(game_id),
   firebase_uid    text            NOT NULL REFERENCES user_table(firebase_uid),
   players_text    text            NOT NULL,
   winner_text     text            NOT NULL,
   score_text      text            NOT NULL,
   notes_text      text            ,
   date_played     DATE            NOT NULL
);

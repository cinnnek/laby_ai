DROP TABLE IF EXISTS note;
CREATE TABLE note
(
    id          INTEGER PRIMARY KEY AUTOINCREMENT,
    title       TEXT NOT NULL,
    teacher      TEXT,
    content text not null
);
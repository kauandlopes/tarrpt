ALTER TABLE users
ADD time CHAR(1) CHECK (time IN ('D', 'S'));
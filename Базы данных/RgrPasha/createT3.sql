USE rgr;
CREATE TABLE ProgrammingLanguages (    Number INT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Type VARCHAR(50) NOT NULL,
    DeveloperFirm VARCHAR(50) NOT NULL
);

INSERT INTO ProgrammingLanguages (Number, Name, Type, DeveloperFirm) VALUES
(1, 'Pascal', 'Процедурный', 'Borland'),
(2, 'C', 'Процедурный', 'Borland'),
(3, 'Java', 'Процедурный', 'Java inc'),
(4, 'C++', 'Объектный', 'Java inc'),
(5, 'Visual C', 'Объектный', 'Microsoft'),
(6, 'Visual Basic', 'Объектный', 'Microsoft'),
(7, 'Delphi', 'Объектный', 'Borland'),
(8, 'Lisp', 'Сценарный', 'IBM'),
(9, 'Prolog', 'Сценарный', 'IBM'),
(10, 'XML', 'Сценарный', 'Borland');
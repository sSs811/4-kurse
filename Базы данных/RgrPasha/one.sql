USE rgr;
SELECT COUNT(*) AS NumberOfRows
FROM ProgrammingLanguages
WHERE Name not in ('Pascal');
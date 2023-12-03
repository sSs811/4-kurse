use rgr;
SELECT DISTINCT p1.DeveloperFirm
FROM ProgrammingLanguages p1 
JOIN ProgrammingLanguages p2 ON p1.Type = p2.Type
WHERE p2.Type LIKE '%Е%'; 
use rgr;
SELECT DeveloperFirm, MAX(Type) AS LastType
FROM ProgrammingLanguages
GROUP BY DeveloperFirm;
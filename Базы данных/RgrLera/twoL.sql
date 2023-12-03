SELECT DISTINCT Capital
FROM Districts
WHERE DistrictName <> 
(SELECT DISTINCT DistrictName FROM Districts 
ORDER BY DistrictName DESC LIMIT 1);
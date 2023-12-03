SELECT DISTINCT RegionName
FROM Districts
WHERE DistrictName IN (
    SELECT DistrictName
    FROM Districts
    WHERE Number <= 4
);
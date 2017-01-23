DELIMITER $$
DROP PROCEDURE GetSensorData $$

CREATE PROCEDURE GetSensorData ()
BEGIN
 CREATE TEMPORARY TABLE SensorData(
  YAxis VARCHAR(100) NOT NULL PRIMARY KEY,
        XAxis Integer NULL
 );
    
    INSERT INTO SensorData (YAxis) VALUES ('<2 Minutes');
    INSERT INTO SensorData (YAxis) VALUES ('>=2 Minutes');
    
 UPDATE SensorData 
 SET XAxis = (SELECT COUNT(Seconds) 
    FROM techfairtable 
    WHERE Seconds < 120)
    WHERE YAxis = '<2 Minutes';
    
    UPDATE SensorData 
 SET XAxis = (SELECT COUNT(Seconds) 
    FROM techfairtable
    WHERE Seconds >= 120)
    WHERE YAxis = '>=2 Minutes';
    
    SELECT CONCAT ("'",YAxis, "'") as 'YAxis', XAxis FROM SensorData ;
    
 DROP TEMPORARY TABLE SensorData;
END $$
DELIMITER ;
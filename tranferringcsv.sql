use coolfitteddb;
LOAD DATA LOCAL INFILE 'C:\\inetpub\\wwwroot\\inf124project\\tax.csv'
INTO TABLE taxes
FIELDS TERMINATED BY ','
    ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(State, zip, region,rate)
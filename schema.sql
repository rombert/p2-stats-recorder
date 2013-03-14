CREATE TABLE installations (
   iu        mediumtext,
   package   tinytext,
   os        tinytext,
   version   tinytext,
   tstamp    timestamp DEFAULT "CURRENT_TIMESTAMP"
)
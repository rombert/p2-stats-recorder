CREATE TABLE installations (
   iu        mediumtext,
   package   tinytext,
   os        tinytext,
   version   tinytext,
   host		tinytext,
   tstamp    timestamp DEFAULT "CURRENT_TIMESTAMP"
)
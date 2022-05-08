TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER trig1 BEFORE INSERT\nON department FOR EACH ROW \nINSERT INTO name VALUES(NOW())'
sql_modes=1344274432
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='utf8_unicode_ci'

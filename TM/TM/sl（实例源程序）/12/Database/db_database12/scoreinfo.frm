TYPE=VIEW
query=select `db_database07`.`tb_student`.`sno` AS `sno`,`db_database07`.`tb_student`.`sname` AS `sname`,`db_database07`.`tb_score`.`yw` AS `yw`,`db_database07`.`tb_score`.`wy` AS `wy`,`db_database07`.`tb_score`.`sx` AS `sx` from `db_database07`.`tb_student` join `db_database07`.`tb_score` where (`db_database07`.`tb_student`.`id` = `db_database07`.`tb_score`.`sid`)
md5=c047a08396fa54d2d99842112d765d25
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2014-02-28 09:28:18
create-version=1
source=select sno,sname,yw,wy,sx from tb_student,tb_score where tb_student.id=tb_score.sid

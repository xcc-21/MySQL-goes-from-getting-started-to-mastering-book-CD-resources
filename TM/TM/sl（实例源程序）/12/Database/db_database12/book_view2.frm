TYPE=VIEW
query=select `db_database07`.`tb_book`.`id` AS `id`,`db_database07`.`tb_book`.`sort` AS `a_sort`,`db_database07`.`tb_book`.`books` AS `a_book` from `db_database07`.`tb_book`
md5=23cfd4f0e0b0a8a7977ce3d1cefd7e70
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2014-02-28 08:49:46
create-version=1
source=select \n        `tb_book`.`id` AS `id`,\n        `tb_book`.`sort` AS `a_sort`,\n        `tb_book`.`books` AS `a_book`\n    from\n        `tb_book`

<?php 
switch($_GET['htgl']){
   case "��ӱ�̴ʵ�汾":
       include("addbb.php");
   break;
  case "�༭��̴ʵ�汾":
  include("editbd.php");
   break;
  case "��ӱ�̴ʵ�":
  include("addbccd.php");
   break;
  case "�༭��̴ʵ�":
  include("editbccd.php");
   break;
  case "��ӳ�������":
  include("addquestion.php");
   break;
  case "�༭��������":
  include("editquestion.php");
   break;
  case "�鿴�ͻ�����":
  include("lookkhfk.php");
   break;
  case "����������":
  include("addsoft.php");
   break;
  case "�༭�������":
  include("editsoft.php");
   break;
case "���������":
  include("addsjb.php");
   break;
case "�༭������":
  include("editsjb.php");
   break;
case "������к�":
  include("addxlh.php");
   break;
case "�༭���к�":
  include("editxlh.php");
   break;
case "��������":
  include("editdd.php");
   break;
case "��ӹ���":
  include("addtell.php");
   break;
case "�༭����":
  include("edittell.php");
   break;
case "":
  include("edittell.php");
   break;

}

?>
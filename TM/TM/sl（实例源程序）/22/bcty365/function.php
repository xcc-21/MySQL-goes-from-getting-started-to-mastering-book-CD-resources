<?php
function unhtml($content){								//�����Զ��庯��������
	$content=htmlspecialchars($content);                //ת���ı��е������ַ�
    $content=str_replace(chr(13),"<br>",$content);		//�滻�ı��еĻ��з�
    $content=str_replace(chr(32),"&nbsp;",$content);	//�滻�ı��е�&nbsp;
    $content=str_replace("[_[","<",$content);			//�滻�ı��еĴ��ں�
    $content=str_replace("]_]",">",$content);			//�滻�ı��е�С�ں�
    $content=str_replace("|_|"," ",$content);			//�滻�ı��еĿո�
    return trim($content);								//ɾ���ı�����β�Ŀո�
}
function msubstr($str,$start,$len) {					//�����Զ��庯��������,�����ı�����ַ��ĸ���
    $strlen=$start+$len;								//��ȡ�ı��ĳ���
    for($i=0;$i<$strlen;$i++) { 						//ѭ������ı��е��ַ�
        if(ord(substr($str,$i,1))>0xa0) { 				//��ȡ�ı��е��ַ�
            $tmpstr.=substr($str,$i,2);					//��ȡ�ı��е��ַ�
            $i++; 
        }else 
            $tmpstr.=substr($str,$i,1); 
    } 
    return $tmpstr;								 
}
?>

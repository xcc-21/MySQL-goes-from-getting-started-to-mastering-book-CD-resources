<%@ page language="java" import="java.util.*" pageEncoding="gbk"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>My JSP 'list.jsp' starting page</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
  </head>  
  <body>
    <form id="form1" name="form1" method="post" action="TransitionServlet?action=update">
      <br>
  <table width="692" height="349" border="0" align="center" background="images/back.jpg" bgcolor="#FFFFFF">

  <tr>
  <td width="215" rowspan="2">&nbsp;</td>
  <td width="461" height="46">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="399" height="131" border="1" align="center">
      <tr>
        <td width="78"><div align="right">转账账户：</div></td>
        <td width="305"><div align="left">
            <label>
            <select name="transitionSelect">
            <%
            	List list = (List)request.getAttribute("list");
            	for(int i = 0;i<list.size();i++){
            	
             %>
             <option value="<%=list.get(i)%>"><%=list.get(i)%></option>
             <%} %>
            </select>
            </label>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">准入账户：</div></td>
        <td><div align="left">
            <label>
            <select name="shiftSelect">
             <%
            
            	for(int i = 0;i<list.size();i++){
            	
             %>
             <option value="<%=list.get(i)%>"><%=list.get(i)%></option>
             <%} %>
            </select>
            </label>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">转账金额：</div></td>
        <td><div align="left">
            <label>
            <input type="text" name="moneyTextfield" />
            </label>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">&nbsp;</div></td>
        <td><div align="left">
            <label>
            <input name="Submit" type="submit" value="转账" />
            </label>
            <label>
            <input type="reset" name="Submit2" value="重置" />
            </label>
        </div></td>
      </tr>
    </table></td>
  </tr>
  </table>
   <%
    if(request.getAttribute("message")!=null){
    	%>
    	<script type="text/javascript">
    		window.alert("<%=request.getAttribute("message")%>");
    	</script>
   <% }
  %>
</form>
  </body>
</html>

package util;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
public class BatchAffair {
    private Connection conn;
    
    public Connection getConn() {
        try {
            Class.forName("com.mysql.jdbc.Driver"); // 加载数据库驱动
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        }
        String url = "jdbc:mysql://localhost:3306/db_database16"; // 连接数据库URL
        String userName = "root"; // 连接数据库的用户名
        String passWord = "root"; // 连接数据库密码
        try {
            conn = DriverManager.getConnection(url, userName, passWord); // 获取数据库连接
            
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return conn; // 返回Connection对象
    }
    //获取全部用户编号方法
public List selectIds() {
    conn = getConn(); // 获取数据库连接
    Statement cs = null; // 定义CallableStatement对象
    String sql = "Select accoutNumber from tb_transition"; // 定义查询视图的SQL语句
    List list = new ArrayList(); // 定义保存查询结果的List集合
    try {
        cs = conn.createStatement(); // 实例化Statement对象
        ResultSet rest = cs.executeQuery(sql); // 执行SQL语句
        while (rest.next()) { // 循环遍历查询结果集
            String accoutNumber = rest.getString(1);                
            list.add(accoutNumber);
        }
    } catch (SQLException e) {
        e.printStackTrace();
    }
    return list;
}
    //设置转账方法

public void Batch(String incomeId, String goId, float money) throws SQLException {
    try {
        conn = getConn(); // 获取数据库连接
        boolean autoCommit = conn.getAutoCommit();
        conn.setAutoCommit(false);
       
        Statement cs = null; // 定义Statement对象            
        cs = conn.createStatement(); // 实例化Statement对象
        cs.addBatch("update tb_transition set deposit = deposit-" + money
                + " ,transition = transition-" + money
                + " where accoutNumber = " + goId);             //定义修改转账表中数据方法
        cs.addBatch("update tb_transition set deposit = deposit+" + money
                + " ,shift = shift+" + money + " where accoutNumber = "
                + incomeId);
        cs.executeBatch(); // 批量执行SQL语句
        cs.close(); // 将Statement对象关闭
        conn.commit();
        conn.setAutoCommit(autoCommit);
        conn.close();
    } catch (Exception e) {
        conn.rollback();
        e.printStackTrace();        
    }
}
    
}

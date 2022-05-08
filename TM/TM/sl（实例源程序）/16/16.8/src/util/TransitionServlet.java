package util;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.SQLException;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class TransitionServlet extends HttpServlet {

	/**
	 * Constructor of the object.
	 */
	public TransitionServlet() {
		super();
	}

	/**
	 * Destruction of the servlet. <br>
	 */
	public void destroy() {
		super.destroy(); // Just puts "destroy" string in log
		// Put your code here
	}

	/**
	 * The doGet method of the servlet. <br>
	 *
	 * This method is called when a form has its tag value method equals to get.
	 * 
	 * @param request the request send by the client to the server
	 * @param response the response send by the server to the client
	 * @throws ServletException if an error occurred
	 * @throws IOException if an error occurred
	 */
	public void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		doPost(request, response);
	}

	/**
	 * The doPost method of the servlet. <br>
	 *
	 * This method is called when a form has its tag value method equals to post.
	 * 
	 * @param request the request send by the client to the server
	 * @param response the response send by the server to the client
	 * @throws ServletException if an error occurred
	 * @throws IOException if an error occurred
	 */
	public void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		String action = request.getParameter("action");
		if(action.equals("list")){
			getList(request,response);
		}
		if(action.equals("update")){
			getUpdate(request,response);
		}
	}
	public void getList(HttpServletRequest request, HttpServletResponse response)
	throws ServletException, IOException {
		BatchAffair batch = new BatchAffair();
		List list = batch.selectIds();
		request.setAttribute("list", list);
		request.getRequestDispatcher("list.jsp").forward(request, response);

	}
	public void getUpdate(HttpServletRequest request, HttpServletResponse response)
	throws ServletException, IOException {
		String transition = request.getParameter("transitionSelect");
		String shiftSelect = request.getParameter("shiftSelect");
		BatchAffair batch = new BatchAffair();
		try {
			batch.Batch(transition, shiftSelect, Float.parseFloat(request.getParameter("moneyTextfield")));
		} catch (NumberFormatException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		List list = batch.selectIds();
		request.setAttribute("list", list);
		request.setAttribute("message", "×ªÕË³É¹¦£¡£¡");
		request.getRequestDispatcher("list.jsp").forward(request, response);
	}
	/**
	 * Initialization of the servlet. <br>
	 *
	 * @throws ServletException if an error occurs
	 */
	public void init() throws ServletException {
		// Put your code here
	}

}

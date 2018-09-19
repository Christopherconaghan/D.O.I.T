import java.io.FileWriter;
import java.io.IOException;
import java.sql.*;

import org.json.simple.JSONArray;
import org.json.simple.JSONObject;

public class ConnectToWeb {

	@SuppressWarnings("unchecked")
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		try 
		{
			//System.out.println("Test1");
		
			// had to change time in sql add SET GLOBAL time_zone = '+3:00'; to database in phpmyadmin


			///connect to phpmyadmin database
			Connection myConnect = DriverManager.getConnection("jdbc:mysql://localhost/regdb", "root", "");
			///^^^connection = name-localhost/DBName username-root password-""^^^
			
			///Create JSON object
			JSONObject obj = new JSONObject();

			
			//generate statement
			Statement state = myConnect.createStatement();
			
			//create the sql qurey
			ResultSet res = state.executeQuery("Select * from user");

//			System.out.print(res);
			//display results
			while(res.next()) {
				obj.put("User ID: ", res.getString("UserID"));
				obj.put("Course Name: ", res.getString("courseID"));

				//System.out.println(res.getString("UserID")+ " , "+res.getString("courseID"));
			}
			
			///////////////try display JSON////////////////
			
//			obj.put("name", "Christopher");
//			obj.put("Location", "House");
//			
//			JSONArray list = new JSONArray();
//			list.add("Java");
//			list.add("JSP");
//			list.add("C");
//			
//			obj.put("Courses", list);
			
			try(FileWriter file = new FileWriter("E:\\xampp\\htdocs\\D.O.I.T\\course-timetable\\Users.json"))
			{
				file.write(obj.toJSONString());
				
				file.append(obj.toString());
				file.flush();	
			}
			catch(IOException e) {
				e.printStackTrace();//dissplay errors
			}
			
			//print JOSN to screen
			System.out.println(obj);
			
			
		}
		catch(Exception e){
			e.printStackTrace();
			//System.out.print("Failed Connection");
		}	
		
		
		
	}

}
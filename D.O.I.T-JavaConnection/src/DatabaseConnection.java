//import java.util.*;
import java.sql.*;

public class DatabaseConnection {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		int month = 8;
        String option;
        switch (month) {
            case 1:  option = "Insert";
                     break;
            case 2:  option = "Edit";
                     break;
            case 3:  option = "Remove";
                     break;
            case 4:  option = "Dislay";
                     break;
           
            default: option = "Error";
                     break;
        }
		try {
			//System.out.println("Test1");
		
			// had to change time in sql add SET GLOBAL time_zone = '+3:00'; to database in phpmyadmin


			///connect t phpmyadmin database
			Connection myConnect = DriverManager.getConnection("jdbc:mysql://localhost/regdb", "root", "");
			///^^^connection = name-localhost/DBName username-root password-""^^^
			
			//generate statement
			Statement state = myConnect.createStatement();
			
			//create the sql qurey
			ResultSet res = state.executeQuery("Select * from user");

			//display results
			while(res.next()) {
				System.out.println(res.getString("UserID")+ " , "+res.getString("fname")+ " , "+res.getString("lname")+ " , "+res.getString("email"));
			}
			
		}
		
		catch(Exception e){
			e.printStackTrace();
			//System.out.print("Failed Connection");
		}
		
		
	}

}

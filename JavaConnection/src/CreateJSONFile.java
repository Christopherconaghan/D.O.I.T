import java.io.FileWriter;
import java.io.IOException;

import org.json.simple.JSONArray;
import org.json.simple.JSONObject;

public class CreateJSONFile {

	@SuppressWarnings("unchecked")
	public static void main(String[] args) {

		JSONObject obj = new JSONObject();
		
		obj.put("name", "Christopher");
		obj.put("Location", "House");
		
		JSONArray list = new JSONArray();
		list.add("Java");
		list.add("JSP");
		list.add("C");
		
		obj.put("Courses", list);
		
		try(FileWriter file = new FileWriter("myJSON.json"))
		{
			file.write(obj.toString());
			file.flush();
			
			
			
		}
		catch(IOException e) {
			e.printStackTrace();
		}
		
		System.out.println(obj);
		
	}

}

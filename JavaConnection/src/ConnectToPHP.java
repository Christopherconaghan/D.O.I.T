import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.*;
/////IGNORE THIS TESTING OUT FOR USE IN PROJECT
public class ConnectToPHP {

	////////UNDER CONSTRUCTION//////////
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		try {
	         
            String data1 = URLEncoder.encode("first", "UTF-8") + "=" + URLEncoder.encode("Fred", "UTF-8");
            String data2 = URLEncoder.encode("last", "UTF-8") + "=" + URLEncoder.encode("Hamilton", "UTF-8");
            String data = data1 +"&" +data2;
         
            String inLine;
         
            URL u1 = new URL("http://localhost/D.o.i.t/javatestdisplay.php");
            URLConnection uc1 = u1.openConnection();
             
            uc1.setDoOutput(true);
            OutputStreamWriter out = new OutputStreamWriter(uc1.getOutputStream());
            out.write(data);
            out.flush();
         
            BufferedReader in = new BufferedReader( new InputStreamReader( uc1.getInputStream() ) );
 
            while ((inLine = in.readLine()) != null) {
                System.out.println(inLine);
            }
         
            in.close();
        }
        catch( Exception e ) {
            e.printStackTrace();
        }
    }

}

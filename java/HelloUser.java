
import java.util.*;
import java.lang.*;
import java.io.*;
//import java.io.BufferedReader;
//import java.io.IOException;
//import java.io.InputStreamReader;

/* Name of the class has to be "Main" only if the class is public. */
class HelloUser
{
	public static void main (String[] args) throws java.lang.Exception
	{
		// your code goes here
		System.out.println("Hello, User!  What is your name?");

		try{
		BufferedReader br = 
                      new BufferedReader(new InputStreamReader(System.in));
 
		String input;
 
		input = br.readLine();
		System.out.println("Hello, " + input + ". It's very nice to meet you!");


    	}catch(IOException io){
	    	io.printStackTrace();
	    }	
	}
}
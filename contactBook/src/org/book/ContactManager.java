package org.book;
import java.util.Date;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.sql.*;
/**
 * @author Lionel Lario
 *
 * Class: Contact Manager
 * This class is used to manage the contacts and interact with the database.
 * It registers, retrieves, updates, and deletes a contact on demand of the user.
 */
public class ContactManager {

	private ArrayList<Contact> ctm;
	
	public ContactManager() {
		
		ctm = new ArrayList<Contact>();
		
	}
	
	/**
	 * @return an ArrayList of contact
	 */
	public ArrayList<Contact> getArray() {
		//create a temporary array list
		ArrayList<Contact> temp = new ArrayList<Contact>();
		for(int i = 0; i < ctm.size(); i++) {
			temp.add(ctm.get(i));
		}
		return temp;
	}
	
	/**
	 * @param String iD
	 * @return index if iD is found or -1 if not found
	 * This methods search for a contact's ID
	 */
	public int findContactByID(String id) {
		int index = -1;
		for(int i = 0; i < ctm.size(); i++) {
			if(getArray().get(i).getiD().compareTo(id) == 0) {
				index = i;
			}
		}
		return index;
	}
	
	/**
	 * @param title
	 * @param firstName
	 * @param familyName
	 * @param address
	 * @param age
	 * @param phoneNumber
	 * @param email
	 * This method registers a new contact
	 */
	public void insertContact(String title, String fname, String lname, String adr, String occupation, long phn, String eml) {
		
		try {
			
			//Connect to the database
			Connection con = DriverManager.getConnection("jdbc:mysql://localhost/diary", "root", "");
			
			//Create a statement
			Statement stm = con.createStatement();
			
			//Create id
			String id = generateID();
			
			//Execute Query: insert the new contact
			stm.executeUpdate("INSERT INTO addressBook (id, title, first_name, last_name, address, occupation, phone, email) " + 
			"VALUES ('"+id+"', '"+title+"', '"+fname+"', '"+lname+"', '"+adr+"', '"+occupation+"', '"+phn+"', '"+eml+"')");
			
			//close the statement and the connection
			stm.close();
			con.close();
		}
		catch(Exception exp) 
		{ 
			exp.printStackTrace();
		}
	}
	
	/**
	 * @param key
	 * @param title
	 * @param firstName
	 * @param familyName
	 * @param address
	 * @param age
	 * @param phoneNumber
	 * @param email
	 * This method updates a given contact
	 */
	public void UpdateContact(String key, String title, String fname, String lname, String adr, String occupation, long phn, String eml) {
		
		try {
			
			//Connect to the database
			Connection con = DriverManager.getConnection("jdbc:mysql://localhost/diary", "root", "");
			
			//Create a statement
			Statement stm = con.createStatement();
			
			//Execute Query: update the new contact
			stm.executeUpdate("UPDATE addressbook SET title='"+title+"', first_name='"+fname+"', last_name='"+lname+"', "+
								"address='"+adr+"', occupation='"+occupation+"', phone='"+phn+"', email='"+eml+"' WHERE id='"+key+"'");

			//close the statement and the connection
			stm.close();
			con.close();
		}
		catch(Exception exp) 
		{ 
			exp.printStackTrace();
		}
	}
	
	/*
	 * @return generated id
	 */
	
	public String generateID() {
		
		DateFormat df = new SimpleDateFormat("yyMMddHHmmss");
		Date dt = new Date();
		String s = df.format(dt);
		
		return s;
	}
	
	/**
	 * @Return an arrayList of contacts from the data base
	 */
	public ArrayList<Contact> listOfContacts() {
		
		ArrayList<Contact> tempc = new ArrayList<Contact>();
		try {
			
			//Connect to the database
			Connection con = DriverManager.getConnection("jdbc:mysql://localhost/diary", "root", "");
			
			//Create a statement
			Statement stm = con.createStatement();
			
			//Execute Query: select all the contact, ordered by first name
			ResultSet rs = stm.executeQuery("SELECT * FROM addressbook ORDER BY first_name");
			
			String id;
			String title;
			String fname;
			String lname;
			String adss;
			long phnumb;
			String occupt;
			String mail;
			
			while( rs.next() )
			{
				id = rs.getString("id");
				title = rs.getString("title");
				fname = rs.getString("first_name");
				lname = rs.getString("last_name");
				adss = rs.getString("address");
				occupt = rs.getString("occupation");
				phnumb = rs.getLong("phone");
				mail = rs.getString("email");
				
				tempc.add(new Contact(id, title, fname, lname, adss, occupt, phnumb, mail ));
			}
			//close the statement and the connection
			stm.close();
			con.close();
		}
		catch(Exception exp) 
		{ 
			exp.printStackTrace();
		}
		
		ctm = tempc;
		return ctm;
	}
	
	/**
	 * @Param cid, the id of the contact to be deleted
	 */
	public void deleteContact(String cid) {
		
		try {
			
			//Connect to the database
			Connection con = DriverManager.getConnection("jdbc:mysql://localhost/diary", "root", "");
			
			//Create a statement
			Statement stm = con.createStatement();
			
			//Execute Query: delete contact
			stm.executeUpdate("DELETE FROM addressbook WHERE id = '"+cid+"'");
			
			//close the statement and the connection
			stm.close();
			con.close();
		}
		catch(Exception exp) 
		{ 
			exp.printStackTrace();
		}
	}
	
}

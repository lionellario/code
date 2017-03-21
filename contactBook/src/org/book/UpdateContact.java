package org.book;
/**
 * @author Lionel Lario
 * Class: UpdateContact
 * This class is used to update a contact
 * it will pop-up when the user to fire the "update event" by clicking on update
 * on the contact interface, and it will come pre-filled with previous data from the
 * data base.
 */
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JLabel;
import javax.swing.JTextField;
import javax.swing.JButton;
import javax.swing.JTextArea;
import javax.swing.*;
import java.awt.Container;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.awt.event.ActionEvent;
import java.awt.*;

public class UpdateContact extends JFrame {


	private static final long serialVersionUID = 1L;
	private Container content;
	private JPanel labelPanel, fieldPanel, butPanel;
	private JLabel title, firstName, lastName, address, phoneNumber, occupation, mail, message;
	private JTextField fnameInput, lnameInput, pnumbInput, occupationInput, mailInput;
	private JTextArea adInput;
	@SuppressWarnings("rawtypes")
	private JComboBox titleInput;
	private JButton update;
	private JScrollPane p;
	ContactManager manager;
	private String keyID;
	
	public UpdateContact(ContactManager cm, String keyID)
	{
		super("Updating this contact");
		manager = cm;
		this.keyID = keyID;
		createGUI();
	
	}
	
	public String getKeyID() {
		
		return keyID;
	}
	
	@SuppressWarnings({ "unchecked", "rawtypes" })
	private void createGUI()
	{
	  	content = getContentPane();
		content.setLayout( new BorderLayout() );
		
		//instantiating the panels
		labelPanel = new JPanel();
		fieldPanel = new JPanel();
		butPanel = new JPanel();
		
		//instantiating the labels
		//id = new JLabel("ID: ");
		title = new JLabel("Title: ");
		firstName = new JLabel("First name: ");
		lastName = new JLabel("Last name: ");
		address = new JLabel("Address: ");
		occupation = new JLabel("Occupation: ");
		phoneNumber = new JLabel("Phone number: ");
		mail = new JLabel("Email: ");
		message = new JLabel("<html><font color='red'>Please do not enter non-numeric characters in the phone number field"+
		 		   ", enter a valid email address </font></html>");
		
		//instantiating the textFields
		fnameInput = new JTextField(15);
		lnameInput = new JTextField(15);
		pnumbInput = new JTextField(15);
		occupationInput = new JTextField(5);
		mailInput = new JTextField(15);
		
		//instantiating the textArea
		adInput = new JTextArea(35, 10);
		adInput.setEditable(true);
		
		//fill text fields with values from the data base
		setFields();
		
		//instantiating the JComboBox
		String [] titre = {"MR", "MS", "MRS"};
		titleInput = new JComboBox(titre );
		
		//instantiating the JButton
		update = new JButton("Update");
		
		//instantiating the JScrollPane
		p = new JScrollPane(adInput);
		
		//adding component to the panels
		labelPanel.add(title);
		labelPanel.add(firstName);
		labelPanel.add(lastName);
		labelPanel.add(occupation);
		labelPanel.add(phoneNumber);
		labelPanel.add(mail);
		labelPanel.add(address);
		
		labelPanel.setLayout( new GridLayout(8, 1) );
		
		fieldPanel.add(titleInput);
		fieldPanel.add(fnameInput);
		fieldPanel.add(lnameInput);
		fieldPanel.add(occupationInput);
		fieldPanel.add(pnumbInput);
		fieldPanel.add(mailInput);
		fieldPanel.add(p);
		fieldPanel.add(message);
		
		fieldPanel.setLayout( new GridLayout(8, 1) );
		
		butPanel.add(update);
		
		//adding the panels to the container
		JPanel pan = new JPanel();
		pan.setBorder( BorderFactory.createTitledBorder( "" ) );
		pan.setLayout( new BorderLayout() );
		pan.add( labelPanel, BorderLayout.WEST );
		pan.add( fieldPanel, BorderLayout.CENTER );
		pan.add( butPanel, BorderLayout.SOUTH );
		content.add(pan);
		
		//the handler method
		ButtonHandler handle = new ButtonHandler();
		
		//attach listener to the update button
		update.addActionListener(handle);
		
		setSize(500, 440);
		setVisible(true);
	}
	
	/**
	 * This method fills text fields with values from the data base
	 */
	public void setFields() {
		
		try {
			
			//Connect to the database
			Connection con = DriverManager.getConnection("jdbc:mysql://localhost/diary", "root", "");
			
			//Create a statement
			Statement stm = con.createStatement();
			
			//Execute Query: select a contact
			ResultSet rs = stm.executeQuery("SELECT * FROM addressbook WHERE id='"+getKeyID()+"'");
			
			if(rs.next()) {
				fnameInput.setText(rs.getString("first_name"));
				lnameInput.setText(rs.getString("last_name"));
				adInput.setText(rs.getString("address"));;
				pnumbInput.setText(""+rs.getLong("phone"));;
				occupationInput.setText(""+rs.getString("occupation"));;
				mailInput.setText(rs.getString("email"));;
			}
			
			//close the statement and the connection
			stm.close();
			con.close();
		}
		catch(Exception exp) 
		{ 
			exp.printStackTrace();
		}
	
	}
	
	private class ButtonHandler implements ActionListener
	{
		public void actionPerformed( ActionEvent ae )
		{
			String title = (String)titleInput.getSelectedItem();
			String fname = fnameInput.getText();
			String lname = lnameInput.getText();
			String ad = adInput.getText();
			String occupt = occupationInput.getText();
			long phnum = Long.parseLong(pnumbInput.getText());
			String email = mailInput.getText();
			
			manager.UpdateContact(getKeyID(), title, fname, lname, ad, occupt, phnum, email);
			@SuppressWarnings("unused")
			ContactInterface ci = new ContactInterface(new ContactManager());
			setVisible(false);
		}
	}
	
}

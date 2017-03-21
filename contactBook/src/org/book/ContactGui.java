package org.book;

/**
 * @author Lionel Lario
 * ClassName: ContactGUI
 * 
 * This is the GUI for creating a new contact.
 * It shows all the required fields to register a new contact
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
import java.awt.event.ActionEvent;
import java.awt.*;

public class ContactGui extends JFrame {

	private static final long serialVersionUID = 1L;
	private Container content;
	private JPanel labelPanel, fieldPanel, butPanel;
	private JLabel title, firstName, lastName, address, phoneNumber, occupation, mail, message;
	private JTextField fnameInput, lnameInput, pnumbInput, occupationInput, mailInput;
	private JTextArea adInput;
	@SuppressWarnings("rawtypes")
	private JComboBox titleInput;
	private JButton ok;
	private JScrollPane p;
	ContactManager manager;
	
	public ContactGui(ContactManager cm)
	{
		super("Creating a new contact");
		manager = cm;
		createGUI();
	
	}
	
	@SuppressWarnings({ "rawtypes", "unchecked" })
	private void createGUI()
	{
	  	content = getContentPane();
		content.setLayout( new BorderLayout() );
		
		//Instantiating the panels
		labelPanel = new JPanel();
		fieldPanel = new JPanel();
		butPanel = new JPanel();
		
		//instantiating the labels
		title = new JLabel("Title: ");
		firstName = new JLabel("First name: ");
		lastName = new JLabel("Last name: ");
		address = new JLabel("Address: ");
		occupation = new JLabel("Occupation: ");
		phoneNumber = new JLabel("Phone number: ");
		mail = new JLabel("Email: ");
		message = new JLabel("<html><font color='red'>Please do not enter non-numeric characters in the phone number field"+
							 		   ", enter a valid email address and </font></html>");
		
		//instantiating the textFields
		fnameInput = new JTextField(15);
		lnameInput = new JTextField(15);
		pnumbInput = new JTextField(15);
		occupationInput = new JTextField(50);
		mailInput = new JTextField(15);
		
		//instantiating the textArea
		adInput = new JTextArea(35, 10);
		adInput.setEditable(true);
		
		//instantiating the JComboBox
		String [] titre = {"MR.", "MS.", "MRS.", "Ph. D", "Prof."};
		titleInput = new JComboBox(titre);
		
		//instantiating the JButton
		ok = new JButton("OK");
		
		//instantiating the JScrollPane
		p = new JScrollPane(adInput);
		
		//adding label component to the panels
		labelPanel.add(title);
		labelPanel.add(firstName);
		labelPanel.add(lastName);
		labelPanel.add(occupation);
		labelPanel.add(phoneNumber);
		labelPanel.add(mail);
		labelPanel.add(address);
		
		labelPanel.setLayout(new GridLayout(8, 1));
		
		//adding field component to the panels
		fieldPanel.add(titleInput);
		fieldPanel.add(fnameInput);
		fieldPanel.add(lnameInput);
		fieldPanel.add(occupationInput);
		fieldPanel.add(pnumbInput);
		fieldPanel.add(mailInput);
		fieldPanel.add(p);
		fieldPanel.add(message);
		
		fieldPanel.setLayout(new GridLayout(8, 1));
		
		butPanel.add(ok);
		
		//adding the panels to the container
		JPanel pan = new JPanel();
		pan.setBorder(BorderFactory.createTitledBorder(""));
		pan.setLayout(new BorderLayout());
		pan.add(labelPanel, BorderLayout.WEST);
		pan.add(fieldPanel, BorderLayout.CENTER);
		pan.add(butPanel, BorderLayout.SOUTH);
		content.add(pan);
		
		//the handler method
		ButtonHandler handle = new ButtonHandler();
		
		//attach the listener to the OK button
		ok.addActionListener(handle);
		
		setSize(500, 440);
		setVisible(true);
	}
	
	/**
	 * This inner private class will be used to read events fired by
	 * control buttons and handle the events.
	 *
	 */
	private class ButtonHandler implements ActionListener
	{
		public void actionPerformed(ActionEvent ae)
		{
			String title = (String)titleInput.getSelectedItem();
			String fname = fnameInput.getText();
			String fyname = lnameInput.getText();
			String email = mailInput.getText();
			long phnum = Long.parseLong(pnumbInput.getText());
			String occupation = occupationInput.getText();
			String ad = adInput.getText();
			
			manager.insertContact(title, fname, fyname, ad, occupation, phnum, email);
			@SuppressWarnings("unused")
			ContactInterface g = new ContactInterface(new ContactManager());
			setVisible(false);
		}
	}
	
}

package org.diary;
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

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private Container content;
	private JPanel labelPanel, fieldPanel, butPanel;
	private JLabel title, firstName, lastName, address, phoneNumber, age, mail, message;
	private JTextField fnameInput, lnameInput, pnumbInput, ageInput, mailInput;
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
		
		//instatiating the panels
		labelPanel = new JPanel();
		fieldPanel = new JPanel();
		butPanel = new JPanel();
		
		//instantiating the labels
		//id = new JLabel("ID: ");
		title = new JLabel("Title: ");
		firstName = new JLabel("First name: ");
		lastName = new JLabel("Last name: ");
		address = new JLabel("Address: ");
		age = new JLabel("Age: ");
		phoneNumber = new JLabel("Phone number: ");
		mail = new JLabel("Email: ");
		message = new JLabel("<html><font color='red'>Please do not enter non-numeric characters in the phone number field"+
							 		   ", enter a valid email address and "+
									   "do not enter non-numeric character in the age field.</font></html>");
		
		//instantiating the textFields
		//idInput = new JTextField(15);
		fnameInput = new JTextField(15);
		lnameInput = new JTextField(15);
		pnumbInput = new JTextField(15);
		ageInput = new JTextField(5);
		mailInput = new JTextField(15);
		
		//instantiating the textArea
		adInput = new JTextArea(35, 10);
		adInput.setEditable(true);
		
		//instantiating the JComboBox
		String [] titre = {"MR", "MS", "MRS"};
		titleInput = new JComboBox(titre);
		
		//instantiating the JButton
		ok = new JButton("OK");
		
		//instantiating the JScrollPane
		p = new JScrollPane(adInput);
		
		//adding component to the panels
		//labelPanel.add(id);
		labelPanel.add(title);
		labelPanel.add(firstName);
		labelPanel.add(lastName);
		labelPanel.add(age);
		labelPanel.add(phoneNumber);
		labelPanel.add(mail);
		labelPanel.add(address);
		
		labelPanel.setLayout(new GridLayout(8, 1));
		
		//fieldPanel.add(idInput);
		fieldPanel.add(titleInput);
		fieldPanel.add(fnameInput);
		fieldPanel.add(lnameInput);
		fieldPanel.add(ageInput);
		fieldPanel.add(pnumbInput);
		fieldPanel.add(mailInput);
		fieldPanel.add(p);
		fieldPanel.add(message);
		
		fieldPanel.setLayout(new GridLayout(8, 1));
		//fieldPanel.setBorder(BorderFactory.createTitledBorder(""));
		
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
		
		//attach to ok button
		ok.addActionListener(handle);
		
		setSize(500, 440);
		setVisible(true);
	}
	
	private class ButtonHandler implements ActionListener
	{
		public void actionPerformed(ActionEvent ae)
		{
			//String iD = idInput.getText();
			String title = (String)titleInput.getSelectedItem();
			String fname = fnameInput.getText();
			String fyname = lnameInput.getText();
			String email = mailInput.getText();
			long phnum = Long.parseLong(pnumbInput.getText());
			int age = Integer.parseInt(ageInput.getText());
			String ad = adInput.getText();
			
			manager.insertContact(title, fname, fyname, ad, age, phnum, email);
			@SuppressWarnings("unused")
			ContactInterface g = new ContactInterface(new ContactManager());
			setVisible(false);
		}
	}
	
}

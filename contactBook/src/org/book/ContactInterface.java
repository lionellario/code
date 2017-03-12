package org.book;
/**
 * @author Lionel Lario
 * ClassName: ContacInterface
 * 
 * This is the GUI for displaying the list of contact
 * This class will also help creating, modifying and deleting a contact
 */

import java.awt.*;
import javax.swing.*;
import java.awt.event.*;
import java.util.ArrayList;

public class ContactInterface extends JFrame
{
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private JTable contactListTB;
	private JMenuBar men;
	private JMenu file;
	private JMenu edit;
	private JMenuItem newC;
	private JMenuItem exitApp;
	private JButton create, modify, delete;
	private JPanel butPanel;
	
	
	public ContactInterface(ContactManager manage)
	{
		super("");
		ArrayList<Contact> contactList = new ArrayList<Contact>();
		contactList = manage.listOfContacts();
		displayContacts(contactList);
		Container c = getContentPane();
		
		//creating the menuBar
		
		men = new JMenuBar();
		file = new JMenu("File");
		edit = new JMenu("Edit");
		newC = new JMenuItem( "new contact              Ctrl+N" );
		exitApp = new JMenuItem("Exit the Application");
		
		men.add(file);
		men.add(edit);
		file.add(newC);
		file.addSeparator();
		file.add(exitApp);
		this.setJMenuBar(men);
		//end of the menu
		
		//creating the button
		create = new JButton("Create contact");
		modify = new JButton("Modify contact");
		delete = new JButton("Delete contact");
		
		butPanel = new JPanel();
		
		butPanel.add(create);
		butPanel.add(modify);
		butPanel.add(delete);
		//end of the button
		
		//create the handler and add to the buttons
		ButtonHandler handle = new ButtonHandler();
		create.addActionListener(handle);
		delete.addActionListener(handle);
		modify.addActionListener(handle);
		
		//add the information taken from the databeses in the JTable
		JScrollPane scrollpane = new JScrollPane(contactListTB);
		c.add(scrollpane, BorderLayout.CENTER);
		c.add(butPanel, BorderLayout.SOUTH);
		//pack();
		setSize(1000, 500);
		setResizable(true);
		setVisible(true);
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
	}
	
	private void displayContacts( ArrayList<Contact> contactListDB )
	{
		String [] titres = { "Id", "Title", "First Name", "Family Name", "Email", "Phone Number", "Age", "Address", "Select" };
		MyTableModel modeldata = new MyTableModel(titres);
		contactListTB = new JTable(modeldata);
		
		for(int i = 0; i < contactListDB.size(); i++)
		{
			modeldata = (MyTableModel) contactListTB.getModel();
			modeldata.addRow(new Object[]{contactListDB.get(i).getiD(), contactListDB.get(i).getTitle(), 
													contactListDB.get(i).getFirstName(), contactListDB.get(i).getLastName(), 
													contactListDB.get(i).getEmail(), contactListDB.get(i).getPhoneNumber(),
													contactListDB.get(i).getAge(), contactListDB.get(i).getAddress(), Boolean.FALSE });
		}
	}
	
	public class ButtonHandler implements ActionListener
	{
		public void actionPerformed( ActionEvent ae )
		{
			if( ae.getSource() == create )
			{
				ContactManager c = new ContactManager();
				@SuppressWarnings("unused")
				ContactGui cg = new ContactGui(c);
				setVisible(false);
			}
			else if( ae.getSource() == delete )
			{
				int n = contactListTB.getSelectedRow();
				if( n < 0 )
				{
					JOptionPane.showMessageDialog(null, "No values selected" );
				}
				else if( n >= 0 )
				{
					int dialogButton = JOptionPane.YES_NO_OPTION;
					int dialogResult = JOptionPane.showConfirmDialog(null, "Are you sure you want to delete this contact?",
																			"Warning",dialogButton);
					if(dialogResult == JOptionPane.YES_OPTION){
						setVisible(false);
						ContactManager c = new ContactManager();
						String idd = c.listOfContacts().get(n).getiD();
						System.out.println(idd);
						c.deleteContact(idd);
						ContactInterface g = new ContactInterface(c);
						g.setVisible(true);
					}
				}
			}
			else if( ae.getSource() == modify )
			{
				int n = contactListTB.getSelectedRow();
				if( n < 0 )
				{
					JOptionPane.showMessageDialog(null, "No values selected" );
				}
				else if( n >= 0 )
				{
					ContactManager c = new ContactManager();
					String idd = c.listOfContacts().get(n).getiD();
					@SuppressWarnings("unused")
					UpdateContact cg = new UpdateContact(c, idd);
					setVisible(false);
				}
			}
		}
	}
	
}

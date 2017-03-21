package org.book;
import javax.swing.UIManager;

/**
 * @author Lionel Lario
 * 
 * Class: contactBook
 * This is a simple Graphical User Interface application
 * which manages and organizes contacts
 *
 */

public class Book
{
	public static void main (String [] arg)
	{
		/*
		 * Creating the look and feel (style) for the GUI
		 */
		try {
		    for (UIManager.LookAndFeelInfo info : UIManager.getInstalledLookAndFeels()) {
		        if ("Nimbus".equals(info.getName())) {
		            UIManager.setLookAndFeel(info.getClassName());
		            break;
		        }
		    }
		} catch (Exception e) {
		    // If Nimbus is not available, fall back to cross-platform
		    try {
		        UIManager.setLookAndFeel(UIManager.getCrossPlatformLookAndFeelClassName());
		    } catch (Exception ex) {
		        
		    }
		}
		
		//Instantiating a new Contact Manager
		ContactManager contactMg = new ContactManager();
		@SuppressWarnings("unused")
		ContactInterface contactI = new ContactInterface(contactMg);
	}
}
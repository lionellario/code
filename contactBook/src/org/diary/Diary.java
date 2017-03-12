package org.diary;
import javax.swing.UIManager;

public class Diary
{
	public static void main (String [] arg)
	{
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
		        // not worth my time
		    }
		}
		ContactManager c = new ContactManager();
		@SuppressWarnings("unused")
		ContactInterface g = new ContactInterface(c);
	}
}
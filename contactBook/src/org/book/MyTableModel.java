package org.book;
import javax.swing.table.DefaultTableModel;

public class MyTableModel extends DefaultTableModel {

	/**
	 * @author Lionel Lario
	 * 
	 * Class: MyTableModel
	 * This is GUI which extends the Table class from javax.swing.table.DefaultTableModel
	 * It is used to display all the contact from the data base
	 */
	private static final long serialVersionUID = 1L;

	public MyTableModel(String [] tab)
	{
		super(tab, 0);
	}
	
	@SuppressWarnings({ "unchecked", "rawtypes" })
	public Class getColumnClass(int c)
	{
		return getValueAt(0, c).getClass();
	}
	
	public boolean isCellEditable(int row, int col)
	{
		if(col < 8)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
}

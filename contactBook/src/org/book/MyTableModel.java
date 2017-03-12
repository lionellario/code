package org.book;
import javax.swing.table.DefaultTableModel;

public class MyTableModel extends DefaultTableModel {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	public MyTableModel(String [] t)
	{
		super(t, 0);
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

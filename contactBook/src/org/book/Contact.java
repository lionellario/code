package org.book;

/**
 * @author Lionel Lario
 * 
 * ClassName: Contact
 * This class is used to create a contact object.
 * Each contact in the book has a unique ID, first name, last name
 * address, age, phone number and email
 *
 */
public class Contact {
    
	private String iD;
	private String title;
	private String firstName;
    private String lastName;
    private String address;
    private String occupation;
    private long phoneNumber;
    private String email;
    
	/**
	 * @param iD
	 * @param title
	 * @param firstName
	 * @param familyName
	 * @param address
	 * @param age
	 * @param phoneNumber
	 * @param email
	 */
	public Contact(String iD, String title, String firstName, String lastName, String address, String occupation, 
																					long phoneNumber, String email) {
		this.iD = iD;
		this.title = title;
		this.firstName = firstName;
		this.lastName = lastName;
		this.address = address;
		this.occupation = occupation;
		this.phoneNumber = phoneNumber;
		this.email = email;
	}

	/**
	 * @return the iD
	 */
	public String getiD() {
		return iD;
	}

	/**
	 * @param iD the iD to set
	 */
	public void setiD(String iD) {
		this.iD = iD;
	}

	/**
	 * @return the title
	 */
	public String getTitle() {
		return title;
	}

	/**
	 * @param title the title to set
	 */
	public void setTitle(String title) {
		this.title = title;
	}

	/**
	 * @return the firstName
	 */
	public String getFirstName() {
		return firstName;
	}

	/**
	 * @param firstName the firstName to set
	 */
	public void setFirstName(String firstName) {
		this.firstName = firstName;
	}

	/**
	 * @return the familyName
	 */
	public String getLastName() {
		return lastName;
	}

	/**
	 * @param familyName the familyName to set
	 */
	public void setLastName(String familyName) {
		this.lastName = familyName;
	}

	/**
	 * @return the address
	 */
	public String getAddress() {
		return address;
	}

	/**
	 * @param address the address to set
	 */
	public void setAddress(String address) {
		this.address = address;
	}

	/**
	 * @return the occupation
	 */
	public String getOccupation() {
		return occupation;
	}

	/**
	 * @param occupation the occupation to set
	 */
	public void setOccupation(String occupation) {
		this.occupation = occupation;
	}

	/**
	 * @return the phoneNumber
	 */
	public long getPhoneNumber() {
		return phoneNumber;
	}

	/**
	 * @param phoneNumber the phoneNumber to set
	 */
	public void setPhoneNumber(long phoneNumber) {
		this.phoneNumber = phoneNumber;
	}

	/**
	 * @return the email
	 */
	public String getEmail() {
		return email;
	}

	/**
	 * @param email the email to set
	 */
	public void setEmail(String email) {
		this.email = email;
	}

}
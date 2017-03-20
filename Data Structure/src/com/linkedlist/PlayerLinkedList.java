/**
 * 
 */
package com.linkedlist;

/**
 * @author Lionel Lario
 *
 */
public class PlayerLinkedList{
	
	private PlayerNode head;
	private int numberOfPlayer;
	
	public PlayerLinkedList() {
		
		//the head of the linked list is null by default
		head = null;
	    numberOfPlayer = 0;
	}
	
	/*
	 * return true if there is no player in the LinkedList
	 */
	public boolean isEmpty() {
		
		return (numberOfPlayer < 0);
	}
	
	public int getNumberOfPlayers() {
		return numberOfPlayer;
	}
	
	/*
	 * Insert a new Player
	 * @Param p the player to insert
	 * A Node is created, its next is assigned the reference to the previous Node created
	 * and this LinkedList's head is assigned a reference to the newest Node
	 */
	public void insert(Player p) {
		
		PlayerNode pn = new PlayerNode(p);
		pn.setNext(head);
		head = pn;
		numberOfPlayer++;
	}
	
	/*
	 * @Param p the player to insert
	 * Insert a player Node at the end of the List
	 */
	public void insertLast(Player p){
		
		PlayerNode pn=new PlayerNode(p);
		PlayerNode current=head;
		while(current.getNext()!=null)
		{
			current=current.getNext();
		}
		
		current.setNext(pn);
		numberOfPlayer++;
	}
	
	/* peek method
	 *   @param    searchID   id of Player to search for
	 *   @return   a copy of the Player found
	 */
	 public Player peek( int id ){
		 
		 PlayerNode current = head;
		 while(current != null && current.getPlayer().getId() != id) {
			  
			 current = current.getNext( );
		 }

		 if(current == null) {// not found
			  
			 return null;
		 }
		  
		 else{
			  
			 return current.getPlayer( );
		 }
	 }
	
	/*
	 * Delete First element in the list
	 * @Return the Node deleted
	 */
	public Player deleteFirst () {
		
		PlayerNode current = head;
		
		if(!isEmpty()) {
			head = head.getNext();
		}
		else {
			return null;
		}
		
		numberOfPlayer--;
		return current.getPlayer();
	}
	
	/*
	 * Delete a node by ID
	 * @Param id the id of the node to be deleted
	 * @Return the player of the node deleted
	 */
	public Player deleteById( int id ){
		
		PlayerNode current = head;
		PlayerNode previous = null;
		while (current != null && current.getPlayer().getId() != id)
		{
			previous = current;
			current = current.getNext();
		}
		
		if (current == null) {// not found
		      return null;
		}
		else
		{
			if ( current == head )
				head = head.getNext( );  // delete head
			else
				previous.setNext(current.getNext());
		}
		numberOfPlayer--;
		return current.getPlayer();
	}
	
	/*
	 * @Param position the position of the node to be deleted
	 * @Return the player Node deleted
	 */
	public Player deleteAtPosition(int position) {
		
		PlayerNode current = head;
		PlayerNode nextNode = head;
		
		if(isEmpty() || position >= numberOfPlayer) {
			return null;
		}
		
		if(position == 0) {
			head = head.getNext();
		}
		
		for(int i = 0; current != null && i < position -1; i++ ) {
			current = current.getNext();
		}
		
		nextNode = current.getNext(); //node to be deleted
		current.setNext(nextNode.getNext()); //make current node reference to next node of node to be deleted
		nextNode.next = null; //Unlink deleted node
		
		numberOfPlayer--;
		return nextNode.getPlayer();
		
	}
	
	/*
	 * Traverse the List and print the elements
	 */
	public void display()
	{
		try{
			PlayerNode current=head;
			while(current!=null)
			{
				System.out.println("Current Node: " + current.getPlayer().toString());
				System.out.println("Next Node: " + current.getNext().getPlayer().toString());
				System.out.println();
				current=current.getNext();
			}
		}
		catch(Exception e) {
			System.out.println("Next Node: Next Node not found");
		}
	}
	
}

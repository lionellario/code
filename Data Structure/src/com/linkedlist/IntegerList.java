/**
 * This is a simple program which demonstrate a singly LinkedList
 * of positive integers
 */
package com.linkedlist;

/**
 * @author Lionel Lario
 *
 */
public class IntegerList {

	private Node head;
	private int numberOfData;
	
	public IntegerList(){
		head = null;
		numberOfData = 0;
	}
	
	public boolean isEmpty() {

		return (numberOfData < 0);
	}

	public int getNumberOfData() {
		
		return numberOfData;
	}

	/*
	 * @param newData the new integer to be pushed
	 */
	public void insert(int newData) {
		
		/*
		 * Create a new node
		 * reference the new node to the head
		 * reference the head to the new node
		 */
		Node newNode = new Node(newData);
		newNode.setNext(head);
		head = newNode;
		
		numberOfData++;
	}

	/*
	 * @param newData the new integer to be pushed at the end of the list
	 */
	public void insertLast(int newData) {
		
		/*
		 * create a new Node
		 * traverse the list till the end
		 * reference the current Node found to the new node
		 */
		Node current = head;
		Node newNode = new Node(newData);
		while(current.getNext() != null) {
			current = current.getNext();
		}
		current.setNext(newNode);
		numberOfData++;

	}
	
	/*
	 * @param position, poll the integer at given position
	 * @Return integer found at specified position
	 */
	public int peek(int position) {
		
		/*
		 * return not found, if list is empty or position is > number of data
		 * return the data if position is initial
		 * traverse the list till position -1
		 * return the the integer found at given position 
		 */
		Node current = head;
		if(isEmpty() || position >= numberOfData) {
			
			return -1;//not found
		}
		
		if(position == 0) {
			
			return head.getData();
		}
		else {
			
			for(int i = 0; current != null && i < position; i++) {
				current = current.getNext();
			}
			
			return current.getData();
		}
	}
	
	/*
	 * @Return the middle node
	 */
	public Node peekMiddle() {
		
		/*
		 * if list is not empty, first find the middle node by creating two pointers.
		 * The first node will increment at each iteration while the other will
		 * increment at each second iteration. Therefore, when the first will be at the end,
		 * the second node will be at the middle of the list.
		 *
		 */
		
		if(isEmpty()) {
			return null;
		}
		
		Node current = head;
		Node middle = head;
		int length = 0;
		
		while(current.getNext() != null) {
			length++;
			
			if(length%2 == 0){
				middle = middle.getNext();
			}
			current = current.getNext();
		}
		
		return middle;
		
	}
	
	/*
	 * Delete a Node at the middle of the list
	 */
	public void deletemiddle(Node middle) {
		
		/*
		 * Peek the middle Node
		 * create a temp Node which will hold the middle next node
		 * copy the data from the temp node to the middle node (Which is where we delete middle node)
		 * Make middle node reference to the temp next node
		 */
		
		if(peekMiddle() == null) {
			return;
		}
		
		Node temp = middle.getNext();
		middle.setData(temp.getData());
		middle.setNext(temp.getNext());
		
		numberOfData--;
	}
	
	/*
	 * @Return deleted integer found at specified position
	 */
	public int deleteFirst() {
		
		/*
		 * Store the head in a temporary node
		 * reference the head to its next node
		 */
		Node temp = head;
		if(!isEmpty()) {
			head = head.getNext();
		}
		else {
			return -1;//not found
		}
		
		numberOfData--;
		return temp.getData();
	}
	
	/*
	 * @param data, the integer at to be deleted
	 * @Return deleted integer
	 */
	public int delete(int data) {
		
		/*
		 * create a current and previous node
		 * return not found if list is empty
		 * traverse the list until the integer is found
		 * reference previous node to current node and current node to next node
		 * return not found if current is null, that is end of list and data not found
		 * make the next node of the previous node reference to to the next node of current node
		 * current node is then unlinked from the list
		 * return current node data 
		 */
		Node current = head;
		Node previous = head;
		if(isEmpty()) {
			return -1; //not found
		}
		else {
			
			while(current != null && current.getData() != data){
				previous = current;
				current = current.getNext();
			}
			if(current == null) {
				return -1; //not found
			}
			else{
				previous.setNext(current.getNext());
			}
			
			numberOfData--;
			return current.getData();
		}
	}

	/*
	 * @param position, position of the data to be deleted
	 * @Return deleted integer at specified position
	 */
	public int deleteAtPosition(int position) {

		/*
		 * create a current and a temporary node
		 * return not found if list is empty or position is > number of data
		 * return the head data if position is 0
		 * traverse the list until position - 1
		 * store the next node of the current node to the temporary node
		 * set the next node of the current node to next node of temporary node
		 * unlink the the temporary node and return its data
		 */
		Node current = head;
		Node temp = null;
		
		if(isEmpty() || position >= numberOfData){
			return -1; //not found
		}
		else {
			
			if(position == 0) {
				return head.getData();
			}
			else {
				
				for(int i = 0; current != null && i < position-1; i++){
					current = current.getNext();
				}
				
				temp = current.getNext();
				current.setNext(temp.getNext());
				temp.setNext(null); //Unlink the deleted node
				
				numberOfData--;
				return temp.getData();
			}
		}
		
	}
	
	/*
	 * @Return true if the list contains a loop or a circle
	 */
	public boolean isLoop() {
		
		Node slow = head;
		Node fast = head;
		
		if(isEmpty()) {
			return false;
		}
		
		while(fast != null && fast.getNext() != null) {
			slow = slow.getNext();
			fast = fast.getNext().getNext();
			
			if(slow == fast) { // fast caught up to slow, so there is a loop
				return true;
			}
		}
		
		return false;
	}

	/*
	 * Traverse the list and print all data
	 */
	public void display() {
		
		try{
			Node current = head;
			while(current!=null)
			{
				System.out.print(current.toString());
				current=current.getNext();
			}
			System.out.print("null");
		}
		catch(Exception e) {
			System.out.println("Next Node: Next Node not found");
		}

	}
	
	/*
	 * This private inner class is used to create a Node
	 * Each node has its data and the address to the node which was in the list before
	 */
	private class Node{
		int data;
		Node next;
		
		public Node(int data) {
			this.data = data;
			next = null;
		}
		/**
		 * @return the data
		 */
		public int getData() {
			return data;
		}
		/**
		 * @param data the data to set
		 */
		public void setData(int data) {
			this.data = data;
		}
		/**
		 * @return the next
		 */
		public Node getNext() {
			return next;
		}
		/**
		 * @param next the next to set
		 */
		public void setNext(Node next) {
			this.next = next;
		}
		
		@Override
		public String toString() {
			return data + " -> ";
		}	
		
	}
	
	public static void main (String [] args) {
		
		IntegerList intSet = new IntegerList();
		intSet.display();
		System.out.println("============ Number of integers in the List: " + intSet.getNumberOfData() + " ============\n");
		System.out.println("============ Adding integers ... ============\n");
		intSet.insert(20);
	    intSet.insert(8);
	    intSet.insert(5);
	    intSet.insert(2);
	    intSet.insert(14);
	    intSet.insert(15);
	    intSet.insert(18);
	    intSet.insert(7);
	    intSet.insert(3);
	    intSet.insert(8);
	    intSet.display();
	    System.out.println("\n============ Number of integers in the List: " + intSet.getNumberOfData() + " ============");
	    System.out.println("\n============ Adding 1 at the end of the list ============\n");
	    intSet.insertLast(1);
	    intSet.display();
	    System.out.println("\n============ Number of integers in the List: " + intSet.getNumberOfData() + " ============");
	    System.out.println("\n============ Get intgeger at position 5 ============");
	    System.out.println("Return: " + intSet.peek(5) + " ->");
	    System.out.println("\n============ Delete First integer in the List ============");
	    System.out.println("Integer Deleted: " + intSet.deleteFirst());
	    intSet.display();
	    System.out.println("\n============ Number of integers in the List: " + intSet.getNumberOfData() + " ============");
	    System.out.println("\n============ Delete integer 15 ============");
	    System.out.println("Integer Deleted: " + intSet.delete(15));
	    intSet.display();
	    System.out.println("\n============ Number of integers in the List: " + intSet.getNumberOfData() + " ============");
	    System.out.println("\n============ Delete integer at position 7 in the list ============");
	    System.out.println("Integer Deleted: " + intSet.deleteAtPosition(7));
	    intSet.display();
	    System.out.println("\n============ Number of integer in the List: " + intSet.getNumberOfData() + " ============");
	    System.out.println("\n============ Remaining integers ============");
	    intSet.display();
	    System.out.println("\n============ Middle Node data ============");
	    System.out.println("Return: " + intSet.peekMiddle());
	    intSet.deletemiddle(intSet.peekMiddle());
	    System.out.println("Middle Node deleted");
	    intSet.display();
	    System.out.println("\n\n============ Number of Players in the List: " + intSet.getNumberOfData() + " ============");
		
	}
}

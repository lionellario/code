/**
 * 
 */
package com.linkedlist;

/**
 * @author Lionel Lario
 * 
 * Stack implementation in a LinkedList
 * LIFO = Last In First Out
 */
public class IntegerStackLinkedList {

	private Node head;
	private int numberOfData;
	
	public IntegerStackLinkedList(){
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
	 * @Param data, the new Data to be inserted
	 */
	public void push(int data) {
		
		Node newNode = new Node(data);
		newNode.setNext(head);
		head = newNode;
		numberOfData++;
		
	}
	
	/*
	 * @Return data, the Data deleted
	 */
	public int pop() {
		
		if(isEmpty()) {
			return -1; //no item in the list
		}
		else{
			Node temp = head;
			head = head.getNext();
			
			numberOfData--;
			return temp.getData();
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
	
}

/**
 * 
 */
package com.linkedlist;

/**
 * @author Lionel Lario
 *
 */
public class ClientList {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		
		Player p1 = new Player(1,"Sarah","Mario");
	    Player p2 = new Player(2,"Jin","Golf");
	    Player p3 = new Player(3,"Ajay","Sonic");
	    Player p4 = new Player(4,"Jackson","FiFA 2017");
	    Player p5 = new Player(5,"Samuel","NBA 2016");
	    Player p6 = new Player(6,"Lionel","Chess");
	    Player p7 = new Player(7,"Lario","Programming Challenge");
	    Player p8 = new Player(8,"Martin","God Of War");
	    Player p9 = new Player(9,"Justin","Call of Duty");
	    Player p10 = new Player(10,"Armel","Splinter Cell");
	    
	    // construct empty PlayerLinkedList
	    PlayerLinkedList players = new PlayerLinkedList();
	    players.display();
		System.out.println("============ Number of Players in the List: " + players.getNumberOfPlayers() + " ============\n");
		System.out.println("============ Adding Players ... ============\n");
	    players.insert(p2);
	    players.insert(p3);
	    players.insert(p4);
	    players.insert(p5);
	    players.insert(p6);
	    players.insert(p7);
	    players.insert(p8);
	    players.insert(p9);
	    players.insert(p10);
	    players.display();
	    System.out.println("\n============ Number of Players in the List: " + players.getNumberOfPlayers() + " ============");
	    System.out.println("\n============ Adding Player 1 at the end of the list ============\n");
	    players.insertLast(p1);
	    players.display();
	    System.out.println("\n============ Number of Players in the List: " + players.getNumberOfPlayers() + " ============");
	    System.out.println("\n============ Get Player with id=2 ============");
	    System.out.println("Return: " + players.peek(2).toString());
	    System.out.println("\n============ Delete First Player in the List ============");
	    System.out.println("Player Deleted: " + players.deleteFirst().toString());
	    System.out.println("\n============ Number of Players in the List: " + players.getNumberOfPlayers() + " ============");
	    System.out.println("\n============ Delete Player with ID=6 ============");
	    System.out.println("Player Deleted: " + players.deleteById(6).toString());
	    System.out.println("\n============ Number of Players in the List: " + players.getNumberOfPlayers() + " ============");
	    System.out.println("\n============ Delete Player at position 7 in the list ============");
	    System.out.println("Player Deleted: " + players.deleteAtPosition(7).toString());
	    System.out.println("\n============ Number of Players in the List: " + players.getNumberOfPlayers() + " ============");
	    System.out.println("\n============ Remaining Players ============");
	    players.display();
	    System.out.println("\n============ Number of Players in the List: " + players.getNumberOfPlayers() + " ============");

	}

}

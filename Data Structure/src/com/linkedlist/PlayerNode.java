/**
 * 
 */
package com.linkedlist;

/**
 * @author Lionel Lario
 *
 */
public class PlayerNode {
	
	/*
	 * Each Node created will contain a player and the reference to the next node
	 */
	Player player;
	PlayerNode next;
	
	public PlayerNode(Player player) {
		
		setPlayer(player);
		next = null;
	}
	
	/**
	 * @return the the reference to the next node
	 */
	public Player getPlayer() {
		return new Player(player.getId(), player.getName(), player.getGame());
	}
	
	/**
	 * @param p the player to set
	 */
	public void setPlayer(Player p) {
		player = new Player(p.getId(), p.getName(), p.getGame()); 
	}
	
	/**
	 * @return the the reference to the next node
	 */
	public PlayerNode getNext() {
		return next;
	}

	/**
	 * @param next the reference to the next to set
	 */
	public void setNext(PlayerNode next) {
		this.next = next;
	}
	
}

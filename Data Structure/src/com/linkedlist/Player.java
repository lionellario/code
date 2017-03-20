package com.linkedlist;

public class Player {
	
	private int id;
	private String name;
	private String game;
	/**
	 * @param id
	 * @param name
	 * @param game
	 */
	public Player(int id, String name, String game) {
		super();
		this.id = id;
		this.name = name;
		this.game = game;
	}
	/**
	 * @return the id
	 */
	public int getId() {
		return id;
	}
	/**
	 * @param id the id to set
	 */
	public void setId(int id) {
		this.id = id;
	}
	/**
	 * @return the name
	 */
	public String getName() {
		return name;
	}
	/**
	 * @param name the name to set
	 */
	public void setName(String name) {
		this.name = name;
	}
	/**
	 * @return the game
	 */
	public String getGame() {
		return game;
	}
	/**
	 * @param game the game to set
	 */
	public void setGame(String game) {
		this.game = game;
	}
	
	@Override
	public String toString() {
		return "Player [id=" + id + ", name=" + name + ", game=" + game + "]";
	}
	
}

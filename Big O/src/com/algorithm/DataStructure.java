package com.algorithm;

import java.util.Arrays;
//import java.util.HashMap;
import java.util.HashSet;
import java.util.LinkedList;
//import java.util.TreeSet;

/*
 * Difference between arrayList and HashMap
 * - ArrayList implements the list class while HashMap implements the Map class
 * - arraylist store the data in order while Hash does not necessarily store data in order
 * - arraylist allows multiple null values, while HashMap allows only one null key and multiple null values
 * - ArrayList allows duplicate elements, but HashMap does not allows duplicate key
 * 
 * Difference between HashSet and HashMap
 * - HashSet stores single object, but HashMap stores key and value pair
 * - HasSet does not allow duplicate elements, while HashMap does not allow duplicate key, but allows duplicate values
 * - HashSet permits to have a single null value, while HashMap allows single null key and any number of null values
 */

public class DataStructure {
	
	//O(n) linear time
	public boolean isUniqueChar(String str) {
		boolean [] charset = new boolean[256]; //everything is false by default
		for(int i=0; i < str.length(); i++) {
			int val = str.charAt(i);
			if(charset[i])
				return false;
			charset[val] = true;
		}
		return true;
	}
	
	
	public boolean isUniqueChar2(String str) {
		HashSet<Character> hs = new HashSet<Character>();
		for(int i=0; i < str.length(); i++){
			if(hs.contains(str.charAt(i)) == false){
				hs.add(str.charAt(i));
			}
			else{
				return false;
			}
		} 
		return true;
	}
	
	public boolean isUniqueChar3(String str) {
		LinkedList<Character> lst = new LinkedList<Character>();
		for(int i=0; i < str.length(); i++) {
			if(lst.contains(str.charAt(i))) {
				return false;
			}
			else {
				lst.add(str.charAt(i));
			}
		}
		return true;
	}
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
	}

}

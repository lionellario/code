package com.algorithm;

import java.util.ArrayList;
import java.util.HashSet;
import java.util.List;
import java.util.Set;
import java.util.Vector;

/**
Problem: You're given a vector of vectors of words, e.g.: 
         [['quick', 'lazy'], ['brown', 'black', 'grey'], ['fox', 'dog']]. 

         Write a generalized function that prints all combinations of one word from the first vector, 
         one word from the second vector, etc. 
         The solution may not use recursion. 
         NOTE: the number of vectors and number of elements within each vector may vary.

         For the input above, it should print (in any order): 
         quick brown fox 
         quick brown dog 
         quick black fox 
         quick black dog 
         ... 
         lazy grey dog
*/

public class Solution {
	
	/**
	 * 
	 * @param lists, the Vector of vectors of String
	 * @return the set of combinations.
	 * I choose to use the HashSet here because I want to get rid of the duplicates.
	 * 
	 * Check if list is empty
	 * if not, create a Set which will contain initial list of combinations from the first sub-vector
	 * Create another Set which will contain a List of previous combinations + next sub-vector
	 * Insert all element from the first sub-vector in the combination Set as List
	 * this then create the first list of combination
	 * Combine the previous list of combination with each element of the next sub-vector and add those combinations
	 * in a the new combinations Set
	 * this then create the another list of combination
	 * Continue this process until there is no more sub-vectors in the Vector List
	 */
	public static Set<List<String>> createCombinations(Vector<Vector<String>> vector) {
	    
		//List is empty, no vectors in the list
		if(vector.size() == 0){
			return null;
		}
		
		Set<List<String>> combinations = new HashSet<List<String>>();
	    Set<List<String>> newCombinations;

	    //First sub-Vector in the Vector of vectors
	    int index = 0;

	    /**
	     * Copy each String in the first sub-vector and add it as a list in the
	     * list of combinations.
	     * combinations: [[sub-vector(0,0)], [sub-vector(0,1)], ...]
	     * This then creates the first combination
	     */
	    for(String i: vector.get(0)) {
	        List<String> newList = new ArrayList<String>();
	        newList.add(i);
	        combinations.add(newList);
	    }
	   
	    index++;
	    
	    while(index < vector.size()) {
	        
	    	//next sub-Vector in the Vector of vectors
	    	List<String> nextList = vector.get(index);
	    	
	        newCombinations = new HashSet<List<String>>();
	        
	        /**
	         * Take each element from the first or previously built combination
	         * and combine it with the element of the second or next sub-vector of vectors
	         * And the new combination to the newCombination set.
	         */
	        for(List<String> previous: combinations) {
	            
	        	for(String current: nextList) {
	                
	        		List<String> newList = new ArrayList<String>();
	                newList.addAll(previous);
	                newList.add(current);
	                newCombinations.add(newList); //Combine previous combination with elements of the next sub-Vector
	            }
	        }
	        
	        combinations = newCombinations;

	        index++;
	    }

	    return combinations;
	}
	public static void main(String[] args) {
		
		//Create sub-vectors
		Vector<String> a = new Vector<String>();
	    a.add("quick");
	    a.add("lazy");
	    
	    Vector<String> b = new Vector<String>();
	    b.add("brown");
	    b.add("black");
	    b.add("grey");
	    
	    Vector<String> c = new Vector<String>();
	    c.add("fox");
	    c.add("dog");
	  
	    //Create the Vector of Vectors, and add the sub-vectors
	    Vector<Vector<String>> lists = new Vector<Vector<String>>();
	    lists.add(a);
	    lists.add(b);
	    lists.add(c);

	    Set<List<String>> combination = createCombinations(lists);
	    
	    //Print all the combinations
	    for(List<String> list : combination) {
	        System.out.println(list.toString());
	    }

	}
}
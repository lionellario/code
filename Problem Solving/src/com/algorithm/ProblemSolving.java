/**
 * 
 */
package com.algorithm;

import java.util.*;
import java.io.*;


/**
 * @author Lionel Lario
 */
public class ProblemSolving {
	
	/*
	 * All numbers in an array with length n+1 are in range from 1 to n, 
	 * so there is at least one duplication in the array. How to find any 
     * a duplication? Please don't modify the input array.
	 */
	public static boolean checkDuplicate(int [] arr){
		
		/*
		 * check if array is empty
		 * create a map which will hold each integer and their number occurrences
		 * take each element of the array and check if it id already in the map
		 * if it is, then increase its value
		 * else, add the element
		 * go through the map and return true if a value is greater than 1
		 * else return false.
		 */
		if(arr.length == 0){
			return false;
		}
		
		HashMap<Integer, Integer> hm = new HashMap<Integer, Integer>();
		int value;
		
		for(int i=0; i < arr.length; i++){
			if(hm.containsKey(arr[i])){
				value = hm.get(arr[i]);
				hm.put(arr[i], ++value);
			}
			else{
				hm.put(arr[i], 1);
			}
		}
		
		for(int i : hm.keySet()){
			if(hm.get(i) > 1){
				return true;
			}
		}
		
		return false;
	}
	
	/*
	 * you are given a string like aaabbbccaaaff
	 * Write a function which transforms that string to a3b3c2a3f2
	 */
	public static StringBuilder getStringAndOccurence(String str){
		
		/*
		 * check if string is empty
		 * create an empty string to hold the new string
		 * compare each character with its neighbor and increase the number of occurrence if equal
		 * if a character is different from its neighbor, append it with its number of character to the string to return
		 * return the build string
		 */
		if(str.length() == 0){
			return null;
		}
		
		int count = 1;
		char c = str.charAt(0);
		StringBuilder newStr = new StringBuilder("");
		for(int i=1; i < str.length(); i++){
			if(c == str.charAt(i)){
				count++;
			}
			else{
				newStr.append(c+""+count);
				count=1;
			}
			c = str.charAt(i);
		}
		newStr.append(c+""+count);//Because the last character is checked but not appended
		return newStr;
		
	}
	
	/*
	 * Check if a String has all unique characters.
	 */
	public static boolean hasUnique(String str){
		/*
		 * You can solve this problem using: 2 nested for loops, hashSet or HashMap, or use an array of boolean
		 */
		boolean [] check = new boolean[127];
		int val;
		for(int i=0; i<str.length(); i++){
			val = str.charAt(i);
			if(check[val]){
				return false;
			}
			else{
				check[val] = true;
			}
		}
		
		return true;
	}
	
	/*
	 * Find pairs in an array whose sum is equal to m in O(n)
	 */
	public static void pairs(int [] arr, int sum){
		Arrays.sort(arr);
		int i = 0;
		int j = arr.length -1;
		int p;
		while(i < j){
			p = arr[i] + arr[j];
			if(p == sum){
				System.out.print("(" + arr[i] + "," + arr[j] + "), ");
				//return; if asked to find only one pair
				i++;
				j--;
			}
			else {
				if(p < sum){
					i++;
				}
				else{
					j--;
				}
			}
		}
	}
	
	/*
	 * Write the function for the binary search
	 */
	public static void binarySearch(int [] arr, int value){
		if(arr.length == 0){
			System.out.println("array is empty");
			return;
		}
		Arrays.sort(arr);
		int i = 0;
		int j = arr.length - 1;
		int m;
		while(i < j){
			m = (i + j) / 2;
			if(arr[m] == value){
				System.out.println(value + " found at index " + m);
				return;
			}
			else{
				if(value > arr[m]){
					i = m + 1;
				}
				else{
					j = m-1;
				}
			}
		}
		System.out.println(value + " was not found in the array");
	}
	
	/*
	 * You are given an array of integer of size n.
	 * Write a function which outputs the maximum sum that can be made from the integers
	 */
	public static int getMaxSum(int[] a) {
		int maxsum = 0;
		int sum = 0;
		for (int i = 0; i < a.length; i++) {
			sum += a[i];
			if (maxsum < sum) {
				maxsum = sum;
			} 
			else if (sum < 0) {
				sum = 0;
			}
		}
		return maxsum;
	}
	
	/*
	 * Write a function that gives the nth term of the fibonacci sequence in O(n)
	 */
	public static int fib(int n){
		
		if(n == 0){
			return 0;
		}
		else if(n == 1 || n == 2){
			return 1;
		}
		
		int a = 1;
		int b = 1;
		int fb = 0;
		for(int i = 2; i < n; i++){
			fb = a + b;
			a = b;
			b = fb;
		}
		return fb;
	}
	
	/*
	 * Write a function that gives the nth term of the fibonacci sequence
	 * using dynamic programming
	 */
	public static int fib2(int n){
		
		int memo [] = new int [100];
		if(n == 0){
			return 0;
		}
		else if(n <= 2){
			return 1;
		}
		else{
			memo[n] = fib(n-1) + fib(n-2);
		}
		return memo[n];
		
	}
	
	/**
	 * 
	 * @param args
	 */
	public static void main(String[] args) {
		
		int [] a = {1,2,3,4,5,8,6};
		System.out.println("The array has duplicate digit: " + checkDuplicate(a));
		System.out.println("aaabbbccaaaff is: " + getStringAndOccurence("aaabbbccaaaff"));
		System.out.println("All characters in 'lionel' are umique: " + hasUnique("lionel"));
		System.out.print("The pair which sum is equal to 8 in the array is: ");
		pairs(a,8);
		System.out.println();
		binarySearch(a, 4);
		System.out.println(getMaxSum(a));
		System.out.println("Fib(6) = " + fib(-2));

	}
}
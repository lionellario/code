/**
 * 
 */
package com.algorithm;

import java.util.Iterator;
import java.util.LinkedList;

/**
 * @author Lionel Lario
 * This class represents a directed graph using adjacency list
 * representation
 * Refer to BFS-Graph.jpg in resources
 */
public class Graph {

	/**
	 * @param args
	 */
	private int v; //number of vertices
	private LinkedList<Integer> adj[]; //Adjacency Lists
	
	@SuppressWarnings({ "unchecked", "rawtypes" })
	public Graph(int v) {
		this.v = v;
		adj = new LinkedList[v];
		for(int i=0; i<v; i++) {
			adj[i] = new LinkedList();
		}
	}
	
	// Function to add an edge into the graph
    void addEdge(int v,int w)
    {
        adj[v].add(w);
    }
    
    // prints Breadth First traversal (BFT) from a given source s
    void BFS(int s)
    {
        // Mark all the vertices as not visited(By default
        // set as false)
        boolean visited[] = new boolean[v];
        int startVertex = s;
 
        // Create a queue for BFS result
        LinkedList<Integer> queue = new LinkedList<Integer>();
 
        // Mark the current node as visited and enqueue it
        visited[s] = true;
        queue.add(s);
        
        System.out.println("Following is Breadth First Traversal (starting from vertex "+startVertex+ ")");
        while (queue.size() != 0)
        {
        	// Dequeue a vertex from queue and print it
        	s = queue.poll();
        	
        	// Get all adjacent vertices of the dequeued vertex s
            // If a adjacent has not been visited, then mark it
            // visited and enqueue it
            /*
             * Iterator is used to cycle throught the elements of a collections
             * ListIterator extends Interator
             */
            Iterator<Integer> i = adj[s].listIterator();
            while (i.hasNext())
            {
                int n = i.next();
                if (!visited[n])
                {
                    visited[n] = true;
                    queue.add(n);
                    System.out.println("{" + startVertex +", " + n + "}");
                }
            }
        }
    }
	
	public static void main(String[] args) {
		
		Graph g = new Graph(4);
		 
        g.addEdge(0, 1);
        g.addEdge(0, 2);
        g.addEdge(1, 2);
        g.addEdge(2, 0);
        g.addEdge(2, 3);
        g.addEdge(3, 3);
 
        g.BFS(0);
        g.BFS(1);
        g.BFS(2);
        g.BFS(3);

	}

}

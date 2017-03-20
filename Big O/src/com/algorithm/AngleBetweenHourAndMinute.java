/**
 * 
 */
package com.algorithm;

/**
 * @author Lionel Lario
 * 
 * We know that the Hour hand turns 360 degree in 12 hours (or in 720 mins)
 * that is 0.5 degree/min. So at each time, measured clockwise from the 12 o'clock
 * the angle of the Hour hand is: 0.5 * (60*H + M) where H is the hour and M is the passed minute
 * since the hour hand is not right at 3, it has displaced a bit
 * The Minute Hand turns 360 degree / 60 mins or 6 degree / min
 * so the angle of the Minute hand is: 6 * M;
 * Therefore the angle between the hour and minute is: abs(angleHour - angleMinute).
 *
 */
public class AngleBetweenHourAndMinute {

	/**
	 * @param args
	 */
	
	private int hour;
	private int minute;
	
	/**
	 * @param hour
	 * @param minute
	 */
	public AngleBetweenHourAndMinute(int hour, int minute) {
		this.hour = hour;
		this.minute = minute;
	}

	/**
	 * @return the hour
	 */
	public int getHour() {
		return hour;
	}

	/**
	 * @param hour the hour to set
	 */
	public void setHour(int hour) {
		this.hour = hour;
	}

	/**
	 * @return the minute
	 */
	public int getMinute() {
		return minute;
	}

	/**
	 * @param minute the minute to set
	 */
	public void setMinute(int minute) {
		this.minute = minute;
	}
	
	public double angleHour() {
		return 0.5 * (60 * getHour() + getMinute());
	}
	
	public double angleMinute() {
		return 6 * getMinute();
	}
	
	public String toString() {
		double res = Math.abs(angleHour() - angleMinute());
		if(res > 180) {
			res = 360 - res;
		}
		
		return "The angle between "+ hour + ":" + minute + " is: " +res;
	}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		AngleBetweenHourAndMinute angle = new AngleBetweenHourAndMinute(3,41);
		System.out.println(angle.toString());
		String str = "lionel";
		int a = str.charAt(2);
		System.out.println(a);
		
	}

}

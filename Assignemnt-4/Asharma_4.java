/*
 
 Programming Languages
 Assignment 4 - Asharma_4.java
 
 Created by Abhishek Sharma on 12/13/15.
 Copyright (c) 2015 Abhishek. All rights reserved.

=====-----======-----=====-----==--==--==--==--=====-----=====-----=====

i. Computer, this is a base class for all of the other classes.
It has a function “calculate” which takes a string and returns an 
int (the function's code is irrelevant to the question, just make it 
a comment).  The class also has a constructor which takes a string 
which should be stored in a variable of your choice, there is no default constructor. 

*/

class computer {

	private String data;

	int calculate(String a) {
		return 0;
	}

	computer(String data) {
		this.data = data;
	}
}

/* 

ii. Portable, all portables have a function called moveIt which takes a
string. Portable cannot be instantiated.

*/

interface Portable {
	void moveIt(String Data3);
}


/*

iii. Laptop, This class is derived from computer. It has a constructor which
takes a string and a double, the string is passed to the base constructor,
the double is stored as the weight of the laptop. The laptop must also be
portable and the string passed to the moveIt function should be printed to
output.

*/

class Laptop extends computer implements Portable {
	private double weight;

	Laptop(String LaptopDesigner, double weight) {
		super(LaptopDesigner);
		this.weight = weight;
	}

	public void moveIt(String data) {
		System.out.println("The out put is " + data);
	}

}

/*

iv. Handheld, this class is derived from computer. It has a constructor which
takes a string and an int, the string is passed to the base constructor, the
double is stored as the MIPS number (speed) of the processor. The handheld
must be portable. The string passed to the moveIt function should be stored
in the class (this string represents the pocket the handheld is in.

*/

class Handheld extends computer implements Portable {

	private double MipsNumber;
	private String strCompare;

	Handheld(String b, double MipsNumber) {
		super(b);
		this.MipsNumber = MipsNumber;
	}

	public void moveIt(String data) {
		strCompare = data;
	}

}


/*

v. Desktop, this class is derived from computer. It has a constructor which
takes a string and a boolean, the string is passed to the base constructor,
the boolean is stored as floppyDrive (present or absent). The desktop is
(obviously) NOT portable.

 */


class Desktop extends computer {
	private boolean flpydrive;

	Desktop(String a, boolean flpydrive) {
		super(a);
		this.flpydrive = flpydrive;
	}
}

public class Asharma_4 {

}

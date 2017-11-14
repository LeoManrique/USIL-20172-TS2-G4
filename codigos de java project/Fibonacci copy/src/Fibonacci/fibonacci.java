package Fibonacci;

public class fibonacci {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int num =1 , n2 , cantidad;
		int n1= num-1; System.out.print("\nNª 1: " +num);
		
		for (cantidad = 1 ; cantidad < 20; cantidad++) {
			n2=num+n1; System.out.print("\nNª "+ (cantidad+1) + "; " +n2);
			n1=num; num=n2;
		}
	}

}

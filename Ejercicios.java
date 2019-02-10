package ejercicios;

public class Ejercicios {

    public static void main(String[] args) {
        for (int j=0; j<=10; j++){
            System.out.println("\nTabla de multiplicar del " + j);
            for (int i=1; i<=10; i++) {
                System.out.println(j + "x" + i + "=" + (i*j));
            }
        }
    }  
}


import java.util.*;
public class Voyageur {
    public String nom;
    public int age;

    public Voyageur(){}
    public Voyageur(String n, int age){
        this.nom=n;
        this.age=age;
    }
    public void afficher(){
        System.out.println(this.nom +" "+this.age);
    }
    public static void main(String[] args){
        Scanner sc=new Scanner(System.in);

        System.out.println("nom O_o ?");
        String nom=sc.next();
        System.out.println("age?");
        int age=sc.nextInt();
        Voyageur monVoyageur = new Voyageur(nom,age);
        monVoyageur.afficher();

        Voyageur monVoyageur2 = new Voyageur();
        monVoyageur2.nom="Djybrail";
        monVoyageur2.age=18;
        monVoyageur2.afficher();

     }}//main
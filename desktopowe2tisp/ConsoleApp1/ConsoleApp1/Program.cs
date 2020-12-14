using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1 {
    class Program {
        static void Main(string[] args) {
          //  Ex1();
            Console.WriteLine("==============================================");
            Ex2();
            Ex3();
            Console.ReadKey();
        }

        public static void Ex1() {
            SetOfVehicles vehicles = new SetOfVehicles();
            vehicles.ShowAll();
            // vehicles.AddNewVehicle();
            vehicles.ShowAll();
        }

        public static void Ex2() {
            Bicycle b1 = new Bicycle();
            Bicycle b2 = new Bicycle("Rowerek", 24, 4, true);
            Car c1 = new Car();
            Car c2 = new Car("Renault",230,1500,6);
            Console.WriteLine(b1.ShowInfo());
            Console.WriteLine(b2.ShowInfo());
            Console.WriteLine(c1.ShowInfo());
            Console.WriteLine(c2.ShowInfo());
        }

        public static void Ex3() {
            //todo klasa Van dzidziczaca z klasy vehicle ---> majaca property ladownosc double i nadpisujaca metode Info z klasy bazowej vehicle
        }
    }
}
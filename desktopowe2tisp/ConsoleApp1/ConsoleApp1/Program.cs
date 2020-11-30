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
            Console.WriteLine(b1.ShowInfo());
            Console.WriteLine(b2.ShowInfo());
            //  Car c1 = new Car();
        }
    }
}
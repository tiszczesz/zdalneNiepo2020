using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    public class Car:Vehicle {
        public int NumberOfSit { get; set; } = 5;

        public Car() {
            Console.WriteLine($"Wywolanie konstruktora {GetType()} konstruktor klasy pochdnej");
        }

        public Car(string name, double maxSpeed, double mass, int numberOfSit=5)
            : base(name, maxSpeed, mass) {
            NumberOfSit = numberOfSit;
            Console.WriteLine($"Wywolanie konstruktora {GetType()} konstruktor klasy pochdnej z argumentami ");
        }

        public string ShowInfo() {
            return $"\nInformacja o samochodzie: ilosc miejsc: {NumberOfSit} " + base.ShowInfo();
        }
    }
}

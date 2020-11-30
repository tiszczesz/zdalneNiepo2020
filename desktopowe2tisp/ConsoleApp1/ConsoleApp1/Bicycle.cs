using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    public class Bicycle : Vehicle {
        private bool isPrzerzutka = false;

        public Bicycle() {
            Console.WriteLine($"Wywolanie konstruktora {GetType()} konstruktor klasy pochdnej");

        }

        public Bicycle(string name, double maxSpeed, double mass, bool isPrzerzutka)
            :base(name,maxSpeed,mass) 
        {
            Console.WriteLine($"Wywolanie konstruktora z argumentami {GetType()} konstruktor klasy pochdnej");
            this.isPrzerzutka = isPrzerzutka;
        }
    }
}

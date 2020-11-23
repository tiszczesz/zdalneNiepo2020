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
    }
}

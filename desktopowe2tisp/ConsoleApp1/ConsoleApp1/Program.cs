using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class Program
    {
        static void Main(string[] args) {
            SetOfVehicles vehicles = new SetOfVehicles();
            vehicles.ShowAll();
           // vehicles.AddNewVehicle();
           // vehicles.ShowAll();
            Console.WriteLine("==============================================");
            Bicycle b1 = new Bicycle();
            Car c1 = new Car();
            Console.ReadKey();
        }
    }
}

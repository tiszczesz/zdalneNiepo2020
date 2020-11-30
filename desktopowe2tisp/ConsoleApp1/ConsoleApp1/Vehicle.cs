using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    public class Vehicle
    {
        public string Name { get; set; }
        protected double maxSpeed;

        public double MaxSpeed {
            get { return maxSpeed; }
            set { maxSpeed = value < 0 ? -value : value; }
        }

        protected double mass;
        public double Mass {
            get { return mass; }
            set { mass = value < 0 ? -value : value; }
        }

        public Vehicle() {
            Console.WriteLine($"Wywolanie konstruktora {GetType()} konstruktor klasy bazowej");
            Mass = 1000;
            MaxSpeed = 120;
            Name = "Noname";
        }

        public Vehicle(string name,double maxSpeed, double mass) {
            Console.WriteLine($"Wywolanie konstruktora z argumentami {GetType()} konstruktor klasy bazowej");
            Name = name;
            this.maxSpeed = maxSpeed;
            this.mass = mass;
        }

        public string ShowInfo() {
            return $" Informacje o pojezdzie: {Name} masa: {Mass} kg maksymalna predkosc: {MaxSpeed} km/h";
        }

        public static Vehicle FillOneVehicle() {
            Console.Write("Podaj nazwe pojazdu: ");
            Vehicle v = new Vehicle();
            v.Name = Console.ReadLine();
            Console.Write("Podaj max predkosc pojazdu: ");
            v.MaxSpeed = Convert.ToInt32(Console.ReadLine());
            Console.Write("Podaj mase pojazdu: ");
            v.Mass = Convert.ToInt32(Console.ReadLine());
            return v;
        }
    }
}

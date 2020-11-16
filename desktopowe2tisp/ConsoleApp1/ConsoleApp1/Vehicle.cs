using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class Vehicle
    {
        public string Name { get; set; }
        private double maxSpeed;

        public double MaxSpeed {
            get { return maxSpeed; }
            set { maxSpeed = value < 0 ? -value : value; }
        }

        private double mass;
        public double Mass {
            get { return mass; }
            set { mass = value < 0 ? -value : value; }
        }

        public Vehicle() {
            Mass = 1000;
            MaxSpeed = 120;
            Name = "Noname";
        }

        public Vehicle(string name,double maxSpeed, double mass) {
            Name = name;
            this.maxSpeed = maxSpeed;
            this.mass = mass;
        }

        public string ShowInfo() {
            return $" Informacje o pojezdzie: {Name} masa: {Mass} kg maksymalna predkosc: {MaxSpeed} km/h";
        }
    }
}

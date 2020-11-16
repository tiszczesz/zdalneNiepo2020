using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class SetOfVehicles
    {
        public List<Vehicle> Vehicles { get; set; }

        private void fillCars() {
            if(Vehicles==null) Vehicles = new List<Vehicle>();
            Vehicles.Add(new Vehicle(){Name = "Fiat 125p",Mass=1200,MaxSpeed=140});
            Vehicles.Add(new Vehicle() { Name = "Fiat 126p", Mass = 700, MaxSpeed = 120 });
            Vehicles.Add(new Vehicle() { Name = "Renaut Clio", Mass = 1100, MaxSpeed = 220 });
            Vehicles.Add(new Vehicle() { Name = "Polonez", Mass = 1500, MaxSpeed = 140 });
        }

        public SetOfVehicles() {
            fillCars();
        }

        public void ShowAll() {
            foreach (var car in Vehicles) {
                Console.WriteLine(car.ShowInfo());
            }
        }

        public void AddNewCar() {
            //todo
        }
    }
}

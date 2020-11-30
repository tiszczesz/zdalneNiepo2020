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

        private void fillVehicles() {
            if(Vehicles==null) Vehicles = new List<Vehicle>();
            Vehicles.Add(new Vehicle(){Name = "Fiat 125p",Mass=1200,MaxSpeed=140});
            Vehicles.Add(new Vehicle() { Name = "Fiat 126p", Mass = 700, MaxSpeed = 120 });
            Vehicles.Add(new Vehicle() { Name = "Renaut Clio", Mass = 1100, MaxSpeed = 220 });
            Vehicles.Add(new Vehicle() { Name = "Polonez", Mass = 1500, MaxSpeed = 140 });

            //todo use AddRange
            Vehicles.AddRange(new Vehicle[]
            {
                new Vehicle{Mass = 4500,MaxSpeed = 180,Name = "Pojazd1"},
                new Vehicle{Mass = 400,MaxSpeed = 230,Name = "Pojazd2"},
                new Vehicle{Mass = 3200,MaxSpeed = 120,Name = "Pojazd3"},
                new Vehicle{Mass = 2900,MaxSpeed = 20,Name = "Pojazd14"},
                new Vehicle{Mass = 3330,MaxSpeed = 280,Name = "Pojazd5"},
            });
        }

        public SetOfVehicles() {
            fillVehicles();
        }

        public void ShowAll() {
            foreach (var car in Vehicles) {
                Console.WriteLine(car.ShowInfo());
            }
        }

        public void AddNewVehicle() {
            Vehicles.Add(Vehicle.FillOneVehicle());
        }
       
    }
}

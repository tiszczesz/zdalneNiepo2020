using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cw1Zdalne
{
    class Student {
        private string firstName;
        private string lastName;
        private int age;
        private string division;

        public string FirstName {
            get { return firstName; }
            set { firstName = value; }
        }
        public double AvgGrade { get; set; } //automatyczna wlasciwosc
        public string Division {
            get { return division; }
            set { division = value; }
        }
        public string LastName {
            get { return lastName; }
            set { lastName = value; }
        }

        public int Age {
            get { return age; }
            set {
                age = value <= 0 || value > 130 ? 20 : value;
            }
        }
        public Student() {
            firstName = "Jan";
            lastName = "Nowak";
            age = 20;
            division = "2A";
            AvgGrade = 4.0;
        }

        public Student(string firstName, string lastName, int age,string division,double avg=3.5) {
            this.firstName = firstName;
            this.lastName = lastName;
            this.age = age;
            this.division = division;
            this.AvgGrade = avg;
        }

        public string ShowStudent() {
            return "Informacje o uczniu: " + this.firstName + " " + this.lastName
                   + " wiek: " + this.age+" klasa: "+this.division+ " srednia ocen: "+AvgGrade;
        }

        public bool IsAdult() {
            return this.age >= 18;
        }
    }
}

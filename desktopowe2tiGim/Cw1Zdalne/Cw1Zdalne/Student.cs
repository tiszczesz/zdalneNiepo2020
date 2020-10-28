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
        }

        public Student(string firstName, string lastName, int age,string division) {
            this.firstName = firstName;
            this.lastName = lastName;
            this.age = age;
            this.division = division;
        }

        public string ShowStudent() {
            return "Informacje o uczniu: " + this.firstName + " " + this.lastName
                   + " wiek: " + this.age+" klasa: "+this.division;
        }

        public bool IsAdult() {
            return this.age >= 18;
        }
    }
}

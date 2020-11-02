using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace cw1_zdalne
{
    class Person {
        private string name;
        private int age;
        private string lastName;
        public decimal Salary { get; set; }

        public string LastName {
            get { return lastName; }
            set { lastName = value; }
        }

        public Person() {
            name = "noname";
            age = 20;
            lastName = "noname";
            Salary = 2000;
        }
        public string Name {// Console.WriteLine(p1.Name)
            set { name = value; }   //p1.Name = "Jancio";
        }
        public int Age {
            get { return age; }
            set { age = value < 0 || value > 120 ? 20 : value; }
        }

        public Person(string name,string lastName, int age,decimal salary=2000) {
            this.name = name;
            this.age = age;
            this.lastName = lastName;
            Salary = salary;
        }

        public override string ToString() {
            return "To jest osoba: " + name + " " + lastName + " w wieku: " + age
                    + " z pensją: " + Salary+" zł";
        }
    }
}

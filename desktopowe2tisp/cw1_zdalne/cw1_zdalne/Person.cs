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

        public Person() {
            name = "noname";
            age = 20;
            lastName = "noname";
        }
        public string Name {
            get { return name; }
            set { name = value; }
        }
        public int Age {
            get { return age; }
            set { age = value < 0 || value > 120 ? 20 : value; }
        }

        public Person(string name,string lastName, int age) {
            this.name = name;
            this.age = age;
            this.lastName = lastName;
        }

        public override string ToString() {
            return "To jest osoba: " + name + " w wieku: " + age;
        }
    }
}

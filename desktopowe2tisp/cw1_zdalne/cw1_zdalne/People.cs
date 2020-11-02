using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace cw1_zdalne
{
    class People {
        private Person[] persons;

        public Person[] Persons {
            get { return persons; }
            set { persons = value; }
        }

        public People() {
            fillPersons();
        }

        private void fillPersons() {
            if(persons==null) persons = new Person[5];
            persons[0] = new Person("Adam","Nowak",33,salary:1000);
            persons[1] = new Person(){Name = "Tomasz",LastName="Rocki",Age=22,Salary = 6500};
            persons[2] = new Person();
            persons[3] = new Person(){Name = "Ryszard",LastName = "Jarecki",Age=22,Salary = 3900};
            persons[4] = new Person() { Name = "Monika", LastName = "Tomaszek", Age = 25 ,Salary = 5300};
        }

        public void ShowAll() {
            foreach (Person p in persons) {
                Console.WriteLine(p);
            }
            Console.WriteLine($"Srednia pensja pracownikow: {GetAVGSalary()} zl");
            Console.WriteLine($"Maksymalna pensja pracownikow: {GetMaxSalry()} zl");
        }

        public decimal GetAVGSalary() {
            return persons.AsEnumerable().Average(p => p.Salary);
        }

        public decimal GetMaxSalry() {
            return persons.Max(p => p.Salary);
        }
    }
}

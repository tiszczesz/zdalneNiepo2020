using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Obiektowe_GIM1
{
    public class Person
    {
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public DateTime DateOfBirth { get; set; }

        public Person() {
            Console.WriteLine($"Wywolanie konstruktora domyslnego: {GetType()}");
            FirstName = "Adam";
            LastName = "Nowak";
            DateOfBirth = new DateTime(2000,1,1);
        }

        public Person(string firstName, string lastName, DateTime dateOfBirth) {
            FirstName = firstName;
            LastName = lastName;
            DateOfBirth = dateOfBirth;
        }
        public  string Info() {
            StringBuilder sb = new StringBuilder();
            sb.Append("\n======== Informacje o osobie ============").Append(Environment.NewLine);
            sb.Append($"Imię: {FirstName} nazwisko: {LastName} data urodzenia: {DateOfBirth.Date.ToShortDateString()}")
                .Append(Environment.NewLine);
            return sb.ToString();
        }
    }
}

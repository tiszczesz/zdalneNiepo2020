using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cw1Zdalne
{
    class Program
    {
        static void Main(string[] args)
        {
            //Ex1();
            Ex2();
            Console.ReadKey();
        }

        static void Ex1() {
            Student s1 = new Student("Anna","Malecka",23,"3Ti");
            Console.WriteLine(s1.ShowStudent());
            s1.FirstName = "Renata";
            s1.Age = -1;
            Console.WriteLine(s1.ShowStudent());
            s1.Division = "4Ti";
            Console.WriteLine(s1.ShowStudent());
        }

        static void Ex2() {
            SetOfStudents students = new SetOfStudents();
            students.ShowAll();
            Console.WriteLine("=========================================================");
            Console.Write("Wybierz od jakiej sredniej wyswietlac?: ");
            double avg = Convert.ToDouble(Console.ReadLine());
            students.ShowAllAbove(avg);
            Console.WriteLine("=========================================================");
            students.ShowAllBelow(avg);
            //todo napisanie metody ktora oblicza ile jest studentow w danym zakresie wiekowym 
            Console.WriteLine($"Ilosc z przedzialu: {students.CountAllBetween(16,22)}");
            //todo wyswietlic wszystkich studentow o nazwisko dluzszym niz arg funkcji ShowOver(6)

        }
    }
}

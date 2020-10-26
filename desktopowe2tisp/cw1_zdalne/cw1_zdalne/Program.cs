using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace cw1_zdalne
{
    class Program
    {
        static void Main(string[] args) {
           // Ex1();
           Ex2();
            Console.ReadKey();
        }

        public static void Ex1() {
            Person p1 = new Person("Antoni","Szmolek",33);
            p1.Name = "Tomasz";
            p1.Age = -4;
            Console.WriteLine(p1);
        }

        public static void Ex2() {
            People pp = new People();
            pp.ShowAll();
        }
    }
}

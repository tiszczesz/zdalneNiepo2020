using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Obiektowe_GIM1
{
    class Program
    {
        static void Main(string[] args)
        {
            Ex1();
            Console.ReadKey();
        }

        static void Ex1() {
            Person p1 = new Person();
            Person p2 = new Person("Antoni","Frytek",new DateTime(2005,03,13));
            Console.WriteLine(p1.Info());
            Console.WriteLine(p2.Info());
            Student s1 = new Student();
            Student s2 = new Student("Tomasz","Bomasz",new DateTime(2001,3,22),
                     new List<int>(){3,5,7,8,9} );
            Console.WriteLine(s1.Info());
            Console.WriteLine(s2.Info());
        }
    }
}

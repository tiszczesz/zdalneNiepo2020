using System;

namespace Prezenty2020_SP
{
    class Program
    {
        static void Main(string[] args)
        {
            Ex1();
            Console.WriteLine("Hello World!");
        }

        public static void Ex1() {
            Repository rep = new Repository();
            rep.GetAllFromFile("prezenty.txt");
        }
    }
}

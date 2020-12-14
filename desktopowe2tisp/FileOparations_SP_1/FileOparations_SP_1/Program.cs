using System;
using System.IO;
using System.Collections.Generic;

namespace FileOparations_SP_1
{
    class Program
    {
        static void Main(string[] args) {
            Ex1();
            Console.ReadKey();
        }

        public static void Ex1() {
            string path = Directory.GetCurrentDirectory();
            Console.WriteLine(path);
            List<string> lista = new List<string> {
                "Ala ma kota",
                "Juz za chwile swieta",
                "I jeszcze potem ferie",
                "zostanie tylko zasuwanie do samych swiat wielkanocnych",
                "nowy tekst"
            };
            File.WriteAllLines(path+@"\dane.txt",lista);
            var dane = File.ReadAllLines(path + @"\dane.txt");
            foreach (string s in dane) {
                Console.WriteLine(s);
            }
        }
    }
}

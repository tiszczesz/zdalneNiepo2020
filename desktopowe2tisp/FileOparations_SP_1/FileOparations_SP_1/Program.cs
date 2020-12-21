using System;
using System.IO;
using System.Collections.Generic;

namespace FileOparations_SP_1
{
    class Program
    {
        static void Main(string[] args) {
            //Ex1();
           // Ex2();
           Ex3();
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

        public static void Ex2() {
            string text =
                "Tekst ktory zapiszemy do pliku\nTekst ten jest bez konkretnej tresci\ntakie zwykle lorem ipsum\n"
                     +"blblbblblblb";
            File.WriteAllText("dane2.txt",text);
            string result = File.ReadAllText("dane2.txt");
            Console.WriteLine(result);
        }

        public static void Ex3() {
            List<string> lista = new List<string> {
                "Ala ma kota",
                "Juz za chwile swieta",
                "I jeszcze potem ferie",
                "zostanie tylko zasuwanie do samych swiat wielkanocnych",
                "nowy tekst",
                "To wszystko zapisane za pomoca StreamWriter'a"
            };
            int count = 0;
            string line;
            StreamWriter sw = new StreamWriter("dane3.txt");
            foreach (string row in lista) {
                sw.WriteLine(row);
            }
            sw.Close();
            Console.WriteLine("Zapisano do pliku");
            using (StreamReader sr = new StreamReader("dane3.txt")) {
                while ((line = sr.ReadLine())!=null) {
                    count++;
                    Console.WriteLine($"Linia tekstu nr:{count} - {line}");
                }
            }
            Console.WriteLine("Odczytano z pliku");
        }
    }
}

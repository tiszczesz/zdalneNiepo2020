using System;
using System.Collections.Generic;
using System.IO;

namespace FileOperationsGIM_1 {
    public class Program {
        static void Main(string[] args) {
           // Ex1();
           Ex2();
            Console.ReadKey();
        }

        public static void Ex1() {
            string path = Directory.GetCurrentDirectory();
            string root = Directory.GetDirectoryRoot(path);
            List<string> lines = new List<string>{"Ala ma kota","Robaki do paki","Inny odkrywczy tekst"};
            string tekst = "Ssss sssss" + Environment.NewLine + "ff f f f f f f\nfreget e e r e re r \nrrrrrr";
            Console.WriteLine(path);
            File.WriteAllLines(path+@"\linie.txt",lines);
            File.WriteAllText(path + @"\teksty.txt",tekst);
            Console.WriteLine(File.ReadAllText(path + @"\linie.txt"));
        }

        public static void Ex2() {
            string path = Directory.GetCurrentDirectory();
            DirectoryInfo[] dirs = new DirectoryInfo(@"d:\zdalne\zdalneNiepo2020\").GetDirectories();
            using (StreamWriter sw = new StreamWriter("dirs.txt")) {
                foreach (var di in dirs) {
                    sw.WriteLine(di.Name);
                }
            }
            string line;
            using (StreamReader sr = new StreamReader("dirs.txt")) {
                
                while ( (line = sr.ReadLine()) != null) {
                    Console.WriteLine(line);
                }
            }
            StreamReader sr2 = new StreamReader("dirs.txt");
            while ((line = sr2.ReadLine()) != null)
            {
                Console.WriteLine(line);
            }
            sr2.Close();
        }
    }
}
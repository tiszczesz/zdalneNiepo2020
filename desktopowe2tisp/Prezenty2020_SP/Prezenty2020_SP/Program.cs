using System;
using System.Collections.Generic;

namespace Prezenty2020_SP
{
    class Program
    {
        static void Main(string[] args)
        {
            Ex1();
            Console.ReadKey();
        }

        public static void Ex1() {
            Repository rep = new Repository();
            var dane = rep.GetAllFromFile("prezenty.txt");
            foreach (Gift gift in dane) {
                Console.WriteLine(gift.Info());
            }
            Console.Write("Czy posortowac po cenie rosnaca (t-TAK)? ");
            string answer = Console.ReadLine();
            List<Gift> lista = null;
            CalcGifts cg = new CalcGifts(dane);
            if(Char.ToLower(answer[0])=='t') {
                lista = cg.SortByPrice(true);
            }
            else {
                lista = cg.SortByPrice(false);
            }

            foreach (var elem in lista) {
                Console.WriteLine(elem.Info());
            }

            var result = cg.GetByFirstCharOfChild("a");
            Console.WriteLine("==================================\n\n");
            foreach (var elem in result)
            {
                Console.WriteLine(elem.Info());
            }
        }
    }
}

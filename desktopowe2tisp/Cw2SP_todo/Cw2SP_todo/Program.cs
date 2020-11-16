using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cw2SP_todo
{
    class Program
    {
        static void Main(string[] args)
        {
            SetOfProducts setOfProducts = new SetOfProducts();
            setOfProducts.ShowAll();
            Console.WriteLine("Produkt o najwyższej cenie: "+setOfProducts.GetProductWithMaxPrice());
            Console.WriteLine("Produkt o najwyższej cenie: " + setOfProducts.GetProductWithMaxPrice2());
            Console.Write("Podaj miesiac (1-12): ");
            int month = Convert.ToInt32(Console.ReadLine());
            Product[] result = setOfProducts.GetAllFromMonth(month);
            foreach (Product p in result) {
                Console.WriteLine(p);
            }
            Console.ReadKey();
        }
    }
}

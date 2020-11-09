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
            Console.ReadKey();
        }
    }
}

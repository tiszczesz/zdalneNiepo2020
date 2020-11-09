using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cw2SP_todo
{
    class Product
    {
        public string Name { get; set; }
        public decimal Price { get; set; }
        public string Category { get; set; }
        public DateTime DateOfExpiry { get; set; }

        public Product() {
            Name = "noname";
            Price = 10.00M;
            Category = "noname";
            DateOfExpiry = DateTime.Now;
        }

        public Product(string name, decimal price, string category, DateTime dateOfExpiry) {
            Name = name;
            Price = price;
            Category = category;
            DateOfExpiry = dateOfExpiry;
        }

       
        public override string ToString() {
            return $"{Name} cena: {Price} zł kategoria: {Category} "
                        +$"data ważności: {DateOfExpiry.ToShortDateString()}";
        }
    }
}

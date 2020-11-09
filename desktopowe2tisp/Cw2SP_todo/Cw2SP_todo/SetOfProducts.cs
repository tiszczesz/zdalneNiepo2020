using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cw2SP_todo
{
    class SetOfProducts
    {
        public Product[] Products { get; set; }

        private void fillProducts() {
            if(Products==null) Products = new Product[5];
            Products[0] = new Product(){Name = "Bułka",Category = "pieczywo",
                Price = 0.99M,DateOfExpiry = new DateTime(2020,11,30)};
            Products[1] = new Product()
            {
                Name = "Masło",
                Category = "nabiał",
                Price = 3.99M,
                DateOfExpiry = new DateTime(2020, 12, 15)
            };
            Products[2] = new Product()
            {
                Name = "Kiełbasa krakowska",
                Category = "wędliny",
                Price = 7.99M,
                DateOfExpiry = new DateTime(2020, 11, 25)
            };
            Products[3] = new Product()
            {
                Name = "Herbata zwykła",
                Category = "napoje",
                Price = 5.99M,
                DateOfExpiry = new DateTime(2020, 12, 30)
            };
            Products[4] = new Product()
            {
                Name = "Cukierki śląskie",
                Category = "słodycze",
                Price = 12.99M,
                DateOfExpiry = new DateTime(2020, 12, 19)
            };
        }

        public SetOfProducts() {
            fillProducts();
        }

        public void ShowAll() {
            foreach (var product in Products) {
                Console.WriteLine(product);
            }
        }
        public Product GetProductWithMaxPrice() {
            decimal maxPrice =  Products.Max(p => p.Price);
            return Products.Single(p => p.Price == maxPrice);
        }
        public Product GetProductWithMaxPrice2() {
            decimal maxPrice = Decimal.MinValue;
            Product result = null;
            for (var i = 0; i < Products.Length; i++) {
                if (Products[i].Price > maxPrice) {
                    result = Products[i];
                    maxPrice = Products[i].Price;
                }
            }

            return result;
        }
    }
}

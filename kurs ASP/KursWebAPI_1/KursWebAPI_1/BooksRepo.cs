using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace KursWebAPI_1
{
    public class BooksRepo
    {
        public static List<Book> GetBooks() {
            List<Book> books = new List<Book> {
                new Book(){Id = 1,Title = "ABC c#",Author = "Jan Kowalski",Price = 34.78M},
                new Book(){Id = 2,Title = "Mrówki",Author = "Jan Nowak",Price = 55.89M},
                new Book(){Id = 3,Title = "ABC c#",Author = "Maria Molicka",Price = 34.78M},
                new Book(){Id = 4,Title = "Książka kucharska",Author = "Irena Santor",Price = 45.90M},
                new Book(){Id = 5,Title = "Kraków nocą",Author = "Mateusz Jon",Price = 34.78M},
                new Book(){Id = 6,Title = "Góry Polskie",Author = "Adam Tryk",Price = 44.78M},
                new Book(){Id = 7,Title = "444-44",Author = "Jan Kowalski",Price = 22.78M},
            };
            return books;
        }
    }
}

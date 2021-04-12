using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace FirstMVC_GIM.Models
{
    public class BookRepo
    {
        public static List<Book> GetBooks() {
            return new List<Book>() {
                new Book() {Title = "nowa1", Author = "autor1", Price = 23.99M},
                new Book() {Title = "nowa2", Author = "autor2", Price = 23.99M},
                new Book() {Title = "nowa3", Author = "autor3", Price = 23.99M},
                new Book() {Title = "nowa4", Author = "autor4", Price = 23.99M},
            };
        }
    }
}

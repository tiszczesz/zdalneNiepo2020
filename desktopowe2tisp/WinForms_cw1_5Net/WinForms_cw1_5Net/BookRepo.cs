using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WinForms_cw1_5Net
{
    public class BookRepo
    {
        public List<Book> Books { get; set; }

        public BookRepo() {
            if (Books == null) {
                Books = new List<Book>();
                fillBooks();
            }
                
        }

        private void fillBooks() {
            Books.Add(new Book(){Title = "Abc hodowli rybek", Author = "Remigiusz Małecki",Price=45.89M});
            Books.Add(new Book(){Title = "Programowanie c++", Author = "Marta Małecka",Price=68.99M});
            Books.Add(new Book(){Title = "Historia Polski", Author = "Edmund Miłecki",Price=145.89M});
            Books.Add(new Book(){Title = "Polityka zagraniczna", Author = "Mariusz podolak",Price=33.99M});
            Books.Add(new Book(){Title = "Tresura psów", Author = "Remigiusz Małecki",Price=45.89M});
            Books.Add(new Book(){Title = "Góry Polskie", Author = "Amanda Górecka",Price=45.89M});
            Books.Add(new Book(){Title = "Ostatnia książka", Author = "Roman Boman",Price=66.90M});
        }
    }
}

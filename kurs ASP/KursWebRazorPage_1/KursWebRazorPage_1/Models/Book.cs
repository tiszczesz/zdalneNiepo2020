using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace KursWebRazorPage_1.Models
{
    public class Book
    {
        public int Id { get; set; }
        public string Title { get; set; }
        public string Author { get; set; }
        public decimal Price { get; set; }
    }
}

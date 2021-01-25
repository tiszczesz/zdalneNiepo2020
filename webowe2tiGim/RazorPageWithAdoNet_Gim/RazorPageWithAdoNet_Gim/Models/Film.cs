using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RazorPageWithAdoNet_Gim.Models
{
    public class Film
    {
        public int Id { get; set; }
        public string Title { get; set; }
        public string Author { get; set; }
        public int Length { get; set; }
        public decimal Price { get; set; }
    }
}

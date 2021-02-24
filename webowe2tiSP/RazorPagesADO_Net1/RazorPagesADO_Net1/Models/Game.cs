using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace RazorPagesADO_Net1.Models
{
    public class Game
    {
        public int Id { get; set; }
        
        [Display(Name = "Tytuł gry")]
        [Required(ErrorMessage = "Musisz podać tytuł")]
        public string Title { get; set; }
        
        [Display(Name = "Kategoria gry")]
        public string Category { get; set; }
        
        [Display(Name = "Cena")]
        [Range(0,1000)]
        public decimal Price { get; set; }
        
        [Display(Name = "Opis gry")]
        public string Description { get; set; }
    }
}

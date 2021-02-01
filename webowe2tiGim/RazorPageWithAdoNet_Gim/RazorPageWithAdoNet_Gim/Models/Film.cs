using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace RazorPageWithAdoNet_Gim.Models
{
    public class Film
    {
        public int Id { get; set; }
        
        [Display(Name = "Tytuł filmu")]
        [Required]
        public string Title { get; set; }
        
        [Display(Name = "Autor filmu")]
        public string Author { get; set; }
        
        [Display(Name = "Czas trwania filmu")]
        public int Length { get; set; }
        
        [Display(Name = "Cena filmu")]
        public decimal? Price { get; set; }
    }
}

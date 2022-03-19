using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace WebMVC_Form_1.Models
{
    public class Candidate
    {
        public int Id { get; set; }
        
        [Display(Name = "Imię i Nazwisko")]
        public string Name { get; set; }

        [Display(Name = "Płeć")] 
        public string Gender { get; set; } = "Kobieta";

        [Display(Name = "Klasa")]
        public string Division { get; set; }

        [Display(Name = "Zainteresowania")] 
        public List<Item> InterestsList { get; set; }

        [Display(Name = "Data Urodzenia")]
        [DataType(DataType.Date)]
        public DateTime DateBirth { get; set; } 
    }
}

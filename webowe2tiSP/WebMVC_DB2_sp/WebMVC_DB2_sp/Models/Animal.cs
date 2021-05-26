using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace WebMVC_DB2_sp.Models
{
    public class Animal
    {
        [Key] 
        public int Id { get; set; }

        [Display(Name = "Nazwa")]
        [Required(ErrorMessage = "Podaj nazwę")]
        public string Name { get; set; }

        [Display(Name = "Masa ciała")]
        [Required(ErrorMessage = "Podaj masę")]
        [Range(1,2000)]
        public int Weight { get; set; }

        [Display(Name = "Opis")]
        [DataType(DataType.MultilineText)]
        public string Description { get; set; }
    }
}

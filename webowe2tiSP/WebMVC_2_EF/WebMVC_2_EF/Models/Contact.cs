using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace WebMVC_2_EF.Models
{
    public class Contact
    {
        [Key]
        public int Id { get; set; }

        [Required(ErrorMessage = "Podaj Nazwę")]
        [Display(Name = "Nazwa")]
        public string Name { get; set; }

        [Required(ErrorMessage = "Podaj email")]
        [Display(Name = "Adres email")]
        public string Email { get; set; }

        [DataType(DataType.MultilineText)] 
        public string Description { get; set; }
    }
}

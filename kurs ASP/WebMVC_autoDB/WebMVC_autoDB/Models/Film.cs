using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace WebMVC_autoDB.Models
{
    public class Film
    {
        [Key] 
        public int Id { get; set; }

        [Display(Name = "Tytuł")]
        [Required(ErrorMessage = "Podaj tytuł")]
        public string Title { get; set; }

        
    }
}

using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace WebMVC_autoDB.Models
{
    public class Category
    {
        [Key]
        public int Id { get; set; }

        [Display(Name = "Kategoria")] 
        public string Name { get; set; }

        [Display(Name = "Opis")]
        [DataType(DataType.MultilineText)]
        public string Description { get; set; }

        [Display(Name = "Filmy")]
        public virtual List<Film> Films { get; set; }
    }
}

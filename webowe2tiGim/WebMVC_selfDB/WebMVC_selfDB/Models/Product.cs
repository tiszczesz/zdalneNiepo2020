using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace WebMVC_selfDB.Models
{
    public class Product
    {
        [Key]
        public int Id { get; set; }

        [Display(Name ="Produkt")]
        [MaxLength(50,ErrorMessage = "Maksymalnie 50 znaków")]
        [Required]
        public string Name { get; set; }

        [Display(Name = "Cena")]
        [Required]
        [Range(0.00,Double.MaxValue,ErrorMessage = "Cena nie może być ujemna")]
        public decimal Price { get; set; }

        [Display(Name = "Opis")]
        [DataType(DataType.MultilineText)]
        public string Description { get; set; }

    }
}

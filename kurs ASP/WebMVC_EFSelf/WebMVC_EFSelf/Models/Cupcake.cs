using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;

namespace WebMVC_EFSelf.Models
{
    public class Cupcake
    {
        [Key] 
        public int CupcakeId { get; set; }

        [Required(ErrorMessage = "Wybierz rodzaj ciastka")]
        [Display(Name = "Typ ciastka:")]
        public CupcakeType? CupcakeType { get; set; }

        [Required(ErrorMessage = "Wprowadź opis ciastka")]
        [Display(Name = "Opis:")]
        public string Description { get; set; }

        [Display(Name = "Bezglutenowe")] 
        public bool GlutenFree { get; set; }

        [Display(Name = "Ilość kalorii:")]
        public int CaloricValue { get; set; }

        [Range(1,15)]
        [Required(ErrorMessage = "Podaj cenę")]
        [DataType(DataType.Currency)]
        [Display(Name = "Cena:")]
        public double? Price { get; set; }

        [Display(Name = "Obrazek")]
        [NotMapped]
        public IFormFile PhotoAvatar { get; set; }

        public string ImageName { get; set; }

        public byte[] PhotFile { get; set; }

        public string ImageMimeType { get; set; }

        [Required(ErrorMessage = "Wybierz cukiernię")]
        [Display(Name = "Wybierz piekarnię")]
        public int? BakeryId { get; set; }

        [Display(Name = "Wybierz piekarnię")]
        public virtual Bakery Bakery { get; set; }

    }
}

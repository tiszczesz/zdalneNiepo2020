using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;


namespace WebMVC_G_DBGen.Models
{
    public class User
    {
        [Key]
        public int Id { get; set; }

        [Display(Name = "Nazwa użytkownika")]
        [Required(ErrorMessage = "Podaj nazwę")]
        public string UserName { get; set; }

        [Display(Name="Adres emailowy")]
        [Required(ErrorMessage = "Podaj adres")]
        public string Email { get; set; }

        [Display(Name = "Data rejestracji")]
        [DataType(DataType.Date)]
        public DateTime RegDate { get; set; }=DateTime.Now.Date;
    }
}

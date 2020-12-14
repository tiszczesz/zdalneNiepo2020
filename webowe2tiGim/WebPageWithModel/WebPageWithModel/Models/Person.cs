using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace WebPageWithModel.Models {
    public class Person {
        [Display(Name = "Imię")]
        public string FirstName { get; set; }
        [Display(Name = "Nazwisko")]
        public string LastName { get; set; }
        [Display(Name = "Wiek")]
        public int Age { get; set; }
        [Display(Name = "Wykształcenie")]
        public Eduction MyEduction { get; set; }
    }

    public enum Eduction {
        Podstawowe = 1,
        Średnie = 2,
        Wyższe = 3,
        Brak = 4
    }
}
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace CoreRazarPagesModel_sp.Models
{
    public class Film
    {
        [Display(Name = "Tyuł")]
        public string Title { get;  set; }
        
        [Display(Name = "Czas trwania")]
        public int Length { get; set; }
        
        [Display(Name = "Reżyser")]
        public string Director { get; set; }
        
        [Display(Name = "Data realizacji")]
        public DateTime Data { get; set; }

        
        [Display(Name = "Gatunek")]
        public TypeFilm MyTypeFilm { get; set; }
    }

    public enum TypeFilm {
        komedia=1,
        obyczajowy=2,
        sensacyjny=3,
        wojenny=4,
        sf=5
    }
}

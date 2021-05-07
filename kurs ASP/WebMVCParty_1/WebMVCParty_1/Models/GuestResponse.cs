using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using System.ComponentModel.DataAnnotations;

namespace WebMVCParty_1.Models
{
    public class GuestResponse
    {
        [Required(ErrorMessage = "Proszę podać imię")]
        public string Name { get; set; }

        [Required(ErrorMessage = "Proszę podać swój email")]
        public string Email { get; set; }

        [Required(ErrorMessage = "Proszę podać swój telefon")]
        public string Phone { get; set; }

        [Required(ErrorMessage = "Proszę wybrać opcję")]
        public bool? WillAttend { get; set; }
    }
}

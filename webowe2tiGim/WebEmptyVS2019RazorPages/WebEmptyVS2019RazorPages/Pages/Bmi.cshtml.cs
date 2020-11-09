using System;
using System.Collections.Generic;
using System.Diagnostics.Eventing.Reader;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace WebEmptyVS2019RazorPages.Pages
{
    public class BmiModel : PageModel
    {
        public double Masa { get; set; }
        public double Wzrost { get; set; }
        public double BMI { get; set; }
        public bool IsPost { get; set; }
        public void OnGet() {
            IsPost = false;
        }

        public void OnPost() {
            IsPost = true;
            var plec = Request.Form["plec"];
        }
        public string Description() {
            //if(BMI<16) return "wyg³odzenie";
            // else if(BMI >=16 && BMI <16.99) return "wychudzenie";
            return "";
        }
    }
}

using System;
using System.Collections.Generic;
using System.Diagnostics.Eventing.Reader;
using System.Globalization;
using System.Linq;
using System.Reflection.Metadata.Ecma335;
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
        public string Plec { get; set; }
        public void OnGet() {
            IsPost = false;
        }

        public void OnPost() {
            IsPost = true;
            Masa = Convert.ToDouble(Request.Form["masa"], CultureInfo.InvariantCulture);
            Wzrost = Convert.ToDouble(Request.Form["wzrost"], CultureInfo.InvariantCulture);
            Plec = Request.Form["plec"];
            Wzrost = Wzrost > 3 ? Wzrost / 100 : Wzrost;
            double roznica = Plec == "Kobieta" ? 2 : 0;
            BMI = Math.Round(Masa / (Wzrost * Wzrost),2)-roznica;
        }
        public string Description() {
            if(BMI<16) return "wyg³odzenie";
            if (BMI >= 16 && BMI < 17) return "Wychdzuenie";
            if (BMI >= 17 && BMI < 18.5) return "niedowaga";
            if (BMI >= 18.5 && BMI < 25) return "wartoœæ prawid³owa";
            if (BMI >= 25 && BMI < 30) return "nadwaga";
            if (BMI >= 30 && BMI < 35) return "I stopieñ oty³oœci";
            if (BMI >= 35 && BMI < 40) return "II stopieñ oty³oœci";
            else return "oty³oœæ skrajna";
            
        }
    }
}

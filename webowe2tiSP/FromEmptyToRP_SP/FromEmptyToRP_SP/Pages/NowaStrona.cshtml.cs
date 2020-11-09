using System;
using System.Collections.Generic;
using System.Globalization;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace FromEmptyToRP_SP.Pages
{
    public class NowaStronaModel : PageModel
    {
        public double Wzrost { get; set; }
        public double Masa { get; set; }

        public double BMI { get; set; }
        public bool IsPost { get; set; }
        public void OnGet() {
            IsPost = false;
        }

        public void OnPost() {
            IsPost = true;
            Masa = Convert.ToDouble(Request.Form["masa"],CultureInfo.InvariantCulture);
            Wzrost = Convert.ToDouble(Request.Form["wzrost"], CultureInfo.InvariantCulture);
            BMI = countBMI(Wzrost, Masa);
        }
        private double countBMI(double wzrost, double masa) {
            if (wzrost == 0) return 0;
            return masa / (wzrost * wzrost);
        }
    }
}

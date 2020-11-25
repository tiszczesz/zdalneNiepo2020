using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using FromEmptyToRP_SP.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace FromEmptyToRP_SP.Pages
{
    public class RekeruncjaModel : PageModel
    {
        public int N { get; set; }
        public bool IsPost { get; set; } = false;
        public string SilniaMethod { get; set; }
        public bool SilniaOK { get; set; } = false;
        public void OnGet() {
            IsPost = false;
        }

        public void OnPost() {
            IsPost = true;
            try {
                N = Convert.ToInt32(Request.Form["n"]);
                SilniaMethod = Request.Form["metoda"];

                SilniaOK = true;
            }
            catch (FormatException ex) {
                SilniaOK = false;
            }
        }

        public string ReturnSilnia() {
            Silnia s1 = new Silnia();
            switch (SilniaMethod) {
                case "rek": return $"Silnia rekurencyjnie: {N}! = "+s1.SilniaRek(N);
                case "iter": return $"Silnia iteracyjnie: {N}! = " + s1.SilniaIter(N);
                case "obie": return $"Silnia iteracyjnie: {N}! = " + s1.SilniaIter(N) 
                                                                   + $" oraz Silnia rekurencyjnie: {N}! = " + s1.SilniaRek(N); ;
                default: return "B³¹d obliczeñ!!!";
            }
        }
    }
}

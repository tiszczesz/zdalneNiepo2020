using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace WebEmptyVS2019RazorPages.Pages
{
    public class Nowa1Model : PageModel
    {
        public string Imie { get; set; }
        public string Nazwisko { get; set; }
        public int Age { get; set; }
        public bool IsPost { get; set; }
        public void OnGet() {
            IsPost = false;
        }

        public void OnPost() {
            IsPost = true;
            Imie = Request.Form["imie"];
            Nazwisko = Request.Form["nazwisko"];
            Age = Convert.ToInt32(Request.Form["wiek"]);
        }

        public string IsAdult() {
            return Age < 18 ? "niepe³noletni" : "pe³noletni";
        }
    }
}

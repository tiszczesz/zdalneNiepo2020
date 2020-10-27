using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace MyApp.Namespace
{
    public class Nowa2Model : PageModel
    {
        public int A { get; set; }
        public int B { get; set; }
        public bool IsPost { get; set; }
        public void OnGet() {
            IsPost = false;
        }

        public void OnPost() {
            IsPost = true;
            try {
                A = Convert.ToInt32(Request.Form["A"]);
                B = Convert.ToInt32(Request.Form["B"]);
            }
            catch (System.FormatException ex) {
                A = 20;
                B = 20;
            }

            A = A < 1 || A > 50 ? 20 : A;
            B = B < 1 || B > 50 ? 20 : B;
        }
    }
}

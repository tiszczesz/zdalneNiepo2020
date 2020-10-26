using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace Cw2Empty
{
    public class Nowa2Model : PageModel
    {
        public int? A { get; set; }
        public int? B { get; set; }
        public void OnGet() {
            A = null;
            B = null;
        }

        public void OnPost() {
            A = Convert.ToInt32(Request.Form["a"]);
            B = Convert.ToInt32(Request.Form["b"]);
        }
    }
}
